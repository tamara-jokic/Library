<?php

require_once './autoload.php';
$items = books()->all();


use Library\Books\Repositories\BooksRepository;
use Library\Library\DB\DBConnection;

$connection = DBConnection::getConnection();


$booksRepository = new BooksRepository($connection);

DBConnection::closeConnection();
?>
<!doctype html>
<html lang="en">
<?php require_once './Partials/document_header.php'; ?>
<body>
<?php require_once './Partials/document_navigation.php'; ?>
<div>
<p>Dobrodošli</p>
    <!-- < ?php require_once './Books/Pages/books.php'; ?>
    < ?php require_once './Authors/Pages/authors.php'; ?>
    < ?php require_once './Members/Pages/members.php'; ?>
    < ?php require_once './Publishers/Pages/publishers.php'; ?>
    < ?php require_once './Staff/Pages/staff.php'; ?> -->
    </div>




<script src="assets/js/main.js"></script>
</body>
</html>