<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['cek'] != true){
        // ikhsan : mengambil data konten dari index.php
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM konten WHERE id = $id");
        $data = mysqli_fetch_array($query);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Film Explainer</title>
    </head>
    <body>
        <h1>Halaman Sinopsis</h1>
    </body>
</html>