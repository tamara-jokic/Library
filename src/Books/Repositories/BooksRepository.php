<?php

namespace Library\Books\Repositories;


use Library\Library\Exceptions\ItemNotDeletedException;
use Library\Library\Exceptions\ItemNotSavedException;
use mysqli as MySQL;
use Library\Library\Repositories\ObjectRepository;
use Library\Books\Transformers\BooksTransformer;

class BooksRepository extends ObjectRepository
{
    protected $tableName = 'books';
    protected $primaryKey = 'book_code';

    public function __construct(MySQL $connection)
    {
        parent::__construct($connection);
        $this->transformer = new BooksTransformer($connection);
    }

    public function addBook($params)
    {
        echo $params;
        $query = "INSERT INTO books (title, edition, date_of_issuing, availability) VALUES ($params[title], $params[edition], $params[date_of_issuing], $params[availability])";

        $result = $this->connection->query($query);
        if (!$result) throw new ItemNotSavedException("Book $params[title] couldn't be inserted into table");

        return $this->findWord($wordId, $dictionaryId);
    }

    
    
}