<?php

session_start();

if(isset($_SESSION['do_you_login']) && $_SESSION['do_you_login'] === true) {

    header('Location: http://localhost/PHP/tema7/uzdaviniai_2.php');
    exit;
}


if(isset($_POST['enter_password'])) {

$email ='kriunas.marius@gmail.com';
$password = 'ultra';

// $username = $_POST['user_name'];
// $password = $_POST['password'];

if($email == $_POST['user_name'] && $password == $_POST['password']) {
    
    $_SESSION['do_you_login'] = true;
    header('Location: http://localhost/PHP/tema7/uzdaviniai_2.php');
    exit;

} else {

echo 'Sorry you are not allowed';

}

}

?>

<h1>Please login</h1>
<form action = "failas2.php" method = "post">
  User name:<br>
  <input type="text" name="user_name"><br>
  Password:<br>
  <input type="password" name="password"><br>
  <br>
  <input type="submit" name="enter_password" value="LOGIN">
</form>
