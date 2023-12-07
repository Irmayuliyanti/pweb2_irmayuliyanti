<?php

//Membuat class
class mahasiswa
{
    //Menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //Method untuk menampilkan Nama
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }

    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }
    function tampil_nama()
    {
        return "Nama saya adalah Irma Yuliyanti </br>";
    }
    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }

    //Method untuk menmapilkan Alamat
    function tampil_alamat()
    {
        //Isi method
    }
}

//Membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//Menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
?>
