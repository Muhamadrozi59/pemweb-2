<?php
require_once 'nilai_mahasiswa.php'

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "ZONO";
$mhs1->matakuliah = "Pemrograman Web";
$mhs1->nilai_uts = 80;
$mhs1->nilai_uas = 85;  
$mhs1->nilai_tugas = 90;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Budi";
$mhs2->matakuliah = "DDP";
$mhs2->nilai_uts = 77;
$mhs2->nilai_uas = 89;  
$mhs2->nilai_tugas = 60;

$data_mhs = [$mhs1, $mhs2];
