<?php

use Library\Library\Exceptions\ValidationException;

require_once '../../Partials/autoload.php';

try {
    requestValidator()->validateWithThrow([
       
        'first_name' => 'First name is required',
        'last_name' => 'Last name is required',
        'mobile' => 'Mobile is required',
       
    ], $_POST);

    $item =staff()->save($_POST);
    redirect('./staff-edit.php?item=' . $item->id);
} catch (ValidationException $e) {
    if (isset($_POST['id'])) {
        redirect('./staff-edit.php?item=' . $_POST['id']);
    } else {
        redirect('./staff-edit.php');
    }
}