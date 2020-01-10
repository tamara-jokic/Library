<?php

use Library\Library\Exceptions\ValidationException;

require_once '../../Partials/autoload.php';

try {
    
    requestValidator()->validateWithThrow([
        'title'        => 'Title is required.',
        'edition' => 'Edition is required',
        'date_of_issuing' => 'Date of issuing is required',
        'availability' => 'Availability is required',
    ], $_POST);
    $item = books()->save($_POST);
    
    
    redirect('./books-edit.php?item=' . $item->book_code);
} catch (ValidationException $e) {
    if (isset($_POST['id'])) {
        redirect('./books-edit.php?item=' . $_POST['id']);
    } else {
        redirect('./books-edit.php');
    }
}