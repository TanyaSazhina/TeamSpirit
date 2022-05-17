<?php
include 'components/conn.php';
$games = mysqli_query($db, "SELECT * FROM `games`");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Команды</title>
</head>

<body>
    <header class="header">
        <div class="header__container">
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__link">
                        <a href="index.php">
                            Главная
                        </a>
                    </li>
                    <li class="header__link">
                        <a href="about.php">
                            О клубе
                        </a>
                    </li>
                    <li class="header__link">
                        <a href="blog.php">
                            Блог
                        </a>
                    </li>
                    <li class="header__link">
                        <a href="teams.php">
                            Команды
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="index.php" class="header__logo">
                <picture>
                    <source srcset="img/logos/Logo-b.svg" type="image/webp"><img src="img/logos/Logo-b.svg" alt="logo">
                </picture>
            </a>
        </div>
    </header>
    <main class="page">
        <div class="teams">
            <div class="teams__container container">
                <h1 class="teams__title title">
                    КОМАНДЫ
                </h1>
                <div class="teams__content">
                    <?php foreach ($games as $game) { ?>
                        <div class="teams__games games">
                            <div>
                                <h2 class="games__title">
                                    <?= $game['name']; ?>
                                </h2>
                                <a href="team.php?id=<?= $game['id']; ?>" class="games__link btn">
                                    Подробнее о составе
                                </a>
                            </div>
                            <div class="games__img">
                                <picture>
                                    <source srcset="img/games/<?= $game['img']; ?>.webp" type="image/webp"><img src="img/games/<?= $game['img']; ?>.png" alt="cs">
                                </picture>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>