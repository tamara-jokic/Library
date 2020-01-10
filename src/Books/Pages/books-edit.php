<?php
    require_once '../../Partials/autoload.php';
    $errors     = fetchErrors();
    $activeItem = isset($_GET['item']) ? books()->findById($_GET['item']) : null;
   
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Jquery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="../../assets/css/main.css">

    <title>Books</title>
</head>
<body>
<!-- Header -->


<div class="container-fluid body-content p-0 m-0">
    <!-- Navigation -->
    <?php require_once '../../Partials/document_navigation_2.php'; ?>

    <!-- Main content -->
    <div class="container p-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="bg-light p-4 rounded">
                    <h1 class="display-4">Books</h1>
                </div>
            </div>
        </div>

        <!-- Errors -->
        <?php if (count($errors)) { ?>
            <div class="row">
                <div class="col-sm-12">
                    <?php foreach ($errors as $error => $message) { ?>
                        <div class="alert alert-danger mb-0 mt-4"><?php echo $message ?></div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <!-- Main form -->
        <div class="row mt-4">
            <div class="col-sm-12">
                <form action="books-processors.php" method="POST" class="bg-light rounded p-4">

                    <!-- ID -->
                    <?php if ($activeItem) { ?>
                    <input type="hidden" value="<?php echo $activeItem->book_code; ?>" name="book_code" id="book_code">
                    <?php } ?>

                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Title:</label>

                        <input type="text"
                               class="form-control"
                               id="title"
                               name="title"
                               value="<?php if ($activeItem) echo $activeItem->title ?>">
                    </div>

                    <!-- Edition -->
                    <div class="form-group">
                        <label for="edition">Edition:</label>

                        <textarea type="text"
                                  cols="5"
                                  rows="10"
                                  class="form-control"
                                  id="edition"
                                  name="edition"><?php if ($activeItem) echo $activeItem->edition ?></textarea>
                    </div>


                     <!-- Date of issuing -->
                     <div class="form-group">
                        <label for="date_of_issuing">Date of issuing:</label>

                        <textarea type="text"
                                  cols="5"
                                  rows="10"
                                  class="form-control"
                                  id="date_of_issuing"
                                  name="date_of_issuing"><?php if ($activeItem) echo $activeItem->date_of_issuing ?></textarea>
                    </div>


                     <!--Availability -->
                     <div class="form-group">
                        <label for="availability">Availability:</label>

                        <textarea type="text"
                                  cols="5"
                                  rows="10"
                                  class="form-control"
                                  id="availability"
                                  name="availability"><?php if ($activeItem) echo $activeItem->availability ?></textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary mb-2">
                        <?php if ($activeItem) echo 'Update'; else echo 'Create'; ?>
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>