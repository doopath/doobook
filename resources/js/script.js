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

    //select image button
    $('.key__image').change(function() {
        if ($(this).val() != '') {
            $('.key__image__label').text("Chose one image");
        } else {
            $('.key__image__label').text("Choose an image");
        }
    });

    //checklist items and recommendations. Replacing a value of an input when click on checklist item.
    $('.rating__list__item').on('mouseover', function(event) {
        if ($(this).val() >= 8) {
            $(this).prop('title', $(this).val() + '/10 very good =)');
        }

        if ($(this).val() >= 5 && $(this).val() < 8) {
            $(this).prop('title', $(this).val() + '/10 so-so but ok =|');
        }

        if ($(this).val() >= 1 && $(this).val() < 5) {
            $(this).prop('title', $(this).val() + '/10 bad! =(');
        }

    });

    //change color and width for rating progress-bar
    function ratingProgress(element, bar, val) {
        if ($(element).val() >= 8) {
            $(bar).css('background', '#68971a');
            $(bar).css('width', $(element).val() + '0%');
        }

        if ($(element).val() >= 5 && $(element).val() < 8) {
            $(bar).css('background', '#d79921');
            $(bar).css('width', $(element).val() + '0%');
        }

        if ($(element).val() >= 1 && $(element).val() < 5) {
            $(bar).css('background', '#cc241d');
            $(bar).css('width', $(element).val() + '0%');
        }
        $(val).val($(element).val());
    }

    //change color and width when click on the element
    $('.time-rating__list li').on('click', function(event) {
        ratingProgress($(this), ".timings__progress", ".timings__input");
    });

    $('.quality-rating__list li').on('click', function(event) {
        ratingProgress($(this), ".quality__progress", ".quality__input");
    });

    $('.communication-rating__list li').on('click', function(event) {
        ratingProgress($(this), ".communication__progress", ".sociability__input");
    });

    //recommendation progress-bar changing
    $('.rec').on('click', function(event) {
        $('.rec__progress').css('left', '0');
        $('.rec__progress').css('background', '#68971a');
        $('.rec__input').val('rec');
    });

    $('.not-rec').on('click', function(event) {
        $('.rec__progress').css('left', '50%');
        $('.rec__progress').css('background', '#cc241d');
        $('.rec__input').val('notrec');
    });

    //popup-appeal
    function popup(popup, close, curtain) { //any params is required
        $(popup).addClass('popup-open');
        $(curtain).addClass('curtain-open');
        $('body, html').css('overflow-y', 'hidden');
        $(location).attr('href', '#header');

        $(close).on('click', function(event) {
            $(popup).removeClass('popup-open');
            $(curtain).removeClass('curtain-open');
            $('body, html').css('overflow-y', 'auto');
        });

        $(curtain).on('click', function(event) {
            $(popup).removeClass('popup-open');
            $(curtain).removeClass('curtain-open');
            $('body, html').css('overflow-y', 'auto');
        })
    }
});