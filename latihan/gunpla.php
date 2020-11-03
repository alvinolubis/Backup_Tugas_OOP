<?php
	class gunpla
	{
		//properties
		public $seri;
		public $namakit;
		public $modelnumber;
		public $grade;
		public $scale;

		//construct method
		function __construct($seri, $namakit, $modelnumber, $grade, $scale)
		{
			$this->seri = $seri;
			$this->namakit = $namakit;
			$this->modelnumber = $modelnumber;
			$this->grade = $grade;
			$this->scale = $scale;
			echo "Seri :".$this->seri."<br>Nama Kit :".$this->namakit."<br>Model Number :".$this->modelnumber."<br>Grade :".$this->grade."<br>Scale :".$this->scale;
			echo "<br>";  
			echo "<br>";
		}
	}
	
	//Build Diver Series
	$OOAce = new gunpla('Build Divers', 'Gundam OO Diver Ace', 'GN-OOOODVR/A', 'HG', '1/144');

	$OOSky = new gunpla('Build Divers','Gundam OO Sky', '  GN-OOOODVR/S', 'HG', '1/144');
	$Galbaldy = new gunpla('Build Divers', 'Galbaldy Rebake', 'RMS-117G11', 'HG', '1/144');

	//IBO Series
	$Barbatos = new gunpla('Iron Blooded Orphans', 'Gundam Barbatos', 'ASW-G-08', 'HG', '1/144');
	$Gusion = new gunpla('Iron Blooded Orphans', 'Gundam Gusion Rebake Full City', 'ASW-G-11', 'HG', '1/144');

	//MSG OO Series
	$Exia = new gunpla('Mobile Suit Gundam OO', 'Gundam Exia', 'GN-001', 'HG', '1/144' );
	$Dynames = new gunpla('Mobile Suit Gundam OO', 'Gundam Dynames', 'GN-002', 'HG', '1/144');
	$Kyrios = new gunpla('Mobile Suit Gundam OO', 'Gundam Kyrios', 'GN-003', 'HG', '1/144');