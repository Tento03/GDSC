<?php
$koneksi=mysqli_connect("localhost","root","","gdsc");
$hasil=mysqli_query($koneksi,"SELECT * FROM crud");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Tugas 1</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" href="/js/bootstrap.js"></script> 
    <script type="text/javascript" href="/js/bootstrap.min.js"></script> 

    <nav class="navbar navbar-expand-lg navbar-nav-scroll">
        <nav class="navbar navbar-light nav-item active">
        <a href="indextugas1.php" class="navbar-brand mb-0 h1">HOME</a>
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
            <li class="nav-item">
              <a class="nav-link" href="indextugas1.php">EDIT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="indextugas1.php">HAPUS</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="tabel">
        <table class="table table-striped">
          <thead>
      <tr>
      <?php $i=1 ?>
      <th scope="col" class="table-dark">No</th>
      <th scope="col" class="table-dark">Nama</th>
      <th scope="col" class="table-dark">Nim</th>
      <th scope="col" class="table-dark">Anime Favorit</th>
      <th scope="col" class="table-dark">Aksi</th>
      <th scope="col" class="table-dark">Aksi</th>
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($hasil)): ?>
  <tbody>
    <tr>
      <th class="table-danger" scope="row"><?= $i?></th>
      <td class="table-success"><?= $row['nama'] ?></td>
      <td class="table-success"><?= $row['nim'] ?></td>
      <td class="table-success"><?= $row['anime'] ?></td>
      <td class="table-warning"><a href="edittugas1.php?id=<?=$row['id']; ?>" id="update">UPDATE</a></td>
      <td class="table-warning"><a href="hapustugas1.php?id=<?=$row['id']; ?>" id="hapus">HAPUS</a></td>
    </tr>
  </tbody>
</div>
<?php $i++ ?>
<?php endwhile ?>

</table>


<style>
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