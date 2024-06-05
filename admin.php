<?php
session_start();
if(isset($_SESSION['user'])) {
    header('Location: admin_val.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="dist/css/log_adm.css">
    <link rel="stylesheet" href="dist/css/stan.css">
</head>

<body>

    <form action="inc/admin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        </div>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
        <button type="submit">Войти</button>
    </form>
</body>

</html>