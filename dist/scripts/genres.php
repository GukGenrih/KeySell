<?php
global $db;
require 'connect.php';
$sql = "SELECT * FROM `genre`";
$statement = $db->query($sql);
$all_genres = $statement->fetchAll(PDO::FETCH_ASSOC);

$sql_prdct_with_gnrs = "SELECT game.id,game.title,game.image,genre.title 'genre_title', genre.id as 'genre_id' FROM `game`
INNER JOIN game_genre ON game.id = game_genre.game_id
INNER JOIN genre ON game_genre.genre_id=genre.id";
$statement = $db->query($sql_prdct_with_gnrs);
$products_with_genres = $statement->fetchAll(PDO::FETCH_ASSOC);

