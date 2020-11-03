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
			echo "Nomor Order :".$this->nomororder. 
				"<br>Nama Pelanggan :".$this->namapelanggan. 
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

	$order1 = new service('0001', 'Arief Muhammad', '0812-3456-7890', '12-09-2020', 'Perbaikan', 'Check Up, Kabel Flexi Hangus(Replaced), DC Port Hangus(Replaced)', 'Rp. 645.000' );

	$order2 = new service('0002', 'Hendra Adi Wijaya', '0856-5434-7645', '20-09-2020', 'Upgrade', 'RAM Replacement', 'Rp.400.000');