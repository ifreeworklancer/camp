<!-- About -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-sm-8 col-lg-6">
                <div class="about-slider slider-wrapper">
                    <?php foreach ($about['gallery'] as $item) : ?>
                        <div class="about-slider-item">
                            <figure class="about-slider-item__image" style="background-image: url('<?= $item; ?>');"></figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-sm-8 col-lg-5">
                <div class="about-item">
                    <h2 class="about-item__title">
                        <?= $about['title']; ?>
                    </h2>
                    <div class="about-item__description">
                        <?= $about['description']; ?>
                    </div>
                    <a href="#" class="btn btn-outline-primary open-buy">
                        <svg width="35" height="32">
                            <use xlink:href="#buy-icon"></use>
                        </svg>
                        придбати путiвку
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img src="../../images/icons/logo-simple-white.png" alt="logo" class="decor-logo decor-logo--first">
    <img src="../../images/icons/logo-simple-white.png" alt="logo" class="decor-logo decor-logo--second">
    <img src="../../images/icons/logo-simple-white.png" alt="logo" class="decor-logo decor-logo--third">
</section>