<!-- Program -->
<section id="program" style="background-image: url('<?= $program['image_bg']; ?>');">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-end">
            <div class="col-sm-10 col-lg-7 col-xl-6">
                <div class="program-item">
                    <h2 class="program-item__title">
                        <?= $program['title']; ?>
                    </h2>
                    <div class="program-item__description">
                        <?= $program['description']; ?>
                    </div>
                    <h5 class="program-item__quote">
                        <?= $program['quote']; ?>
                    </h5>
                    <a href="#" class="btn btn-primary open-buy">
                        <svg width="35" height="32">
                            <use xlink:href="#buy-icon"></use>
                        </svg>
                        придбати путiвку
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img src="../../images/icons/logo-simple-primary.png" alt="logo" class="decor-logo decor-logo--first">
    <img src="../../images/icons/logo-simple-primary.png" alt="logo" class="decor-logo decor-logo--second">
    <img src="../../images/icons/logo-simple-primary.png" alt="logo" class="decor-logo decor-logo--third">
    <img src="../../images/icons/logo-simple-primary.png" alt="logo" class="decor-logo decor-logo--fourth">
</section>