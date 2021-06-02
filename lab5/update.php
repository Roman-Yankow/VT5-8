<?php
require_once 'connect.php';
$student_id=$_GET['id'];
$student=mysqli_query($connect,"SELECT * FROM `students` WHERE id='$student_id'");
$student=mysqli_fetch_assoc($student);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update student</title>
</head>
<body>
<p>UPDATE STUDENT</p>
<form action="updateMySql.php" method="post">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">
    <p>firstName<input type="text" name="firstName" value="<?= $student['firstName'] ?>"></p>
    <p>mathematics<input type="number" name="mathematics" value="<?= $student['mathematics'] ?>"></p>
    <p>physics<input type="number" name="physics" value="<?= $student['physics'] ?>"></p>
    <p>computer_science<input type="number" name="computer_science" value="<?= $student['computer_science'] ?>"></p>
    <p>programming_languages<input type="number"  name="programming_languages" value="<?= $student['programming_languages']?>"></p>
    <p>philosophy<input type="number" name="philosophy" value="<?= $student['philosophy'] ?>"></p>
    <input type="submit">
</form>
<button><a href="lab5.php">Назад</a></button>
<a href="deleteMySql.php?id=<?= $student['id'] ?>">Delete</a>
</body>
</html>
