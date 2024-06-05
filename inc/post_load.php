<?php 
    session_start();
    $url = $_SERVER['HTTP_REFERER'];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    require_once 'connect.php';
    $_SESSION['post'] = $query['post'];
    $check_post = $db->prepare(
        "SELECT title,
            photo,
            `description`,
            `date`,
            id
            FROM post
            WHERE id = ?");
    $check_post->bind_param("i", $query['post']);
    $check_post->execute();
    $check_post = $check_post->get_result();
    if (mysqli_num_rows($check_post) > 0) {
        $data = mysqli_fetch_row($check_post);
        echo '<div class="item">
            <span class="item_name">'. $data[0] .'</span>
            <img class="item_img" src="dist/img/'. $data[1] .'.jpg">
            <span class="item_desc">
            '. $data[2] .'
            </span>
            <span class="item_date">
            '. $data[3] .'
            </span>
            <a href="../index.php" class="item_more">Назад</a>
    </div>';
    } else {
        echo 'Пост не найден';
    }
?>