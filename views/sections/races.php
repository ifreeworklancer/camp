<!-- Races -->
<section id="races">
    <div class="container-fluid">
        <div class="row offset-lg-1">
            <div class="col-md-11 col-xl-9 d-flex flex-column flex-lg-row">
                <h2 class="section-title">
                    <?= $races['title']; ?>
                </h2>
                <p class="section-description">
                    <?= $races['description']; ?>
                </p>
            </div>
            <div class="col-12 pr-lg-0">
                <div class="races-slider slider-wrapper">
                    <?php foreach ($races['slider'] as $item) : ?>
                        <div class="races-slider-item">
                            <div class="races-item">
                                <div class="races-item-header">
                                    <h6 class="races-item__title">
                                        <?= $item['title']; ?>
                                    </h6>
                                </div>
                                <div class="races-item-body">
                                    <ul class="races-item__list">
                                        <li>
                                            <div>З <span class="font-weight-bold"><?= $item['from'] ?></span> по</div>
                                            <div><span class="font-weight-bold"><?= $item['to'] ?></span> (21 день)
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-primary open-buy">
                                        хочу в цю зміну
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>