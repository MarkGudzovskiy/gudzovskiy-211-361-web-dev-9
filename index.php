<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Гудзовский</title>
        <!-- подключение стилей gooleFonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
        <!--Подключение файла со стилеями-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="wrapper">
            <header class="header">
                <div class="header">
                    <div class="inline"><img src="polytech_logo_main_RGB.png"></div>
                    <div class="inline title">Табулирование функций</div>
                </div>
                
    
            </header>
            <main>
                <?php
                    include "funcWork.php";
                ?> 

            </main>
            <footer>
                <div class="footer">
                    <span class="left">
                        <span>Все права защищены &copy; by gudzovskiy</span><br>
                        <span>Тип верстки: <?=$type?></span>
                    </span>
                    <span class="right">
                        <span>+7 (900) 235-75-07</span><br>
                        <span>gudzovskiy@mail.ru</span>
                    </span>
                </div>
            </footer>
        </div>
    </body>
</html>