<?php
/* Format Rupiah */

function formatRp($angka){
	
	$hasil_rupiah = "Rp" . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

function format3Digit($angka){
	
	$hasil_rupiah = number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

/* Format Rupiah */
