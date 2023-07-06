<?php
    session_start();
    include 'koneksi.php';

    $cari = $_POST['cari_judul'];
    $query = mysqli_query($conn, "SELECT * FROM konten WHERE judul LIKE '%" .$cari. "%'");
    $data = mysqli_fetch_array($query);
    if($data > 0){
        $_SESSION['cek'] = true;
        $_SESSION['judul'] = $data['judul'];
        header("location:halamanSinopsis.php");
    }else{
        header("location:index.php");
    }
?>