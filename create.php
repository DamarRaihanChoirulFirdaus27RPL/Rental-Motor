<?php

include 'config.php';

$lokasi_rental	        = $_POST['lokasi_rental'];
$tanggalm_rental		= $_POST['tanggalm_rental'];
$tanggala_rental	    = $_POST['tanggala_rental'];
$merk_rental	        = $_POST['merk_rental'];

$input		        	= mysqli_query($connect, "INSERT INTO heho (lokasi_rental, tanggalm_rental, tanggala_rental, merk_rental) VALUES ('$lokasi_rental', '$tanggalm_rental','$tanggala_rental' , '$merk_rental')");

if($input){
	echo "<script>alert('Data Berhasil Ditambah');document.location.href='beranda.php'</script>";
		
}else{
	echo "<script>alert('Data Gagal Ditambah');document.location.href='beranda.php'</script>";
		
}
?>