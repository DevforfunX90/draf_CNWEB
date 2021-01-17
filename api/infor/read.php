<?php
    // headers
    header('Access-Control-Allow-Origin: *');

    include_once '../../config/Database.php';
    include_once '../../model/infor.php';

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
        $infor_arr = array();
        $infor_arr['data'] =array();
        
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $infor_item = array(
                'id' => $id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'birthday' => $birthday,
                'address' =>$address,
                'phone' => $phone,
                'position' => $position,
                'gmail' => $gmail,
                'skype' => $skype,
                'facebook' => $facebook,
                'git' => $git,
                // 'instargram' => $instargram,
                'image' => $image
            );

            // push to "data"
            array_push($infor_arr['data'],$infor_item);

            // turn to json & output

            
            // echo ($infor_arr);
        }
        echo json_encode($infor_arr);
    }
    else{
        echo json_encode(
            array('message'=>' No posts found')
        );
    }