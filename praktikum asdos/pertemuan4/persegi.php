<?php

// calss persegi panjang
class persegipanjang {
    public $panjang;
    public $lebar;

    
    // kontruktor persegi pajang
    function _contruct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar
    }
    //method untuk menghitung luas
    function getluas(){
        $luasPP = $this->panjang * $this->lebar;
    }

    // method hitung kelililng
    function getkeliling(){
        $keliling = $this->panjang * $this->lebar;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="section">

    <h2>Contoh penggunaan Persegi panjang<h2>

    <?php
    $spp = new persegipanjang(10.8);

    echo "panjang :". $pp->panjang. "<br>";
    echo "lebar : ". $pp->lebar. "<br>";
    echo "<hr>";
    echo "luas : ". $pp->getluas(). "<br>";
    echo "keliling ". 
</body>
</html>
