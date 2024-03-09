<?php require ('partials/header.php'); ?>
<?php require ('scripts/products.php') ?>
<?php require ('scripts/genres.php') ?>
<div class="blocks">
    <div class="block">
        <p class="title">Самое популярное</p>
        <div class="cards">
            <?php foreach ($products_pop as $card):?>
                <div class="card" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url('images/games/<?=$card['image']?>'), lightgray 50% / cover no-repeat;background-size: cover;">
                    <div class="card_info">
                        <p class="card_title"><?=$card['title']?></p>
                        <a href="game.php?id_game=<?=$card['id']?>" class="card_open"> <img src="images/icons/strelka.svg" alt=""> </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="block">
        <p class="title">Жанры</p>
        <div class="cards genres_cards">
          <?php foreach ($all_genres as $genre):?>
              <div class="card" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url('images/games/<?=$genre['image']?>'), lightgray 50% / cover no-repeat;background-size: cover;">
                  <div class="card_info">
                      <p class="card_title"><?=$genre['title']?></p>
                      <a href="genres.php?id=<?=$genre['id']?>" class="card_open"> <img src="images/icons/strelka.svg" alt=""> </a>
                  </div>
              </div>
          <?php endforeach;?>
        </div>
    </div>
</div>
<?php require ('partials/footer.php'); ?>
