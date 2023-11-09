<?php include "./components/header.php"; ?>
<body style="background: #fff;">
    <div class="container text-center" style="margin-top: 20px">
        <div class="align-self-center">
            <div id="qr-reader"></div>
        </div>
        <div>
            <a href="stockopname.php"><button class="btn btn-primary mt-3"> Kembali </button></a>
        </div>
    </div>

    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // console.log(`Code scanned = ${decodedText}`, decodedResult);
            // document.getElementById('result').innerHTML = decodedText;
            window.location.replace(`stockopname.php?keyword=${decodedText}`);
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
<?php include "./components/footer.php"; ?>
