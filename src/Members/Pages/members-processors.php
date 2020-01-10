<?php

use Library\Library\Exceptions\ValidationException;

require_once '../../Partials/autoload.php';

try {
    requestValidator()->validateWithThrow([
        'first_name' => 'First name is required',
        'last_name' => 'Last name is required',
        'mobile'        => 'Mobile is required.',
        'email'        => 'E-mail is required.',
    ], $_POST);

    $item =members()->save($_POST);
    redirect('./members-edit.php?item=' . $item->id);
} catch (ValidationException $e) {
    if (isset($_POST['id'])) {
        redirect('./members-edit.php?item=' . $_POST['id']);
    } else {
        redirect('./members-edit.php');
    }
}