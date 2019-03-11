<?php
require_once('config.php');
unlink($conf['photos']);
$query = file_getcontents($conf['apiurl'].'photos.get?owner_id='.$conf['owner_id'].'&album_id='.$cof['album_id'].'&v='.$conf['v'].'&acess_token='.$conf['standalone']);
$result = json_decode($query, true);
foreach($result as $v){
     foreach($v['items'] as $q){
         $res = 'photo'.$q['owner_id'].'_'.$q['id'];
         file_put_contents($conf['photos'], $res."\n",FILE_APPEND | LOCK_EX);
     }
}
?>