<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эксперт</title>
    <link rel="stylesheet" href="http://localhost:8888/./css/main.css">
    <link rel='stylesheet' href="http://localhost:8888/resources/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
</head>
<body>
<?php
    include "menu.php";
?>
    <main class="section">
        <div class="container">
            <h2 class="title-1">Выберите профессию для оценки!</h2>
            <ul class="professions" id="professions">
                <li class="profession">
                    <a href="#">
                        <img src="./img/professions/1.png" alt="Profession img" class="img" style="width: 350px; height: 200px;">
                        <h3 class="profession__title">Product manager</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="#">
                        <img src="./img/professions/2.png" alt="Profession img" class="img" style="width: 350px; height: 200px;">
                        <h3 class="profession__title">Software engineer</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="#">
                        <img src="./img/professions/3.jpg" alt="Profession img" class="img" style="width: 350px; height: 200px;">
                        <h3 class="profession__title">System administrator</h3>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <!-- job_listing_area_end  dsddfdds-->
    <script src="./js/app.js"></script>
    <script src="./js/Lab1-expert-chose.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>
