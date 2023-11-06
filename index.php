<?php include "./components/header.php"; ?>
    
    <main class="main-container">    
        <?php include "./components/navbar.php"; ?>

        <section class="pageTop">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-between">
                            <p>Ahlan,</p>
                            <div class="active-status">
                                <p>Aktif sampai 05-08-2024 
                                <span class="circle"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h1>Toko Hijab Lilah</h1>
                    </div>
                    <div class="col">
                        <p>Biro BUMDES</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="mini-dashboard">
            <div class="container text-white">
                <div class="row mini-dashboard">
                    <div class="col">
                        <div class="d-flex align-items-center statistic-board">
                            <div class="icon-statistic">
                                <span >
                                    <img src="assets/images/stars.svg" width="30" height="30" alt="...">
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <span class="poin-statistic">54</span>
                                </div>
                                <div class="col-sm-12" style="margin-top:-10px !important">
                                    <span class="text-statistic">Poin Member <img src="assets/images/arrow_right.svg" style="background: white !important;border-radius:50%" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center statistic-board">
                            <div class="icon-statistic">
                                <span >
                                    <img src="assets/images/account_balance_wallet.svg" width="30" height="30" alt="...">
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <sup>Rp</sup> <span class="penjualan-statistic">150.000</span>
                                </div>
                                <div class="col-sm-12" style="margin-top:-10px !important">
                                    <span class="text-statistic">Hasil Penjualan <img src="assets/images/arrow_right.svg" style="background: white !important;border-radius:50%" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <section id="feature-button">
            <div class="container feature-button">
                <div class="d-flex justify-content-between text-center">
                    <div class="mt-5 mb-4">
                        <div class="d-flex align-items-center" style="flex-direction:column">
                            <div class="feature-items">
                                <span >
                                    <img src="assets/images/menu_download.svg" width="24" height="24" alt="...">
                                </span>
                            </div>
                            <div class="text">
                                Download<br />Produk
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 mb-4">
                        <a href="product.php">
                        <div class="d-flex align-items-center" style="flex-direction:column">
                            <div class="feature-items">
                                <span >
                                    <img src="assets/images/menu_produk_rabbani.svg" width="24" height="24" alt="...">
                                </span>
                            </div>
                            <div class="text">
                                Produk<br />Rabbani
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="mt-5 mb-4">
                        <a href="stockopname.php">
                        <div class="d-flex align-items-center" style="flex-direction:column">
                            <div class="feature-items">
                                <span >
                                    <img src="assets/images/open_box.svg" width="24" height="24" alt="...">
                                </span>
                            </div>
                            <div class="text">
                                Stock<br />Opname
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="mt-5 mb-4">
                        <div class="d-flex align-items-center" style="flex-direction:column">
                            <div class="feature-items">
                                <span >
                                    <img src="assets/images/menu_list.svg" width="24" height="24" alt="...">
                                </span>
                            </div>
                            <div class="text">
                                Laporan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="banner">
            <div class="container mt-4">
                <h4>Promo Terbaru</h4>
                <section class="variable-width slider">
                    <div class="slide-promo"><img src="assets/images/promo/promo-mar-23 1.png" class="d-block w-100" alt="..."></div>
                    <div class="slide-promo"><img src="assets/images/promo/general-promo-2023-01 1.png" class="d-block w-100" alt="..."></div>
                </section>
            </div>
        </section>

        <section id="banner-kitalog">
            <div class="container mt-4" style="padding-bottom: 100px">
                <h4>Katalog Terbaru</h4>
                    <div id="carouselExample2" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/katalog/kitalog-cover-2023.png" class="d-block w-100" alt="...">
                            </div>
                            <!-- <div class="carousel-item">
                            <img src="assets/images/katalog/kitalog-cover-2023.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="assets/images/katalog/kitalog-cover-2023.png" class="d-block w-100" alt="...">
                            </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                            <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </section>
    </main>
<?php include "./components/footer.php"; ?>