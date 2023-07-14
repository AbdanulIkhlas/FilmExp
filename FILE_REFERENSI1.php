<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pareanom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="assets/scripts/tambahProduk.js"></script>
    <link rel="stylesheet" href="assets/styles/tambahProduk.css">
</head>

<body>
    <?php 
        include 'database.php';
    ?>
    <main>
        <nav>
            <header>
                <a href="index.php">
                    <!--? Halaman Produk  -->
                    <div class="garis-bawah-gambar">
                        <img src="assets/image/Logo Pareanom.png" alt="Logo Pareanom">
                    </div>
                </a>
                <h1>PAREANOM</h1>
                <h1>CHICKEN BAR</h1>
            </header>
            <ul>
                <a href="index.php">
                    <li>
                        <div class="kotak-ikon">
                            <img src="assets/image/Produk.png">
                        </div>
                        <p>PRODUK</p>
                    </li>
                </a>
                <a href="halamanBahan.php">
                    <li>
                        <div class="kotak-ikon">
                            <img src="assets/image/Bahan.png">
                        </div>
                        <p>BAHAN</p>
                    </li>
                </a>
                <a href="halamanRekap.php">
                    <li>
                        <div class="kotak-ikon">
                            <img src="assets/image/Rekap.png">
                        </div>
                        <p>REKAP</p>
                    </li>
                </a>
                <a href="halamanReject.php">
                    <li>
                        <div class="kotak-ikon">
                            <img src="assets/image/Reject.png">
                        </div>
                        <p>REJECT</p>
                    </li>
                </a>
            </ul>
        </nav>
        <article>
            <div class="judul">
                <h1>TAMBAH PRODUK</h1>
            </div>
            <section>
                <form action="FILE_REFERENSI2.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Input Nama Produk"
                            oninvalid="this.setCustomValidity('Silahkan Masukkan Nama Produk Terlebih Dahulu')"
                            oninput="setCustomValidity('')" required>
                    </div>
                    <div class="mb-3">
                        <div class="dropdown">
                            <label for="exampleInputEmail1" class="form-label">Bahan</label>
                            <select class="form-select form-select-mb-1 " name="bahan_baku[]" multiple
                                multiselect-search="true" multiselect-max-items="8" aria-label=".form-select-mb example"
                                style=" padding: 7.5px;">
                                <?php 
                                $queryBahanBaku = mysqli_query($connect, "SELECT * FROM bahan_baku WHERE jenis_bahan = 'Otomatis'");
                                while($bahanBaku = mysqli_fetch_array($queryBahanBaku)) :
                                ?>
                                <option value="<?php echo $bahanBaku['nama_bahan'] ?>">
                                    <?php echo $bahanBaku['nama_bahan'] ?>
                                </option>
                                <?php endwhile ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="text" name="harga" placeholder="Input Harga Produk" class="form-control"
                            id="exampleInputPassword1"
                            oninvalid="this.setCustomValidity('Silahkan Masukkan Harga Produk Terlebih Dahulu')"
                            oninput="setCustomValidity('')" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <select name="gambar" class="form-select form-select-mb-1"
                            oninvalid="this.setCustomValidity('Silahkan Upload Gambar Produk Terlebih Dahulu')"
                            oninput="setCustomValidity('')" required>
                            <option value="selected">Silahkan Pilih Foto Yang Sesuai</option>
                            <option value="AirMineral.png">Air Mineral</option>
                            <option value="ChickenPops.png">Chicken Pops</option>
                            <option value="Dada.png">Dada</option>
                            <option value="KulitAyam.png">Kulit Ayam</option>
                            <option value="Nasi.png">Nasi</option>
                            <option value="PahaAtas.png">Paha Atas</option>
                            <option value="PahaBawah.png">Paha Bawah</option>
                            <option value="PareanomCombo.png">Pareanom Combo</option>
                            <option value="PareanomKomplitBesar.png">Pareanom Komplit Besar</option>
                            <option value="PareanomKomplitKecil.png">Pareanom Komplit Kecil</option>
                            <option value="PareanomMantapBesar.png">Pareanom Mantap Besar</option>
                            <option value="PareanomMantapKecil.png">Pareanom Mantap Kecil</option>
                            <option value="PareanomPuas.png">Pareanom Puas</option>
                            <option value="Sauce.png">Sauce</option>
                            <option value="Sayap.png">Sayap</option>
                            <option value="TehKotak.png">Teh Kotak</option>
                            <option value="Telur.png">Telur</option>
                            <option value="VeggieCrumbs.png">Veggie Crumbs</option>
                        </select>

                    </div>
                    <button type="submit">Tambah</button>
                </form>
            </section>
        </article>
    </main>
</body>

</html>