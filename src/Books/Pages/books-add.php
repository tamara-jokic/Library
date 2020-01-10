<?php

require_once '../../Partials/autoload.php';

if (empty($_GET['word']) || empty($_GET['dictionary'])) {
    exit(1);
}

books()->addBook($_GET['word'], $_GET['dictionary']);
redirect('./books-edit.php?item=' . $_GET['dictionary']);
