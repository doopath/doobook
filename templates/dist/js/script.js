$(document).ready(function() {
    //Show full image on review-page

    //set proportion for review__image__container
    let image_height = $('body').width() / (4 / 3);

    //set new dynamic height for review__image__container and show/hide "View more" button
    if ($('.review__image').height() > image_height) {
        $('.view-full-image').css('display', 'block');
    } else {
        $('.view-full-image').css('display', 'none');
        $('.review__image__container').css('border-radius', '5px');
    }

    //replace the text for "View more" button as "Hide picture"
    $('.view-full-image').on('click', function(event) {
        if ($('.view-full-image p').text() === 'Show full image') {
            $('.view-full-image p').text('Hide image');
        } else {
            $('.view-full-image p').text('Show full image');
        }

        //show full-size image when had been clicked the "View more" button
        $('.review__image__container').toggleClass('full-image');
    });

    $('.transform-block').on('click', function(event) {
        $('.transform-block').css('width', '100%');
    });

    $('.key__image').change(function() {
        if ($(this).val() != '') {
            $('.key__image__label').text("Chose one image");
        } else {
            $('.key__image__label').text("Choose an image");
        }
    });
});