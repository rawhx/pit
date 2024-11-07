<?php

class Mahasiswa {
    private $namaMahasiswa;
    private $nimMahasiswa;
    private $jurusanMahasiswa;
    private $ipkMahasiswa;

    public function __construct($nama, $nim, $jurusan, $ipk) {
        $this->namaMahasiswa = $nama;
        $this->nimMahasiswa = $nim;
        $this->jurusanMahasiswa = $jurusan;
        $this->ipkMahasiswa = $ipk;
    }

    function addNama($nama) {
        return $this->namaMahasiswa = $nama;
    }
    function addJurusan($jurusan) {
        return $this->jurusanMahasiswa = $jurusan;
    }
    function addNim($nim) {
        return $this->nimMahasiswa = $nim;
    }
    
    function getNama() {
        return $this->namaMahasiswa;
    }
    function getJurusan() {
        return $this->jurusanMahasiswa;
    }
    function getNim() {
        return $this->nimMahasiswa;
    }
    function getIpk() {
        return $this->ipkMahasiswa;
    }
    
}
