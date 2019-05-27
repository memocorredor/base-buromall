$(function () {
    //////////////////
    // Count caracter input SEO
    $('.seo_title_es').keyup(function () {

        var characterCount = $(this).val().length,
            current = $('#seo_title_es_current'),
            maximum = $('#seo_title_es_maximum'),
            theCount = $('#seo_title_es_count');

        current.text(characterCount);

        /* ===| This isn't entirely necessary, just playin around |=== */
        if (characterCount < 40) {
            current.css('color', '#5f5f5f');
        }
        if (characterCount > 41 && characterCount < 59) {
            current.css('color', '#43739e');
        }
        if (characterCount > 55) {
            current.css('color', '#ff5d5d');
        }

        if (characterCount == 58) {
            theCount.css('font-weight', 'bold');
        } else {
            theCount.css('font-weight', 'normal');
        }
    });
    $('.seo_title_pt').keyup(function () {

        var characterCount = $(this).val().length,
            current = $('#seo_title_pt_current'),
            maximum = $('#seo_title_pt_maximum'),
            theCount = $('#seo_title_pt_count');

        current.text(characterCount);

        /* ===| This isn't entirely necessary, just playin around |=== */
        if (characterCount < 40) {
            current.css('color', '#5f5f5f');
        }
        if (characterCount > 41 && characterCount < 59) {
            current.css('color', '#43739e');
        }
        if (characterCount > 55) {
            current.css('color', '#ff5d5d');
        }

        if (characterCount == 58) {
            theCount.css('font-weight', 'bold');
        } else {
            theCount.css('font-weight', 'normal');
        }
    });
    $('.seo_title_en').keyup(function () {

        var characterCount = $(this).val().length,
            current = $('#seo_title_en_current'),
            maximum = $('#seo_title_en_maximum'),
            theCount = $('#seo_title_en_count');

        current.text(characterCount);

        /* ===| This isn't entirely necessary, just playin around |=== */
        if (characterCount < 40) {
            current.css('color', '#5f5f5f');
        }
        if (characterCount > 41 && characterCount < 59) {
            current.css('color', '#43739e');
        }
        if (characterCount > 55) {
            current.css('color', '#ff5d5d');
        }

        if (characterCount == 58) {
            theCount.css('font-weight', 'bold');
        } else {
            theCount.css('font-weight', 'normal');
        }
    });

    $('.seo_description_es').keyup(function () {

        var characterCount = $(this).val().length,
            current = $('#seo_description_es_current'),
            maximum = $('#seo_description_es_maximum'),
            theCount = $('#seo_description_es_count');

        current.text(characterCount);

        /* ===| This isn't entirely necessary, just playin around |=== */
        if (characterCount < 40) {
            current.css('color', '#5f5f5f');
        }
        if (characterCount > 41 && characterCount < 59) {
            current.css('color', '#43739e');
        }
        if (characterCount > 55) {
            current.css('color', '#ff5d5d');
        }

        if (characterCount == 58) {
            theCount.css('font-weight', 'bold');
        } else {
            theCount.css('font-weight', 'normal');
        }
    });
    $('.seo_description_pt').keyup(function () {

        var characterCount = $(this).val().length,
            current = $('#seo_description_pt_current'),
            maximum = $('#seo_description_pt_maximum'),
            theCount = $('#seo_description_pt_count');

        current.text(characterCount);

        /* ===| This isn't entirely necessary, just playin around |=== */
        if (characterCount < 40) {
            current.css('color', '#5f5f5f');
        }
        if (characterCount > 41 && characterCount < 59) {
            current.css('color', '#43739e');
        }
        if (characterCount > 55) {
            current.css('color', '#ff5d5d');
        }

        if (characterCount == 58) {
            theCount.css('font-weight', 'bold');
        } else {
            theCount.css('font-weight', 'normal');
        }
    });
    $('.seo_description_en').keyup(function () {

        var characterCount = $(this).val().length,
            current = $('#seo_description_en_current'),
            maximum = $('#seo_description_en_maximum'),
            theCount = $('#seo_description_en_count');

        current.text(characterCount);

        /* ===| This isn't entirely necessary, just playin around |=== */
        if (characterCount < 40) {
            current.css('color', '#5f5f5f');
        }
        if (characterCount > 41 && characterCount < 59) {
            current.css('color', '#43739e');
        }
        if (characterCount > 55) {
            current.css('color', '#ff5d5d');
        }

        if (characterCount == 58) {
            theCount.css('font-weight', 'bold');
        } else {
            theCount.css('font-weight', 'normal');
        }
    });
});
