<?php
include 'components/conn.php';
$posts = mysqli_query($db, "SELECT * FROM `posts`ORDER BY `date` DESC");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Блог</title>
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
        <div class="blog">
            <div class="blog__container container">
                <h1 class="blog__title title">
                    Блог
                </h1>
                <div class="blog__content">
                    <?php foreach ($posts as $post) { ?>
                        <div class="blog__item">
                            <div class="blog__img">
                                <picture>
                                    <source srcset="img/posts/<?= $post['img'] ?>.webp" type="image/webp"><img src="img/posts/<?= $post['img'] ?>.jpg" alt="post">
                                </picture>
                            </div>
                            <div class="blog__info">
                                <div>
                                    <h3 class="blog__info-title title">
                                        <?= $post['name'] ?>
                                    </h3>
                                    <div class="blog__text text">
                                        <?= $post['description'] ?>
                                    </div>
                                    <div class="blog__date">
                                        <?= $post['date'] ?>
                                    </div>
                                </div>
                                <a href="post.php?id=<?= $post['id'] ?>" class="blog__link btn">
                                    Читать дальше
                                </a>
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

</php>