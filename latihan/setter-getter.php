<?php
class person{
	private $nama,
			$usia,
			$pekerjaan,
			$alamat;

	//Setter
	public function setNama($a){
		$this->nama = $a;
	}
	public function setUsia($a){
		$this->usia =$a;
	}
	public function setPekerjaan($a){
		$this->pekerjaan = $a;
	}
	public function setAlamat($a){
		$this->alamat = $a;
	}

	//Getter
	public function getNama(){
		return $this->nama;
	}
	public function getUsia(){
		return $this->usia;
	}
	public function getPekerjaan(){
		return $this->pekerjaan;
	}
	public function getAlamat(){
		return $this->alamat;
	}
}
$person = new person;
$person->setNama("Alvino");
$person->setUsia("16 Tahun");
$person->setPekerjaan("Pelajar");
$person->setAlamat("Bogor");

echo "Nama :".$person->getNama()."<br/>";
echo "Usia :".$person->getUsia()."<br/>";
echo "Pekerjaan :".$person->getPekerjaan()."<br/>";
echo "Alamat :".$person->getAlamat()."<br/>";