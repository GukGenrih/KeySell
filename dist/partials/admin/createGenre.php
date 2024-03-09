
<div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Новый жанр</h2>

    <form action="./scripts/create_genre_action.php" method="POST" enctype="multipart/form-data">
        <!-- Nom et Prénom -->
        <div class="mt-4">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Название</label>
                <input type="text" id="title" name="title" class="mt-1 p-2 w-full border-gray-400 border rounded-md">
            </div>
        </div>
        <div class="mt-4">
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Картинка</label>
                <input type="file" id="image" name="image" class="mt-1 p-2 w-full border-gray-400 border rounded-md">
            </div>
        </div>
        <div class="mt-6">
            <button type="submit" class="w-full border-gray-400 p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Добавить</button>
        </div>
    </form>
</div>
