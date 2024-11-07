<?php

class Mahasiswa {
    private $dataMahasiswa = [];
    private $namaMahasiswa;
    private $nimMahasiswa;
    private $jurusanMahasiswa;
    private $ipkMahasiswa;

    public function __construct($nama = null, $nim = null, $jurusan = null, $ipk = null) {
        $this->namaMahasiswa = $nama;
        $this->nimMahasiswa = $nim;
        $this->jurusanMahasiswa = $jurusan;
        $this->ipkMahasiswa = $ipk;
    }

    function addData($nama, $nim, $jurusan, $ipk) {
        $new = [
            "Nama" => $nama,
            "NIM" => $nim,
            "Jurusan" => $jurusan,
            "IPK" => $ipk,
        ];

        $this->dataMahasiswa[] = $new;
    }
    function updateData($nim, $nama = null, $jurusan = null, $ipk = null) {
       foreach ($this->dataMahasiswa as &$value) {
            if ($value["NIM"] == $nim) {
                if ($nama !== null) $value['Nama'] = $nama;
                if ($jurusan !== null) $value['Jurusan'] = $jurusan;
                if ($ipk !== null) $value['IPK'] = $ipk;
            }
       }
    }
    function deleteData($nim) {
       foreach ($this->dataMahasiswa as $key => $value) {
            if ($value["NIM"] == $nim) {
                unset($this->dataMahasiswa[$key]);
            }
       }
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
    function getData() {
        return $this->dataMahasiswa;
    }
    
}
