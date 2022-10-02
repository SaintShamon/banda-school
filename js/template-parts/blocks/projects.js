import $ from 'jquery';
import 'slick-carousel';

function projectsfunc() {
    $('.projects').each(function () {
        let block = $(this);
        let slider = $(this).find('.projects_row');

        slider.slick({
            dots: false,
            arrows: false,
            infinite: false,
            cssEase: 'linear',
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true,
            // centerMode: true
            // variableWidth: true,
        });

    });

};

export {
    projectsfunc
};