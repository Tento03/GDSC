<?php
$koneksi=mysqli_connect("localhost","root","","gdsc");
error_reporting(0);
$id=$_GET["id"];
if(isset($_POST["submit"])){
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $anime=$_POST['anime'];

    $update=mysqli_query($koneksi,"UPDATE crud set nama='$nama',nim='$nim',anime='$anime' WHERE id='$id'");

    if($update >0){
        echo "<h1>Edit data berhasil<h1><br><br>";
    }
    else{
        echo "<h1>Edit data gagal</h1><br><br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" href="/js/bootstrap.js"></script> 
    <script type="text/javascript" href="/js/bootstrap.min.js"></script> 
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-nav-scroll">
        <nav class="navbar navbar-light">
        <span class="navbar-brand mb-0 h1" id="home">HOME</span>
        </nav>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="login.php">LOGIN</a>
            </li>
            <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="aksi_logout.php">LOGOUT</a>
            </li>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="tambahtugas1.php">TAMBAH</a>
            </li>
            <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="indextugas1.php">LIHAT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#update">EDIT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#hapus">HAPUS</a>
            </li>
          </ul>
        </div>
      </nav>
      
      <div class="form">
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">NIM</label>
    <input type="number" name="nim" class="form-control" id="exampleInputPassword1" placeholder="Nim">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Anime</label>
    <input type="text" name="anime" class="form-control" id="exampleInputPassword1" placeholder="Anime">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Edit</button>
</form>
</div>

<style>
  .form{
    align-items: center;
  }
.navbar{
    padding-left: 25px;
    background-color:darkmagenta;
}
.navbar .navbar-brand{
    color: greenyellow;
    font-size: 30px;
}
.navbar .navbar-brand:hover{
    color: red;
    font-size: 30px;
}
.navbar .nav-link{
    color: yellow;
    font-size: 20px;
}
body{
    background: url(bg.webp);
    background-size: cover;
}
.tabel{
  margin-left: 20px;
  margin-right: 20px;
}
</style>
</body>
</html>