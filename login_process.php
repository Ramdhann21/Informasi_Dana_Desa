<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "danadesa";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


    $sql = "SELECT * FROM registrasi WHERE Username='$Username' AND Password='$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
      
        $_SESSION['Username'] = $Username;
        header("index.php"); 
        exit();
    } else {
        
        echo "Username/email atau password salah.";
    }
}

$conn->close();
?>