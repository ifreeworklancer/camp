<?php

require_once('store.php');
require_once('functions.php');
require_once('views/base/header-secondary.php');
?>

    <!-- Thanks page -->
    <section id="thanks-page" style="background-image: url('images/bg/thanks-bg.jpg');">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-sm-8 col-lg-7 col-xl-6">
                    <div class="thanks-item">
                        <img src="images/icons/decor-thanks-logo.png" alt="decor" class="thanks-item__icon">
                        <h4 class="thanks-item__title">
                            Дякуємо!<br>
                            Ваша дитина буде<br>
                            задоволена!
                        </h4>
                        <p class="thanks-item__description">
                            Наш менеджер зв’яжеться з вами!
                        </p>
                        <p>
                            Повернутися на головну сторiнку
                        </p>
                        <a href="/" class="btn btn-outline-primary">
                            На ГОЛОВНУ
                        </a>
                    </img>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('views/base/footer-secondary.php');