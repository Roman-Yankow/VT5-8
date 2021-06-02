<!DOCTYPE html>
<html>
<head>
    <title>lab7</title>
</head>
<body>
<form action="send.php" method="post">
    <p>Тема<input type="text" name="subject"></p>
    <p>E-mail получателя<input type="email" name="email"></p>
    <p>Письмо<input type="text" name="message"></p>
    <img src="captcha.jpg" width="300">
    <input type="text" name="captcha"></p>
    <input type="submit">
</form>
</body>
</html>