<?php
    session_start();
    include 'koneksi.php';  
    $kodeGet = $_GET['kode'];
    $dataGet = $_GET['data'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Explainer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/filtering.css">
</head>

<body>
    <header>
        <section>
            <a href="index.php">
                <img src="assets/image/logo.jpg" alt="Logo">
            </a>
        </section>
        <nav>
            <ul class="ul-navbar">
                <li class="li-navbar"><a href="index.php">HOME</a></li>
                <li class="li-navbar">
                    GENRE
                    <span class="down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </span>
                    <ul class="dropdown">
                        <!-- ikhsan : database genre -->
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM navbar_genre");
                            while($data = mysqli_fetch_array($query)){
                        ?>
                        <!-- kode 1 : untuk genre  -->
                        <li>
                            <a href="filtering.php?kode=1&data=<?php echo $data['genre']; ?>">
                                <?php echo $data['genre']; ?> </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="li-navbar">
                    NEGARA
                    <span class="down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </span>
                    <ul class="dropdown">
                        <!-- ikhsan : database negara -->
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM navbar_negara");
                            while($data = mysqli_fetch_array($query)){
                        ?>
                        <!-- kode 2 : untuk negara  -->
                        <li>
                            <a href="filtering.php?kode=2&data=<?php echo $data['negara']; ?>">
                                <?php echo $data['negara']; ?> </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="li-navbar">
                    TAHUN
                    <span class="down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </span>
                    <ul class="dropdown">
                        <!-- ikhsan : database tahun -->
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM navbar_tahun ORDER BY tahun DESC");
                            while($data = mysqli_fetch_array($query)){
                        ?>
                        <!-- kode 3 : untuk tahun  -->
                        <li>
                            <a href="filtering.php?kode=3&data=<?php echo $data['tahun']; ?>">
                                <?php echo $data['tahun']; ?> </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
            <section>
                <!-- ikhsan : searching by judul -->
                <form action="searching.php" method="POST">
                    <div class="searching">
                        <button class="search-icon" type="submit" name="cari">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                        <input type="text" placeholder="Search" name="cari_judul">
                    </div>
                </form>
                <a href="halamanLogin.php">
                    <div class="login">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </div>
                </a>
            </section>
        </nav>
    </header>
    <main>
        <article>
            <!-- hasil filtering berdasarkan kode -->
            <aside>
                <h1>TAMBAH FILTER</h1>
                <div class="container-filter">
                    <form action="filtering.php" method="post">
                        <?php 
                        if($kodeGet == 1){
                        //! ---------- FILTER TERPILIH GENRE ---------- 
                        ?>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">NEGARA</label>
                            <!-- name="filterPertama[]"  dst bisa di ganti -->
                            <select class="form-select form-select-mb-1 " name="filterPertama[]" multiple
                                multiselect-search="true" aria-label=".form-select-mb example" style=" padding: 7.5px;">
                                <?php
                                        $query = mysqli_query($conn, "SELECT * FROM navbar_negara ORDER BY negara ASC");
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
                                <option value="<?php echo $data['negara'] ?>">
                                    <?php echo $data['negara'] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">TAHUN</label>
                            <select class="form-select form-select-mb-1 " name="filterKedua[]" multiple
                                multiselect-search="true" aria-label=".form-select-mb example" style=" padding: 7.5px;">
                                <?php
                                        $query = mysqli_query($conn, "SELECT * FROM navbar_tahun ORDER BY tahun DESC");
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
                                <option value="<?php echo $data['tahun'] ?>">
                                    <?php echo $data['tahun'] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php 
                        }else if($kodeGet == 2){
                        //! ---------- FILTER TERPILIH NEGARA ---------- 
                        ?>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">GENRE</label>
                            <select class="form-select form-select-mb-1 " name="filterPertama[]" multiple
                                multiselect-search="true" aria-label=".form-select-mb example" style=" padding: 7.5px;">
                                <?php
                                            $query = mysqli_query($conn, "SELECT * FROM navbar_genre ORDER BY genre ASC");
                                            while($data = mysqli_fetch_array($query)){
                                        ?>
                                <option value="<?php echo $data['genre'] ?>">
                                    <?php echo $data['genre'] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">TAHUN</label>
                            <select class="form-select form-select-mb-1 " name="filterKedua[]" multiple
                                multiselect-search="true" aria-label=".form-select-mb example" style=" padding: 7.5px;">
                                <?php
                                            $query = mysqli_query($conn, "SELECT * FROM navbar_tahun ORDER BY tahun DESC");
                                            while($data = mysqli_fetch_array($query)){
                                        ?>
                                <option value="<?php echo $data['tahun'] ?>">
                                    <?php echo $data['tahun'] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php 
                        }else if($kodeGet == 3){
                        //! ---------- FILTER TERPILIH TAHUN ---------- 
                        ?>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">GENRE</label>
                            <select class="form-select form-select-mb-1 " name="filterPertama[]" multiple
                                multiselect-search="true" aria-label=".form-select-mb example" style=" padding: 7.5px;">
                                <?php
                                            $query = mysqli_query($conn, "SELECT * FROM navbar_genre ORDER BY genre ASC");
                                            while($data = mysqli_fetch_array($query)){
                                        ?>
                                <option value="<?php echo $data['genre'] ?>">
                                    <?php echo $data['genre'] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">NEGARA</label>
                            <select class="form-select form-select-mb-1 " name="filterKedua[]" multiple
                                multiselect-search="true" aria-label=".form-select-mb example" style=" padding: 7.5px;">
                                <?php
                                            $query = mysqli_query($conn, "SELECT * FROM navbar_negara ORDER BY negara ASC");
                                            while($data = mysqli_fetch_array($query)){
                                        ?>
                                <option value="<?php echo $data['negara'] ?>">
                                    <?php echo $data['negara'] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php 
                        }
                        ?>
                        <!-- bisa gunakan seperti di bawah ini, sebagai tanda kalau button sudah di klik -->
                        <!-- <input type="hidden" name="filter" value="tambah"> -->
                        <div class="button-container">
                            <button class="button-tambah-filter" type="submit">Tambah Filter</button>
                        </div>
                    </form>
                </div>
            </aside>
            <section>
                <?php 
                if($kodeGet == 1){
                    $query = mysqli_query($conn, "SELECT * FROM konten WHERE genre='$dataGet'");
                    $jenisFilter = "GENRE";
                }else if($kodeGet == 2){
                    $query = mysqli_query($conn, "SELECT * FROM konten WHERE negara='$dataGet'");
                    $jenisFilter = "NEGARA";
                }else if($kodeGet == 3){
                    $query = mysqli_query($conn, "SELECT * FROM konten WHERE tahun=$dataGet");
                    $jenisFilter = "TAHUN";
                }else{
                    $query = mysqli_query($conn, "SELECT * FROM konten WHERE CONCAT_WS(' ', judul, genre, negara, tahun) LIKE '%" .$cari. "%'");
                }
                
                ?>
                <h1>FILTER BERDASARKAN <?php echo $jenisFilter ?> : <?php echo $dataGet ?></h1>
                <div class="all-cards">
                    <!-- Ikhsan : Filtering tahap pertama -->
                    <?php
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <div class="container-card">
                        <div class="card">
                            <a href=halamanSinopsis.php?id=<?php echo $data['id']; ?>>
                                <div class="info">
                                    <div class="negara"> <?php echo $data['negara'] ?> </div>
                                    <div class="tahun"> <?php echo $data['tahun'] ?> </div>
                                </div>
                                <img id="gambar" src="assets/image/film/<?php echo $data['gambar']; ?>" alt="">
                                <div class=" genre"> <?php echo $data['genre'] ?> </div>
                            </a>
                        </div>
                        <label for="gambar" id="judul"> <?php echo $data['judul'] ?> </label>
                        <div id="tooltip"> <?php echo $data['judul'] ?> </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!-- end : hasil searching-->
        </article>
    </main>
    <footer>
        &copy; 2023 Film Explainer
    </footer>
    <script src="assets/script/controller.js"></script>
    <script src="assets/script/filter.js"></script>
</body>

</html>