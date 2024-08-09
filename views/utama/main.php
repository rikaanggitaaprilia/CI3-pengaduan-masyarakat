<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Kalijirak</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo  base_url() . "assets/"; ?>img/logoatas.png" rel="icon">
    <link href="<?php echo  base_url() . "assets/"; ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo  base_url() . "assets/"; ?>vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo  base_url() . "assets/"; ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo  base_url() . "assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo  base_url() . "assets/"; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo  base_url() . "assets/"; ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo  base_url() . "assets/"; ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo  base_url() . "assets/"; ?>/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizPage
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <img src="<?php echo  base_url() . "assets/"; ?>img/logonavbar.png" width="35" height="40">
                    <h1 class="logo"><a href="">Desa Kalijirak</a></h1>
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                            <li><a class="nav-link scrollto" href="#services">Profil</a></li>
                            <li><a class="nav-link scrollto" href="#about">Visi & Misi</a></li>
                            <li><a class="nav-link scrollto" href="#team">Struktur Organisasi</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">Profil Pegawai</a></li>
                            </li>
                            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                            <li><a class="nav-link  " href="<?= base_url('Auth/RegisterController') ?>">Buat Pengaduan</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Beranda Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url(<?php echo  base_url() . "assets/"; ?>img/header_02.jpeg)">
                        <div class="carousel-container">
                        <div class="container">
                        <h2 class="animate_animated animate_fadeInDown">Selamat Datang</h2>
                        <h2 class="animate_animated animate_fadeInUp">Website Pengaduan Desa Kalijirak</h2>
                         <!--<a href="#featured-services" class="btn-get-started scrollto animate_animated animate_fadeInUp">Get Started</a>-->
                    </div>
                    </div>
                </div>
                    <div class="carousel-item" style="background-image: url(<?php echo  base_url() . "assets/"; ?>img/header_01.jpeg)">
                    <div class="carousel-container">
                </div>
            </div>
        </div>
        </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
             <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
             </a>

        </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        </section><!-- End Featured Services Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">

                <header class="section-header wow fadeInUp">
                    <h3>Tentang Website Pengaduan Desa Kalijirak</h3>
                    <img src="<?php echo  base_url() . "assets/"; ?>img/profil.jpeg" class="img-fluid" alt="">
                    <a href="<?php echo  base_url() . "assets/"; ?>img/profil.jpeg" class="link-preview"><br></br></a>
                    <div>
                        <div style="text-align: justify">
                        Sebagai salah satu instansi pemerintah yang bertugas dalam bidang pelayanan masyarakat desa, Desa Kalijirak memberikan pelayanan yang memadai untuk masyarakat sesuai dengan standar yang telah ditetapkan. Desa Kalijirak menyediakan berbagai pelayanan masyarakat yang meliputi Pelayanan pindah penduduk, SKCK, pengurusan KK, dan lain sebagainya. Selain itu Desa Kalijirak juga menyediakan wadah yang digunakan sebagai alat bantu untuk masyarakat Kalijirak menyampaikan aduan terkait apa yang terjadi di Kalijirak.<br>
                        <br>
                        Website Pengaduan Desa Kalijirak berupaya untuk menjembatani antara masyarakat dengan Desa Kalijirak. Masyarakat Kalijirak dapat memberikan pelaporan tentang apa saja yang terjadi di Kalijirak yang akan ditinjau dan didisposisikan oleh tim Desa Kalijirak untuk ditindaklanjuti.
                        </div>
                    </div>
                </header>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">

                    <h3><strong>Visi<strong></h3>
                    <br>
                    <div style="text-align: justify">
                        <p>Bersama melanjutkan pembangunan menyeluruh Desa Kalijirak yang lebih maju, sejahtera, berprestasi dan berakhlaq mulia dengan semangat bekerja keras, bekerja cerdas dan bekerja ikhlas.</p>
                    </div>
                    <h3><strong>Misi<strong></h3>
                    <div style="text-align: justify">
                        <ol type='1'>
                            <li>
                                Pelaksanaan program lanjut pembangunan yang telah dilaksanakan oleh pemerintah Desa Kalijirak periode sebelumnya.
                            <li>
                                Pemerataan pembangunan fisik dan non fisik diseluruh masyarakat Desa Kalijirak.
                            <li>
                                Penyelenggaraan Pemerintahan jujur, transparan dan akuntabel.
                            <li>
                                Peningkatan pelayanan dan kesejahteraan ekonomi kecil, karang taruna, bidang kesejahteraan, pendidikan, keagamaan dan budaya serta sarana dan prasarana olahraga.
                            <li>
                                Menciptakan kondisi masyarakat Desa Kalijirak yang aman, tertib, rukun, cerdas dan bermartabat dalam kehidupan bermasyarakat.<br>
                                <br>
                                <br>
                    </div>
                </header>

        </section><!-- End about Section -->

        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Struktur Organisasi</h3>
                </div>

                <div class="row">
                    <!--<img src="<?php echo  base_url() . "assets/"; ?>img/SO/1.png" class="img-fluid" alt="">-->
                    <img src="<?php echo  base_url() . "assets/"; ?>img/SO/satu.png" class="img-fluid" alt="">
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Profil Pegawai</h3>
                </header>
                <!--profil kepala desa -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap-center">
                        <figure class="portfolio-item">
                            <img src="<?php echo base_url() . "assets/"; ?>img/profilpegawai/trijoko.jpg" class="img-fluid portfolio-image" alt="">
                            <a href="<?php echo base_url() . "assets/"; ?>img/profilpegawai/trijoko.jpg" class="link-preview portfolio-lightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </figure>
                            <div class="portfolio-info">
                                <h4>Tri Joko Susilo</a></h4>
                                <p>KEPALA DESA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <!--profil sekdes -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/heru.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/heru.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4>Heru Winarno</a></h4>
                                <p>SEKRETARIS DESA</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala urusan tata usaha & umum -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/jokomaryono.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/jokomaryono.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4>Joko Maryono</a></h4>
                                <p>KAUR TATA USAHA & UMUM</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala urusan keuangan -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/atikyuliyanti.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/atikyuliyanti.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4>Atik Yuliyanti</a></h4>
                                <p>KAUR KEUANGAN</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala urusan perencanaan -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/nurhadi.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/nurhadi.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4>Nurhadi</a></h4>
                                <p>KAUR PERENCANAAN</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala seksi pemerintahan -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/marana.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/marana.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>

                            </figure>

                            <div class="portfolio-info">
                                <h4>Marana S</a></h4>
                                <p>KEPALA SEKSI PEMERINTAHAN</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala seksi kesejahteraan -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/teguh.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/teguh.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>

                            </figure>

                            <div class="portfolio-info">
                                <h4>Teguh Widodo</a></h4>
                                <p>KEPALA SEKSI KESEJAHTERAAN</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala seksi pelayanan -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/tomy.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/tomy.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>

                            </figure>

                            <div class="portfolio-info">
                                <h4>Tomy Febriyanto A</a></h4>
                                <p>KEPALA SEKSI PELAYANAN</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala dusun kalijirak -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/anwar.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/anwar.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>

                            </figure>

                            <div class="portfolio-info">
                                <h4>Anwar As Hari</a></h4>
                                <p>KADUS KALIJIRAK</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala dusun bendorejo -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/ragil.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/ragil.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>

                            </figure>

                            <div class="portfolio-info">
                                <h4>Ragil Suwarto</a></h4>
                                <p>KADUS BENDOREJO</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala dusun mencon -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/joko.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/joko.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>

                            </figure>

                            <div class="portfolio-info">
                                <h4>Joko Ismanto</a></h4>
                                <p>KADUS MENCON</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala dusun gunungwatu -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/sunarto.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/sunarto.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>

                            </figure>

                            <div class="portfolio-info">
                                <h4>Sunarto</a></h4>
                                <p>KADUS GUNUNGWATU</p>
                            </div>
                        </div>
                    </div>
                    <!--profil kepala dusun jatiri -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/sumanto.jpg" class="img-fluid" alt="">
                                <a href="<?php echo  base_url() . "assets/"; ?>img/profilpegawai/sumanto.jpg" class="link-preview portfolio-lightbox"><i class="bi bi-eye"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4>Sumanto</a></h4>
                                <p>KADUS JATIRI</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h3>KONTAK</h3>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <address><a href="https://maps.app.goo.gl/958cMJqjRJ29pnp6A">Jl. Sepat, Jatiri, Kalijirak, Kecamatan Tasikmadu, Kabupaten Karanganyar, Jawa Tengah 57722</a></address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Nomor Ponsel</h3>
                            <p><a href="https://wa.me/">0813-9801-8753</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">desakalijirak.kab.karanganyar@gmail.com</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-7 footer-info">
                        <h3>Desa Kalijirak</h3>
                        <p>Website Pengaduan Desa Kalijirak berupaya untuk menjembatani antara masyarakat dengan Desa Kalijirak. Masyarakat Kalijirak dapat memberikan pelaporan tentang apa saja yang terjadi di Kalijirak yang akan ditinjau dan didisposisikan oleh tim Desa Kalijirak untuk ditindaklanjuti.</p>
                    </div>

                    <div class="col-lg-4 col-md-7 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Profil</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">Visi & Misi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#team">Struktur Organisasi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Profil Pegawai</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-7 footer-contact">
                        <h4>Hubungi Kami</h4>
                        <p>
                            <strong>Telepon:</strong> 0813 9801 8753 <br>
                            <strong>Email:</strong> desakalijirak.kab.karanganyar@gmail.com <br>
                        </p>
                    </div>
                    <div style="text-align: center">
                        <h4>WEBSITE PENGADUAN MASYARAKAT DESA KALIJIRAK</h4>

                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/aos/aos.js"></script>
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?php echo  base_url() . "assets/"; ?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo  base_url() . "assets/"; ?>js/main.js"></script>

</body>

</html>