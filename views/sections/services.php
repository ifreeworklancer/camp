<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-4">
                <div class="services-nav">
                    <div class="services-nav-decor">
                        <?php
                        $counter = 0;
                        foreach ($services['slider'] as $item) : $counter++; ?>
                            <div class="services-nav-decor-item <?php if ($counter === 1) echo 'active' ?>">
                                <img src="<?= $item['icons']; ?>" alt="icon">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <h2 class="services-nav__title">
                        <?= $services['title']; ?>
                    </h2>
                    <div class="custom-tabs">
                        <ul class="custom-tabs-nav">
                            <?php $counter = 0;
                            foreach ($services['slider'] as $item) : $counter++; ?>
                                <li class="<?php if ($counter === 1) echo 'active' ?>">
                                    <?= $item['title']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-lg-8">
                <div class="custom-tabs">
                    <div class="custom-tabs-body">
                        <?php
                        $counter = 0;
                        foreach ($services['slider'] as $item) : $counter++; ?>
                            <div class="custom-tabs-body-item services-item <?php if ($counter === 1) echo 'active' ?>">
                                <figure class="services-item__image"
                                        style="background-image: url('<?= $item['image']; ?>');"></figure>
                                <div class="services-item__description">
                                    <?= $item['description']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>