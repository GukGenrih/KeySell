<?php require ('partials/header.php');
require ('scripts/products.php');
extract($_GET);
$sql_all_prod.='where id='.$id_game;
$statement = $db->query($sql_all_prod);
$product = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="blocks">
   <div class="single-block">
      <?php foreach ($product as $p):?>
       <div class="game-block">
           <img class="game-left" src="images/games/<?= $p['image'] ?>" alt="">
           <div class="game-right">
               <p class="game-title"><?= $p['title'] ?></p>
               <span class="game-description"><?= $p['description'] ?></span>
           </div>
       </div>
       <div class="game-block">
           <div class="game-left review">
               <div>
                   <span>Разработчик: </span>
                   <span><?= $p['developer'] ?></span>
               </div>
               <div>
                   <span>Дата релиза: </span>
                   <span><?= $p['develop_date'] ?></span>
               </div>
               <div>
                   <span>Оценка: </span>
                   <span class="green"><?= $p['vote'] ?>%</span>
               </div>
           </div>
           <div class="game-right sell">
               <div>
                   <span style="font-size: 24px"><?= $p['title'] ?></span>
               </div>
               <div>
                   <span ><?= $p['price'] ?> ₽</span>
                   <button type="button" onclick="buy(<?= $p['id'] ?>,<?= $user_id ?>)" class="buy">Купить</button>
               </div>
           </div>

       </div>
       <?php endforeach ?>
   </div>
</div>
<?php require ('partials/footer.php'); ?>
