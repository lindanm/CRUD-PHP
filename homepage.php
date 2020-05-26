<?p
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Mahasiswa</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
  background: pink;
  font-family: 'Varela Round', sans-serif;
  font-size: 13px;
 }
 .table-wrapper {
        background: lavender;
        padding: 20px 25px;
        margin: 30px 0;
  border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
 .table-title {
  padding-bottom: 15px;
  background: #D8BFD8;
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
 }
 .table-title .btn {
  color: #566787;
  float: right;
  font-size: 13px;
  background: #fff;
  border: none;
  min-width: 50px;
  border-radius: 2px;
  border: none;
  outline: none !important;
  margin-left: 10px;
 }
 .table-title .btn:hover, .table-title .btn:focus {
        color: #566787;
  background: #f2f2f2;
 }
 .table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
 }
 .table-title .btn span {
  float: left;
  margin-top: 2px;
 }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
    }
 table.table tr th:first-child {
  width: 60px;
 }
 table.table tr th:last-child {
  width: 100px;
 }
    table.table-striped tbody tr:nth-of-type(odd) {
     background-color: #fcfcfc;
 }
 table.table-striped.table-hover tbody tr:hover {
  background: #f5f5f5;
 }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
        margin: 0 5px;
    }
 table.table td a {
  font-weight: bold;
  color: #566787;
  display: inline-block;
  text-decoration: none;
 }
 table.table td a:hover {
  color: #2196F3;
 }
 table.table td a.settings {
        color: #2196F3;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
 table.table .avatar {
  border-radius: 50%;
  vertical-align: middle;
  margin-right: 10px;
 }
 .status {
  font-size: 30px;
  margin: 2px 2px 0 0;
  display: inline-block;
  vertical-align: middle;
  line-height: 10px;
 }
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    } 
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
 .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
</style>
<script type="text/javascript">
$(document).ready(function(){
 $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
      <h2>Data <b>Mahasiswa</b></h2>
     </div>
     <div class="col-sm-7">
      <a href="beranda.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Lihat Postingan</span></a>
      <a href="form-artikel.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Posting</span></a>
      <a href="form-tambah.php" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Tambah Data Mahasiswa</span></a>      
     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Password</th>   
                        <th>Ubah</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <?php
                  // Load file koneksi.php
                  include "koneksi.php";
                  
                  $query = "SELECT * FROM mahasiswa"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
                  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                  echo "<tr>";
                  echo "<td><img src='images/".$data['UPLOAD_FOTO']."' width='100' height='100'></td>";
                  echo "<td>".$data['NIM']."</td>";
                  echo "<td>".$data['NAMA']."</td>";
                  echo "<td>".$data['ALAMAT']."</td>";
                  echo "<td>".$data['USERNAME']."</td>";
                  echo "<td>".$data['PASSWORD']."</td>";
                  echo "<td><a href='form-update.php?nim=".$data['NIM']."'>Ubah</a></td>";
                  echo "<td><a href='hapus.php?nim=".$data['NIM']."'>Hapus</a></td>";
                  echo "</tr>";
  }
  ?>
            </table>
   <!-- <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>      -->
</body>
</html>

