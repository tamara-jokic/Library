<?php

namespace Library\Library\DB;

use Library\Library\Exceptions\DBException;
use \mysqli as MySqli;

class DBConnection
{   
    /**
     * @var MySqli
     */

    private static $connection = null;
    private static  $HOST = 'localhost';
    private static  $USER = 'root';
    private static  $PASS = '';
    private static  $DB = 'library';

    public static function getConnection(): MySqli
    {
        if(!DBConnection::$connection){
            DBConnection::$connection = DBConnection::initializeConnection();
        }
        return DBConnection::$connection;
    }

    public static function closeConnection(): void
    {
        if(DBConnection::$connection){
            DBConnection::$connection->close();
        }
    }

    private static function initializeConnection()
    {
        $connection = new MySqli(
            DBConnection::$HOST,
            DBConnection::$USER,
            DBConnection::$PASS,
            DBConnection::$DB
        );

        if($connection->connect_error) {
            throw new DBException($connection->connect_error);
        }
        return $connection;
    }

}