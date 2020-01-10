<?php

require_once './autoload.php';
// $items = books()->all();

?>
<!doctype html>
<html lang="en">
<?php require_once './Partials/document_header.php'; ?>
<body>
<?php require_once './Partials/document_navigation.php'; ?>
<div>
    <h3 class="text-center">Authors</h2>
    <?php require_once './Authors/Pages/authors.php'; ?>

    </div>




<script src="assets/js/main.js"></script>
</body>
</html>