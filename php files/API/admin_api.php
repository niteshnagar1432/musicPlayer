<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Origin, Access-Control-Allow-Methods');

include_once('../config.php');

$data = json_decode(file_get_contents('php://input'), true);

$userName = mysqli_real_escape_string($conn, $data['userName']); // sanitize input
$userPass = mysqli_real_escape_string($conn, $data['userPass']); // sanitize input

$query = "SELECT * FROM `admin_table` WHERE u_name = '{$userName}' AND u_password = '{$userPass}'"; // use prepared statements in production

$prepare = mysqli_query($conn, $query);

if (mysqli_num_rows($prepare)) {
    $data = mysqli_fetch_all($prepare, MYSQLI_ASSOC); // use MYSQLI_ASSOC to return associative array
    echo json_encode(array("msg" => "Success...", "code" => 200, "data" => $data));
} else {
    echo json_encode(array("msg" => "Something Wrong....", "code" => 401));
}

?>