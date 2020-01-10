<?php

require_once '../../Partials/autoload.php';

if (empty($_GET['word']) || empty($_GET['dictionary'])) {
    exit(1);
}

authors()->addAuthor($_GET['word'], $_GET['dictionary']);
redirect('./authors-edit.php?item=' . $_GET['dictionary']);
