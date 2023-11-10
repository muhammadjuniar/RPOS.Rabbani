<?php include "./components/header.php"; ?>
<main class="main-container-report-detailed">

    <?php include "./components/navbar.php"; ?>

    <section id="mobile-topbar">
        <div class="container report-detailed-topbar fixed-top "> 
            <div class="row pt-3 pb-2 height d-flex align-items-center">
                <div class="col-1">
                    <a href="report.php">
                        <img src="assets/images/arrow_left.svg" height=14 alt="">
                    </a>
                </div>
                <div class="col-11">
                    <div class="search">
                        <form action="report_detailed.php" class="d-flex">
                            
                            <i class="fa fa-search"></i>
                            <input class="form-control me-2" name="keyword" type="search" placeholder="Cari produk" aria-label="Search"
                            value="<?php if(isset($_GET['keyword'])){ echo $_GET['keyword']; } else { echo '';} ?>"
                            >
                            
                        </form>
                    </div>
                
                </div>

            </div>
            
            <div class="row">
                <div class="col-12 transaction">
                    <div class="transaction-code">MSB1-O0001 T021012021-1</div>
                    <div class="transaction-date">27-01-2021</div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="desktop-topbar">
        <div class="container product-topbar">
            <h4 class="title pt-3 pb-2">Produk Rabbani</h4>   
            <div class="row height d-flex justify-content-center align-items-center">

                <div class="col-md-12">

                    <div class="search">
                        <form action="product.php" class="d-flex">
                            
                            <i class="fa fa-search"></i>
                            <input class="form-control me-2" name="keyword" type="search" placeholder="Cari nama atau barcode produk" aria-label="Search"
                            value="<?php if(isset($_GET['keyword'])){ echo $_GET['keyword']; } else { echo '';} ?>"
                            >
                            
                        </form>
                    </div>
                
                </div>

            </div>
        </div>
    </section> -->

    <section id="report-detailed-list">
        <div class="container mt-4">
            <div class="row pt-3 mb-1" data-bs-toggle="modal" data-bs-target="#updateModal">
                <div class="col-lg-12">
                    <div class="row product-detail">
                        <div class="col-2"><img class="round" width="45" height="45" avatar="Dresslim Sebia"></div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-12"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/barcode.svg" alt=""><span class="product-code">BAA1CB09042A241</span></div>
                                <div class="col-12 product-name">Dresslim Sebia</div>
                            </div>
                            <div class="row">
                                <div class="col-6 standard-price"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/arrow_drop_down.svg" alt="">Rp239.800</div>
                                <div class="col-6 selling-price"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/arrow_drop_up.svg" alt="">Rp239.800</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3 mb-1" data-bs-toggle="modal" data-bs-target="#updateModal">
                <div class="col-lg-12">
                    <div class="row product-detail">
                        <div class="col-2"><img class="round" width="45" height="45" avatar="Kemko Panjang Hasbi mst"></div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-12"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/barcode.svg" alt=""><span class="product-code">CCA1CB09042A241</span></div>
                                <div class="col-12 product-name">Kemko Panjang Hasbi mst</div>
                            </div>
                            <div class="row">
                                <div class="col-6 standard-price"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/arrow_drop_down.svg" alt="">Rp239.800</div>
                                <div class="col-6 selling-price"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/arrow_drop_up.svg" alt="">Rp239.800</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3 mb-1" data-bs-toggle="modal" data-bs-target="#updateModal">
                <div class="col-lg-12">
                    <div class="row product-detail">
                        <div class="col-2"><img class="round" width="45" height="45" avatar="Dresslim Alzeera Sarang"></div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-12"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/barcode.svg" alt=""><span class="product-code">BNA1CB09042A241</span></div>
                                <div class="col-12 product-name">Dresslim Alzeera Sarang</div>
                            </div>
                            <div class="row">
                                <div class="col-6 standard-price"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/arrow_drop_down.svg" alt="">Rp239.800</div>
                                <div class="col-6 selling-price"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/arrow_drop_up.svg" alt="">Rp239.800</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
<?php include "./components/footer.php"; ?>