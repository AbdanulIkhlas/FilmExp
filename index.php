<?php
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmExp</title>
    <link rel="stylesheet" href="assets/style/index.css">
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
                            $query = mysqli_query($conn, "SELECT * FROM navbar_tahun");
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
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0Z" />
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
            <!-- Bagian Tren Sekarang -->
            <section>
                <h1>TREN SEKARANG</h1>
                <div class="all-cards">
                    <!-- ikhsan : database konten -->
                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM konten WHERE kategori=1");
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
            <!-- end : Bagian Tren Sekarang -->

            <!-- start : coming soon-->
            <section>
                <h1>COMING SOON</h1>
                <div class="all-cards">
                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM konten WHERE kategori=2");
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <div class="container-card">
                        <div class="card">
                            <a href=halamanSinopsis.php?id=<?php echo $data['id']; ?>>
                                <div class="info">
                                    <div class="negara"> <?php echo $data['negara'] ?> </div>
                                    <div class="tahun"> <?php echo $data['tahun'] ?> </div>
                                </div>
                                <!-- format :  width: 160px , height: 195px;-->
                                <img id="gambar" src="assets/image/film/<?php echo $data['gambar']; ?>" alt="xxx">
                                <div class="genre"><?php echo $data['genre'] ?></div>
                            </a>
                        </div>
                        <label for="gambar" id="judul"> <?php echo $data['judul'] ?> </label>
                        <div id="tooltip"> <?php echo $data['judul'] ?> </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!-- end : Bagian LAIN-->

            <!-- start : rekomendasi-->
            <section>
                <h1>FILM EXPLAINER REKOMENDASI</h1>
                <div class="all-cards">
                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM konten WHERE kategori=3");
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <div class="container-card">
                        <div class="card">
                            <a href=halamanSinopsis.php?id=<?php echo $data['id']; ?>>
                                <div class="info">
                                    <div class="negara"><?php echo $data['negara'] ?></div>
                                    <div class="tahun"><?php echo $data['tahun'] ?></div>
                                </div>
                                <!-- format :  width: 160px , height: 195px;-->
                                <img id="gambar" src="assets/image/film/<?php echo $data['gambar']; ?>" alt="xxx">
                                <div class="genre"><?php echo $data['genre'] ?></div>
                            </a>
                        </div>
                        <label for="gambar" id="judul"><?php echo $data['judul'] ?></label>
                        <div id="tooltip"> <?php echo $data['judul'] ?> </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!-- end : rekomendasi-->
        </article>
    </main>
    <footer>
        <section class="container">
            <div class="deskripsi">
                <div class="title">
                    <div class="garis"></div>
                    <h2><strong>FilmExp</strong></h2>
                    <div class="garis"></div>
                </div>
                <p>
                    FilmExp adalah singkatan dari Film Explainer, sebuah website
                    penyedia daftar film dan series yang dilengkapi dengan sinopsis
                    yang bisa menjadi referensi anda untuk memutuskan film dan series
                    apa yang akan ditonton.
                </p>
            </div>
            <section>
                <div class="author">
                    <div class="title">
                        <div class="garis"></div>
                        <h2><strong>Author</strong></h2>
                        <div class="garis"></div>
                    </div>
                    <ul>
                        <li>
                            <img src="assets/image/avatar_ikhsan.png" alt="Avatar">
                            <div class="container-info">
                                <h3><strong>AL IKHSAN AKBAR FATAHILLAH</strong></h3>
                                <a href="https://www.instagram.com/ikhsannn_fthllh/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                    <h2>ikhsannn_fthllh</h2>
                                </a>
                            </div>

                        </li>
                        <li>
                            <img src="assets/image/avatar_klaz.png" alt="Avatar">
                            <div class="container-info">
                                <h3><strong>MUHAMMAD ABDANUL IKHLAS</strong></h3>
                                <a href="https://www.instagram.com/abdanulikhlas_/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                    <h2>abdanulikhlas_</h2>
                                </a>
                            </div>

                        </li>
                        <li>
                            <img src="assets/image/avatar_ikhsan.png" alt="Avatar">
                            <div class="container-info">
                                <h3><strong>MUHAMMAD RAZIET MUAQIL</strong></h3>
                                <a href="https://www.instagram.com/razietm_/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                    <h2>razietm_</h2>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contact">
                    <div class="title">
                        <div class="garis"></div>
                        <h2><strong>Contact Us</strong></h2>
                        <div class="garis"></div>
                    </div>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                            <h3>filmexp@gmail.com</h3>
                        </li>
                    </ul>
                </div>
            </section>
        </section>
        <h1>
            &copy; 2023 Film Explainer
        </h1>
    </footer>
    <script src="assets/script/controller.js"></script>
</body>

</html>