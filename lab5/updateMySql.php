<?php
require_once 'connect.php';

$id=$_POST['id'];
$firstName=$_POST['firstName'];
$mathematics=$_POST['mathematics'];
$physics=$_POST['physics'];
$computer_science=$_POST['computer_science'];
$programming_languages=$_POST['programming_languages'];
$philosophy=$_POST['philosophy'];

if ($mathematics <= 10 && $mathematics >= 0) {
    if ($philosophy <= 10 && $philosophy >= 0) {
        if ($physics <= 10 && $physics >= 0) {
            if ($computer_science <= 10 && $computer_science >= 0) {
                if ($programming_languages <= 10 && $programming_languages >= 0) {
                    mysqli_query($connect,"UPDATE `students` SET `firstName` = '$firstName', `mathematics` = '$mathematics', `physics` = '$physics', `computer_science` = '$computer_science', `programming_languages` = '$programming_languages', `philosophy` = '$philosophy' WHERE `students`.`id` = '$id'");
                }
            }
        }
    }
}
header('Location: lab5.php');
exit;