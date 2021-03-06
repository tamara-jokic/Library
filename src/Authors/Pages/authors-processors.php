<?php

use Library\Library\Exceptions\ValidationException;

require_once '../../Partials/autoload.php';

try {
    requestValidator()->validateWithThrow([
       
        'first_name' => 'First name is required',
        'last_name' => 'Last name is required',
       
    ], $_POST);

    $item =authors()->save($_POST);
    redirect('./authors-edit.php?item=' . $item->id);
} catch (ValidationException $e) {
    if (isset($_POST['id'])) {
        redirect('./authors-edit.php?item=' . $_POST['id']);
    } else {
        redirect('./authors-edit.php');
    }
}
