<?php
include_once('apiRedsys.php');

// Token needs to have 12 characters. It will be used as a reservation reference for redsys
$token = date('dm') . bin2hex(random_bytes(3)).date('y');
$price = 250;

$url = "http://localhost/sot/index.php?token=$token";
$urlOK = "http://localhost/sot/result.php?state=ok";
$urlKO = "http://localhost/mesas/result.php?state=ko";

$miObj = new RedsysAPI;
$miObj->setParameter("DS_MERCHANT_AMOUNT", $price);
$miObj->setParameter("DS_MERCHANT_ORDER", $token);
$miObj->setParameter("DS_MERCHANT_MERCHANTCODE", 999008881);
$miObj->setParameter("DS_MERCHANT_CURRENCY", 978);
$miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE", 0);
$miObj->setParameter("DS_MERCHANT_TERMINAL", '001');
$miObj->setParameter("DS_MERCHANT_MERCHANTURL", $url);
$miObj->setParameter("DS_MERCHANT_URLOK", $urlOK);
$miObj->setParameter("DS_MERCHANT_URLKO", $urlKO);

$params = $miObj->createMerchantParameters();
$claveSHA256 = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';
$firma = $miObj->createMerchantSignature($claveSHA256);


?>
