<?php
global $db;
require 'connect.php';

$sql = "SELECT * FROM `game` LIMIT 4";
$statement = $db->query($sql);
$products_pop = $statement->fetchAll(PDO::FETCH_ASSOC);

$sql_all_prod = "SELECT * FROM `game`";
$statement_all_prod = $db->query($sql_all_prod);
$all_products = $statement_all_prod->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_GET)) {
    extract($_GET);
    $sql_prdct_history = "SELECT DISTINCT price, developer, game.id,game.title,game.image,user_id,(SELECT COUNT(shop_history.game_id) FROM `shop_history` WHERE `game_id` = game.id and user_id = $user_id) as 'amount_buy'  FROM `game`
INNER JOIN game_genre ON game.id = game_genre.game_id
INNER JOIN shop_history ON shop_history.game_id = game.id
WHERE user_id = $user_id";
    $statement_history = $db->query($sql_prdct_history);
    $all_history = $statement_history->fetchAll(PDO::FETCH_ASSOC);
}
?>