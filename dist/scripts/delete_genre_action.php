<?php
global $db;
require 'connect.php';
extract($_POST);
$sql = "DELETE FROM `genre` WHERE `id`=$genre";
$statement = $db->query($sql);
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
header('Location: ../admin.php');
?>