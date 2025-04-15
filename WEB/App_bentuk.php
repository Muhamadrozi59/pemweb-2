<?php
require_once 'lingkaran.php';

$lingkaran1 = new Lingkaran(8.4);
$Lingkaran2 = new Lingkaran(14);

echo 'NILAI PHI adalah '.Lingkaran::PHI;
echo '<br> jari-jari lingkaran 1 = '. $lingkaran->jari;
echo '<br> keliling linngkaran 1 '.$lingkaran->getLuas(); 
echo 'ber> keliling Lingkaran 1 '.$lingkaran->getKeliling();
echo '<br>';

?>