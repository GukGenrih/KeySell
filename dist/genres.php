<?php require ('partials/header.php');
require ('scripts/genres.php');
if($_GET!=null){
    extract($_GET);
}
else{
    $id=100;
}
$sql_prdct_with_gnrs .= ' where genre.id ='.$id;
$statement = $db->query($sql_prdct_with_gnrs);
$products_filtered = $statement->fetchAll(PDO::FETCH_ASSOC);
$i=3;
?>

<div class="blocks">
    <div class="block">
        <?php if(empty($products_filtered)) :?>
            Извините, но игр по данному жанру мы еще не завесли
        <?php else:?>
        <p class="title middle"><?php echo $products_filtered[0]['genre_title']?></p>
        <?php if(($i%3)==0):?>
        <div class="cards">
            <?php foreach ($products_filtered as $pr): ?>
            <div class="card" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url('images/games/<?=$pr['image']?>'), lightgray 50% / cover no-repeat;background-size: cover;">
                <div class="card_info">
                    <p class="card_title"><?=$pr['title']?></p>
                    <a href="game.php?id_game=<?=$pr['id']?>" class="card_open"> <img src="images/icons/strelka.svg" alt=""> </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; endif;?>

    </div>
</div>
<?php require ('partials/footer.php'); ?>
