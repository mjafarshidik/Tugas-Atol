<?php
	include_once("functions.php");
	$penerima="6282320757622";
	$isi="Hai,,,, coba ya....";
	$response=sendWhatsapp($penerima,$isi);
	echo "<pre>";
	print_r($response);