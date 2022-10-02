import $ from 'jquery';

function showElem() {

    $('.accordion-item').each(function () {
        $(this).on('click', function () {
            $(this).toggleClass('show');
        })
    })

}

export { showElem }