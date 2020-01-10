<?php

use Library\Library\Exceptions\ValidationException;

require_once '../../Partials/autoload.php';

try {
    requestValidator()->validateWithThrow([
       
        'name' => 'Name is required',
        'location' => 'Location is required',
       
    ], $_POST);

    $item = publishers()->save($_POST);
    redirect('./publishers-edit.php?item=' . $item->id);
} catch (ValidationException $e) {
    if (isset($_POST['id'])) {
        redirect('./publishers-edit.php?item=' . $_POST['id']);
    } else {
        redirect('./publishers-edit.php');
    }
}