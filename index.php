<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Главная</title>
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
        <div class="preview-index">
            <div class="preview-index__container container">
                <div class="preview-index__text">
                    <h1 class="preview-index__name">
                        ЛИДЕР<br>
                        СТРОЙ
                    </h1>
                    <a href="about.php" class="preview-index__link btn">
                        Подробнее
                    </a>
                </div>
                <div class="preview-index__img">
                    <picture>
                        <source srcset="img/logos/Logo-w.svg" type="image/webp"><img class="preview-index__logo" src="img/logos/Logo-w.svg" alt="img">
                    </picture>
                </div>
            </div>
        </div>
        <div class="partners">
            <a class="partners__item" href="#">
                <picture>
                    <source srcset="img/logos/1xbet.svg" type="image/webp"><img class="partners__logo" src="img/logos/1xbet.svg" alt="partner">
                </picture>
            </a>
            <a class="partners__item" href="#">
                <picture>
                    <source srcset="img/logos/redbull.svg" type="image/webp"><img class="partners__logo" src="img/logos/redbull.svg" alt="partner">
                </picture>
            </a>
            <a class="partners__item" href="#">
                <picture>
                    <source srcset="img/logos/secretlab.svg" type="image/webp"><img class="partners__logo" src="img/logos/secretlab.svg" alt="partner">
                </picture>
            </a>
            <a class="partners__item" href="#">
                <picture>
                    <source srcset="img/logos/bitget.svg" type="image/webp"><img class="partners__logo" src="img/logos/bitget.svg" alt="partner">
                </picture>
            </a>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>