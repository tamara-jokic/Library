<?php

require_once '../../Partials/autoload.php';

if (isset($_GET['item'])) {
    authors()->destroy($_GET['item']);
}

redirect('../../authors_page.php');