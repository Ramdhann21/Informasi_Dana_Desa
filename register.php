<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <img src="assets/Kemendes_Logo.png" class="logo">
        <nav class="navbar">
          <a href="index.php">Home</a>
          <a href="#">Profile</a>
          <a href="#">Product</a>
          <a href="#">Contact</a>
          <a href="#">About</a>
        </nav>
    </header>
    <div class="wrapper">
        <form action="regist.php" method="post">
            <h1><u>REGISTER</u></h1>
            <div class="input-box">
                <div class="input-filed">
                    <input type="text" name="full_nama" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-filed">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-filed">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-filed">
                    <input type="text" name="phone_number" placeholder="Phone Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-filed">
                    <input type="password" name="Password" placeholder="Password" required>
                    <i class='bx bxs-lock'></i>
                </div>
            </div>
            <label><input type="checkbox" required> Saya Yang Mengisi Data Tersebut </label>
            <button type="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>
