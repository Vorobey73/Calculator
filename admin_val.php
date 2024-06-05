<?php
session_start();
if (!$_SESSION['user'] and $_SESSION['user'] == 'admin') {
    header('Location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dist/css/base.css">
    <link rel="stylesheet" href="dist/css/admin.css">
    <link rel="stylesheet" href="dist/css/normalize.css">
    <title>Админ</title>
</head>
<body> 
    <header>
        <div class="header_con"><a href="inc/logout.php" class="account">Выйти из аккаунта</a></div>
    </header>
    <div class="main">
        <div class="main__container">
            <div class="buttons">
                <div class="main_button" id="buttons">
                    <button class="btn_post" id="button_create">Добавить пост</button>
                </div>
            </div>
            <div class="main"id="main"></div>
            <div class="main_button">
                <button class="btn_post" id="button_back">Вернуться назад</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#button_back').hide();
            $('#button_create').on('click', function() {
                $('#main').empty();
                $('#main').load('inc/create_form.php');
                $('#buttons').hide();
                $('#button_back').show();
            })
            $('#button_back').on('click', function() {
                    $('#main').empty();
                    $('#buttons').show();
                    $('#button_back').hide();
            })
            $('.input-file input[type=file]').on('change', function(){
                let file = this.files[0];
                $(this).closest('.input-file').find('.input-file-text').html(file.name);
            });
        })
    </script>
</body>
</html>