<?php
class service{
  public $merk;
        public $nomororder;
        public $namapelanggan;
        public $kontak;
        public $tanggalorder;
        public $jenisservice;
        public $followup;
        private $harga;

  public function getCetak(){
    return "Harga : Rp. $this->Harga";
  }
  public function __construct($merk="Merk", $nomororder="NomorOrder", $namapelanggan="NamaPelanggan", $kontak="Kontak", $tanggalorder="TanggalOrder", $jenisservice="JenisService", $followup="Followup", $harga=543000){
   
    $this->Merk=$merk;
    $this->NomorOrder=$nomororder;
    $this->NamaPelanggan=$namapelanggan;
    $this->Kontak=$kontak;
    $this->TanggalOrder=$tanggalorder;
    $this->JenisService=$jenisservice;
    $this->Followup=$followup;
    $this->Harga=$harga;
  }

}

class barang extends service{
    public $ukuranlayar;
    public function __construct($merk, $nomororder, $namapelanggan,$harga,$kontak,$tanggalorder,$jenisservice,$followup){
        parent::__construct($merk, $harga);
        $this->NomorOrder=$nomororder;
        $this->NamaPelanggan=$namapelanggan;
        $this->Kontak=$kontak;
        $this->TanggalOrder=$tanggalorder;
        $this->JenisService=$jenisservice;
        $this->Followup=$followup;
    }
    public function cetakInfo(){
        $str= "NamaPelanggan : {$this->Merk}"."<br>".parent::getCetak()."<br>"."  NomorOrder : {$this->NomorOrder}"."<br>"." kontak : {$this->Kontak}"."<br>"." TanggalOrder : {$this->TanggalOrder}"."<br>"." JenisService : {$this->JenisService}"."<br>"." followup : {$this->Followup} ";
        return $str;
    }
    
}

class person{
    public function setnama($a)
{
	$this->nama = $a;
}
public function setalamat($a)
{
	$this->alamat = $a;
}
public function getnama()
{
	return $this->nama;
}
public function getalamat()
{
	return $this->alamat;
}
}
echo"<hr>";
echo "<hr>";
echo "<h1>"."SERVICE LAPTOP ABADI"."</h1>";
echo "<hr>";
$person = new person;
$person->setnama("SERVICE LAPTOP");
$person->setalamat("Kp.Kubang Rt.04/09, Des.Cimacan, Kec.Cipanas, Kot.Cianjur, Jawa Barat");
echo "<hr>";
echo "<h4>"."NAMA TOKO: ".$person->getnama()."<br>";
echo "ALAMAT TOKO: ".$person->getalamat()."</h4>";
echo "<hr>";
echo "<h3>"."List Pelanggan". "</h3>";
$barang1= new barang("Puji","098765","087725780695", "051020", "087725780695", "051020","LAPTOP","Upgrade");
$barang2= new barang("Yesi","040520","08128184339", "Perbaikan", "08128184339" ,"061020","LAPTOP","Upgrade");
echo $barang1->cetakInfo();
echo "<br>";
echo "<hr>";
echo $barang2->cetakInfo();
echo "<br>";
echo "<hr>";
?>