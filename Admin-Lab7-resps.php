<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<?php
    include "Admin-menu.php";
?>

    <main class="section">
        <div class="container">
            <h2 class="title-1">Выберите пользователя</h2>
            <ul class="professions" id="users">
                '<li style="background-color: #F9F9F9; border-radius: 10px; padding: 20px;">
                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                        <h3 style="font-size: 20px; margin: 0;">'+ name +'</h3>
                        <p style="font-size: 16px; margin: 0 0 5px;">'+ age +'</p>
                        <p style="font-size: 16px; margin: 0 0 5px;">'+ gender +'</p>
                        <a href="https://t.me/'+ telegram +'" style="display: inline-block; background-color: #4FC3F7; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Telegram</a>
                        <a href="./Admin-Lab7-resp.php?id='+ id +'" style="display: inline-block; background-color: #FFAFCC; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Посмотреть результаты</a>
                    </div>
                </li>'
            </ul>
        </div>
    </main>

    <script src="./js/app.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/Lab7-admin-users-result.js"></script>
    
</body>
</html>
