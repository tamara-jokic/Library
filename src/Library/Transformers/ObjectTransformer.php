<?php
namespace Library\Library\Transformers;

use mysqli_result as MySqlResult;
use mysqli as MySQL;

abstract class ObjectTransformer
{
    /**
     * @var MySQL
     */
    protected $connection;
    protected $fields;

    public function __construct(MySQL $connection)
    {
        $this->connection = $connection;
    }

    public abstract function toObject($array);

    public function toObjectArray(MySqlResult $set)
    {
        $output = [];

        while ($item = $set->fetch_assoc()){
            $output[] = $this->toObject($item);
        }
        return $output;
    }

    public function toSqlArray($data)
    {
        $array = [];

        foreach($data as $key => $value){
            if(is_string($key)) {
                if(array_key_exists($key, $this->fields)){
                    $array[$key] = $this->sqlValue($value, 'string');
                }
            } else {
                if(array_key_exists($key, $this->fields)){
                    $array[$key] = $this->sqlValue($value, 'int');
                }
            }
        }
        return $array;
    }

    public function sqlValue($value, $type)
    {
        switch ($type){
            case 'int':
                return intval($value);
            case 'string':
                return $this->sqlString($value);
            default:
                return null;
        }
    }

    public function sqlString($string)
    {
        return $string ? "'" . $this->connection->escape_string($string) . "'" : "''";
    }


}