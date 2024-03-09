<?php require './scripts/connect.php';
if (empty($_SESSION['user_id'])){
    $user_id = null;
}else{ $user_id =  $_SESSION['user_id']; }
require_once ('./scripts/errors.php')
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/style.css">
    <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="/dist/js/main.js"></script>
    <title>Key Sell</title>
</head>
<body>
<div class="header">
    <div class="links">
        <a href="/dist/index.php" class="icon"></a>
        <a href="/dist/all_genres_view.php" class="link">Жанры</a>
        <a href="/dist/about.php" class="link">О нас</a>
        <a href="/dist/history.php?user_id=<?= $user_id ?>" class="link">Мои покупки</a>
    </div>
    <input type="text" class="search" placeholder="Найти...">
    <div class="join">
        <?php if (!isset($_SESSION['user_id']) and (empty($_SESSION['user_id']))) {
            echo('
           <button class="link" id="RegButton" data-modal-target="RegModal" data-modal-toggle="RegModal">Регистрация</button>
           <button class="link" id="LogButton" data-modal-target="LogModal" data-modal-toggle="LogModal" >Логин</button>');
        } else {
            echo ('<button class="link" onclick="logout()">Выйти</button>');
            if ($_SESSION['isadmin']===1){
                echo ('<button class="link" onclick="adminGo()">Кабинет</button>');
            }
        }
        ?>


    </div>
</div>
<div class="container">


    <div data-te-modal-init id="RegModal" tabindex="-1" aria-labelledby="RegModal"
         class="bg-opacited hidden pt-5 overflow-y-auto overflow-x-hidden fixed right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="w-full max-w-xs">
            <form id="modal_reg_form" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <p class="block text-gray-700 text-sm text-center font-bold mb-2">Регистрация</p>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Эл. Почта
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="email" name="email" type="email" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Пароль
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                           id="password" name="password" type="password" placeholder="******************">
                </div>
                <div class="flex items-center justify-between">
                    <button onclick="register()" type="button"
                            class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Создать
                    </button>
                    <button id="LogButton" type="button" data-modal-target="LogModal" data-modal-show="LogModal"
                            data-modal-toggle="RegModal"
                            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        У меня есть аккаунт
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div data-te-modal-init id="LogModal" tabindex="-1" aria-labelledby="LogModal"
         class="bg-opacited hidden pt-5 overflow-y-auto overflow-x-hidden fixed  right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-fulln"
         aria-hidden="true">
        <div class="w-full max-w-xs">
            <form id="modal_log_form" class="bg-blue-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <p class="block text-gray-700 text-sm text-center font-bold mb-2">Вход</p>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Эл. Почта
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="logemail" name="logemail" type="email" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Пароль
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                           id="logpassword" name="logpassword" type="password" placeholder="******************">
                </div>
                <div class="flex items-center justify-between">
                    <button onclick="loginer()" type="button"
                            class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Создать
                    </button>
                    <button id="RegButton" type="button" data-modal-target="LogModal" data-modal-show="RegModal"
                            data-modal-toggle="LogModal"
                            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        У меня нет аккаунта
                    </button>
                </div>
            </form>

        </div>
    </div>


