<?php

require_once 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student</title>
</head>
<body>
<style>
    th {
        border: 2px solid black;
    }
</style>
<table>
    <tr>
        <th>id</th>
        <th>firstName</th>
        <th>mathematics</th>
        <th>physics</th>
        <th>computer_science</th>
        <th>programming_languages</th>
        <th>philosophy</th>
    </tr>

    <?php
    $students = mysqli_query($connect, "SELECT * FROM `students`");
    $students = mysqli_fetch_all($students);
    foreach ($students as $i) {
        ?>
        <tr>
            <?php
            foreach ($i as $j) {
                ?>
                <th><?= $j ?></th>
                <?php
            }
            ?>
            <th><a href="update.php?id=<?= $i[0] ?>">Изменить</a></th>
        </tr>
        <?php
    }
    echo "</table>";
    foreach ($students as $i) {
        $min = $i[2];
        $max = $i[2];
        $sum = $i[2];
        for ($j = 3; $j < count($i); $j++) {
            if ($i[$j] < $min) $min = $i[$j];
            if ($i[$j] > $max) $max = $i[$j];
            $sum += $i[$j];
        }
        $average_grade = $sum / 5;
        $str_min = '';
        $str_max = '';
        $our_student = mysqli_query($connect, "SELECT * FROM `students` WHERE id='$i[0]'");
        $our_student = mysqli_fetch_assoc($our_student);
        foreach ($our_student as $key => $k) {
            if ($k == $min) $str_min .= "$key,";
            if ($k == $max) $str_max .= "$key,";
        }
        $str_min = substr($str_min, 0, strlen($str_min) - 1);
        $str_max = substr($str_max, 0, strlen($str_max) - 1);
        echo "$i[1] | Average grade:$average_grade | Min grade:$min in subjects $str_min | Max grade:$max in subjects $str_max<hr/>";
    }
    ?>
    <a href="add.php" style="color:black">Add student</a>
</body>
</html>

