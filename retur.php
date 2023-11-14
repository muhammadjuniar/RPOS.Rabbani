<?php include "./components/header.php"; ?>
<main class="main-container-stock">

    <?php include "./components/navbar.php"; ?>

    <section id="penjualan-topbar">
        <div class="container fixed-top">

            <!-- Tabs -->
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="penjualan.php">
                    <button class="nav-link d-flex align-items-center" id="pills-penjualan-tab" data-bs-toggle="pill" data-bs-target="#pills-penjualan" type="button" role="tab" aria-controls="pills-penjualan" aria-selected="false">
                        <img class="inactive-img" src="assets/images/menu_lap_jual.svg" alt="">
                        <img class="active-img" src="assets/images/menu_lap_jual_active.svg" alt=""><span>Penjualan</span>
                    </button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="retur.php">
                    <button class="nav-link active d-flex align-items-center" id="pills-retur-penjualan-tab" data-bs-toggle="pill" data-bs-target="#pills-retur-penjualan" type="button" role="tab" aria-controls="pills-retur-penjualan" aria-selected="false">
                        <img class="inactive-img" src="assets/images/menu_lap_retur_jual.svg" alt="">
                        <img class="active-img" src="assets/images/menu_lap_retur_jual_active.svg" alt=""><span>Retur</span>
                    </button>
                    </a>
                </li>
            </ul>
            <!-- Tabs -->
        </div>
    </section>

    <section id="data-penjualan">
        <div class="text-white">
            <div class="row data-penjualan">
                <div class="col-6 label">
                    Invoice
                </div>
                <div class="col-6 label text-end">
                    Tanggal
                </div>
                <div class="col-8 invoice-data text-invoice" >
                    R27012021-1
                </div>
                <div class="col-4 invoice-data text-end text-date" style="padding-left:0 !important">
                    <?php echo date("d/m/Y", strtotime("2021-02-27")) ?>
                </div>
                <div class="col-12 separator">
                    <hr class="line" />
                </div>
                
                <div class="col-12 text-total">
                    Total Uang Masuk
                </div>
                <div class="col-12 number-total">
                    <sup>Rp</sup> 0
                </div>

            </div>
        </div>
    </section>

    <section id="stock-feature-buttons">
        <div class="container mt-3 mb-2">
            <div class="row">
                <div class="col-8">
                    <div class="search-stock">
                        <form action="retur.php" class="d-flex">
                                
                            <i class="fa fa-search"></i>
                            <input class="form-control me-2" name="keyword" type="search" placeholder="Cari produk" aria-label="Search"
                            value="<?php if(isset($_GET['keyword'])){ echo $_GET['keyword']; } else { echo '';} ?>"
                            >
                                
                        </form>
                    </div>
                </div>
                <div class="col-2">
                    <div class="d-flex align-items-center">
                        <div class="feature-items-stock">
                            <span >
                                <img src="assets/images/delete_outline.svg" width="24" height="24" alt="...">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="d-flex align-items-center">
                        <div class="feature-items-stock dropdown-toggle" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            <span >
                                <img src="assets/images/three_dots.svg" width="20px" height="20px" alt="...">
                            </span>
                        </div>
                        <ul class="dropdown-menu text-center" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" href="#">Batalkan Semua</a></li>
                            <li style="border-top: 1px solid #000;border-bottom: 1px solid #000;" ><a class="dropdown-item" href="#">Simpan Sebagai Draft</a></li>
                            <li><a class="dropdown-item" href="#">Lanjutkan Draft</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if(isset($_GET['keyword'])){ ;?>
    <section id="stock-items">
        <div class="container">
            <div class="row container-stock">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck1">
                    </div>
                </div>
                <div class="col-11">
                    <div class="row item-details">
                        <div class="col-12"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/barcode.svg" alt=""><span class="product-code">BAA1CB09042A241</span></div>
                        <div class="col-12 product-name">Dresslim Sebia</div>
                        <div class="col-12 color-size">Ashes or Roses, XS</div>
                        <div class="row" style="margin:0;padding:0;">
                            <div class="col-12">
                                <div class="input-group stock-number">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <img src="assets/images/min_button.svg" alt="">
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-field-number input-number" value="2" min="1" max="99999999">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <img src="assets/images/add_button.svg" alt="">
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row price-detail">
                            <div class="col-12">
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Harga Dasar</div>
                                    <div class="col-6 text-end text-price">Rp239.800</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Harga Jual</div>
                                    <div class="col-6 text-end text-price">Rp250.800</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Diskon</div>
                                    <div class="col-6 text-end text-price">Rp0</div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><hr></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Sub Total</div>
                                    <div class="col-6 text-end text-price">Rp501.600</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php }; ?>

    <!-- <button class="btn btn-success" id="save-button" title="Save" data-bs-toggle="modal" data-bs-target="#save-confirmation"
    <?php if(!isset($_GET['keyword'])){ echo 'disabled'; }; ?>>Bayar (2)</button> -->

    <?php if(!isset($_GET['keyword'])){ ?>
        <button class="btn btn-success" id="retur-button" disabled>
            Kembalikan
        </button>
    <?php }else{ ?>
        <a href="retur_detailed.php">
            <button class="btn btn-success" id="retur-button">
                Kembalikan (2)
            </button>
        </a>
    <?php } ?>

</main>
<?php include "./components/footer.php"; ?>