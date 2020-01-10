<?php

namespace Library\Staff\Repositories;


use Library\Library\Exceptions\ItemNotDeletedException;
use Library\Library\Exceptions\ItemNotSavedException;
use mysqli as MySQL;
use Library\Library\Repositories\ObjectRepository;
use Library\Staff\Transformers\StaffTransformer;

class StaffRepository extends ObjectRepository
{
    protected $tableName = 'staff';
    protected $primaryKey = 'id';

    public function __construct(MySQL $connection)
    {
        parent::__construct($connection);
        $this->transformer = new StaffTransformer($connection);
    }

    
    
}