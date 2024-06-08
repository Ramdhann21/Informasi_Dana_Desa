<!DOCTYPE html>
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
</html>  
