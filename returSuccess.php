<?php include "./components/header.php"; ?>
<main class="main-container-stock-selesai">

    <?php include "./assets/format.php"; ?>

    <section id="topbar mb-3">
        <div class="container product-topbar fixed-top">
            <div class="row">
                <div class="col-8">
                    <h4 class="title pt-3 pb-2">Retur Selesai</h4>   
                </div>
                <div class="col-4 text-end topbar-icon">
                    <div class=" dropdown-toggle" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <span >
                            <img src="assets/images/three_dots.svg" width="20px" height="20px" alt="...">
                        </span>
                    </div>
                    <ul class="dropdown-menu text-center" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="index.php">Home</a></li>
                        <li style="border-top: 1px solid #000;border-bottom: 1px solid #000;" ><a class="dropdown-item" href="retur.php">Kasir</a></li>
                        <li><a class="dropdown-item" href="#">Laporan Retur</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="pembayaran-success">
        <div class="container text-center">
            <div>
                <div>
                    <img class="img-stock-success" src="assets/images/success.svg" width="121" height="121" alt="...">
                </div>
                <div class="text-stock-success">Retur Sukses!</div>
            </div>
            <div class="detail-success">
                <div class="row">
                    <div class="col-5">
                        <div class="label">Nomor Retur</div>
                        <div class="date">R27012021-1</div>
                    </div>
                    <div class="col-2 vertical-separator"></div>
                    <div class="col-5">
                        <div class="label">Tanggal</div>
                        <div class="date">27-01-2021</div>
                    </div>
                </div>

                <div class="label">Total Pengembalian</div>
                <div class="count-number"><?php echo formatRp(501600); ?></div>

                <div class="detail-label text-end">Lihat Detail Retur <img src="assets/images/keyboard_arrow_right.svg" alt=""></div>
            </div>
            <div class="row buttons">
                <div class="col-6">
                    <button class="btn btn-outline-primary w-100 cetak-button">
                        <img src="assets/images/print.svg" alt=""> Cetak Ulang
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-outline-success w-100 stock-button">
                        <img src="assets/images/store.svg" alt=""> List Retur
                    </button>
                </div>
                <div class="col-12">
                    <a href="retur.php">
                        <button class="btn btn-success w-100 tambah-button">
                            <img src="assets/images/add.svg" alt=""> Tambah Retur Baru
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include "./components/footer.php"; ?>