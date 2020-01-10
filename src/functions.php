<?php 

use Library\Books\Repositories\BooksRepository;
use Library\Authors\Repositories\AuthorsRepository;
use Library\Members\Repositories\MembersRepository;
use Library\Publishers\Repositories\PublishersRepository;
use Library\Staff\Repositories\StaffRepository;
use Library\Library\Validators\RequestValidator;
use Library\Library\DB\DBConnection;




function fetchErrors()
{
    session_start();
    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

    $_SESSION['errors'] = []; 
    session_write_close();

    return $errors;
}

function value($array, $param)
{
    if (!isset($array[$param])) {
        return null;
    }

    return $array[$param];
}

function isPageActive($pages)
{
    foreach ($pages as $page) {
        if (basename($_SERVER['PHP_SELF']) === $page) {
            return true;
        }
    }

    return false;
}


function books()
{
    return new BooksRepository(DBConnection::getConnection());
}

function authors()
{
    return new AuthorsRepository(DBConnection::getConnection());
}

function members()
{
    return new MembersRepository(DBConnection::getConnection());
}

function publishers()
{
    return new PublishersRepository(DBConnection::getConnection());
}

function staff()
{
    return new StaffRepository(DBConnection::getConnection());
}
function redirect($location)
{
    header('Location: ' . $location);

    exit;
}

function requestValidator()
{
    return new RequestValidator();
}