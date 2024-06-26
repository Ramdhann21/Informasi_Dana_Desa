<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="Data/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Data/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Dana Desa <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Informasi </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Informasi Dana Desa:</h6>
                        <a class="collapse-item" href="DanaM.php"> Dana Masuk</a>
                        <a class="collapse-item" href="cards.html">Dana Keluar</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
         
            <!-- Nav Item - Table -->
            <li class="nav-item">
                <a class="nav-link" href="tabel.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <!-- <h1 class="h3 mb-0 text-gray-800"> Selamat datang <span id="tanggalwaktu">febfd</span> </h1> -->
                        <span>Selamat datang admin <span id="tanggalwaktu"></span> walah wee</span>
                    </div>

                   

                    
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="data/vendor/jquery/jquery.min.js"></script>
    <script src="data/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="data/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="data/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="data/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="data/js/demo/chart-area-demo.js"></script>
    <script src="data/js/demo/chart-pie-demo.js"></script>

    <script> 
 var dt = new Date();
    document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
    </script>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dana Desa </title>
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
        <h4>Selamat Datang di Informasi Dana Desa <span id="tanggalwaktu">febfd</span></h4>
        
      <h2>Dana Desa</h2>
      <ul>
        <li><a href="#" class="active"> Informasi  Dana </a></li>
        <li><a href="#">Laporan Penggunaan Dana</a></li>
        <li><a href="#">Statistik Dana Desa</a></li>
        <li><a href="#">Pengaturan</a></li>
        <li><a href="#">Pesan</a></li>
        <li><a href="#">Tentang</a></li>
      </ul>
    </div>
    <div class="content">
      <div class="widget">
        <div class="widget-header">
           
          <h2>Masukan Informasi Dana</h2>
        </div>
        <div class="widget-content">
          <form id="dataForm">
            <div class="form-input">
              <label for="item">Sumber Dana :</label>
              <input type="text" id="item" name="item" required>
            </div>
            <div class="form-input">
              <label for="amount">Jumlah Dana (IDR):</label>
              <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-input">
              <label for="description">Deskripsi:</label>
              <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-input">
              <button type="submit">Submit</button>
              <button type="delete"> Edit</button>
              <button type="delete">Delete</button>
              <h1></h1>

            </div>
          </form>
        </div>
      </div>
      
      <div class="widget" id="displayWidget" style="display: none;">
        <div class="widget-header">
          <h2>Daftar Sumber Dana Desa</h2>
        </div>
        <div class="widget-content" id="displayContent">
           Submitted data will be displayed here
        </div>
      </div>
    </div>
  </div>
  <div class="widget" id="displayWidget">
    <div class="widget-header">
      <h2>Daftar Sumber Dana Desa</h2>
    </div>
    <div class="widget-content" id="displayContent">
  <script src="script.js"></script>

  <table class="table-data">
    <thead>
   <tr>
     <th style="width: 20%">Sumber Dana</th>
     <th>Jumlah Dana (IDR)</th>
     <th style="width: 20%">Deskripsi</th>
   </tr>
    </thead>
    <tbody>
   <tr>
      <td>Bantuan Bansos</td>
      <td>271 Triliun</td>
      <td>buat membangun dan memajukan rakyat</td>
   </tr>
   
   <tr>
    <td>Bantuan Antar desa</td>
    <td>271 milion</td>
    <td>memajukan desa</td>
 </tr>
    </tbody>
 </table>
 <script> 
 var dt = new Date();
    document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
    </script>
</body>
</html>   -->
