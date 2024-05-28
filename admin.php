<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ</title>
    <link rel="stylesheet" href="http://localhost:8888/css/main.css">
</head>
<body>

    
<?php
    include "Admin-menu.php";
?>

    <header class="header">
        <div class="header__wrapper">
            <h1 class="header__title" style="color: #000; border-bottom: 1px solid #000000;">
                МОНИТОРИНГ
            </h1>
        </div>
    </header>

    <main class="section">
        <div class="container">
            <ul class="professions" id="professions">
                <li class="profession">
                    <a href="#">
                        <img src="http://localhost:8888/img/professions/1.png" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Product manager</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="#">
                        <img src="http://localhost:8888/img/professions/2.png" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Software engineer</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="#">
                        <img src="http://localhost:8888/img/professions/3.jpg" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">System administrator</h3>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <script src="http://localhost:8888/js/Admin-Lab1-home.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>