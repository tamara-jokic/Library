<?php

require_once '../../Partials/autoload.php';

if (isset($_GET['item'])) {
    members()->destroy($_GET['item'], 'int');
}

redirect('../../members_page.php');