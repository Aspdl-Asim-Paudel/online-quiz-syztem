<?php
session_start();
include "config.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$res= mysqli_query($conn,$sql);


    if(mysqli_num_rows($res)==1){

        echo'<script  type="text/javascript"> alert("Login Successful")</script>';

        $_SESSION["logged_in"] = true ;
        foreach ($res as $row) {
            $user_type =  $row['user_type'] ;
        }
        $_SESSION['login_id'] = $user_type;
        $_SESSION["login_user_type"] = $user_type;
        }
if(isset($_SESSION['logged_in'])){
    header('Location:home.php');
}
else{
    echo'<script  type="text/javascript"> alert("Login Unsuccessful")</script>';

}



?>

<!---->
<?php
//include 'config.php';
//session_start();
//
//extract($_POST);
//$type = '';
//$qry = $conn->query("SELECT * FROM users where username='$username' and password = '$password' $type ");
//if($qry->num_rows > 0){
//    foreach($qry->fetch_array() as $k => $val){
//        if($k != 'password')
//            $_SESSION['login_'.$k] = $val;
//    }
//
//    $_SESSION["logged_in"] = true ;
//    foreach ($res as $row) {
//        $user_type =  $row['user_type'] ;
//    }
//    $_SESSION["login_user_type"] = $user_type;
//}
//if(isset($_SESSION['logged_in'])){
//    header('Location:home.php');
//}
//else{
//    echo "error";
//}
//?>
