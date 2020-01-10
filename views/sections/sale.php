<!-- Sale -->
<section id="sale">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <div class="sale-wrapper" style="background-image: url('<?= $sale['image_bg']; ?>');">
                    <img src="<?= $sale['image']; ?>" alt="children" class="sale-image d-none d-xl-block">
                    <div class="sale-item">
                        <h2 class="sale-item__title">
                            <?= $sale['title']; ?>
                        </h2>
                        <div class="sale-item__description">
                            <?= $sale['description']; ?>
                        </div>
                        <div class="d-flex align-items-center align-items-sm-stretch flex-column flex-sm-row">
                            <a href="#" class="btn btn-primary open-buy mb-3 mb-sm-0 mr-sm-4">
                                <svg width="35" height="32">
                                    <use xlink:href="#buy-icon"></use>
                                </svg>
                                придбати путiвку
                            </a>
                            <a href="#" class="btn btn-outline-primary open-help">
                                Є питання
                            </a>
                        </div>
                        <div class="decor decor-top"></div>
                        <div class="decor decor-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>