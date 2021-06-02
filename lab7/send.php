<?php

if($_POST['captcha']!=='qGphJD'){
    header('Location: lab7.php');
    exit;
}
$email=$_POST['email'];
if(strlen(trim($email))!==0) {
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    if (mail($email, $subject, $message)) {
        echo 'письмо отправлено';
    } else {
        echo 'письмо не отправлено';
    }
}else{
    header('Location: lab7.php');
    exit;
}