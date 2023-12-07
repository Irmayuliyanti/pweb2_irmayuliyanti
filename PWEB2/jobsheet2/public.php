<?php
//Membuat class mahasiswa
class mahasiswa
{
    //Property public
    public $nama;
    private $nim = "220202086";

    //Public method
    public function tampilkan_nama()
    {
        //Nilai kembalian
        return "Nama saya Irma Yuliyanti </br>";
    }

    //Membuat protected method
    function tampilkan_nim()
    {
        return "NIM saya ".$this->nim;
    }
}

//Instansiasi objek mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//Memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama(); 
echo $nim->tampilkan_nim();