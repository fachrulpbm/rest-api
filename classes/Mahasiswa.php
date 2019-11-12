<?php 

    class Mahasiswa{

        private $nim;
        private $nama;
        private $alamat;

        public function __construct($nim, $nama, $alamat){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->alamat = $alamat;
        }

        public function setNim($nim){
            $this->nim = $nim;
        }

        public function getNim(){
            return $this->nim;
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        public function getNama(){
            return $this->nama;
        }

        public function setAlamat($alamat){
            $this->alamat = $alamat;
        }

        public function getAlamat(){
            return $this->alamat;
        }

    }

?>