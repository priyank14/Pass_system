<?php

header('Content-Type: image/png');

require_once 'vendor/autoload.php';


if (isset($_GET['text'])) {
	$qr=new Endroid\QrCode\QrCode();

	$qr->setText($_GET['text']);
	$qr->setSize(100);
	$qr->setPadding(10);
	$qr->render();
}


?>