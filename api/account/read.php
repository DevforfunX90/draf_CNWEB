<?php
    // headers
    header('Access-Control-Allow-Origin: *');

    include_once '../../config/Database.php';
    include_once '../../model/account.php';

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
                'id_acc' => $id_acc,
                'id' => $id,
                'user_name' => $user_name,
                'email' => $email,
                'pass' => $pass,
                'role' => $role,
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