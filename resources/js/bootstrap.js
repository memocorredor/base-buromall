window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    require('summernote');
} catch (e) { }

// Moment
window.moment = require('moment');

// Offside
window.offside = require('./offside');

// Toastr
window.toastr = require('toastr');

// Swaet Alert
window.Swal = require('sweetalert2');

// Metismenu
window.metisMenu = require('metismenu');

// select Picker
window.selectpicker = require('bootstrap-select');;

// Toggle
window.bootstrapToggle = require('bootstrap4-toggle');

// Color Picker
window.colorpicker = require('bootstrap-colorpicker');

// Touchspin
window.TouchSpin = require('bootstrap-touchspin');

// Date Time Picker
window.datetimepicker = require('tempusdominus-bootstrap-4');

// Fileinput
window.fileinput = require('bootstrap-fileinput');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     wsHost: window.location.hostname,
//     wsPort: process.env.MIX_PUSHER_APP_PORT,
//     disableStats: process.env.MIX_PUSHER_APP_STATSH,
// });


$(function () {
    //////////////////
    //Offside
    const btnadmin = document.querySelector(".offside-op-admin");
    if (typeof (btnadmin) != 'undefined' && btnadmin != null) {
        var offsideMenu1 = offside('#offside-m-admin', {
            slidingElementsSelector: '#offside', // String: Sliding elements selectors
            debug: true, // Boolean: If true, print errors in console
            buttonsSelector: '.offside-op-admin', // String: Menu toggle buttons selectors
            slidingSide: 'right', // String: Off canvas menu on left or right
            init: function () { }, // Function: After init callback
            beforeOpen: function () { }, // Function: Before open callback
            afterOpen: function () { }, // Function: After open callback
            beforeClose: function () { }, // Function: Before close callback
            afterClose: function () { }, // Function: After close callback
        });
    }
    var offsideMenu1 = offside('#offside-m-categories', {
        slidingElementsSelector: '#offside', // String: Sliding elements selectors
        debug: true, // Boolean: If true, print errors in console
        buttonsSelector: '.offside-op-categories', // String: Menu toggle buttons selectors
        slidingSide: 'left', // String: Off canvas menu on left or right
        init: function () { }, // Function: After init callback
        beforeOpen: function () { }, // Function: Before open callback
        afterOpen: function () { }, // Function: After open callback
        beforeClose: function () { }, // Function: Before close callback
        afterClose: function () { }, // Function: After close callback
    });
    const btncrm = document.querySelector(".offside-op-crm");
    if (typeof (btncrm) != 'undefined' && btncrm != null) {
        var offsideMenu1 = offside('#offside-m-crm', {
            slidingElementsSelector: '#offside', // String: Sliding elements selectors
            debug: true, // Boolean: If true, print errors in console
            buttonsSelector: '.offside-op-crm', // String: Menu toggle buttons selectors
            slidingSide: 'left', // String: Off canvas menu on left or right
            init: function () { }, // Function: After init callback
            beforeOpen: function () { }, // Function: Before open callback
            afterOpen: function () { }, // Function: After open callback
            beforeClose: function () { }, // Function: Before close callback
            afterClose: function () { }, // Function: After close callback
        });
    }
    var offsideMenu1 = offside('#offside-m-infouser', {
        slidingElementsSelector: '#offside', // String: Sliding elements selectors
        debug: true, // Boolean: If true, print errors in console
        buttonsSelector: '.offside-op-infouser', // String: Menu toggle buttons selectors
        slidingSide: 'right', // String: Off canvas menu on left or right
        init: function () { }, // Function: After init callback
        beforeOpen: function () { }, // Function: Before open callback
        afterOpen: function () { }, // Function: After open callback
        beforeClose: function () { }, // Function: Before close callback
        afterClose: function () { }, // Function: After close callback
    });
    var offsideMenu1 = offside('#offside-m-menu', {
        slidingElementsSelector: '#offside', // String: Sliding elements selectors
        debug: true, // Boolean: If true, print errors in console
        buttonsSelector: '.offside-op-menu', // String: Menu toggle buttons selectors
        slidingSide: 'left', // String: Off canvas menu on left or right
        init: function () { }, // Function: After init callback
        beforeOpen: function () { }, // Function: Before open callback
        afterOpen: function () { }, // Function: After open callback
        beforeClose: function () { }, // Function: Before close callback
        afterClose: function () { }, // Function: After close callback
    });
    const btnuser = document.querySelector(".offside-op-user");
    if (typeof (btnuser) != 'undefined' && btnuser != null) {
        var offsideMenu1 = offside('#offside-m-user', {
            slidingElementsSelector: '#offside', // String: Sliding elements selectors
            debug: true, // Boolean: If true, print errors in console
            buttonsSelector: '.offside-op-user', // String: Menu toggle buttons selectors
            slidingSide: 'right', // String: Off canvas menu on left or right
            init: function () { }, // Function: After init callback
            beforeOpen: function () { }, // Function: Before open callback
            afterOpen: function () { }, // Function: After open callback
            beforeClose: function () { }, // Function: Before close callback
            afterClose: function () { }, // Function: After close callback
        });
    }

    //////////////////
    //overlay Offside
    var overlay = document.querySelector('.site-overlay')
        .addEventListener('click', offside.factory.closeOpenOffside);

    //////////////////
    //Side bar FAQS
    const sidebarButton = document.querySelector("[data-js=open-sidebar]");
    const sidebar = document.querySelector("[data-js=sidebar]");
    const main = document.querySelector("[data-js=main]");

    if (typeof (sidebarButton) != 'undefined' && sidebarButton != null) {

        sidebarButton.addEventListener("click", e => {
            e.preventDefault();
            sidebar.classList.toggle("sidebar--open");
            main.classList.toggle("main--slide-right");
        });

    }

    //////////////////
    //File Select
    $("#input-b3").fileinput();

    //////////////////
    //Select Picker
    $(".select-search").selectpicker({
        width: "100%"
    });
    $.fn.selectpicker.Constructor.BootstrapVersion = '4';

    //////////////////
    //Date Time Picker
    $('#user_Birthday').datetimepicker({
        format: 'L'
    });

    //////////////////
    //Color Piker
    $('#input-color').colorpicker();

    //////////////////
    //metisMenu
    $("#menu-side-menu").metisMenu();
    $("#user-side-menu").metisMenu();
    $("#admin-side-menu").metisMenu();
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

    //////////////////
    //Summernote
    $('.summernote-height').summernote({
        width: "100%",
        height: 200
    });
    $('.summernote-address').summernote({
        width: "100%",
        height: 120
    });
    //////////////////
    //TouchSpin TAX
    $("#field-form-tax").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '<i class="fas fa-percent"></i>'
    });
    //////////////////
    //TouchSpin PRICE
    $("#field-form-price").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>'
    });
    //////////////////
    //TouchSpin DESCOUNT
    $("#field-form-descount").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '<i class="fas fa-percent"></i>'
    });
    //////////////////
    //TouchSpin QUANTITY
    $("#field-form-quantity").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-gifts"></i>'
    });
    //////////////////
    //TouchSpin STORES
    $("#field-form-nu-stores").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-store-alt"></i>'
    });
    //////////////////
    //TouchSpin BRANCH
    $("#field-form-nu-branch").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-store"></i>'
    });
    //////////////////
    //TouchSpin EMPLOYES
    $("#field-form-nu-employes").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-user-clock"></i>'
    });
    //////////////////
    //TouchSpin PRODUCTS
    $("#field-form-nu-products").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-gifts"></i>'
    });
    //////////////////
    //TouchSpin SOCIAL MEDIA
    $("#field-form-nu-smedia").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>',
        postfix: '<i class="fas fa-share-alt-square"></i>'
    });
    //////////////////
    //TouchSpin GEOLOCATIONS
    $("#field-form-nu-geolocation").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-map-marked-alt"></i>'
    });
    //////////////////
    //TouchSpin BANNERS
    $("#field-form-nu-banners").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-images"></i>'
    });
    //////////////////
    //TouchSpin AUCTIONS
    $("#field-form-nu-auction").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-gavel"></i>'
    });
    //////////////////
    //TouchSpin DAYS RECU
    $("#field-form-nu-days-recu").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-calendar-alt"></i>'
    });
    //////////////////
    //TouchSpin PRICE AUCTION INI
    $("#field-form-price-ini").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>',
        postfix: '<i class="fas fa-concierge-bell"></i>'
    });
    //////////////////
    //TouchSpin  AUCTION MIN BIDERS
    $("#field-form-min-biders").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 1,
        decimals: 0,
        prefix: '<i class="fas fa-user-circle"></i>'
    });
    //////////////////
    //TouchSpin PRICE AUCTION reserve
    $("#field-form-price-reserve").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>',
        postfix: '<i class="fas fa-hand-holding-usd"></i>'
    });
    //////////////////
    //TouchSpin PRICE AUCTION INCRISE BID
    $("#field-form-increase-bid").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>',
        postfix: '<i class="fas fa-donate"></i>'
    });
    //////////////////
    //TouchSpin PRICE AUCTION PRICE INCRISE
    $("#field-form-price-incrise").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>',
        postfix: '<i class="fas fa-gavel"></i>'
    });
    //////////////////
    //TouchSpin PRICE AUCTION PRICE INCRISE
    $("#field-form-prod-weight").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-weight"></i>',
        postfix: 'kg'
    });
    //////////////////
    //TouchSpin PRICE AUCTION PRICE INCRISE
    $("#field-form-prod-high").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-arrows-alt-v"></i>',
        postfix: 'cm'
    });
    //////////////////
    //TouchSpin PRICE AUCTION PRICE INCRISE
    $("#field-form-prod-width").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-arrows-alt-h"></i>',
        postfix: 'cm'
    });
    //////////////////
    //TouchSpin PRICE AUCTION PRICE INCRISE
    $("#field-form-prod-long").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-ruler-combined"></i>',
        postfix: 'cm'
    });
    //////////////////
    //TouchSpin PRICE AUCTION reserve
    $("#field-form-shipping-price").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>',
        postfix: '<i class="fas fa-dolly"></i>'
    });
    //////////////////
    //TouchSpin PRICE AUCTION reserve
    $("#field-form-insurance").TouchSpin({
        buttondown_class: 'btn btn-info',
        buttonup_class: 'btn btn-success',
        min: 0,
        max: 1000000,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        prefix: '<i class="fas fa-dollar-sign"></i>',
        postfix: '<i class="fas fa-dolly"></i>'
    });


    //////////////////
    //Mayusculas
    $("#field-name").on("keyup", function (e) {
        var txt = $(this).val();
        $(this).val(
            txt.replace(/^(.)|\s(.)/g, function ($1) {
                return $1.toUpperCase();
            })
        );
    });
    //////////////////
    //Mayusculas
    $("#field-lastname").on("keyup", function (e) {
        var txt = $(this).val();
        $(this).val(
            txt.replace(/^(.)|\s(.)/g, function ($1) {
                return $1.toUpperCase();
            })
        );
    });
    //////////////////
    //Minisculas
    $("#field-username").on("keyup", function (e) {
        var txt = $(this).val();
        $(this).val(
            txt.replace(/\s+/g, "-").toLowerCase()
        );
    });
    //////////////////
    //Minusculas, coma y espacio para keywords
    $(".keywords_set").on("keyup", function (e) {
        var txt = $(this).val();
        $(this).val(
            txt.replace(/\s+/g, ",").toLowerCase()
        );
    });
    //////////////////
    //Minusculas, coma y espacio para
    $(".lowercase_set").on("keyup", function (e) {
        var txt = $(this).val();
        $(this).val(
            txt.replace(/\s+/g, "").toLowerCase()
        );
    });
    //////////////////
    //Mayusculas
    $(".letters_first").on("keyup", function (e) {
        var txt = $(this).val();
        $(this).val(
            txt.replace(/^(.)|\s(.)/g, function ($1) {
                return $1.toUpperCase();
            })
        );
    });
    //////////////////
    //Only numbers
    $(".only_numbers").on("keypress keyup blur", function (event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
    //////////////////
    //Only numbers Decimal
    $(".only_numbers_decimal").on("keypress keyup blur", function (event) {
        //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

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
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
function tick() {
    //get the mins of the current time
    var mins = new Date().getMinutes();
    var second = new Date().getSeconds();
    if (mins == "00") {
        // set endpoint and your API key
        endpoint = 'live';
        access_key = 'a5c9db90b76a9b96b7afa2c6f9070b74';
        // execute the conversion using the "convert" endpoint:
        if (second == "00") {
            $.ajax({
                url: 'http://apilayer.net/api/live?access_key=a5c9db90b76a9b96b7afa2c6f9070b74&currencies=EUR,USD,COP,BRL&source=USD&format=1',
                dataType: 'jsonp',
                context: this, //<-----
                success: function (json) {
                    $.ajax({
                        url: 'new-currnecy',
                        type: 'post',
                        data: { _token: CSRF_TOKEN, usd_eur: json.quotes.USDEUR, usd_usd: json.quotes.USDUSD, usd_cop: json.quotes.USDCOP, usd_brl: json.quotes.USDBRL },
                        success: function (response) {
                            count = 1;
                            $(this).data('requestRunning', false);
                            console.log('currency update');
                        }
                    });
                }
            });
        }
    }
}

setInterval(function () { tick(); }, 1000);
