<?php
//Membuat class
class mahasiswa
{
    //Menuliskan property
    var $nim;
    var $nama="Irma Yuliyanti";
    var $alamat;

    //Method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya adalah Irma Yuliyanti </br></br>";
    }

    //Method untuk menampilkan alamat
    function tampil_alamat()
    {
        //Isi method
    }
}

//Membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//Menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
?>

<?php
//Latihan membuat class dosen
class dosen
{
    //Menuliskan property
    var $nidn;
    var $nama = "Irma Yuliyanti"; //nilai default untuk nama
    var $prodi;
    var $jurusan;

    //Deklarasi constructor
    function __construct($nidn, $prodi, $jurusan){
        $this->nidn = $nidn;
        $this->prodi = $prodi;
        $this->jurusan = $jurusan;
    }

    //Method untuk mengatur Nama
    function setNama($nama){
        $this->nama = $nama;
    }

    //Method untuk menampilkan Nama
    function getNama() {
        return $this->nama;
    }

    //Method untuk menampilkan NIDN
    function getNIDN() {
        return $this->nidn;
    }

    //Method untuk menampilkan Prodi
    function getProdi() {
        return $this->prodi;
    }
    //Method untuk menampilkan Prodi
    function getJurusan() {
        return $this->jurusan;
    }
}

// Contoh penggunaan class Dosen
$dosen1 = new Dosen("220202086", "D3 - Teknik Informatika", "Komputer dan Bisnis");
$dosen1->setNama("Irma Yuliyanti");
$dosen2 = new Dosen("220202085", "D4 - Akutansi Lembaga Syari'ah", "Komputer dan Bisnis");
$dosen2->setNama("Dewi Minarti");

// Menampilkan informasi Dosen
echo "Dosen 1". "<br>";
echo "NIDN: " . $dosen1->getNIDN() ."<br>"; 
echo "Nama: " . $dosen1->getNama() . "<br>";
echo "Prodi: " . $dosen1->getProdi() . "<br>";
echo "Prodi: " . $dosen1->getJurusan() . "<br><br>";
echo "Dosen 2" . "<br>";
echo "NIDN: " . $dosen2->getNIDN() . "<br>";
echo "Nama: " . $dosen2->getNama() . "<br>";
echo "Prodi: " . $dosen2->getProdi() . "<br>";

?>