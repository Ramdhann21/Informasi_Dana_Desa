<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <script src="index.js/login.js"></script>
    <div class="background">
    <!-- <img src="assets/laut.jpg"> -->
</div>
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
   <div class=" wapper">
    <form action="login_proces.php" method= "post">
        <h1><u>LOGIN</u></h1>
        <div class="input-box">
            <input type="text" name = "username" placeholder="username" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <input type="password" name = "password" placeholder="Password" id="password" required>
            <i class='bx bxs-lock-alt'></i>
            <span class="toggle-password" onclick="togglePasswordVisibility()">
                <i class='bx bx-hide'></i>
            </span>
        </div>

        <div class="remember-forgot">
            <a href=""  data-toggle="modal" data-target="#exampleModal">forgot password ??</a>
        </div>

        <button type="submit" class=" btn">Login  </button>

        <div class="register-link">
            <p>Belum Terdaftar?? <a href="register.html">register</a></p>
        </div>
     </form>
   </div>
  
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content " >
        <div class="modal-header ">
          <h5 class="modal-title   " id="exampleModalLabel">Lupa Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <small id="emailHelp" class="form-text text-muted">Masukan No Handphone atau email untuk mendapatkan Kode registrasi</small>
                  <!-- <label for="exampleInputEmail1">Masukan Email/ NO Handphone</label> -->
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email / NO Handphone">
                </div>
                <button type="button" class="btn btn-primary">Kirim</button>
              </form>
        </div>
        
      </div>
    </div>
  </div>
 
   
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
     
</body>
</html>
