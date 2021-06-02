<?php
require_once 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update student</title>
</head>
<body>
<p>ADD STUDENT</p>
<form action="addMySql.php" method="post">
    <p>firstName<input type="text" name="firstName"></p>
    <p>mathematics<input type="number" name="mathematics"></p>
    <p>physics<input type="number" name="physics"></p>
    <p>computer_science<input type="number" name="computer_science"></p>
    <p>programming_languages<input type="number" name="programming_languages"></p>
    <p>philosophy<input type="number" name="philosophy"></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>