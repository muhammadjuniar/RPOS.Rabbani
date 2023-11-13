<?php 
include "./components/header.php"; 

$scannerFor = $_POST['detect-scanner'];
?>
<body style="background: #fff;">

<?php if($scannerFor == 'stock'){ ?>
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
<?php } ?>

<?php if($scannerFor == 'penjualan'){ ?>
    <div class="container text-center" style="margin-top: 20px">
        <div class="align-self-center">
            <div id="qr-reader"></div>
        </div>
        <div>
            <a href="penjualan.php"><button class="btn btn-primary mt-3"> Kembali </button></a>
        </div>
    </div>

    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // console.log(`Code scanned = ${decodedText}`, decodedResult);
            // document.getElementById('result').innerHTML = decodedText;
            window.location.replace(`penjualan.php?keyword=${decodedText}`);
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
<?php } ?>

<?php include "./components/footer.php"; ?>
