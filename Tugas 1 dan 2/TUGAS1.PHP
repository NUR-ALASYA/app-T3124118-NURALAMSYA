<?php

class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;

    public function __construcst($nim,$nama,$ipk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    public function getStatus(){
        return ( $this->ipk >= 3.0)? "Baik" : "Perlu Bimbingan";
    }

    public function getNim(){
        return $this->nim;
    }

     public function getNama(){
        return $this->nama;
    }

     public function getIpk(){
        return $this->ipk;
    }
    
}

$mhs1 = new Mahasiswa("T3124118","ALAM","3.9");
$mhs1 = new Mahasiswa("T3124004","ALOK","2.9");

echo "<b>Data Mahasiswa 1</b><br>";
echo "NIM:".$mhs1->getNim()."<br>";
echo "Nama:".$mhs1->getNama()."<br>";
echo "IPK:".$mhs1->getIpk()."<br>";
echo "Status:".$mhs1->getStatus()."<br><br>";

echo "<b>Data Mahasiswa 1</b><br>";
echo "NIM:".$mhs2->getNim()."<br>";
echo "Nama:".$mhs2->getNama()."<br>";
echo "IPK:".$mhs2->getIpk()."<br>";
echo "Status:".$mhs1->getStatus();

?>






