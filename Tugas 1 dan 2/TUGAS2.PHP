<?php
class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;

    public function __construcst($judul,$penulis,$tahunTerbit){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getInfo(){
        return "Judul: $this->judul | Penulis: $this->penulis | Tahun: $this->tahunTerbit";
    }
}

$daftarBuku = [
    new Buku("Raja","Pangeran A. jaib",1890),
    new Buku("Kerajaan","Raja dan Ratu",1909),
    new Buku("Si Jago","Ayam",1999)
];

foreach ($daftarBuku as $buku){
    echo $buku->getInfo(). "<br>";
}
?>