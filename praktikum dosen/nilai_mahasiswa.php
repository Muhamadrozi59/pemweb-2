<?php 
class NilaiMahasiswa {
    public $nama;
    public $matakuliah;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;
    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.30;
    public const PERSENTASE_TUGAS = 0.45;


    public function__contruct
    ($nama, $matakuliah, $nilai_uts, $nilai_uas, $nilai_tugas) {
        $this->nama = $nama;
        $this->nama = $nama;
        $this->nama = $nilai_uts;
    }


    public function getNA(){
        return ($this->Nilai_uts * self PERSENTASE_UTS) +
            ($T)
    }

    public function getNilaiAkhir(){
        $nilai_akhir = $this->nilai_uts * self::PERSENTASE_UTS +
          $this->nilai_uas * self::PERSENTASE_UAS +
          $this->nilai_tugas * self::PERSENTASE_TUGAS;
        return $nilai_akhir;
    }
    public function kelulusan(){
        return $this->getNA() >= 60 ? "Lulus" : "Drop out";
    }

}
?>