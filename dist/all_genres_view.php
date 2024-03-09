<?php require('partials/header.php');
require('scripts/genres.php');

$i = 3;
?>

<div class="blocks">

    <?php foreach ($all_genres as $pr): ?>
        <?php
        if (($i % 3) == 0) {
            echo '<div class="block"> <div class="cards">';
        }
        $i++;?>
        <div class="card"
             style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url('images/games/<?= $pr['image'] ?>'), lightgray 50% / cover no-repeat;background-size: cover;">
            <div class="card_info">
                <p class="card_title"><?= $pr['title'] ?></p>
                <a href="genres.php?id=<?=$pr['id']?>" class="card_open"> <img src="images/icons/strelka.svg" alt=""> </a>
            </div>
        </div>
        <?php
        if (($i % 3) == 0) {
            echo '</div> </div>';
        } ?>
    <?php endforeach; ?>
</div>


</div>
</div>
<?php require('partials/footer.php'); ?>
