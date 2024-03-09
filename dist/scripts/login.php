<?php
global $db;
require 'connect.php';
$sql ="SELECT * FROM `user` WHERE `email` = '{$_POST['logemail']}' and `password` = '{$_POST['logpassword']}'";
$statement = $db->query($sql);
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
session_start();
$_SESSION['user_id']=$publishers[0]['id'];
$_SESSION['isadmin']=$publishers[0]['check_admin'];
?>