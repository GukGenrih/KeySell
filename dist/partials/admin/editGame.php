
<?php
$sql_all_prod = "SELECT * FROM `game` where id=1";
$statement_all_prod = $db->query($sql_all_prod);
$all_products = $statement_all_prod->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Редактировать игру</h2>

    <form action="#" method="POST">
        <!-- Nom et Prénom -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Название</label>
                <input type="text" id="title" name="title" class="mt-1 p-2 w-full border-gray-400 border rounded-md">
            </div>
            <div>
                <label for="dev_date" class="block text-sm font-medium text-gray-700">Дата создания</label>
                <input type="date" id="dev_date" name="dev_date" class="mt-1 p-2 w-full border-gray-400 border rounded-md">
            </div>
        </div>

        <!-- Adresse email -->
        <div class="mt-4">
            <label for="desc" class="block text-sm font-medium text-gray-700">Описание</label>
            <textarea type="text" id="desc" name="desc" class="mt-1 p-2 w-full border-gray-400 border rounded-md"></textarea>
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Картинки</label>
            <input type="file" id="image" name="image" class="mt-1 p-2 w-full border-gray-400 border rounded-md">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Цена</label>
                <input type="text" id="price" name="price" class="mt-1 p-2 w-full border-gray-400 border rounded-md">
            </div>
            <div>
                <label for="range" class="block text-sm font-medium text-gray-700">Оценка</label>
                <div class="mt-1 p-2 w-full border-gray-400 flex gap-8 border rounded-md">
                    <input type="range" id="range" min="0" value="1" max="100" name="dev_date">
                    <span id="range_vizual">1%</span>
                </div>
            </div>
        </div>
        <!-- Mot de passe -->
        <div class="mt-4">
            <label for="developers" class="block text-sm font-medium text-gray-700">Разработчики</label>
            <input type="text" id="developers" name="developers" class="mt-1 p-2 w-full border-gray-400 border rounded-md">
        </div>
        <div class="mt-4">
            <label for="genres_select" class="block text-sm font-medium text-gray-700">Жанры</label>
            <select id="genres_select" name="genres[]" class="mt-1 p-2 w-full border-gray-400 border rounded-md" multiple size="3">
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
        </div>
        <!-- Bouton d'inscription -->
        <div class="mt-6">
            <button type="submit" class="w-full border-gray-400 p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Добавить</button>
        </div>
    </form>
</div>
