<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Motor</title>
    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style2.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">

<body>
    <header id="header-area" class="fixed-top">
        <div id="header-top" class="d-none d-xl-block"></div>
        <div id="header-bottom" class="fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="index.php" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="beranda.php">BERANDA</a>
                                </li>
                                <li><a href="about.php">TENTANG</a></li>
                                <li><a href="index.php">ADMIN</a></li>
                                <li><a href="logout.php">LOGOUT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="slider-area">
        <div class="halaman overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sewa">
                            <form action="create.php" method="POST">
                                <div class="pick-up-date book-item">
                                    <!-- <h4>ATAS NAMA : </h4>
                                    <input name="nama_rental" type="text" placeholder="Masukkan Nama Lengkap" />
                                <div class="pickup-location book-item">
                                <br> -->
                                    <h4>LOKASI PENGAMBILAN</h4>
                                    <select class="custom-select" name="lokasi_rental">
                                        <option selected>Select</option>
                                        <option value="Sawojajar">Sawojajar</option>
                                        <option value="Klojen">Klojen</option>
                                        <option value="Madyopuro">Madyopuro</option>
                                        <option value="Blimbing">Blimbing</option>
                                    </select>
                                </div>
                                <div class="pick-up-date book-item">
                                    <h4>Tanggal Pengambilan : </h4>
                                    <input name="tanggalm_rental" type="date" placeholder="Tanggal Pengambilan" />

                                    <div class="return-car">
                                        <h4>Tanggal Kembali : </h4>
                                        <input name="tanggala_rental" type="date" placeholder="Tanggal Pengembalian" />
                                    </div>
                                </div>
                                <div class="choose-car-type book-item">
                                    <h4></h4>
                                    <select class="custom-select" name="merk_rental">
                                        <option selected>Pilih Merk Motor </option>
                                        <option value="Vario">Vario</option>
                                        <option value="Beat">Beat</option>
                                        <option value="Scoopy">Scoopy</option>
                                    </select>
                                </div>
                                <div class="book-button text-center">
                                    <button type="submit" class="book-now-btn">Pesan Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-kanan">
                                    <h1>RENTAL MOTOR SEKARANG!</h1>
                                    <p>PROMO DISKON 15% MULAI TANGGAL 1-5 APRIL 2020 <br> *Syarat Ketentuan Berlaku</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
