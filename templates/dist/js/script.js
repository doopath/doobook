$(document).ready(function() {
    //Show full image on review-page
    let image_height = $('body').width() / (4 / 3);

    if ($('.review__image').height() > image_height) {
        $('.view-full-image').css('display', 'block');
    } else {
        $('.view-full-image').css('display', 'none');
        $('.review__image__container').css('border-radius', '5px');
    }

    $('.view-full-image').on('click', function(event) {
        if ($('.view-full-image p').text() === 'Show full image') {
            $('.view-full-image p').text('Hide image');
        } else {
            $('.view-full-image p').text('Show full image');
        }

        $('.review__image__container').toggleClass('full-image');
    });

    $('.transform-block').on('click', function(event) {
        $('.transform-block').css('width', '100%');
    });
});