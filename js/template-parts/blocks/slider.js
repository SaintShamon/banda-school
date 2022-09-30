import $ from 'jquery';
import 'slick-carousel';

function slider() {

    let pagination = $('.slider-pagination');
    let prev = pagination.find('.prev');
    let next = pagination.find('.next');

    $('.slider-list').slick({
        arrows: false,
        infinite: false,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: next,
        prevArrow: prev,
        // responsive: [{
        //     breakpoint: 253,
        //     settings: {
        //         slidesToShow: 1,
        //         variableWidth: false,
        //     }
        // }]
    });

    pagination.find('.slide-btn').each(function () {
        $(this).click(function(){
            let index = $(this).data('slide');
            $('.slider-list').slick('slickGoTo',parseInt(index));
            $('.slider-pagination').find('.slide-btn').removeClass('active');
            $(this).addClass('active');
        });
    })



};

export {
    slider
};