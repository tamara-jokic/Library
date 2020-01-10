<?php
    require_once '../../Partials/autoload.php';
    $errors     = fetchErrors();
    $activeItem = isset($_GET['item']) ? staff()->findById($_GET['item']) : null;
   
    
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
                    <h1 class="display-4">Staff</h1>
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
                <form action="staff-processors.php" method="POST" class="bg-light rounded p-4">

                    <!-- ID -->
                    <?php if ($activeItem) { ?>
                    <input type="hidden" value="<?php echo $activeItem->id; ?>" name="id" id="id">
                    <?php } ?>

                    <!-- First name -->
                    <div class="form-group">
                        <label for="first_name">First name:</label>

                        <input type="text"
                               class="form-control"
                               id="first_name"
                               name="first_name"
                               value="<?php if ($activeItem) echo $activeItem->first_name ?>">
                    </div>

                   <!-- Last name -->
                   <div class="form-group">
                        <label for="last_name">First name:</label>

                        <input type="text"
                               class="form-control"
                               id="last_name"
                               name="last_name"
                               value="<?php if ($activeItem) echo $activeItem->last_name ?>">
                    </div>


                         <!-- Mobile -->
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>

                        <input type="text"
                               class="form-control"
                               id="mobile"
                               name="mobile"
                               value="<?php if ($activeItem) echo $activeItem->mobile ?>">
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