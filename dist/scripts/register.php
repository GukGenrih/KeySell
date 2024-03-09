<?php
global $db;
require 'connect.php';

$db->beginTransaction();

$sql_check = "SELECT * FROM `user` WHERE `email` = '{$_POST['email']}'";
$statement = $db->query($sql_check);
$user_check = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($user_check as $chk){
    if ($chk['email'] === $_POST['email']){
        echo json_encode('Такой пользователь уже зарегистрирован!');
        die();
    }
}

$sql_add ="insert into user (email, password) values ('{$_POST['email']}','{$_POST['password']}')";
$db->exec($sql_add);
$db->commit();
session_start();
$_SESSION['user_id']=$db->lastInsertId();
$_SESSION['isadmin']=0;
echo json_encode('Вы успешно зарегистрировались');
