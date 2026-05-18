<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link rel="shortcut icon" type="image/x-icon" href="https://static.wixstatic.com/media/a928eb_9e966aa2e6184668a57343161555f85f~mv2.png">
<!-- Place favicon.ico in the root directory -->

<!-- CSS here -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

<style>
    .header-logo img {
        width: 200px;
        max-width: none;
    }

    .nav-top-1 {
        background: #144DFF;
    }

    .header-logo.fx-header-1-main {
        background-color: rgb(255, 255, 255);
    }

    .main-navigation .navbar-nav li:not(:last-child) {
        margin-right: 15px;
    }

    .fx-header-1-main {
        padding-left: 20px;
    }

    .fx-services-1-area.services-1 {
        background: #134CFE;
        padding-top: 150px;
    }

    .fx-footer-1-logo {
        max-width: 300px;
    }

    .fx-footer-1-area {
        box-shadow: -0.5px -0.5px 0.5px;
        background: #FFFFFE;
    }

    .ukuran-font .fx-services-1-slider-item .item-title {
        font-size: 18px;
    }

    .plyvideo.video-landing-1 {
        object-position: bottom;
    }

    .fx-footer-1-logo.footer-img {
        display: flex;
        padding-top: 20px;
    }

    .img-cover .direktur-k {
        object-position: right;
    }
</style>

<!-- header-start -->
<div class="fx-header-1-area txa_sticky_header ">
    <div class="fx-header-1-container">
        <!-- header-top -->
        <div class="fx-header-1-top nav-top-1">
            <ul class="fx-contact-list">
                <li>
                    <a href="#" aria-label="name">
                        <i class="fa-regular fa-envelope"></i>
                        corporate@nusakonstruksi.com
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="name">
                        <i class="fa-regular fa-phone-volume"></i>
                        (021) 7221003
                    </a>
                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    Mon - Fri 8:30 - 17:30, Sat - Sun off
                </li>
            </ul>
            <div class="fx-social-icon">
                <a href="#" class="fx-social-icon-btn" aria-label="name">
                    <img style="width: 20px;" src="https://static.parastorage.com/services/linguist-flags/1.1005.0/assets/flags/round/IDN.png" alt="">
                </a>
            </div>
        </div>

        <!-- header-main -->
        <div class="fx-header-1-main header-logo">

            <!-- logo -->
            <a href="<?php echo base_url(); ?>" aria-label="name" class="fx-header-1-main-logo">
                <img src="https://static.wixstatic.com/media/fd341d_20caa4b818e54cc0b1e92426a3684256~mv2.png/v1/fill/w_288,h_63,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/nkelogosquare.png" alt="">
            </a>

            <!-- menu -->
            <nav class="main-navigation fx-ml-auto d-none d-lg-block ">
                <ul id="main-nav" class="nav navbar-nav clearfix">

                    <li>
                        <a class="is-active" href="<?php echo base_url(); ?>">Beranda</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="dropdown">
                        <a href="#!">Tentang kami</a>

                        <ul class="dropdown-menu clearfix">
                            <li>
                                <a href="<?php echo site_url('profile'); ?>">Profile Perusahaan</a>
                            </li>
                            <li>
                                <a href="#!">Visi Misi & Nilai Perusahaan</a>
                            </li>
                            <li>
                                <a href="#!">Struktur Ogranisasi</a>
                            </li>
                            <li>
                                <a href="#!">Anak Perusahaan & Entitas Asosiasi</a>
                            </li>
                            <li>
                                <a href="#!">Sertifikasi & Penghargaan </a>
                            </li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="#!">Bisnis & Proyek</a>

                        <ul class="dropdown-menu clearfix">
                            <li>
                                <a href="#!">Lini Bisnis</a>
                            </li>
                            <li>
                                <a href="#!">Proyek Infrastruktur</a>
                            </li>
                            <li>
                                <a href="#!">Proyek Gedung</a>
                            </li>
                            <li>
                                <a href="#!">Proyek Project Unggulan </a>
                            </li>
                            <!-- <li>
                                        <a href="projects-details.html">projects  details</a>
                                    </li> -->
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#!">Tata kelola</a>

                        <ul class="dropdown-menu clearfix">
                            <li>
                                <a href="#!">Tata Kelola Perusahaan</a>
                            </li>
                            <li>
                                <a href="#!">Struktur Tata Kelola</a>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#!">Hubungan Investor</a>

                        <ul class="dropdown-menu clearfix">
                            <li>
                                <a href="<?php echo site_url('financial'); ?>">Ikhtisar Keuangan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('tahunan'); ?>">Laporan Tahunan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('shares'); ?>">Informasi Saham</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('downloads'); ?>">Unduhan Dokumen</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('disclaimers'); ?>">Penafian</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#!">Kontak</a>
                        <ul class="dropdown-menu clearfix">


                            <li>
                                <a href="#!">Informasi kontak</a>
                            </li>

                            <li class="dropdown">
                                <a href="#!">career</a>
                                <ul class="dropdown-menu clearfix">
                                    <li>
                                        <a href="#!">career</a>
                                    </li>
                                    <li>
                                        <a href="#!">career single</a>
                                    </li>
                                    <li>
                                        <a href="#!">job apply</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!-- <li class="dropdown">
                                <a href="contact.html">Kontak</a>
                                <ul class="dropdown-menu clearfix">

                                    
                                    <li class="dropdown">
                                        <a href="!#">services</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li>
                                                <a href="services.html">services</a>
                                            </li>
                                            <li>
                                                <a href="services-details.html">services details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown">
                                        <a href="!#">teams</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li>
                                                <a href="team.html">teams</a>
                                            </li>
                                            <li>
                                                <a href="team-details.html">teams details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown">
                                        <a href="!#">career</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li>
                                                <a href="career.html">career</a>
                                            </li>
                                            <li>
                                                <a href="career-single.html">career single</a>
                                            </li>
                                            <li>
                                                <a href="job-apply.html">job apply</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="clients.html">clients</a>
                                    </li>

                                    <li>
                                        <a href="faqs.html">faqs</a>
                                    </li>

                                    <li>
                                        <a href="pricing.html">pricing</a>
                                    </li>
                                    <li>
                                        <a href="process.html">process</a>
                                    </li>

                                    <li>
                                        <a href="testimonial.html">testimonial</a>
                                    </li>
                                    <li>
                                        <a href="error.html">404</a>
                                    </li>

                                </ul>
                            </li> -->


                </ul>
            </nav>

            <!-- action-btn -->
            <div class="fx-header-1-action-link d-flex align-items-center justify-content-end">

                <!-- search-btn -->
                <button type="button" aria-label="name" class="fx-search-btn-1 search_btn_toggle">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    search...
                </button>

                <!-- pr-btn -->
                <!-- <a href="contact.html" aria-label="name" class="fx-pr-btn-1">
                            <span class="text" data-back="request a quote" data-front="request a quote"></span>
                        </a> -->

                <!-- sidebar-btn -->
                <button type="button" aria-label="name" class="fx-menu-btn-1 offcanvas_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>

        </div>
    </div>
</div>
<!-- header-end -->