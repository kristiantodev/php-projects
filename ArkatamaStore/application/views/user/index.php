<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arkatama Store</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('gambar/') ?>logo.png" rel="icon">
    <link href="<?= base_url('gambar/') ?>logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('bizpage/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('bizpage/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('bizpage/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('bizpage/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('bizpage/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('bizpage/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('bizpage/') ?>assets/css/style.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

    <!-- =======================================================
  * Template Name: BizPage - v5.10.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
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
                    <!-- <h1 class="logo"><a href="index.html">Arkatama</a></h1> -->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="<?= base_url('user'); ?>" class="logo"><img src="<?= base_url('gambar/') ?>logo1.png" alt="" class="img-fluid"></a>

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">Produk/Layanan</a></li>

                            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                            <li class="dropdown"><a href="#"><span>Masuk</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>

                                    <li><a href="<?= base_url('user/tampil_login') ?>">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <?php foreach ($hero as $value) { ?> ?>
                        <?php if ($value->status_hero == 'disetujui') { ?>
                            <div class="carousel-item active" style="background-image: url(<?= base_url('gambar/hero/') . $value->gambar_hero; ?>)">
                                <div class="carousel-container">
                                    <div class="container">
                                        <h2 class="animate__animated animate__fadeInDown judulHero" id="judulHero"><?= $value->judul_hero; ?></h2>
                                        <p class="animate__animated animate__fadeInUp"><?= $value->teks_hero; ?></p>
                                        <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>


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

        <!-- ======= Featured Services Section Section ======= -->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="bi bi-briefcase"></i>
                        <h4 class="title" style="color: white;">Custom Application Development</h4>
                        <p class="description">Mengembangkan aplikasi custom berbasis web dan mobile dengan tampilan interaktif</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title" style="color: white;">Hardware and IT Infrastructure</h4>
                        <p class="description">Mengadakan komputer server, laptop, PC (Personal Computer), dan kebutuhan infrastruktur untuk memenuhi kebutuhan IT</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="bi bi-binoculars"></i>
                        <h4 class="title" style="color: white;">IT Training Center</h4>
                        <p class="description">Menyediakan berbagai pelatihan untuk memperdalam kemampuan desain dan development</p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Tentang Kami</h3>
                    <p>PT Arkatama Multi Solusindo adalah perusahaan penyedia jasa teknologi informasi yang inovatif dan kreatif, dengan kegiatan utamanya membantu organisasi untuk meningkatkan pelayanan publik anda.</p>
                </header>

                <div class="row about-cols justify-content-md-center">

                    <div class="col-md-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-col">
                            <div class="img">
                                <img src="<?= base_url('bizpage/') ?>assets/img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Visi</a></h2>
                            <p>
                                Menjadi Perusahaan yang Inovatif dan Profesional dengan memberikan pelayanan standar internasional. <br> <br>
                                Beberapa pelayanan yang disediakan oleh PT Arkatama Multi Solusindo adalah pengembangan software, pengadaan dan konfigurasi infrastruktur teknologi informasi (hardware), optimasi dan automasi proses bisnis, dan jasa pelatihan skill di bidang teknologi informasi yang dikhususkan untuk para developer, engineer, user, maupun manager pada proyek teknologi informasi. <br><br><br>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <div class="img">
                                <img src="<?= base_url('bizpage/') ?>assets/img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Misi</a></h2>
                            <p>
                                1. Membantu pelanggan agar terus bertumbuh dan mencapai keunggulan berkelanjutan. <br>
                                2. Mengembangkan aplikasi yang berkualitas sesuai orientasi dan kebutuhan pelanggan serta standar pengembangan aplikasi. <br>
                                3. Memberikan layanan kepada pelanggan sesuai standar manajemen mutu perusahaan. <br>
                                4. Memberikan layanan terbaik untuk memastikan sistem aplikasi tersebut mampu menjadi solusi untuk meningkatkan bisnis pelanggan. <br>
                                5. Menyebarluaskan pengetahuan dan ketrampilan dalam bidang teknologi informasi yang berwawasan global.
                            </p>
                        </div>
                    </div>




                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">

                <header class="section-header wow fadeInUp">
                    <h3>Mengapa Memilih Arkatama</h3>
                    <p>Arkatama Multi Solusindo telah berpengalaman selama 8 tahun dalam memenuhi kebutuhan IT untuk meningkatkan profit mitra.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title" style="color: black;">Teknologi Terkini</h4>
                        <p class="description">Mengembangkan kebutuhan website maupun mobile Anda menggunakan teknologi yang up-to-date</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title" style="color: black;">Pemeliharaan Berkelanjutan</h4>
                        <p class="description">Menyediakan layanan pemeliharaan yang berkelanjutan secara lifetime</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title" style="color: black;">Professional</h4>
                        <p class="description">Project akan dikerjakan oleh tim kami yang ahli dalam bidangnya</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title" style="color: black;">Berpengalaman</h4>
                        <p class="description">Rekam jejak yang terbukti dengan berbagai testimoni</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title" style="color: black;">Pengerjaan Cepat</h4>
                        <p class="description">Project dikerjakan secara cepat, tanggap, efektif, dan efisien</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title" style="color: black;">Aman dan Terjamin</h4>
                        <p class="description">Kerahasiaan data dan asset Anda akan terjaga</p>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container text-center" data-aos="zoom-in">
                <h3>Mulai bangun kebutuhan IT Anda di Arkatama</h3>
                <p> Arkatama Multi Solusindo menghadirkan layanan terbaik untuk memenuhi kebutuhan produktivitas dan kredibilitas bisnis Anda.</p>
                <a class="cta-btn" href="#contact">Hubungi Kami</a>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Produk atau Layanan</h3>
                </header>

                <div class="row ">
                    <p class="d-flex justify-content-end"><a href="<?= base_url('user/page_produk/'); ?>" id="lihatSemua">Lihat lainnya ></a></p>
                </div>
                <div class="row text-center product">
                    <div class="col">
                        <div class="swiper mySwiper">

                            <div class="swiper-wrapper">
                                <?php foreach ($barang as $brg) : ?>
                                    <?php if ($brg->status_produk == 'disetujui') { ?>
                                        <div class="swiper-slide card-product" style="width: 265px; margin: 0 auto;">

                                            <div class="card" style="width: 265px;">
                                                <img src="<?= base_url('uploads/') . $brg->gambar_barang; ?>" class="card-img-top" height="255" width="225" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-size: 16px;"><b><?= $brg->nama_barang; ?></b></h5>
                                                    <small style="font-size: 12px;"><?= $brg->keterangan_barang; ?></small><br>
                                                    <span class="badge rounded-pill text-bg-success mt-3 mb-3">Rp. <?= number_format($brg->harga_barang, 0, ',', '.');  ?></span>
                                                    <br>
                                                    <a href="https://wa.me/6285764441284" class="btn btn-primary btn-sm">Pesan Sekarang</a>
                                                    <a href="<?= base_url('user/detail_produk/' . $brg->id_barang); ?>" class="btn btn-warning text-white btn-sm">Details</a>
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>



                        </div>

                    </div>


                </div>

                <div class="row">
                    <div class="toogle-slider d-flex justify-content-end mt-2">
                        <i class="bi bi-arrow-left-circle-fill iconBg" style="font-size: 2.2rem;"></i>
                        <i class="bi bi-arrow-right-circle-fill iconBg" style="font-size: 2.2rem; margin-left: 10px;"></i>
                    </div>
                </div>

                <!-- Swiper -->
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg" style="padding-top: 20;">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h3>Kontak Kami</h3>
                    <p>Tertarik menggunakan layanan Arkatama Store? Tapi pengen tanya-tanya dulu? Klik narahubung dibawah ya.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <address>Perumahan Joyoagung Greenland No. B4-B5 Tlogomas, Malang</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>No Telepon</h3>
                            <p><a href="tel:+155895548855">081234311135</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@arkatama.id">info@arkatama.id</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="zoom-in">

                <header class="section-header">
                    <h3>Bagian dari klien kami</h3>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo1.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="<?= base_url('gambar/client/') ?>logo8.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Our Clients Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Arkatama</h3>
                        <p>PT Arkatama Multi Solusindo merupakan sebuah perusahaan yang memiliki pengalaman di bidang jasa konsultan IT dan Pengembangan Aplikasi. Arkatama siap mendampingi Digital Transformation Indonesia.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Navigasi</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Produk/Layanan</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#contact">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Kontak Kami</h4>
                        <p>
                            Perumahan Joyoagung Greenland No. B4-B5 <br>
                            Tlogomas, Malang<br>
                            Indonesia <br>
                            <strong>Phone:</strong> 081234311135<br>
                            <strong>Email:</strong> info@arkatama.id<br>
                        </p>



                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Sosial Media</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/arkatama.id" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/arkatamamulti/" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://id.linkedin.com/company/arkatama?original_referer=https%3A%2F%2Farkatama.id%2F" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>PT Arkatama Store</strong>.
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
                Dibuat oleh <a href="">Andre Agung</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="<?= base_url('bizpage/') ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('bizpage/') ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('bizpage/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('bizpage/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('bizpage/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('bizpage/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('bizpage/') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url('bizpage/') ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('bizpage/') ?>assets/js/main.js"></script>
    <script src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>