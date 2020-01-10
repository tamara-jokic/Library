<?php

require_once '../../Partials/autoload.php';

if (isset($_GET['item'])) {
    books()->destroy($_GET['item']);
}

redirect('../../books_page.php');