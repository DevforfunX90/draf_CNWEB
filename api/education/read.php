<?php
    // headers
    header('Access-Control-Allow-Origin: *');

    include_once '../../config/Database.php';
    include_once '../../model/education.php';

    //
    $database = new Database();
    $db = $database->connect();

    //Instanties blog infor object
    $infor = new infor($db);

    //Blog infor query
    $result = $infor->read();
    // geta row count
    $num = $result->rowCount();

    //chekc if any posts

    if($num >0) {
        $arr = array();
        $arr['data'] =array();
        
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $item = array(
                'id_education' => $id_education,
                'id' => $id,
                'name' => $name,
                'description' => $desscription,
                'time' => $time
            );

            // push to "data"
            array_push($arr['data'],$item);
            // echo ($infor_arr);
        }
        

            // turn to json & output

        echo json_encode($arr);
    }
    else{
        echo json_encode(
            array('message'=>' No posts found')
        );
    }