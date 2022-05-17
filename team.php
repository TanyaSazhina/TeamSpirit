<?php
include 'components/conn.php';
$game_id = $_GET['id'];
$sql = 'SELECT * FROM `players` WHERE id_game = ' . $game_id;
$members = mysqli_query($db, $sql);
$sql_game = 'SELECT * FROM `games` WHERE id = ' . $game_id;
$game = mysqli_query($db, $sql_game);
$row_game = mysqli_fetch_assoc($game);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title><?= $row_game['name'] ?></title>
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
        <div class="team">
            <div class="team__container container">
                <a href="teams.php" class="team__link back-link">
                    Назад к командам
                </a>
                <h1 class="team__title title">
                    <?= $row_game['name'] ?>
                </h1>
                <div class="team__content">
                    <div class="team__members">
                        <?php foreach ($members as $member) { ?>
                            <div class="member">
                                <h2 class="member__nickname">
                                    <?= $member["nickname"] ?>
                                </h2>
                                <div class="member__name">
                                    <?= $member["name"] ?>
                                </div>
                                <div class="member__info">
                                    <div class="member__info-item">
                                        <div class="member__info-title">
                                            РОЛЬ
                                        </div>
                                        <div class="member__info-description">
                                            <?= $member["role"] ?>
                                        </div>
                                    </div>
                                    <div class="member__info-item">
                                        <div class="member__info-title">
                                            БИОГРАФИЯ
                                        </div>
                                        <div class="member__info-description">
                                            <?= $member["biography"] ?>
                                        </div>
                                    </div>
                                    <div class="member__info-item">
                                        <div class="member__info-title">
                                            ЛЮБИМЫЕ ГЕРОИ:
                                        </div>
                                        <div class="member__info-description">
                                            <?= $member["other"] ?>
                                        </div>
                                    </div>
                                    <div class="member__info-item">
                                        <div class="member__info-title">
                                            СОЦИАЛЬНЫЕ СЕТИ:
                                        </div>
                                        <div class="member__info-description">
                                            <?= $member["socials"] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="member__img">
                                    <picture>
                                        <source srcset="img/members/<?= $member["img"] ?>.webp" type="image/webp"><img src="img/members/<?= $member["img"] ?>.jpg" alt="YATOROGOD">
                                    </picture>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>