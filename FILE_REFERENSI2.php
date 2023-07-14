<?php 
include 'database.php';

$namaProduk = $_POST['nama_produk'];
$bahanBaku = isset($_POST['bahan_baku']) ? $_POST['bahan_baku'] : array();
if (empty($bahanBaku)) {
    header("location:tambahProduk.php?pesan=bahanBakuKosong");
} 
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];


foreach ($bahanBaku as $bahan) {   
    //! mengambil data dari tabel bahan baku
    $queryDataBahanBaku = mysqli_query($connect, "SELECT id_bahan_baku FROM bahan_baku WHERE nama_bahan = '$bahan'");
    
    $bahanBaku = mysqli_fetch_array($queryDataBahanBaku);
    
    $id_bahan_baku = $bahanBaku['id_bahan_baku'];
    
    //! memasukkan data ke tabel produk
    $queryInsertProduk = mysqli_query($connect, "INSERT INTO produk VALUES
    ( '','$id_bahan_baku','$namaProduk', '$harga','$gambar')")
    or die(mysqli_error($connect));
}

if ($queryInsertProduk) {
    header("location:index.php?pesanBerhasil=input_produk_berhasil");
} else {
    header("location:index.php?pesanGagal=input_produk_gagal");
}

?>