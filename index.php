<?php
header ("Content-Type: text/html; charset=utf-8");
 echo "<h2>Сдесь будет блог!</h2>";
   
    $mass = "Mass.json";
    $content = file_get_contents($mass);
    $content = json_decode($content,true);
    print_r($content);
?>
