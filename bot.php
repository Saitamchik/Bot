<?php
require_once('config.php');
$data = json_decode(file_get_contents('php://input'));
$user_id = $data->object->user_id;
$message = $data->object->body;
$user_info = 
    json_decode(file_get_contents($conf['apiurl'].'users.get? user_id='.$user_id.'&v='.$conf['v'].'&access_token='.$conf['standalone']));
$user_name = $user_info->response[0]->first_name;
$temp_link = file($conf['temp_link']);
?>