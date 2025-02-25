<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<?php
    include "Admin-menu.php";
?>

    <main class="section">
        <div class="container">
            <h2 class="title-1">Ваши результаты</h2>
            <ul class="professions1" id="professions">
                <li class="profession">
                    <a href="Lab2-test_result.php">
                        <img src="./img/blue.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест</h3>
                    </a>
                </li>
            </ul>
        </div>
    </main>

    <script src="./js/app.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/lab2-admin-chart.js"></script>
</body>
</html>
