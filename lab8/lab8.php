<?php
require_once 'connect.php';

function getOS($user_agent)
{
    $arr_os = array(
        "Windows",
        "Linux",
        "MacOS",
        "Android",
        "iOS"
    );
    foreach($arr_os as $i){
        if(strpos($user_agent,$i)!==false)return $i;
    }
    return "unknown";
}
$os = mysqli_query($connect, "SELECT * FROM `os`");
$os = mysqli_fetch_all($os);
$user_os=getOS($_SERVER['HTTP_USER_AGENT']);

if(!isset($_COOKIE['user'])){
    setcookie('user','user');
    $found=false;
    foreach ($os as $key=>$i){
        if($i[1]==$user_os){
            $number=++$os[$key][2];
            mysqli_query($connect,"UPDATE `os` SET `number_of_users` = '$number' WHERE `os`.`id` = $i[0]");
            $found=true;
            break;
        }
    }
    if(!$found) {
        mysqli_query($connect, "INSERT INTO `os` (`os`, `number_of_users`) VALUES ('$user_os', '1')");
        $os[]=array(0,$user_os,'1');
    }
}

for($i=0;$i<count($os);$i++){
    for($j=0;$j<count($os)-$i-1;$j++){
        if($os[$j][2]<$os[$j+1][2]){
            $temp=$os[$j+1];
            $os[$j+1]=$os[$j];
            $os[$j]=$temp;
        }
    }
}
?>
<style>
    th {
        padding: 5px;
        background: gray;
    }
</style>
<table>
    <tr>
        <th>OS</th>
        <th>number_of_users</th>
    </tr>
    <?php
    foreach ($os as $i) {
        ?>
        <tr>
            <th><?= $i[1] ?></th>
            <th><?= $i[2] ?></th>
        </tr>
        <?php
    }
    ?>
</table>
