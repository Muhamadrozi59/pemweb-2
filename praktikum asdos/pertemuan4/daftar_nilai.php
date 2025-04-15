<?php
require_once 'nilai_mahasiswa.php';

$data = [];

//data awal


<h3>Input Data Mahasiswa<?>

<form action="POST" action="">
<?php
$nomor = 1;
foreach($data_mhs as $mhs){
    echo "<tr>";
    echo "<td>"$nomor. "</td>
    echo "<td>"$mhs->nama. "</td>
    echo "<td>"$mhs->matakuliah. "</td>
    echo "<td>"$mhs->nilsa_uts. "</td>
    echo "<td>"$mhs->niai_uas. "</td>
    echo "<td>"$mhs->nilai_tugas. "</td>
    echo "<td>"$mhs->.number_format($mhs->getNA(), 2). "</td>";
    echo "<td>"$mhs->kelulusan() ."</td></tr>";
    $nomor++;
}

?>
