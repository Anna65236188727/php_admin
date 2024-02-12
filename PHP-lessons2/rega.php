<?php
    include 'connect.php';
    $errors_message = "";
    if (isset($_POST["send"])) {
        if (!empty($_POST["login"]) && !empty($_POST["pass"]) && !empty($_POST["pass2"]) && !empty($_POST["email"]) && !empty($_POST["date_r"])) {
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                if ($_POST["pass"] == $_POST["pass2"]) {
                    $login = $_POST['login'];
                    $query = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login'");
                    if (mysqli_num_rows($query) == 0) {
                        $email = $_POST['email'];
                        $query2 = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
                        if (mysqli_num_rows($query2) == 0) {
                            $pass = $_POST['pass'];
                            $date_r = $_POST['date_r'];
                            $result = $mysqli->query("INSERT INTO `users` (`login`, `pass`, `email`, `date_r`) VALUES ('$login', MD5('$pass'), '$email', '$date_r');");
                            header("location: index.php");
                        } else echo $errors_message = "Данная почта уже зарегистрированна";
                    } else echo $errors_message = "Данный логин уже зарегистрирован";
                } else echo $errors_message = "Пароли не совпадают";
            } else echo $errors_message = "Формат электронной почты указан неверно";
        } else echo $errors_message = "Не все поля заполнены";
    }
    $mysqli->close();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <fieldset>
        <legend>Форма регистрации пользователя:</legend>
        <form action="" method="POST">
            <input type="text" name="login" placeholder="login"><label for="">Логин пользователя</label><br>
            <input type="password" name="pass" placeholder="**********"><label for="">Введите пароль</label><br>
            <input type="password" name="pass2" placeholder="**********"><label for="">Подтвердите пароль</label><br>
            <input type="email" name="email" placeholder="test@test.tu"><label for="">Электронная почта пользователя</label><br>
            <input type="date" name="date_r" placeholder="1901-11-11"><label for="">Дата рождения</label><br>

            <input type="submit" name="send" value="Зарегистрироваться"><br>

            <a href="autorez.php">Вход</a>

        </form>
    </fieldset>
    <a href="index.php">На главную</a><br>
</body>

</html>