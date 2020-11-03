<?php
class produk{
	public $say;

	public function getCetak(){
		return "$this->merk, (Rp $this->harga)";
	}
	public function __construct($say="say"){
		$this->say = $say;
	}
}
class cetakInfoproduk{
	public function cetakInfo(produk $produk){
		$str="{Hai RPL";
		return $str;
	}
}
$produk1 = new produk("Idepad 310", "Lenovo", 70000000);
$infoProduk = new cetakInfoproduk();
echo $infoProduk-> cetakInfo("Hallo RPL!");