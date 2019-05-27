$(function () {
    //////////////////
    //bootstrapToggle
    $("#toggle-con-newsletter-enable").bootstrapToggle();
    $('#toggle-con-newsletter-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-con-newsletter-enable').val('1');
        } else {
            $('#switch-con-newsletter-enable').val('0');
        }
    });
    $("#toggle-event-enable").bootstrapToggle();
    $('#toggle-event-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-enable').val('1');
        } else {
            $('#switch-form-enable').val('0');
        }
    });
    $("#toggle-event-default").bootstrapToggle();
    $('#toggle-event-default').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-default').val('1');
        } else {
            $('#switch-form-default').val('0');
        }
    });
    $("#toggle-event-highlight").bootstrapToggle();
    $('#toggle-event-highlight').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-highlight').val('1');
        } else {
            $('#switch-form-highlight').val('0');
        }
    });
    $("#toggle-event-enable-profile").bootstrapToggle();
    $('#toggle-event-enable-profile').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-enable-profile').val('1');
        } else {
            $('#switch-form-enable-profile').val('0');
        }
    });
    $("#toggle-event-facebook-enable").bootstrapToggle();
    $('#toggle-event-facebook-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-facebook-enable').val('1');
        } else {
            $('#switch-form-facebook-enable').val('0');
        }
    });
    $("#toggle-event-twitter-enable").bootstrapToggle();
    $('#toggle-event-twitter-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-twitter-enable').val('1');
        } else {
            $('#switch-form-twitter-enable').val('0');
        }
    });
    $("#toggle-event-instagram-enable").bootstrapToggle();
    $('#toggle-event-instagram-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-instagram-enable').val('1');
        } else {
            $('#switch-form-instagram-enable').val('0');
        }
    });
    $("#toggle-event-pinterest-enable").bootstrapToggle();
    $('#toggle-event-pinterest-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-pinterest-enable').val('1');
        } else {
            $('#switch-form-pinterest-enable').val('0');
        }
    });
    $("#toggle-event-youtube-enable").bootstrapToggle();
    $('#toggle-event-youtube-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-youtube-enable').val('1');
        } else {
            $('#switch-form-youtube-enable').val('0');
        }
    });
    $("#toggle-event-linkedin-enable").bootstrapToggle();
    $('#toggle-event-linkedin-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-linkedin-enable').val('1');
        } else {
            $('#switch-form-linkedin-enable').val('0');
        }
    });
    $("#toggle-event-skype-enable").bootstrapToggle();
    $('#toggle-event-skype-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-skype-enable').val('1');
        } else {
            $('#switch-form-skype-enable').val('0');
        }
    });
    $("#toggle-event-android-enable").bootstrapToggle();
    $('#toggle-event-android-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-android-enable').val('1');
        } else {
            $('#switch-form-android-enable').val('0');
        }
    });
    $("#toggle-event-itunes-enable").bootstrapToggle();
    $('#toggle-event-itunes-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-itunes-enable').val('1');
        } else {
            $('#switch-form-itunes-enable').val('0');
        }
    });
    $("#toggle-event-windows-enable").bootstrapToggle();
    $('#toggle-event-windows-enable').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-windows-enable').val('1');
        } else {
            $('#switch-form-windows-enable').val('0');
        }
    });
    $("#toggle-event-private-auction").bootstrapToggle();
    $('#toggle-event-private-auction').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-private-auction').val('1');
        } else {
            $('#switch-form-private-auction').val('0');
        }
    });
    $("#toggle-event-buyitnow").bootstrapToggle();
    $('#toggle-event-buyitnow').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-buyitnow').val('1');
        } else {
            $('#switch-form-buyitnow').val('0');
        }
    });
    $("#toggle-event-accept-returns").bootstrapToggle();
    $('#toggle-event-accept-returns').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-accept-returns').val('1');
        } else {
            $('#switch-form-accept-returns').val('0');
        }
    });
    $("#toggle-event-automatic-re-enter").bootstrapToggle();
    $('#toggle-event-automatic-re-enter').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-automatic-re-enter').val('1');
        } else {
            $('#switch-form-automatic-re-enter').val('0');
        }
    });
    $("#toggle-event-enable-deals").bootstrapToggle();
    $('#toggle-event-enable-deals').change(function () {
        var res_switch = $(this).prop('checked');
        if (res_switch == true) {
            $('#switch-form-enable-deals').val('1');
        } else {
            $('#switch-form-enable-deals').val('0');
        }
    });
});
