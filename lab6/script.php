<?php
$url=$_SERVER['REQUEST_URI'];
$host=$_SERVER['HTTP_HOST'];
date_default_timezone_set('Europe/Moscow');
$date=date("d-m-Y H:i:s A");
$data="$host$url------>$date<br>";
$path=$data;
if(isset($_COOKIE['path'])){
    $path=$data.$_COOKIE['path'];
}
setcookie('path',$path);
echo $path;


/*$url=$_SERVER['REQUEST_URI'];
$host=$_SERVER['HTTP_HOST'];
date_default_timezone_set('Europe/Moscow');
$date=date("d-m-Y H:i:s A");
//echo "$host$url------>$date<br>";
//echo $count;
$arr=[];
$arr[]="$host$url------>$date\n";

if (($file = fopen('list.txt', 'r')) !== false) {
    while (($data = fgets($file, 1000)) !== false) {
        $arr[] = $data;
    }
    fclose($file);
}

foreach ($arr as $i){
    echo $i."<br>";
}

$file = fopen('list.txt', 'w');
foreach ($arr as $i) {
    fputs($file,$i);
}
fclose($file);*/