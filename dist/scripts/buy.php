<?php
global $db;
require 'connect.php';
$user_id = $_POST['user_id'];
$game_id = $_POST['game_id'];
$sql ="INSERT INTO `shop_history`(`user_id`, `game_id`) VALUES ('$user_id','$game_id')";
$statement = $db->query($sql);
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
session_start();
?>
