<?php
include 'components/conn.php';
$news_id = $_GET['id'];
$id = $_GET['id'];
$sql = 'SELECT * FROM `posts` WHERE id=?';
$stmt = $db->prepare($sql); // создали команду
$stmt->bind_param("i", $id); // привязали переменную $id к запросу
$stmt->execute(); // выполнили запрос
$result = $stmt->get_result(); // получили результат
$row = $result->fetch_assoc(); // выбрали первую строку результата
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title><?= $row['name'] ?></title>
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
        <div class="post blog__item">
            <div class="post__container container">
                <a href="blog.php" class="post__link back-link">
                    Назад к блогу
                </a>
                <div class="blog__img">
                    <picture>
                        <source srcset="img/posts/<?= $row['img'] ?>.webp" type="image/webp"><img src="img/posts/<?= $row['img'] ?>.jpg" alt="news">
                    </picture>
                </div>
                <h1 class="post__title title">
                    <?= $row['name'] ?>
                </h1>
                <div class="post__text text">
                    <?= $row['description'] ?>
                </div>
            </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</php>