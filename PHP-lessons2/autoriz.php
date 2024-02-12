<?php
    session_start();
    include 'connect.php';
    $error_message = "";
    if(isset($_POST["send"])) {
        $_SESSION["login"] = $_POST["login"];
        if(!empty($_POST["login"]) && !empty($_POST["pass"])) {
            $login = $_POST["login"];
            $query = $mysqli -> query("SELECT * FROM `users` WHERE `login` = '$login'");
            if(mysqli_num_rows($query) == 1) {
                $pass = $_POST["pass"];
                $row = mysqli_fetch_assoc($query);
                if(MD5("$pass") == $row["pass"]) {
                    header("Location: success.php?SEND = 1");
                } else echo $error_message = "Пароль не верный";
            } else echo $error_message = "Пользователя не существует";
        } else echo $error_message = "Не все поля заполнены";
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
<fieldset>
        <legend>Форма авторизации пользователя:</legend>
        <form action="" method="POST">
            <input type="text" name="login" placeholder="login"><label for="">Логин пользователя</label><br>
            <input type="password" name="pass" placeholder="**********"><label for="">Введите пароль</label><br>

            <input type="submit" name="send" value="Войти"><br>

            <a href="rega.php">Регистрация</a>

        </form>
    </fieldset>
    <a href="index.php">На главную</a><br>
</body>
</html>