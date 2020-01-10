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
                <a href="#" class="open-help d-none d-lg-inline">
                    Є питання?
                </a>
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
                <a href="#about" class="anchor-link">
                    ДЦВ “Zoряний”
                </a>
            </li>
            <li>
                <a href="#services" class="anchor-link">
                    Що ми пропонуємо?
                </a>
            </li>
            <li>
                <a href="#program" class="anchor-link">
                    Програма табору Zоряний
                </a>
            </li>
            <li>
                <a href="#races" class="anchor-link">
                    Графік заїздів
                </a>
            </li>
            <li>
                <a href="#gallery" class="anchor-link">
                    Галерея
                </a>
            </li>
            <li>
                <a href="#contacts" class="anchor-link">
                    Мiсцезнаходження
                </a>
            </li>
        </ul>
        <a href="#" class="btn btn-primary open-buy">
            <svg width="35" height="32">
                <use xlink:href="#buy-icon"></use>
            </svg>
            придбати путiвку
        </a>
    </div>
    <div class="menu-mask"></div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>