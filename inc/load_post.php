<?php
require_once 'connect.php';
session_start();
$check_post = $db->prepare(
    "SELECT title,
        photo,
        `description`,
        `date`,
        id
        FROM post
        ORDER BY `id` DESC"
);
$check_post->execute();
$check_post = $check_post->get_result();
if (mysqli_num_rows($check_post) > 0) {
    $data = mysqli_fetch_all($check_post);
    foreach ($data as $value) {
        echo '<div class="item">
            <span class="item_name">'. $value[0] .'</span>
            <img class="item_img" src="dist/img/'. $value[1] .'.jpg">
            <span class="item_desc">
            '. $value[2] .'
            </span>
            <span class="item_date">
            '. $value[3] .'
            </span>
            <a href="../post.php?post='. $value[4] .'" class="item_more">Подробнее</a>
    </div>';
    }
} else {
    $_SESSION['message'] = 'Посты не найдены';
}
