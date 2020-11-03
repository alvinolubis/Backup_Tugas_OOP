<?php
	class service
	{
		//properties
		public $nomororder;
		public $namacustomer;
		public $kontakcustomer;
		public $tanggalorder;
		public $jenisservice;
		public $tindakan;
		public $biayaservice;
	
		public function getCetak(){
			return "Biaya Service : Rp. $this->biayaservice";
		}
		public function __construct(
			$nomororder="nomororder", 
			$namacustomer="namacustomer", 
			$kontakcustomer="kontakcustomer", 
			$tanggalorder="tanggalorder", 
			$jenisservice="jenisservice",
			$tindakan="tindakan",
			$biayaservice="biayaservice"){

			$this->nomororder=$nomororder;
			$this->namacustomer=$namacustomer;
			$this->kontakcustomer=$kontakcustomer;
			$this->tanggalorder=$tanggalorder;
			$this->jenisservice=$jenisservice;
			$this->tindakan=$tindakan;
			$this->biayaservice=$biayaservice;
		}
	}
	class customer extends service{
		public function __construct($nomororder, $namacustomer, $kontakcustomer, $tanggalorder, $jenisservice, $tindakan, $biayaservice){

			parent::__construct($biayaservice);
			$this->nomororder=$nomororder;
			$this->namacustomer=$namacustomer;
			$this->kontakcustomer=$kontakcustomer;
			$this->tanggalorder=$tanggalorder;
			$this->jenisservice=$jenisservice;
			$this->tindakan=$tindakan;
		}
		public function cetakLog(){
			$str="Nomor Order : {$this->nomororder}".
			"<br>Nama Customer : {$this->namacustomer}".
			"<br>Kontak Customer : {$this->kontakcustomer}".
			"<br>Tanggal Order : {$this->tanggalorder}".
			"<br>Jenis Service : {$this->jenisservice}".
			"<br>Tindakan : {$this->tindakan}".
			"<br>".parent::getCetak();
			return $str;
		}
	}
	class toko{
		public function setNama($a){
			$this->nama = $a;
		}
		public function setAlamat($a){
			$this->alamat = $a;
		}
		public function setKontak($a){
			$this->kontak = $a;
		}
		public function getNama(){
			return $this->nama;
		}
		public function getAlamat(){
			return $this->alamat;
		}
		public function getKontak(){
			return $this->kontak;
		}
	}
$toko1 = new toko;
$toko1->setNama("Service Laptop Wikrama");
$toko1->setAlamat("Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146");
$toko1->setKontak("0877-2578-0695");

echo "<title>Service Laptop Bogor</title>";
echo "<h1>SERVICE LOG</h1>";
echo "<hr>";
echo "<strong>Nama Toko : ".$toko1->getNama()."<br>";
echo "Alamat : ".$toko1->getAlamat()."<br>";
echo "Kontak : ".$toko1->getKontak()."<br>";
echo "<hr>";

$order1= new customer("0001", "Puji Ayu Lestari", "081310804595", "20-09-2020", "Upgrade", "RAM replacement, SSD installation", "Rp.3.745.000");
echo $order1->cetakLog();
?>