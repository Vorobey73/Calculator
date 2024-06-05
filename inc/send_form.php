<?php
    require_once 'connect.php';
    session_start();
    date_default_timezone_set('UTC');
    $a= $db->prepare("SELECT MAX(id) FROM post");
    $a->execute();
    $a = $a->get_result();
    $b = mysqli_fetch_assoc($a);

    $tittle = $_POST['tittle'];
    $desc = $_POST['desc'];
    $photo = $b['MAX(id)'];
    $photo += 1;
    $photo_to_base = 'n'. $photo;
    $date = date('Y-m-d');
    $chek_post = $db->prepare(
        "INSERT into post(`title`, photo, `description`, `date`)
        values(?,?,?,?)");
    $chek_post->bind_param("ssss", $tittle, $photo_to_base , $desc, $date);
    $chek_post->execute();

    $path = '../dist/img/';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if (!@copy($_FILES['photo']['tmp_name'], $path . 'n' . $photo .'.jpg'))
	{}
}
    header('Location: ../admin_val.php');
    ?>

