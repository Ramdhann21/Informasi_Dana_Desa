<?php
session_start();


$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'dhan' && $password === 'dhan21') {
   

    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
   
    echo "username atau password yang anda masukan salah!";
}
?>
