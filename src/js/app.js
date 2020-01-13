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

    /** Mobile check */
    window.mobilecheck = function () {
        var check = false;
        (function (a) {
            if (
                /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
                    a
                ) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                    a.substr(0, 4)
                )
            )
                check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };

    if (!mobilecheck()) {
        let $video = $('.video-container');
        const $link = $video.data('src');
        $video.html('<video src="' + $link + '" loop muted autoplay></video>')
    }

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
