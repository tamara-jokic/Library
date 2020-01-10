<?php

namespace Library\Library\Repositories;

use Library\Library\Exceptions\ItemNotDeletedException;
use Library\Library\Exceptions\ItemNotFoundException;
use Library\Library\Exceptions\ItemNotSavedException;
use Library\Library\Transformers\ObjectTransformer;
use mysqli as MySQL;

class ObjectRepository
{
    /**
     * @var MySQL
     */
    protected $transformer;
    protected $tableName;
    protected $primaryKey;

    public function __construct(MySQL $connection)
    {
        $this->connection = $connection;
    }

    public function all()
    {
        $result= $this->connection->query("SELECT * FROM $this->tableName");
        // print_r($result);
        $transformed = $this->transformer->toObjectArray($result);
        // print_r($transformed);
        mysqli_free_result($result);
        return $transformed;
    }

    public function findById($book_code)
    {
        
        if(is_string($book_code)){
            $value = $this->transformer->sqlValue($book_code, 'string');
        }
        else { 
            $value = $this->transformer->sqlValue($book_code, 'int');
        }
        // echo $book_code;
        // $value = $this->transformer->sqlValue($book_code, $this->primaryKey);
       
        // echo "<br>";
        $query = "SELECT * FROM $this->tableName WHERE $this->primaryKey = $value";
        $result = $this->connection->query($query);
        // echo "<br>";
        // echo $result;
        // echo "<br>";
        $item = $result->fetch_assoc();
        // print_r($item).die();
        if(!$item){
            throw new ItemNotFoundException();
        }
        $transformed = $this->transformer->toObject($item);
        mysqli_free_result($result);
        return $transformed;
    }

    public function save($data)
    {
        if(isset($data[$this->primaryKey]))
        {
            echo "set";
            return $this->update($data);
        }
        else{
            return $this->create($data);
        }
    }
    public function create($params)
    {
        $data = $this->transformer->toSqlArray($params);
        // print_r($data);
        // echo "<br>";
        $columns = '(' . implode(', ', array_keys($data)) . ')';
        // echo $columns;
        // echo "<br>";
        $values = '(' . implode(', ', array_values($data)) . ')';
        // echo $values;
        $query = "INSERT INTO $this->tableName $columns VALUES $values";
        // echo $query;
        if (!$this->connection->query($query)) {
            throw new ItemNotSavedException();
        }
        // die();

        if ($this->connection->insert_id) {
            return $this->findById($this->connection->insert_id);
        } else {
            return $this->findById($params[$this->primaryKey]);
        }
    }

    public function update($data)
    {
        $params = $this->transformer->toSqlArray($data);
        
        $primaryKey = $params[$this->primaryKey];
        $values = implode(', ', array_map(function ($param) use ($params) {
            return $param . '=' . $params[$param];
        }, array_keys($params)));
        $query = "UPDATE $this->tableName SET $values WHERE $this->primaryKey=$primaryKey";
        if (!$this->connection->query($query)) {
            throw new ItemNotSavedException();
        }

        return $this->findById($data[$this->primaryKey]);
    }

    public function destroy($book_code)
    {
        if(is_string($book_code)){
        $value = $this->transformer->sqlValue($book_code, 'string');
        }
        else{ 
    $value = $this->transformer->sqlValue($book_code, 'int');
    }
        $query = "DELETE FROM $this->tableName WHERE $this->primaryKey = $value";
        
        
        if(!$this->connection->query($query)){
            throw new ItemNotDeletedException();
        }
        return true;
    }
}










