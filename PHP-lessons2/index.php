<?php
// include 'connect.php';

// $result = $musqli->query("SELECT * FROM `users`");

// foreach ($result as $row) {
//     echo 'Данные из таблицы <br>';
//     echo 'Логин пользователя - ' . $row['login'] . '<br>';
//     echo 'Электронная почта - ' . $row['email'] . '<br>';
//     echo 'Дата рождения - ' . $row['date_r'] . '<br>';
//     echo '<br>';
// }

// if (isset($_POST["send"])) {
//     $login = $_POST['login'];
//     $pass = $_POST['pass'];
//     $email = $_POST['email'];
//     $date_r = $_POST['date_r'];

//     $musqli-> query("INSERT INTO `users` (`login`, `pass`, `email`, `date_r`) 
//                      VALUES ('$login', MD5('$pass'), '$email', '$date_r');");
//     header("location: index2.php");
// } else {
//     echo "Произошла ошибка, проверьте данные";
// }
// $musqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <br>
    <a href="rega.php">Регистрация</a><br>
    <a href="autoriz.php">Вход</a>

</body>

</html>