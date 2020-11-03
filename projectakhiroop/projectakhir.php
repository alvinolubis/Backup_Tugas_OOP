<?php
	class service{
		//properties
		public $nomororder;
		public $namapelanggan;
		public $kontak;
		public $tanggalorder;
		public $jenisservice;
		public $followup;
		public $biayaperbaikan;

	//construct method
		function __construct($nomororder, $namapelanggan, $kontak, $tanggalorder, $jenisservice, $followup, $biayaperbaikan)
		{
			$this->nomororder = $nomororder;
			$this->namapelanggan = $namapelanggan;
			$this->kontak =$kontak;
			$this->tanggalorder = $tanggalorder;
			$this->jenisservice = $jenisservice;
			$this->followup = $followup;
			$this->biayaperbaikan = $biayaperbaikan;
			echo "<title>"."Service Laptop Bogor"."</title>";
			echo "<h3>"."Order".$this->nomororder."</h3>";
			echo "<hr>";
			echo
			"Nama Pelanggan :".$this->namapelanggan. 
			"<br>Kontak :".$this->kontak. 
			"<br>Tanggal Order :".$this->tanggalorder. 
			"<br>Jenis Service :".$this->jenisservice.
			"<br>Follow Up :".$this->followup. 
			"<br>Biaya Perbaikan :".$this->biayaperbaikan;
			echo "<br>";
			echo "<br>";
		}
	}

	//Input Data
	//Format : $order1 = new service('Nomor Order', 'Nama Pelanggan', 'Kontak', 'Tanggal Order', 'Jenis Service', 'Follow Up(Tindakan)' 'Biaya Perbaikan');

	echo "<h1>SERVICE LOG</h1>";
	echo "<hr>";
	echo "<strong>Nama Toko : Service Laptop Wikrama<strong>";
	echo "<br><strong>Alamat : Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146<strong>";
	echo "<br><strong>Kontak : 0877-2578-0695<strong>";
	echo "<hr>";
	echo "<br>";
	$order1 = new service('0001', 'Arief Muhammad', '0812-3456-7890', '12-09-2020', 'Perbaikan', 'Check Up, Kabel Flexi Hangus(Replaced), DC Port Hangus(Replaced)', 'Rp. 645.000' );

	$order2 = new service('0002', 'Hendra Adi Wijaya', '0856-5434-7645', '20-09-2020', 'Upgrade', 'RAM Replacement', 'Rp.400.000');