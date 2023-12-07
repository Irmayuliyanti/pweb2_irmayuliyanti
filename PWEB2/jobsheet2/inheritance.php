<?php
//Class manusia
class manusia
{
    //Property
    public $nama_saya;
    //Method manusia
    function panggil_nama($saya)
    {
        $this->nama_saya=$saya;
    }
}
//Class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}
//Instansisasi class mahasiswa
$informatika = new mahasiswa();
$informatika->panggil_nama("Irma");
$informatika->panggil_mahasiswa("Yuliyanti");

//Menampilkan isi dari property 
echo "Nama Depan Saya : " , $informatika->nama_saya . "</br>";
echo "Nama Belakang Saya : " , $informatika->nama_mahasiswa;

?>

<br><br><p>Latihan Private dan Protected</p>
<br>

<?php
class manusiaa
{
    //Menentukan property
    public $nama_depan;
    private $nama_belakang;
    protected $nama_panggilan;

    //Method manusiaa
    public function panggil_depan($depan)
    {
        $this->nama_depan = $depan;
    }

    public function setpanggil_belakang($belakang)
    {
        $this->nama_belakang = $belakang;
    }

    public function getpanggil_belakang()
    {
        return $this->nama_belakang;
    }

    public function setnama_panggilan($panggilan)
    {
        $this->nama_panggilan = $panggilan;
    }

    public function getnama_panggilan()
    {
        return $this->nama_panggilan;
    }
}

//Class turunan dari class manusiaa
class mahasiswaa extends manusiaa
{
    public $prodi;

    public function panggil_prodi($prodi)
    {
        $this->prodi = $prodi;
    }
}

//Instansiasi class mahasiswaa
$irma = new mahasiswaa();
$irma->panggil_depan("Irma");
$irma->setpanggil_belakang("Yuliyanti");
$irma->setnama_panggilan("Irma");
$irma->panggil_prodi("D3 - Teknik Informatika");

//Menampilkan isi Private dan Protected
echo "Nama Depan : " . $irma->nama_depan;
echo "<br>Nama Belakang : " . $irma->getpanggil_belakang();
echo "<br>Nama Panggilan : " . $irma->getnama_panggilan();
echo "<br>Prodi : " . $irma->prodi;
?>