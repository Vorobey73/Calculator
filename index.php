<?php 
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/normalize.css">
    <link rel="stylesheet" href="dist/css/base.css">
    <link rel="stylesheet" href="dist/css/main.css">
    <title>Блог</title>
</head>
<body>
    <header>
        <div class="header_con"><span>Блог о примечательных местах Ульяновской области</span></div>
    </header>

    <div class="main">
        <div class="main_con">
            <div class="post">
                <div class="post_con" id="post">
                    
                </div>
            </div>
        </div>
    </div>
    <footer><span>2024</span></footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#post').load('inc/load_post.php')

        })
    </script>
</body>
</html>