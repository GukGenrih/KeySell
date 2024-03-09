<?php
global $db;
require 'connect.php';
extract($_POST);
extract($_FILES);
var_dump($title);
var_dump($image);

if (!exif_imagetype($image['tmp_name'])) {
    echo "Файл не является изображением.";
    die;
}


$destination = $_SERVER['DOCUMENT_ROOT'] . '/dist/images/games/' .$title . '_' .  $image['name'];
move_uploaded_file($image['tmp_name'], $destination);
$image_name = $title . '_' .  $image['name'];

$db->beginTransaction();
$sql_add ="insert into genre (title, image) values ('$title','$image_name')";
var_dump($sql_add);
$db->exec($sql_add);
$db->commit();
session_start();
?>