<!-- Gallery -->
<section id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                    <div class="section-description order-2 order-lg-1">
                        <?= $gallery['description']; ?>
                    </div>
                    <h2 class="section-title order-1 order-lg-2">
                        <?= $gallery['title']; ?>
                    </h2>
                </div>
                <div class="gallery-slider">
                    <?php foreach ($gallery['slider'] as $item) : ?>
                        <div class="gallery-slider-item">
                            <div class="gallery-slider-item-wrapper">
                                <img src="<?= $item; ?>" alt="gallery image">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="slider-arrow slider-arrow--gallery">
                        <div class="slider-arrow-item slider-arrow-item--prev">
                            попередній
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--separator">
                            /
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next">
                            наступний
                        </div>
                    </div>
                    <div class="slider-nav slider-nav--gallery">
                        <span class="slider-nav-item slider-nav-item-index font-weight-bold">
                            01
                        </span>
                        <span>
                            /
                        </span>
                        <span class="slider-nav-item slider-nav-item-length">
                            01
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="../../images/icons/logo-simple-primary.png" alt="logo" class="decor-logo decor-logo--first">
    <img src="../../images/icons/logo-simple-primary.png" alt="logo" class="decor-logo decor-logo--second">
    <img src="../../images/icons/logo-simple-primary.png" alt="logo" class="decor-logo decor-logo--third">
</section>