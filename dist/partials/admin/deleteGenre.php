<div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Удалить жанр</h2>

    <form action="./scripts/delete_genre_action.php" method="POST">
        <!-- Nom et Prénom -->
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-4">
                <label for="genres_select_delete" class="block text-sm font-medium text-gray-700">Жанры</label>
                <select id="genres_select_delete" name="genre"
                        class="mt-1 p-2 w-full border-gray-400 border rounded-md">
                    <?php
                    foreach ($all_genres as $ag):
                    ?>
                        <option value="<?= $ag['id'] ?>"><?= $ag['title'] ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>

            </div>

            <div class="mt-6">
                <button type="submit"
                        class="w-full border-gray-400 p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Удалить
                </button>
            </div>
        </div>
    </form>
</div>