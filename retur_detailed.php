<?php include "./components/header.php"; ?>
<main class="main-container-pembayaran">

    <?php include "./components/navbar.php"; ?>
    <?php include "./assets/format.php"; ?>

    <section id="mobile-topbar">
        <div class="container product-topbar fixed-top align-items-center" style="display:flex;flex-direction: row;">
            <a href="retur.php">
                <img style="margin-right: 10px;" src="assets/images/arrow_left_dark.svg" height=14 alt="">
            </a>
            <h4 class="title pt-3 pb-1">Pengembalian</h4>   
        </div>
    </section>
    <section id="desktop-topbar">
        <div class="container product-topbar">
            <h4 class="title pt-3 pb-2">Pengembalian</h4> 
        </div>
    </section>

    <section id="data-pembayaran">
        <div class="text-white">
            <div class="row data-pembayaran">
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
                    Total Tagihan
                </div>
                <div class="col-12 number-total">
                    <sup>Rp</sup> <span id="number-total-retur">0</span>
                </div>

            </div>
        </div>
    </section>

    <section id="pembayaran-items">
        <div class="container">
            <div class="row container-pembayaran">
                <div class="col-1">
                    <img src="assets/images/product_hand.svg" height=18 alt="">
                </div>
                <div class="col-11">
                    <div class="row item-details">
                        <div class="col-12"><img style="width:30px;height:30px;position: relative;top: -1px;margin-right: 6px;" src="assets/images/barcode.svg" alt=""><span class="product-code">BAA1CB09042A241</span></div>
                        <div class="col-12 product-name">Dresslim Sebia</div>
                        <div class="col-12 text-label">Ashes or Roses, XS</div>
                        <div class="col-12 text-label"><span id="retur-qty">2</span> x Rp250.800</div>
                        <div class="col-12 text-label">Diskon Rp<span id="retur-discount">0</span></div>
                        <div class="col-12 text-tagihan-price" id="retur-amount">Rp501.600</div>
                    </div>
                </div>
            </div>

            <div class="row container-pembayaran">
                <div class="col-12">
                    <div class="row item-details">
                        <div class="col-12 section-title mb-2">Ringkasan Penjualan</div>
                        <div class="row">
                            <div class="col-6 text-label">Jumlah Produk</div>
                            <div class="col-6 text-end text-price" id="ringkasan-retur-qty">0</div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-label">Subtotal Produk</div>
                            <div class="col-6 text-end text-price" id="ringkasan-retur-total">Rp0</div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-label">Subtotal Diskon</div>
                            <div class="col-6 text-end text-price" id="ringkasan-retur-diskon">Rp0</div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-label">TOTAL</div>
                            <div class="col-6 text-end text-total-price" id="ringkasan-retur-keseluruhan">Rp0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    
    <button class="btn btn-success" id="save-button" title="Save" data-bs-toggle="modal" data-bs-target="#save-confirmation">
        Simpan
    </button>

    <!-- Modals -->
    <div id="pembayaran-modal">
        <div class="modal fade" id="save-confirmation" data-bs-backdrop="confirmation" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="confirm-title text-center">Konfirmasi Retur</div>
                        <div class="confirm-content">Apakah kamu yakin menyimpan retur nomor <strong class="text-dark">R27012021-1</strong> ?</div>
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6 text-end">
                                <a href="returSuccess.php">
                                    <button class="btn btn-sm btn-simpan-cetak w-100">Ya, Simpan</button>
                                </a>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include "./components/footer.php"; ?><script>
    window.onload = function(){
        getReturValue();
    }
</script>