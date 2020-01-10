<?php

require_once './autoload.php';
// $items = books()->all();

?>
<?php require_once './Partials/document_header.php'; ?>

<?php require_once './Partials/document_navigation.php'; ?>
<div>
<h3 class="text-center">Books</h2>
    <?php require_once './Books/Pages/books.php'; ?>
</div>




<script src="assets/js/main.js"></script>
</body>
</html>