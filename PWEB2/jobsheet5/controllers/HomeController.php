<?php
class HomeController{
    public function home(){
        header("location:http://localhost/jobsheet5/index.php");
    }
    public function mahasiswa(){
        header("location:mahasiswa");
    }
    public function dosen(){
        header("location:dosen");
    }
}