import $ from 'jquery';
import 'slick-carousel';

function slider() {

    let slider = $('.slider-list');
    let pagination = $('.slider-pagination');
    let prev = pagination.find('.prev');
    let next = pagination.find('.next');
    let btn = pagination.find('.slide-btn');

    slider.slick({
        arrows: true,
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

    btn.each(function () {
        $(this).click(function(){
            let index = $(this).data('slide');
            slider.slick('slickGoTo',parseInt(index));
        });
    })

    slider.on('afterChange', function(event, slick, currentSlide, nextSlide){
        let slide = $('.slick-active').data('slick-index')

        btn.each(function (){
            let data = $(this).data('slide');
            if (data === slide) {
                pagination.find('.slide-btn').removeClass('active');
                $(this).addClass('active');
            }
            // let btnActive = $(this).find('.active');
            // console.log(slide >= 4 && slide+1 !== btn.length)
            // if (slide >= 4 && slide+1 !== btn.length) {
            //     $(this).hide();
            // }
        });
    });




};

export {
    slider
};