<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=gdevice-width, initial-scale=1.0">
    <!-- Font Awesome đây là thư viện biểu tượng -->
    <script src="https://kit.fontawesome.com/790d2dd572.js" crossorigin="anonymous"></script>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <title>Admin Section - Edit Topic</title>
</head>

<body>
    <!-- Admin header here-->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
    
    <?php include(ROOT_PATH . "/app/includes/adminSlidebar.php"); ?>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Edit Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Topic</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="text-input">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name;?>" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body"> <?php echo $description; ?> </textarea>
                    </div>
                    <div>
                        <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- //Admin Content -->
    </div>

    <!-- // Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>