<?php include "./components/header.php"; ?>
<main class="main-container-product">

    <?php include "./components/navbar.php"; ?>

    <section id="mobile-topbar">
        <div class="container product-topbar fixed-top ">
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
    </section>
    <section id="desktop-topbar">
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
    </section>

    <section id="product-list">
        <div class="container mt-4">
            <div class="row pt-3 mb-1" data-bs-toggle="modal" data-bs-target="#updateModal">
                <div class="col-lg-12">
                    <div class="row product-detail">
                        <div class="col-2"><img src="https://file.1itmedia.co.id/7f68e9756b43a3efdb840d81b8056a32.jpg" alt="Avatar" class="avatar"></div>
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
                        <div class="col-2"><img src="https://file.1itmedia.co.id/7f68e9756b43a3efdb840d81b8056a32.jpg" alt="Avatar" class="avatar"></div>
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
                        <div class="col-2"><img src="https://file.1itmedia.co.id/7f68e9756b43a3efdb840d81b8056a32.jpg" alt="Avatar" class="avatar"></div>
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
        </div>

        <div id="product-modal">
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="justify-content-center" style="display:flex;padding-top:-4px;">
                                <button type="submit" class="btn btn-eyebrow" data-bs-dismiss="modal" style="min-width:50px;max-height:2px !important;border:none !important;padding:3px"></button>
                            </div>
                            <form id='update-product' action="product.php">
                            <h1 class="modal-title fs-5 pt-5 mb-2" id="updateModalLabel">Kemko Panjang Hasbi mst</h1>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label custom-label">Barcode</label>
                                <input style="border:none;" type="text" class="form-control" value="BAA1CB09042A241">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label custom-label">Warna</label>
                                <input style="border:none;" type="text" class="form-control" value="Ashes or Roses">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label custom-label">Ukuran</label>
                                <input style="border:none;" type="text" class="form-control" value="XS">
                            </div>
                            <div class="mb-3 harga">
                                <label for="recipient-name" class="col-form-label custom-label">Harga Dasar</label>
                                <input style="border:none;border-bottom:1px solid #00000020;" type="text" class="form-control" value="Rp239.800">
                            </div>
                            <div class="mb-3 harga">
                                <label for="recipient-name" class="col-form-label custom-label">Harga Jual</label>
                                <input style="border:none;border-bottom:1px solid #00000020;" type="text" class="form-control" value="Rp249.800">
                            </div>
                            <div class="justify-content-center" style="display:flex;">
                                <button type="submit" class="btn btn-success btn-simpan" style="min-width:300px;padding: 10px 0 10px 0; border-radius: 30px">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "./components/footer.php"; ?>