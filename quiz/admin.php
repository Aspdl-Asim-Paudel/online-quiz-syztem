<!--<!--<!DOCTYPE html>-->-->
<!--<!--<html lang="en">-->-->
<!--<!--<head>-->-->
<!--<!--    <meta charset="UTF-8">-->-->
<!--<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->-->
<!--<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->-->
<!--<!--    <title>Log In</title>-->-->
<!--<!--    <link rel="stylesheet" href="#">-->-->
<!--<!--    -->--><?php ////include('header.php') ?>
<!--<!--    -->--><?php
////    session_start();
////    if(isset($_SESSION['login_id'])){
////        header('Location:home.php');
////    }
////    ?>
<!--<!--</head>-->-->
<!--<!--<body>-->-->
<!--<!--    <div class="linform">-->-->
<!--<!---->-->
<!--<!--        <h1>Log In Form </h1>-->-->
<!--<!--        <form action="login1.php" method="post">-->-->
<!--<!--        Username: <input type="text" id="username" name="username"><br><br>-->-->
<!--<!--        Password: <input type="password" id="password" name="password"><br><br>-->-->
<!--<!--        <input type="submit" value="OK" class="ok">-->-->
<!--<!---->-->
<!--<!--    </form>-->-->
<!--<!--    </div>-->-->
<!--<!--</body>-->-->
<!--<!--</html>-->-->
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    --><?php //include('header.php') ?>
<!--    --><?php
//    session_start();
//    if(isset($_SESSION['login_id'])){
//        header('Location:home.php');
//    }
//    ?>
<!--    <title>Quiz Login System</title>-->
<!--</head>-->
<!---->
<!--<body id='login-body' class="bg-light">-->
<!---->
<!--<div class="card col-md-6 offset-md-3 text-center bg-primary mb-4">-->
<!--    <h3 class="he3-responsive text-white">Quiz Login System</h3>-->
<!--</div>-->
<!--<div class="card col-md-4 offset-md-4 mt-4">-->
<!--    <div class="card-header-edge text-white">-->
<!--        <strong>Login Here</strong>-->
<!--    </div>-->
<!--    <div class="card-body">-->
<!--        <form id="login-frm">-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Enter Username</label>-->
<!--                <input type="username" name="username" class="form-control">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="password" name="password" class="form-control">-->
<!--            </div>-->
<!--            <div class="form-group text-right">-->
<!--                <button class="btn btn-primary btn-block" name="submit">Login</button>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group text-right">-->
<!--                <a class="btn btn-primary btn-block" name="Register" href="register.php">Register</a>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--</body>-->
<!---->
<!--</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="#">
    <?php include('header.php') ?>
    <?php
    session_start();
    if(isset($_SESSION['login_id'])){
        header('Location:home.php');
    }
    ?>
</head>

<body>
<div class="linform">

    <h1>Log In Form </h1>
    <form action="login1.php" method="post">
        Username: <input type="text" id="username" name="username"><br><br>
        Password: <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="OK" class="ok">

    </form>
</div>
</body>
</html>