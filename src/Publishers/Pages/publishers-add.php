<?php

require_once '../../Partials/autoload.php';

if (empty($_GET['word']) || empty($_GET['dictionary'])) {
    exit(1);
}

publishers()->addPublisher($_GET['word'], $_GET['dictionary']);
redirect('./publishers-edit.php?item=' . $_GET['dictionary']);
