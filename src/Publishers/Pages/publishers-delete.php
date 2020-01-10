<?php

require_once '../../Partials/autoload.php';

if (isset($_GET['item'])) {
    publishers()->destroy($_GET['item']);
}

redirect('../../publishers_page.php');