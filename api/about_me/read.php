<?php
    // headers
    header('Access-Control-Allow-Origin: *');

    include_once '../../config/Database.php';
    include_once '../../model/about_me.php';

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
                'id_introduce' => $id_controuce,
                'id' => $id,
                'content' => $content,
            );

            // push to "data"
            array_push($arr['data'],$item);
        }
        echo json_encode($arr);
    }
    else{
        echo json_encode(
            array('message'=>' No posts found')
        );
    }