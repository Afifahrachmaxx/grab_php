<?php

require_once '../../../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Berikut Nomor Antrian Anda!</h1>');
$mpdf->Output();

?>