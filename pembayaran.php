<?php include "./components/header.php"; ?>
<main class="main-container-stock">

    <?php include "./components/navbar.php"; ?>

    <section id="mobile-topbar">
        <div class="container product-topbar fixed-top align-items-center" style="display:flex;flex-direction: row;">
            <a href="penjualan.php">
                <img style="margin-right: 10px;" src="assets/images/arrow_left_dark.svg" height=14 alt="">
            </a>
            <h4 class="title pt-3 pb-1">Pembayaran</h4>   
        </div>
    </section>
    <section id="desktop-topbar">
        <div class="container product-topbar">
            <h4 class="title pt-3 pb-2">Pembayaran</h4> 
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
                    T27012021-1
                </div>
                <div class="col-4 invoice-data text-end text-date" style="padding-left:0 !important">
                    <?php echo date("d/m/Y", strtotime("2021-02-27")) ?>
                </div>
                <div class="col-12 separator">
                    <hr class="line" />
                </div>
                
                <div class="col-12 text-total">
                    Total Tagihan
                </div>
                <div class="col-12 number-total">
                    <sup>Rp</sup> 501.600
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
                                    <input type="text" name="quant[1]" class="form-control input-field-number input-number" placeholder="2" min="2" max="99999999">
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
                                    <div class="col-6 text-end text-price"></div>
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

    
    <button class="btn btn-success" id="save-button" title="Save" data-bs-toggle="modal" data-bs-target="#save-confirmation">
        Simpan
    </button>

    <!-- Modals -->
    <div id="stock-modal">
        <div class="modal fade" id="save-confirmation" data-bs-backdrop="confirmation" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="confirm-title text-center">Konfirmasi Stock Opname</div>
                        <div class="confirm-content">Apakah kamu yakin menyimpan stock opname nomor <br /> MSB1-O0001.SO-0001/JAN-FEB/2021 ?</div>
                        <a href="stockOpnameSuccess.php">
                            <div class="text-end"><button class="btn btn-sm btn-confirm">Ya, Simpan</button></div>
                        </a>    
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php include "./components/footer.php"; ?>