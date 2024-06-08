<?php
// Establish a connection to MySQL database
$servername = "localhost"; // Ubah jika basis data Anda di-host di tempat lain
$db_username = "root";
$db_password = "";
$database = "danadesa";

$conn = new mysqli($servername, $db_username, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update column length if needed
$sql_alter = "ALTER TABLE registrasi MODIFY COLUMN Password VARCHAR(255) NOT NULL";

if ($conn->query($sql_alter) === TRUE) {
    echo "Column length updated successfully<br>";
} else {
    echo "Error updating column length: " . $conn->error . "<br>";
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_nama = $_POST['full_nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $Password = $_POST['Password'];
    

    // You should add more validation for form data here

    // Hash the password
    $hashed_password = password_hash($Password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO registrasi (full_nama, username, email, phone_number, Password) 
            VALUES ('$full_nama', '$username', '$email', '$phone_number', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close MySQL connection
$conn->close();
?>
