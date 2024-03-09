<?php require('partials/header.php');
$check = $_SESSION['isadmin'];

if ($check === null or $check === 0) {
    echo '<p class="title middle bg-gray-100 mt-2">Вас здесь быть не должно!</p>';
    die();
}
require ('scripts/products.php');
require ('scripts/genres.php');
?>

<div style="background: #ACD7E4;min-height: 600px;padding: 55px 10px"
     class="relative overflow-x-auto mt-20 shadow-md rounded-t-lg">
    <div>
        <div class="mt-4 flex flex-col gap-1 mb-4">
            <button onclick="showForm(1)" class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                Добавить игру
            </button>
<!--            <div class="grid grid-cols-2 gap-5 p-1 bg-blue-800 rounded-md">-->
<!--                <button onclick="showForm(2)" class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">-->
<!--                    Редактировать игру-->
<!--                </button>-->
<!--                <select id="select_edit_game" class="rounded-md">-->
<!--                    --><?php //foreach ($all_products as $ap): ?>
<!--                        <option value="--><?php //= $ap['id'] ?><!--">--><?php //= $ap['title'] ?><!--</option>-->
<!--                    --><?php //endforeach; ?>
<!--                </select>-->
<!--            </div>-->
            <button onclick="showForm(3)" class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                Добавить Жанр
            </button>
            <button onclick="showForm(4)" class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                Удалить Жанр
            </button>
        </div>

        <div id="admin_form_1" style="display: none">
            <?php require('partials/admin/createGame.php') ?>
        </div>
        <div id="admin_form_2" style="display: none">
            <?php require('partials/admin/editGame.php') ?>
        </div>
        <div id="admin_form_3" style="display: none">
            <?php require('partials/admin/createGenre.php') ?>
        </div>
        <div id="admin_form_4" style="display: none">
            <?php require('partials/admin/deleteGenre.php') ?>
        </div>
    </div>
</div>


<?php require('partials/footer.php'); ?>
