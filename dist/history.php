<?php require ('partials/header.php'); ?>
<?php require ('scripts/products.php'); ?>

<div style="background: #ACD7E4;min-height: 600px" class="relative overflow-x-auto mt-20 shadow-md rounded-t-lg">
    <?php if(!empty($all_history)): ?>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Название
            </th>
            <th scope="col" class="px-6 py-3">
                Жанр
            </th>
            <th scope="col" class="px-6 py-3">
                Цена
            </th>
            <th scope="col" class="px-6 py-3">
                разработчики
            </th>
            <th scope="col" class="px-6 py-3">
                Кол-во
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="even:bg-gray-50 even:dark:bg-gray-800 border-b-4 dark:border-gray-700">
           <?php foreach ($all_history as $ah): ?>
        <tr>
            <th scope="row" class="border-b-2 border-black px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?= $ah['title'] ?></th>
            <td class="border-b-2 border-black px-6 py-4 text-gray-900">
                <?php
                $game_id = $ah['id'];
                $sql_mini = "SELECT DISTINCT title, game_genre.game_id FROM `genre` INNER JOIN game_genre ON genre.id = game_genre.genre_id INNER JOIN shop_history ON game_genre.game_id = shop_history.game_id WHERE shop_history.user_id = user_id and shop_history.game_id = $game_id";
                $genres_mini = $db->query($sql_mini);
                $gernes_mini_get = $genres_mini->fetchAll(PDO::FETCH_ASSOC);
                foreach ($gernes_mini_get as $gm_get):?>
                    <p> <?=$gm_get['title']?></p>
                <?php endforeach; ?>
            </td>
            <td class="border-b-2 border-black px-6 py-4 text-gray-900"><?= $ah['price'] ?> ₽</td>
            <td class="border-b-2 border-black px-6 py-4 text-gray-900"><?= $ah['developer'] ?> </td>
            <td class="border-b-2 border-black px-6 py-4 text-gray-900"><?= $ah['amount_buy'] ?> </td>


        </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="title" style="margin: 20px auto;width: 600px">У вас нет покупок на нашем сайте :(</p>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require ('partials/footer.php'); ?>
