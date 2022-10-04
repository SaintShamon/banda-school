import $ from 'jquery';

function header() {
    $(document).ready(function () {
        $('#toggle').on('click', function () {
            $(this).toggleClass('on');
            $('#side-panel').toggleClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });

        $('.btn_close').click(function () {
            $('#side-panel').toggleClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });

        $(document).click(function (event) {
            let $target = $(event.target);
            if (!$target.closest('.side-panel').length) {
                $('#toggle').removeClass('on');
                $('#side-panel').removeClass('active');
                $('body').removeClass('side-panel-overlay');
            }
        });

        $('.header__menu .menu-item-has-children').each(function () {
            $('<div class="menu-item__parent"></div>').prependTo($(this));
            $($(this).children('a')).appendTo($(this).find('.menu-item__parent'));
            $('<span class="menu-item__icon"></span>').appendTo($(this).find('.menu-item__parent'));
        });

        $('.header__menu .menu-item.search').each(function () {
            $('<div class="menu-item__parent"></div>').prependTo($(this));
            $($(this).children('a')).appendTo($(this).find('.menu-item__parent'));
            $('<span class="menu-item__icon"></span>').appendTo($(this).find('.menu-item__parent'));
        });

        var check = function () {
            return $(window).width() <= 769
        }

        $('.side-panel .header__menu li.menu-item-has-children').on('click', function () {
            if (check()) {
                event.preventDefault();
                $(this).attr('tabindex', 1).focus();
                $(this).toggleClass('active');
                $(this).find('.sub-menu').slideToggle(300);
            }
        });

        $('.side-panel .header__menu li.menu-item-has-children').focusout(function () {
            if (check()) {
                $(this).removeClass('active');
                $(this).find('.sub-menu').slideUp(300);
            }
        });

        $('.side-panel .search').on('click', function () {
            event.preventDefault();
            $('.side-panel .search_block').addClass('active');
        });
        $('.header .search_block').focusout(function () {
            $('header .search_block').removeClass('active');
        });
        $('side-panel .search_block .is-search-submit').submit(function (e) {
            e.preventDefault()
        });

    });
}

export {
    header
};