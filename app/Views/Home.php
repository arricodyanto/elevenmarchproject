<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="favicon.png" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Laman Utama - Eleven March Project</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

</head>

<body class="mb-0 pb-0">
    <!-- Home -->

    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color: #000000;" aria-label="Main navigation">
        <div class="container-fluid cover-container">
            <a class="navbar-brand" href="#home">
                <img src="img/logo-white-c.png" style="width:80px">
            </a>
            <button class="navbar-toggler" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse sticky-top" id="navbarprimary">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-2">
                    <li class="nav-item">
                        <center><a class="nav-link active" aria-current="page" href="#home">Home</a></center>
                    </li>
                    <li class="nav-item">
                        <center><a class="nav-link" href="#about">About</a></center>
                    </li>
                    <li class="nav-item">
                        <center><a class="nav-link" href="#experiences">Experiences</a></center>
                    </li>
                    <li class="nav-item">
                        <center><a class="nav-link" href="#gallery">Gallery</a></center>
                    </li>
                    <li class="nav-item">
                        <center><a class="nav-link" href="#contact">Contact</a></center>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Contact</a>
    </nav> -->
    <section id="home">
        <div class="card bg-dark text-white rounded-0 border-0">
            <img src="img/home-darken.png" class="card-img">
            <div class="card-img-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <img src="img/logo.png" class="rounded mx-auto d-block w-50" onContextMenu='return false'>
                                <!-- <img src="img/logo.png" class="w-50 d-blox mx-auto" onContextMenu='return false'><br><br> -->
                                <center>
                                    <!-- <h3 class="card-title" style="margin-top: 1vw; font-size:3vw; color: #FFD700;">ELEVEN MARCH PROJECT</h3> -->
                                    <a style="margin-top: 2vw; font-size:3vw;">ELEVEN MARCH </a>
                                    <a style="font-size:3vw; color:rgb(231, 186, 30)"> PROJECT</a>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="card text-white rounded-0 border-0 p-4 pt-5 pb-3" style="background-color: #000000;">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <img src="img/up-icon.png" width="100px" onContextMenu='return false'>
                        <p class="fs-5 lh-lg position-relative top-50 start-50 translate-middle pt-3 pb-3" style="width:70%">
                            Kami event organizer yang bergerak di bidang akademik, olahraga,
                            hiburan, wedding organizer, design, hingga fotografi dan videografi. <br>Dirintis
                            pada akhir bulan Desember pada tahun 2020 dan memiliki kantor yang berpusat di Gedung
                            Rektorat dr. Prakosa Universitas Sebelas Maret (UNS) Surakarta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-white rounded-0 border-0 p-4 pt-5 pb-0" style="background-color: #000000;">
            <center>
                <img src="img/t-section.png" onContextMenu='return false' width="100px" style="background-color: #000000;padding: top 120px;">
            </center>
        </div>
    </section>
    <section id="experiences">
        <div class="card text-white rounded-0 border-0 pb-5" style="background-color: #1A1A1A;">
            <center>
                <img src="img/b-section.png" onContextMenu='return false' width="100px">
            </center>
        </div>
        <div class="card text-white rounded-0 border-0 p-4 pt-0" style="background-color: #1A1A1A;">
            <div class="container">
                <div class="row text-center">
                    <div class="col pb-4">
                        <h3>EXPERIENCES</h3>
                        <img src="img/experience-1.svg" width="100%" onContextMenu='return false'>
                    </div>
                    <div class="pt-4 pb-4">
                        <img src="img/up-icon.png" width="100px" style="transform: rotate(180deg);" onContextMenu='return false'>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
            </div>
            <div class="carousel-inner bg-dark p-0 m-0">
                <div class="carousel-item active">
                    <img src="img/forumilmiah.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>FORUM ILMIAH TRI EKS STO</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/wedding.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/ika.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>WEDANGAN IKA DIES NATALIS UNS KE-45</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/gowes.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>UNS GOWES PESONA NUSANTARA</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/livoma.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>LIGA BOLA VOLI UNS</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/semarfest.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SEMARFEST KE-43</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/tennis.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>KEJUARAAN NASIONAL BOLA TENIS 2018</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/wedding-1.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>WEDDING CEREMONY</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/backstage.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BACKSTAGE</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="contact" class="text-white" style="background-color: #000000;">
        <div class="container-fluid">
            <div class="row">
                <div class="col p-4 m-4">
                    <div class="container" style="width:90%;">
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h3 class="mb-4">Contact</h3>
                                </center>
                                <form class="whatsapp-form needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="nama">Nama Lengkap :</label>
                                        <input type="text" class="validate form-control" id="nama" name="nama" placeholder="Nama Lengkap Anda" required>
                                        <div class="valid-feedback">
                                            Nama sudah dimasukkan.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email :</label>
                                        <input type="text" class="validate form-control" id="email" name="email" placeholder="Alamat Email Anda" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaacara">Nama Acara :</label>
                                        <input type="text" class="validate form-control" id="namaacara" name="namaacara" placeholder="Nama/Judul Acara" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi">Deskripsi :</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi Singkat Acara"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sifat">Sifat Acara :</label>
                                        <select class="validate form-select" id="sifat" required>
                                            <option selected disabled>Pilih salah satu</option>
                                            <option value="Terbuka">Terbuka Untuk Umum</option>
                                            <option value="Tertutup">Tertutup</option>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-8">
                                            <label for="tanggal">Tanggal Acara :</label>
                                            <input type="date" class="validate form-control" id="tanggal" name="tanggal" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="jam">Jam :</label>
                                            <input type="time" class="validate form-control" id="jam" name="jam" required>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="tempat">Tempat Pelaksanaan :</label>
                                        <input type="text" class="validate form-control" id="tempat" name="tempat" placeholder="Tempat/Lokasi Pelaksanaan" required>
                                    </div>

                                    <a class="send_form bi bi-whatsapp btn btn-outline-success" href="javascript:void" type="submit" title="Send to Whatsapp"> Send to Whatsapp</a>
                                    <div class="mt-4" id="text-info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-0 pe-0" style="float:right;">
                    <div class="card bg-dark text-white rounded-0 border-0">
                        <img src="img/gedung-prakosa.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <div class="position-absolute top-50 start-50 translate-middle" style="width: 80%;">
                                            <center>
                                                <p class="fst-italic fs-5">"Some of our finest work comes through service to others."</p>
                                                <p class="text-muted">Beberapa karya terbaik kami datang melalui pelayanan kepada orang lain.</p>
                                                <p>~ Gordon B. Hinckley</p>
                                            </center>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer style="background-color: #1A1A1A;">
        <div class="container p-5 text-white">
            <div class="row">
                <div class="col-sm-4 mb-4">
                    <img class="mb-4" src="img/logo-white-c.png" width="150vw">
                    <p style="font-size: 20px;"><strong>ELEVEN MARCH PROJECT</strong></p>
                    <p class="mb-1"><a class="link bi bi-telephone-fill" href="https://wa.me/6285601834461"> 085601834461</a></p>
                    <p class="mb-1"><a class="link bi bi-globe" href="https://www.elevenmarchproject.com/"> www.elevenmarchproject.com</a></p>
                    <p class="mb-1"><a class="link bi bi-envelope-fill" href="mailto:11marchproject@gmail.com"> 11marchproject@gmail.com</a></p>
                    <p><a class="link bi bi-geo-alt-fill" href="https://goo.gl/maps/2qLbAbvaqTHPYYtu5"> Jl. Ir Sutami No.36 A, Surakarta, Jawa Tengah, 57126, Indonesia</a></p>
                </div>
                <div class="col-sm-4 mb-4">
                    <p style="font-size: 20px;">Social Media</p>
                    <center>
                        <a href="#" class="link bi bi-linkedin" target="_blank" style="font-size: 40px;"> </a>
                        <a href="#" class="link bi bi-facebook" target="_blank" style="font-size: 40px;"> </a>
                        <a href="#" class="link bi bi-instagram" target="_blank" style="font-size: 40px;"> </a>
                        <a href="#" class="link bi bi-youtube" target="_blank" style="font-size: 40px;"> </a>
                    </center>
                </div>
                <div class="col-sm-4 mb-4">
                    <p style="font-size: 20px;">Lokasi</p>
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            var ro = !!d.getElementById(id);
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "https://widgets.moovit.com/ws/C001419C60151BA8E0530100007F683B/4059014";
                            fjs.parentNode.insertBefore(js, fjs);
                        })(document, 'script', 'moovit-jsw');
                    </script>
                    <div class="mv-gd-widget-20" data-width="250" data-height="360" data-id="4059014"></div>
                </div>
            </div>
        </div>
        <div style="background-color:#000000">
            <div class="container p-4 text-white">
                <div class="row">
                    <div class="col">
                        <div style="font-size: 14px; color:#e4e4e4;">
                            <center>
                                Copyright &copy;<?php echo date('Y'); ?> - <a class="link" href="https://www.elevenmarchproject.com/">Eleven March Project</a><br>All Rights Reserved
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="js/add.min.js"></script>
</body>

</html>
