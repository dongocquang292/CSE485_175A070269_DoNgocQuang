<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=gdevice-width, initial-scale=1.0">
    <!-- Font Awesome đây là thư viện biểu tượng -->
    <script src="https://kit.fontawesome.com/790d2dd572.js" crossorigin="anonymous"></script>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
 <!-- TODO INCLUDE HEADER HERE-->
 <?php include(ROOT_PATH . "/app/includes/header.php");?>

    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Đăng Nhập</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>


            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
            </div>

            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Đăng Nhập</button>
            </div>

            <p>Or <a href="<?php echo BASE_URL .'/register.php' ?>">Đăng Ký</a></p>
        </form>
    </div>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>