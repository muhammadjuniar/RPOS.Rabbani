<?php include "./components/header.php"; ?>
<main class="main-container-login">

    <section id="login-section">
        <div class="container text-center">
            <img class="illus-image" src="assets/images/illus_1.png" width="262" alt="">
            <div class="title">Aktivasi Akun</div>
            <div class="sub-text">Pastikan akunmu terverifikasi supaya nyaman belanja di seluruh outlet Rabbani. Silakan lakukan aktivasi akun</div>
            <form action="login.php" class="login-input">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text transparent right-border-none"><img src="assets/images/user_fill.svg" alt=""></span>
                            <input type="text" id="userFieldAktivasi" onkeyup="enableAktivasi()" class="form-control left-border-none right-border-none">
                            <span class="input-group-text transparent left-border-none"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <button id="submitButtonAktivasi" class="btn btn-success w-100 login-button" disabled>
                                Aktivasi
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="sub-text mt-4">Belum terdaftar jadi reseller? <span class="link-text"><a href="login.php">Login</a></span></div>
        </div>
    </section>

</main>
<?php include "./components/footer.php"; ?>