<?php

require_once '../../Partials/autoload.php';

if (isset($_GET['item'])) {
    staff()->destroy($_GET['item']);
}

redirect('../../staff_page.php');