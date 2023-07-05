<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Explainer</title>
    <link rel="stylesheet" href="assets/style/index.css">
</head>

<body>
    <header>
        <section>
            <img src="assets/image/logo.png" alt="Logo">
        </section>
        <nav>
            <ul class="ul-navbar">
                <li class="li-navbar"><a href="index.html">HOME</a></li>
                <li class="li-navbar">
                    GENRE
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </span>
                    <ul class="dropdown">
                        <li><a href="">Action</a></li>
                        <li><a href="">Romance</a></li>
                        <li><a href="">Comedy</a></li>
                        <li><a href="">Horror</a></li>
                        <li><a href="">Sci-Fi</a></li>
                        <li><a href="">Animation</a></li>
                    </ul>
                </li>
                <li class="li-navbar">
                    NEGARA
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </span>
                    <ul class="dropdown">
                        <li><a href="">Amerika</a></li>
                        <li><a href="">Indonesia</a></li>
                        <li><a href="">Jepang</a></li>
                        <li><a href="">Korea</a></li>
                    </ul>
                </li>
                <li class="li-navbar">
                    TAHUN
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </span>
                    <ul class="dropdown">
                        <li><a href="">2020</a></li>
                        <li><a href="">2021</a></li>
                        <li><a href="">2022</a></li>
                        <li><a href="">2023</a></li>
                    </ul>
                </li>
            </ul>
            <section>
                <form action="#">
                    <div class="searching">
                        <button class="search-icon" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                        <input type="text" placeholder="Search">
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
                    <div class="container-card">
                        <div class="card">
                            <a href="halamanSinopsis.php">
                                <div class="info">
                                    <div class="negara">Jepang</div>
                                    <div class="tahun">2023</div>
                                </div>
                                <!-- format :  width: 160px , height: 195px;-->
                                <img id="gambar" src="assets/image/haikyu.png" alt="">
                                <div class="genre">Animation, comedy</div>
                            </a>
                        </div>
                        <label for="gambar">Haikyu</label>
                    </div>
                    <!-- xxxx adalah yang di isi (di ambil dari database) -->
                    <div class="container-card">
                        <div class="card">
                            <a href="halamanSinopsis.php?id=xxxxx">
                                <div class="info">
                                    <div class="negara">xxxx</div>
                                    <div class="tahun">xxxx</div>
                                </div>
                                <img id="gambar" src="xxx" alt="xxx">
                                <div class="genre">xxxxxx</div>
                            </a>
                        </div>
                        <label for="gambar">xxxx</label>
                    </div>
                </div>
            </section>
            <!-- end : Bagian Tren Sekarang -->

            <!-- Bagian LAIN (ambil dari database atau static juga boleh)-->
            <section>
                <h1>BAGIAN LAIN</h1>
                <div class="all-cards">
                    <!-- xxxx adalah yang di isi (di ambil dari database) -->
                    <div class="container-card">
                        <div class="card">
                            <a href="halamanSinopsis.php?id=xxxxx">
                                <div class="info">
                                    <div class="negara">xxxx</div>
                                    <div class="tahun">xxxx</div>
                                </div>
                                <!-- format :  width: 160px , height: 195px;-->
                                <img id="gambar" src="xxx" alt="xxx">
                                <div class="genre">xxxxxx</div>
                            </a>
                        </div>
                        <label for="gambar">xxxx</label>
                    </div>
                </div>
            </section>
            <!-- end : Bagian LAIN-->

            <!-- Bagian LAIN2 (ambil dari database atau static juga boleh)-->
            <section>
                <h1>BAGIAN LAIN 2</h1>
                <div class="all-cards">
                    <!-- xxxx adalah yang di isi (di ambil dari database) -->
                    <div class="container-card">
                        <div class="card">
                            <a href="halamanSinopsis.php?id=xxxxx">
                                <div class="info">
                                    <div class="negara">xxxx</div>
                                    <div class="tahun">xxxx</div>
                                </div>
                                <!-- format :  width: 160px , height: 195px;-->
                                <img id="gambar" src="xxx" alt="xxx">
                                <div class="genre">xxxxxx</div>
                            </a>
                        </div>
                        <label for="gambar">xxxx</label>
                    </div>
                </div>
            </section>
            <!-- end : Bagian LAIN2-->
        </article>
    </main>
    <footer></footer>
    <script src="assets/script/index.js"></script>
</body>

</html>