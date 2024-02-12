<?php
    session_start();
    echo "Пользователь авторизован как" . $_SESSION["login"];
    echo '<br><a href="index.php">На главную</a>'
?>