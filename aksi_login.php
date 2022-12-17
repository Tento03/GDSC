<?php
    session_start();
    include ('koneksi.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from login where username = '$username' and password = '$password'");
    
    $cek = mysqli_num_rows($query);

    if ($cek == TRUE){
        $_SESSION['username'] = $username;
        header ("location:indextugas1.php");
    }
    else{
        echo "<script>alert('Proses Login Gagal!')</script>";
    }
?>