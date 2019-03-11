<?php
$album_link = '';
$result = parse_url($album_link);
$result = substr($result['path'],6);
$result = explode('_', $result);
$owner_id = $result[0];
$album_id = $result[1];
/*-------*/;
 $conf = [
   'standalone' => '6fb75c8be097a56eed85ff9516fa0f86f2dab9e4e5559bba5ddd642c1082b0f3967b8d86969c6a8ebeea6',
   'group_token' => 'c1bc6576',
   'contorm_token' => 'c1bc6576',
   'mess' => 'Бот дай картинку',
   'owner_id' => $owner_i,
   'album_id' => $album_id,
   'apiurl' => 'https://api.vk.com/method/',
   'path' => substr($_SERVER['PHP_SELF'],0, -7),
   'photos' => 'photos.txt',
   'temp_link' => 'temp_album.txt'  
   'random_id' => mt_rand(000000000000,999999999999),
   'v' => '5.73'
 ]
?>