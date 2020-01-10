<?php

namespace Library\Members\Repositories;


use Library\Library\Exceptions\ItemNotDeletedException;
use Library\Library\Exceptions\ItemNotSavedException;
use mysqli as MySQL;
use Library\Library\Repositories\ObjectRepository;
use Library\Members\Transformers\MembersTransformer;

class MembersRepository extends ObjectRepository
{
    protected $tableName = 'members';
    protected $primaryKey = 'id';

    public function __construct(MySQL $connection)
    {
        parent::__construct($connection);
        $this->transformer = new MembersTransformer($connection);
    }

    public function addMember($params)
    {
        $query = "INSERT INTO members (jmbg, first_name, last_name, mobile, email) VALUES ($params[jmbg], $params[first_name], $params[last_name], $params[mobile], $params[email])";

        $result = $this->connection->query($query);
        if (!$result) throw new ItemNotSavedException("Member $params[first_name] couldn't be inserted into table");

        return $this->findWord($wordId, $dictionaryId);
    }
}