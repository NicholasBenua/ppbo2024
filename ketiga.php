<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;
    
    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    
    public function keliling() : float {
        return self::PHI*$this->jari_jari;
    }   
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$objLingkaran = new Lingkaran();
$objLingkaran->jari_jari = 9;

echo "Luas Lingkaran = {$objLingkaran->luas()}cm^2\n";
echo "Keliling Lingkaran = {$objLingkaran->keliling()}cm\n";

$objBola = new Bola();
$objBola->jari_jari = 6;

echo "Volume Bola = {$objBola->volume()}cm^3\n";

$objTabung = new Tabung();
$objTabung->jari_jari = 7;
$objTabung->tinggi = 14;

echo "Volume Tabung = {$objTabung->volume()}cm^3\n";

$objKerucut = new Kerucut();
$objKerucut->jari_jari = 9;
$objKerucut->tinggi = 15;

echo "Volume Kerucut = {$objKerucut->volume()}cm^3\n";