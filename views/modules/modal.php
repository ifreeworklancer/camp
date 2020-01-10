<?php
$user_name = generateRandomString(5);
$user_phone = generateRandomString(5);
$user_message = generateRandomString(5);

$user_name_buy = generateRandomString(5);
$user_phone_buy = generateRandomString(5);
?>

<div class="custom-modal custom-modal--help">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-prev" style="background-image: url('../../images/bg/modal-help-bg.jpg');"></div>
    <div class="custom-modal-body">
        <h3 class="custom-modal__title text-primary">Є питання?</h3>
        <p class="custom-modal__description">
            Напишiть нам, ми вам передзвонимо
        </p>
        <form action="../../mail-send-help.php" method="post">
            <div class="form-group">
                <label for="name-<?= $user_name; ?>">
                    Ваше Iм’я
                </label>
                <input type="text" id="name-<?= $user_name; ?>" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tel-<?= $user_phone; ?>">
                    Номер телефону
                </label>
                <input type="tel" id="tel-<?= $user_phone; ?>" name="phone" class="form-control" required>
            </div>
            <div class="form-group form-group--textarea">
                <label for="message-<?= $user_message; ?>">
                    Напишiть нам
                </label>
                <textarea type="text" id="message-<?= $user_message; ?>" name="message" class="form-control" rows="4"></textarea>
            </div>
            <button class="btn btn-primary d-flex w-100">
                Відправити
            </button>
        </form>
    </div>
</div>

<div class="custom-modal custom-modal--buy">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-prev" style="background-image: url('../../images/bg/modal-buy-bg.jpg');"></div>
    <div class="custom-modal-body">
        <h3 class="custom-modal__title">Придбати путiвку</h3>
        <p class="custom-modal__description">
            Залиште заявку, наш менеджер зв’яжеться з вами, щоб уточнити деталi вартостi та змiни
        </p>
        <form action="../../mail-send-buy.php" method="post">
            <div class="form-group">
                <label for="name-<?= $user_name_buy; ?>">
                    Ваше Iм’я
                </label>
                <input type="text" id="name-<?= $user_name_buy; ?>" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tel-<?= $user_phone_buy; ?>">
                    Номер телефону
                </label>
                <input type="tel" id="tel-<?= $user_phone_buy; ?>" name="phone" class="form-control" required>
            </div>
            <button class="btn btn-primary d-flex w-100">
                <svg width="35" height="32">
                    <use xlink:href="#buy-icon"></use>
                </svg>
                придбати путiвку
            </button>
        </form>
    </div>
</div>

<div class="modal-mask"></div>