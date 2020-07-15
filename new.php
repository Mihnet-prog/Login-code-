<html>
    <body>
<?php


$usr = "admin@localhost";
$psw = "5password";
$username = '$_POST[username]';
$password = '$_POST[password]';
//$usr == $username && $psw == $password
session_start();
if ($_SESSION['login']=true || ($_POST['username']=="admin@localhost" && $_POST['password']=="5password")) {
    echo "password accepted";
    $_SESSION['login']=true;
}else {
    echo "incorrect login";
    $_SESSION['login']=false;
}
   
 


?>
</body>
</htm>


    
    



</body>
</html>