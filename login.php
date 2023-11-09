<?php include "./components/header.php"; ?>
<main class="main-container-login">

    <section id="login-section">
        <div class="container text-center">
            <img class="illus-image" src="assets/images/illus_4.png" width="262" alt="">
            <div class="title">Selamat datang di RPOS</div>
            <div class="sub-text">Silahkan login ke akun resellermu</div>
            <form action="index.php" class="d-flex login-input">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text transparent right-border-none"><img src="assets/images/user_fill.svg" alt=""></span>
                            <input type="text" id="user_field" class="form-control left-border-none" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text transparent right-border-none"><img src="assets/images/lock_fill.svg" alt=""></span>
                            <input type="password" id="pass_field" class="form-control left-border-none right-border-none" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text transparent left-border-none" onclick="seePassword()"><img id="show_pass" src="assets/images/visibility_off_fill.svg" alt=""><img id="hide_pass" src="assets/images/visibility_fill.svg" alt="" style="display:none;"></span>
                        </div>
                        <div>
                            <button id="submitButton" class="btn btn-success w-100 login-button" disabled>
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="sub-text mt-4">Belum terdaftar jadi reseller? <span class="link-text">Registrasi</span></div>
            <div class="sub-text fixed-bot">Akun belum diaktivasi? <span class="link-text"><a href="aktivasi.php">Aktivasi</a></span></div>
        </div>
    </section>

</main>
<?php include "./components/footer.php"; ?>