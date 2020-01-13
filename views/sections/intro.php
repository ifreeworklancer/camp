<!-- Intro -->
<section id="intro">
    <div class="video-container" data-src="/video/video.mp4"></div>
    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-sm-10 col-lg-8 col-xl-7">
                <div class="intro-item">
                    <img src="<?= $intro['image']; ?>" alt="" class="intro-item__logo">
                    <p class="intro-item__description">
                        <?= $intro['description']; ?>
                    </p>
                    <a href="#" class="btn btn-primary open-buy d-inline-flex d-xl-none">
                        <svg width="35" height="32">
                            <use xlink:href="#buy-icon"></use>
                        </svg>
                        придбати путiвку
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary open-buy d-none d-xl-inline-flex">
        <svg width="35" height="32">
            <use xlink:href="#buy-icon"></use>
        </svg>
        придбати путiвку
    </a>
</section>