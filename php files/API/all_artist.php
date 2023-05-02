<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method:get');
header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methos');

include_once('../config.php');

$query = 'SELECT *
FROM artist';

$prepare = mysqli_query($conn, $query);

if ($prepare) {
    $data = mysqli_fetch_all($prepare,true);
    echo json_encode(array("msg"=>"Success...","code"=>200,"data"=>$data));
} else {
    echo json_encode(array("msg" => "Somethig Wrong....", "code" => 401));
}


?>