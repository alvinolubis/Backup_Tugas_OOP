<?php
class mobil {
	public $nama, $merk, $warna, $kecepatanMaksimal, $jumlahPenumpang;

	public function tambahKecepatan(){
		return "Kecepatan Bertambah";
	}
}

class MobilSport extends Mobil{
	public $turbo = false;

	public function aktifkanTurbo(){
		$this->turbo=true;
		return "Turbo Diaktifkan";
	}
}

$mobilku = new MobilSport();
echo $mobilku->tambahKecepatan();
echo "<br>";
echo $mobilku->aktifkanTurbo();
?>