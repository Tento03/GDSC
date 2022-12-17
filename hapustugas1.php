<?php 
$koneksi=mysqli_connect("localhost","root","","gdsc");
$id=$_GET['id'];
$data=mysqli_query($koneksi,"DELETE from crud where id='$id'");
header("location:indextugas1.php");
?>

