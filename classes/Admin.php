<?php     

    class Admin{

        public function readAllMahasiswa(){
            $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
            $stmt = Database::$conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

        public function addMahasiswa($mahasiswa){
            if ($mahasiswa != null) {                
                try {
                    $nim = $mahasiswa->getNim();
                    $nama = $mahasiswa->getNama();
                    $alamat = $mahasiswa->getAlamat();
                    $query = "INSERT INTO mahasiswa(nim, nama, alamat) VALUES(:nim, :nama, :alamat)";
                    $stmt = Database::$conn->prepare($query);
                    $stmt->bindParam(':nim', $nim);
                    $stmt->bindParam(':nama', $nama);
                    $stmt->bindParam(':alamat', $alamat);
                    $stmt->execute();                    
                    Database::$conn = null;
                } catch (PDOException $e) {
                    echo "addMahasiswa() gagal: " . $e->getMessage();
                }
            }
        }

    }

?>