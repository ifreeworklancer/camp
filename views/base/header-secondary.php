<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container-fluid px-0">
        <div class="row justify-content-between align-items-center no-gutters">
            <div class="col-auto">
                <a href="/" class="logo">
                    <img src="<?= $logo; ?>" alt="logo">
                </a>
            </div>
            <div class="col-auto d-flex align-items-center">
                <ul class="contacts-list d-none d-lg-block">
                    <li>
                        <a href="tel:<?= phone_link($phone); ?>">
                            <svg width="16" height="20">
                                <use xlink:href="#phone-icon"></use>
                            </svg>
                            <?= $phone; ?>
                        </a>
                    </li>
                </ul>
                <ul class="social-list d-none d-lg-flex">
                    <li>
                        <a href="<?= $facebook; ?>">
                            <svg width="20" height="20">
                                <use xlink:href="#facebook-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $instagram; ?>">
                            <svg width="20" height="20">
                                <use xlink:href="#instagram-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="burger-menu">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="menu-list">
            <li>
                <a href="/#about">
                    ДЦВ “Zoряний”
                </a>
            </li>
            <li>
                <a href="/#services">
                    Що ми пропонуємо?
                </a>
            </li>
            <li>
                <a href="/#program">
                    Програма табору Zоряний
                </a>
            </li>
            <li>
                <a href="/#races">
                    Графік заїздів
                </a>
            </li>
            <li>
                <a href="/#gallery">
                    Галерея
                </a>
            </li>
            <li>
                <a href="/#contacts">
                    Мiсцезнаходження
                </a>
            </li>
        </ul>
    </div>
    <div class="menu-mask"></div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>