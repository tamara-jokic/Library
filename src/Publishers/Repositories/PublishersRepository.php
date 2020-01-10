<?php

namespace Library\Publishers\Repositories;


use Library\Library\Exceptions\ItemNotDeletedException;
use Library\Library\Exceptions\ItemNotSavedException;
use mysqli as MySQL;
use Library\Library\Repositories\ObjectRepository;
use Library\Publishers\Transformers\PublishersTransformer;

class PublishersRepository extends ObjectRepository
{
    protected $tableName = 'publishers';
    protected $primaryKey = 'id';

    public function __construct(MySQL $connection)
    {
        parent::__construct($connection);
        $this->transformer = new PublishersTransformer($connection);
    }

    public function addPublisher($params)
    {
        $query = "INSERT INTO publishers (name, location, book_code) VALUES ($params[name], $params[location], $params[book_code])";

        $result = $this->connection->query($query);
        if (!$result) throw new ItemNotSavedException("Publisher $params[name] couldn't be inserted into table");

        return $this->findWord($wordId, $dictionaryId);
    }

    
    
}