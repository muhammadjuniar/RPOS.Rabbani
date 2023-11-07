<?php include "./components/header.php"; ?>
<main class="main-container-stock">

    <?php include "./components/navbar.php"; ?>

    <section id="mobile-topbar">
        <div class="container product-topbar fixed-top ">
            <h4 class="title pt-3 pb-2">Stock Opname</h4>   
        </div>
    </section>
    <section id="desktop-topbar">
        <div class="container product-topbar">
            <h4 class="title pt-3 pb-2">Stock Opname</h4> 
        </div>
    </section>

    <section id="stock-opname">
        <div class="text-white">
            <div class="row stock-opname">
                <div class="col-6 label">
                    Invoice
                </div>
                <div class="col-6 label text-end">
                    Tanggal
                </div>
                <div class="col-8 invoice-data text-invoice" >
                    MSB1-O0001.SO-0001/JAN-FEB/2021
                </div>
                <div class="col-4 invoice-data text-end" style="padding-left:0 !important">
                    <input class="form-control custom-date" value="<?php echo date("Y-m-d") ?>" type="date">
                </div>
                <div class="col-12 separator">
                    <hr class="line" />
                </div>
                
                <div class="col-12 text-total">
                    Total Produk
                </div>
                <div class="col-12 number-total">
                    15
                </div>

            </div>
        </div>
    </section>

    <section id="stock-feature-buttons">
        <div class="container mt-3 mb-2">
            <div class="row">
                <div class="col-6">
                    <div class="search-stock">
                        <form action="stockopname.php" class="d-flex">
                                
                            <i class="fa fa-search"></i>
                            <input class="form-control me-2" name="keyword" type="search" placeholder="Cari produk" aria-label="Search"
                            value="<?php if(isset($_GET['keyword'])){ echo $_GET['keyword']; } else { echo '';} ?>"
                            >
                                
                        </form>
                    </div>
                </div>
                <div class="col-2">
                    <a href="plugin/HTML5-Webcam-Barcode-Reader/websocket-server/www/index.html">
                    <div class="d-flex align-items-center">
                        <div class="feature-items-stock">
                            <span >
                                <img src="assets/images/barcode_scanner.svg" width="24" height="24" alt="...">
                            </span>
                        </div>
                    </div>
                    </a>
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
                                    <input type="text" name="quant[1]" class="form-control input-field-number input-number" placeholder="0" min="0" max="99999999">
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
                                    <div class="col-6 text-end text-price">250.800</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Sub Total</div>
                                    <div class="col-6 text-end text-price">Rp3.762.000</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Stok Pagi</div>
                                    <div class="col-6 text-end text-price">15</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row container-stock">
                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheck2">
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
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                            <img src="assets/images/min_button.svg" alt="">
                                        </button>
                                    </span>
                                    <input type="text" name="quant[2]" class="form-control input-field-number input-number" placeholder="0" min="0" max="99999999">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
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
                                    <div class="col-6 text-end text-price">250.800</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Sub Total</div>
                                    <div class="col-6 text-end text-price">Rp3.762.000</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6 text-label">Stok Pagi</div>
                                    <div class="col-6 text-end text-price">15</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }; ?>

</main>
<?php include "./components/footer.php"; ?>