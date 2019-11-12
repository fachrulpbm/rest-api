<?php 

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once('../../config/Database.php');
    include_once('../../classes/Mahasiswa.php');
    include_once('../../classes/Admin.php');
    

    $koneksi = new Database();
    $adm = new Admin();

    $result = $adm->readAllMahasiswa();
    $num = $result->rowCount();

    if($num > 0){
        //$mhsArr = array();
        $mhsArr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $mhsData = array(
                'nim' => $nim,
                'nama' => $nama,
                'alamat' => $alamat
            );

            array_push($mhsArr['data'], $mhsData);
        }

        echo json_encode($mhsArr['data']);

    }else{
        echo json_encode(
            array(
                'message' => 'No Posts Found!'
            )
        );
    }

    

?>