<?php include "./components/header.php"; ?>
<main class="main-container-stock">

    <section id="topbar mb-3">
        <div class="container product-topbar fixed-top">
            <div class="row">
                <div class="col-8">
                    <h4 class="title pt-3 pb-2">Stock Opname Selesai</h4>   
                </div>
                <div class="col-4 text-end topbar-icon">
                    <div class=" dropdown-toggle" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <span >
                            <img src="assets/images/three_dots.svg" width="20px" height="20px" alt="...">
                        </span>
                    </div>
                    <ul class="dropdown-menu text-center" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="index.php">Home</a></li>
                        <li style="border-top: 1px solid #000;border-bottom: 1px solid #000;" ><a class="dropdown-item" href="#">Kasir</a></li>
                        <li><a class="dropdown-item" href="#">Laporan SO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="stock-opname-success">
        <div class="container text-center">
            <div>
                <div>
                    <img class="img-stock-success" src="assets/images/success.svg" width="121" height="121" alt="...">
                </div>
                <div class="text-stock-success">Sukses!</div>
            </div>
            <div class="detail-success">
                <div class="label">Nomor</div>
                <div class="code">MSB1-O0001.SO-0001/JAN-FEB/2021</div>
                
                <div class="label">Tanggal</div>
                <div class="date">27-01-2021</div>

                <div class="label">Jumlah Produk</div>
                <div class="count-number">15</div>

                <div class="detail-label text-end">Lihat Detail Stock Opname <img src="assets/images/keyboard_arrow_right.svg" alt=""></div>
            </div>
            <div class="row buttons">
                <div class="col-6">
                    <button class="btn btn-outline-primary w-100 cetak-button">
                        <img src="assets/images/print.svg" alt=""> Cetak
                    </button>
                </div>
                <div class="col-6">
                    <button class="btn btn-outline-success w-100 stock-button">
                        <img src="assets/images/store.svg" alt=""> List Stock Opname
                    </button>
                </div>
                <div class="col-12">
                    <a href="stockopname.php">
                        <button class="btn btn-success w-100 tambah-button">
                            <img src="assets/images/add.svg" alt=""> Tambah Stock Opname Baru
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include "./components/footer.php"; ?>