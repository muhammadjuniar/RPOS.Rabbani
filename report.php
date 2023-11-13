<?php include "./components/header.php"; ?>
<main class="main-container-report">

    <?php include "./components/navbar.php"; ?>

    <section id="laporan-topbar">
        <div class="container">

            <!-- Tabs -->
            <div class="container fixed-top">
                <ul class="nav nav-justified nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active d-flex align-items-center" id="pills-pembelian-tab" data-bs-toggle="pill" data-bs-target="#pills-pembelian" type="button" role="tab" aria-controls="pills-pembelian" aria-selected="true">
                            <img class="inactive-img" src="assets/images/menu_lap_beli.svg" alt="">
                            <img class="active-img" src="assets/images/menu_lap_beli_active.svg" alt=""><span>Pembelian</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="pills-penjualan-tab" data-bs-toggle="pill" data-bs-target="#pills-penjualan" type="button" role="tab" aria-controls="pills-penjualan" aria-selected="false">
                            <img class="inactive-img" src="assets/images/menu_lap_jual.svg" alt="">
                            <img class="active-img" src="assets/images/menu_lap_jual_active.svg" alt=""><span>Penjualan</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="pills-retur-pembelian-tab" data-bs-toggle="pill" data-bs-target="#pills-retur-pembelian" type="button" role="tab" aria-controls="pills-retur-pembelian" aria-selected="false">
                            <img class="inactive-img" src="assets/images/menu_lap_retur_beli.svg" alt="">
                            <img class="active-img" src="assets/images/menu_lap_retur_beli_active.svg" alt=""><span>Retur Pembelian</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="pills-retur-penjualan-tab" data-bs-toggle="pill" data-bs-target="#pills-retur-penjualan" type="button" role="tab" aria-controls="pills-retur-penjualan" aria-selected="false">
                            <img class="inactive-img" src="assets/images/menu_lap_retur_jual.svg" alt="">
                            <img class="active-img" src="assets/images/menu_lap_retur_jual_active.svg" alt=""><span>Retur Penjualan</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="pills-stock-opname-tab" data-bs-toggle="pill" data-bs-target="#pills-stock-opname" type="button" role="tab" aria-controls="pills-stock-opname" aria-selected="false">
                            <img class="inactive-img" src="assets/images/menu_so.svg" alt="">
                            <img class="active-img" src="assets/images/menu_so_active.svg" alt=""><span>Stock Opname</span>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- Tabs -->

            <div class="tab-content" id="pills-tabContent">
                
                <!-- pembelian-tab -->
                <div class="tab-pane fade show active" id="pills-pembelian" role="tabpanel" aria-labelledby="pills-pembelian-tab">
                    <div class="row info-tab text-start">
                        <div class="col-12 separator">&nbsp;</div>
                        <div class="col-6">
                            <input class="form-control custom-date" value="<?php echo date("Y-m-d") ?>" type="date">
                        </div>
                        <div class="col-12"><h1 class="total-pendapatan">Rp50.000.000</h1></div>
                        <div class="col-12 separator">&nbsp;</div>
                        
                        <!-- Transaction List -->
                        <div class="col-12">
                            <div class="row d-flex align-items-center">
                                <div class="col-10 transaction">
                                    <div class="transaction-code">MSB1-O0001 T021012021-1</div>
                                    <div class="transaction-date">27-01-2021</div>
                                </div>
                                <div class="col-2">
                                    <a href="report_detailed.php">
                                        <img src="assets/images/arrow_right_dark.svg" height=30 alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Transaction List -->

                    </div>
                </div>
                <!-- pembelian-tab -->


                <!-- penjualan-tab -->
                <div class="tab-pane fade" id="pills-penjualan" role="tabpanel" aria-labelledby="pills-penjualan-tab">
                    <div class="row info-tab">
                        <div class="col-12 separator">&nbsp;</div>
                        <div class="col-6">
                            <input class="form-control custom-date" value="<?php echo date("Y-m-d") ?>" type="date">
                        </div>
                        <div class="col-12"><h1 class="total-pendapatan">Rp7.000.000</h1></div>
                        <div class="col-12 separator">&nbsp;</div>
                        
                        <!-- Transaction List -->
                        <div class="col-12">
                            <div class="row d-flex align-items-center">
                                <div class="col-10 transaction">
                                    <div class="transaction-code">MSB1-O0001 T021012021-1</div>
                                    <div class="transaction-date">27-01-2021</div>
                                </div>
                                <div class="col-2">
                                    <a href="report_detailed.php">
                                        <img src="assets/images/arrow_right_dark.svg" height=30 alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex align-items-center">
                                <div class="col-10 transaction">
                                    <div class="transaction-code">MSB1-O0001 T021012021-2</div>
                                    <div class="transaction-date">27-01-2021</div>
                                </div>
                                <div class="col-2">
                                    <a href="report_detailed.php">
                                        <img src="assets/images/arrow_right_dark.svg" height=30 alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex align-items-center">
                                <div class="col-10 transaction">
                                    <div class="transaction-code">MSB1-O0001 T021012021-3</div>
                                    <div class="transaction-date">27-01-2021</div>
                                </div>
                                <div class="col-2">
                                    <a href="report_detailed.php">
                                        <img src="assets/images/arrow_right_dark.svg" height=30 alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Transaction List -->

                    </div>
                </div>
                <!-- penjualan-tab -->


                <!-- retur-pembelian-tab -->
                <div class="tab-pane fade" id="pills-retur-pembelian" role="tabpanel" aria-labelledby="pills-retur-pembelian-tab">
                    <div class="row info-tab">
                        <div class="col-12 separator">&nbsp;</div>
                        <div class="col-6">
                            <input class="form-control custom-date" value="<?php echo date("Y-m-d") ?>" type="date">
                        </div>
                        <div class="col-12"><h1 class="total-pendapatan">Rp250.800</h1></div>
                        <div class="col-12 separator">&nbsp;</div>
                        
                        <!-- Transaction List -->
                        <div class="col-12">
                            <div class="row d-flex align-items-center">
                                <div class="col-10 transaction">
                                    <div class="transaction-code">R021012021-1</div>
                                    <div class="transaction-date">27-01-2021</div>
                                </div>
                                <div class="col-2">
                                    <a href="report_detailed.php">
                                        <img src="assets/images/arrow_right_dark.svg" height=30 alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Transaction List -->

                    </div>
                </div>
                <!-- retur-pembelian-tab -->
                

                <!-- retur-penjualan-tab -->
                <div class="tab-pane fade" id="pills-retur-penjualan" role="tabpanel" aria-labelledby="pills-retur-penjualan-tab">
                    <div class="row info-tab">
                        <div class="col-12 separator">&nbsp;</div>
                        <div class="col-6">
                            <input class="form-control custom-date" value="<?php echo date("Y-m-d") ?>" type="date">
                        </div>
                        <div class="col-12"><h1 class="total-pendapatan">Rp250.800</h1></div>
                        <div class="col-12 separator">&nbsp;</div>
                        
                        <!-- Transaction List -->
                        <div class="col-12">
                            <div class="row d-flex align-items-center">
                                <div class="col-10 transaction">
                                    <div class="transaction-code">R021012021-1</div>
                                    <div class="transaction-date">27-01-2021</div>
                                </div>
                                <div class="col-2">
                                    <a href="report_detailed.php">
                                        <img src="assets/images/arrow_right_dark.svg" height=30 alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Transaction List -->

                    </div>
                </div>
                <!-- retur-penjualan-tab -->


                <!-- stock-opname-tab -->
                <div class="tab-pane fade" id="pills-stock-opname" role="tabpanel" aria-labelledby="pills-stock-opname-tab">
                    <div class="row info-tab">
                        <div class="col-12 separator">&nbsp;</div>
                        <div class="col-6">
                            <input class="form-control custom-date" value="<?php echo date("Y-m-d") ?>" type="date">
                        </div>
                        <div class="col-12"><h1 class="total-pendapatan">500 <small>pcs</small></h1></div>
                        <div class="col-12 separator">&nbsp;</div>
                        
                        <!-- Transaction List -->
                        <div class="col-12">
                            <div class="row d-flex align-items-center">
                                <div class="col-10 transaction">
                                    <div class="transaction-code">MSB1-O0001.SO-0001/JAN-FEB/2021</div>
                                    <div class="transaction-date">27-01-2021</div>
                                </div>
                                <div class="col-2">
                                    <a href="report_detailed.php">
                                        <img src="assets/images/arrow_right_dark.svg" height=30 alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Transaction List -->

                    </div>
                </div>
                <!-- stock-opname-tab -->

            </div>
        </div>
    </section>

    
</main>
<?php include "./components/footer.php"; ?>