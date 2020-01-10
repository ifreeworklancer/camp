import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    let header = $('#app-header'),
        menu = $('.menu'),
        menuMask = $('.menu-mask'),
        burgerMenu = $('.burger-menu');
    $(burgerMenu).click(function () {
        $(this).toggleClass('active');
        header.toggleClass('menu-open');
        menu.toggleClass('active');
        menuMask.toggleClass('active');
    });

    $(menuMask).on('click', function () {
        $(this).removeClass('active');
        burgerMenu.removeClass('active');
        header.removeClass('menu-open');
        menu.removeClass('active');
    });

    /**
     * Anchor link
     */
    $(".anchor-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        header.removeClass('menu-open');
        menu.removeClass('active');
        menuMask.removeClass('active');
    });

    /**
     * Form-label
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        $(this).val() !== "" ? $(this).parents('.form-group').addClass('in-focus') : $(this).parents('.form-group').removeClass('in-focus');
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Modal
     */
    let helpModal = $('.custom-modal--help'),
        buyModal = $('.custom-modal--buy'),
        closeModal = $('.close-modal'),
        modalMask = $('.modal-mask');

    $('.open-help').on('click', function (e) {
        e.preventDefault();
        $(helpModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $('.open-buy').on('click', function (e) {
        e.preventDefault();
        $(buyModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(helpModal).removeClass('active');
        $(buyModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(helpModal).removeClass('active');
        $(buyModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            $(helpModal).removeClass('active');
            $(buyModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Tabs
     */
    $('.custom-tabs-body').each((index, elem) => {
        $(elem).css('height', `${$(elem).find('.custom-tabs-body-item.active').outerHeight()}px`);
    });
    $('.custom-tabs-nav').on('click', 'li:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('section').find('.custom-tabs-body').find('.custom-tabs-body-item').removeClass('active').eq($(this).index()).addClass('active');
        $(this).closest('section').find('.custom-tabs-body').css('height', `${$(this).closest('section').find('.custom-tabs-body-item.active').outerHeight()}px`);

        $(this).closest('section').find('.services-nav-decor').find('.services-nav-decor-item').removeClass('active').eq($(this).index()).addClass('active');
    });


    /**
     * Scroll func
     */
    let lastScroll = 0;
    $(window).on("scroll", function (e) {
        burgerMenu.removeClass('active');
        header.removeClass('menu-open');
        menu.removeClass('active');
        menuMask.removeClass('active');
        $('.outer').remove();
        $(helpModal).removeClass('active');
        $(buyModal).removeClass('active');
        $(modalMask).removeClass('active');
        $(this).scrollTop() > lastScroll ? $(header).addClass('scroll-top') : $(header).removeClass('scroll-top');
        $(this).scrollTop() > 0 ? $(header).addClass('is-scroll') : $(header).removeClass('is-scroll');
        lastScroll = $(this).scrollTop();
    });


    /**
     * Sliders
     */

    if ($('.about-slider').length) {
        new Flickity(document.querySelector('.about-slider'), {
            prevNextButtons: false,
            contain: true,
            draggable: false,
            wrapAround: false,
            autoPlay: 3000,
            cellAlign: 'left',
        });
    }

    if ($('.races-slider').length) {
        let groupCells = 1;
        if ($(window).width() > 768) {
            groupCells = 2;
        }
        if ($(window).width() > 1200) {
            groupCells = 3;
        }
        new Flickity(document.querySelector('.races-slider'), {
            prevNextButtons: false,
            groupCells: groupCells,
            contain: true,
            draggable: true,
            wrapAround: false,
            cellAlign: 'left',
        });
    }

    if ($('.gallery-slider').length) {
        let flkty3 = new Flickity(document.querySelector('.gallery-slider'), {
            prevNextButtons: false,
            pageDots: false,
            contain: true,
            draggable: false,
            wrapAround: false,
            adaptiveHeight: true,
            cellAlign: 'left',
            cellSelector: '.gallery-slider-item',
            on: {
                change: function (index) {
                    $('.slider-nav--gallery .slider-nav-item-index').text(('0' + (index + 1)).slice(-2));
                }
            }
        });

        $('.slider-nav--gallery .slider-nav-item-length').text(('0' + flkty3.getCellElements().length).slice(-2));

        $('.slider-arrow--gallery .slider-arrow-item--prev').on('click', function () {
            flkty3.previous(false, false);
        });

        $('.slider-arrow--gallery .slider-arrow-item--next').on('click', function () {
            flkty3.next(false, false);
        });
    }

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.about-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.program-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.sale-wrapper', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
})(jQuery);
