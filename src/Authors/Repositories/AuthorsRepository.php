<?php

namespace Library\Authors\Repositories;


use Library\Library\Exceptions\ItemNotDeletedException;
use Library\Library\Exceptions\ItemNotSavedException;
use mysqli as MySQL;
use Library\Library\Repositories\ObjectRepository;
use Library\Authors\Transformers\AuthorsTransformer;

class AuthorsRepository extends ObjectRepository
{
    protected $tableName = 'authors';
    protected $primaryKey = 'id';

    public function __construct(MySQL $connection)
    {
        parent::__construct($connection);
        $this->transformer = new AuthorsTransformer($connection);
    }


    public function addAuthor($params)
    {
        $query = "INSERT INTO authors (first_name, last_name) VALUES ($params[first_name], $params[last_name])";

        $result = $this->connection->query($query);
        if (!$result) throw new ItemNotSavedException("Author $params[first_name] $params[last_name] couldn't be inserted into table");

        return $this->findWord($wordId, $dictionaryId);
    }

    
    
}