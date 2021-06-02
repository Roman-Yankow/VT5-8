<?php
require_once 'connect.php';
$id=$_GET['id'];
mysqli_query($connect,"DELETE FROM `students` WHERE id='$id'");
header( 'Location: lab5.php');