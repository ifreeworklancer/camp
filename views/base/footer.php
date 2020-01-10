</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="footer-nav">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center no-gutters">
                <div class="col-xl-auto text-center text-lg-left mb-3 mb-xl-0">
                    <a href="/" class="logo">
                        <img src="<?= $logo; ?>" alt="logo">
                    </a>
                </div>
                <div class="col-xl-auto d-flex flex-column flex-lg-row align-items-center">
                    <ul class="contacts-list">
                        <li>
                            <a href="<?= $place_link; ?>" target="_blank">
                                <svg width="16" height="20">
                                    <use xlink:href="#placeholder-icon"></use>
                                </svg>
                                <?= $place; ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="contacts-list">
                        <li>
                            <a href="tel:<?= phone_link($phone); ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?= $phone; ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="social-list">
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
    <div class="footer-copyright">
        <?= date('Y'); ?> All Right Reserve
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>