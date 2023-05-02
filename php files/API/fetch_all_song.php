<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methos:GET');
header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methos');

include_once('../config.php');

$query = 'SELECT song.id,artist.a_name,song.s_name,song.s_title,song.s_img,song.s_url,song.created_at,song.updated_at
FROM song
INNER JOIN artist ON song.u_id = artist.u_id;';

$prepare = mysqli_query($conn, $query);

if ($prepare) {
    $data = mysqli_fetch_all($prepare,true);
    echo json_encode(array("msg"=>"Success...","code"=>200,"data"=>$data));
} else {
    echo json_encode(array("msg" => "Somethig Wrong....", "code" => 401));
}


?>