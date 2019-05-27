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

window.card = require("card/dist/jquery.card");

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

 //import Echo from 'laravel-echo'

 //window.Pusher = require('pusher-js');

 //window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     wsHost: window.location.hostname,
//     wsPort: process.env.MIX_PUSHER_APP_PORT,
//     disableStats: process.env.MIX_PUSHER_APP_STATSH,
//     enabledTransports: ['ws', 'wss'],
// });


 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Offside
require('./components/web/offside');
// Faq Sidebar
require('./components/web/faq_sidebar');
// Toggle
require('./components/web/toggle');
// TouchSpin
require('./components/web/touchspin');
// SEO
require('./components/web/seo');


$(function () {



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
    //Change country combo
    $('#field-form-country-id').on('change', function () {
        cboLoadState($(this).val())
    });
    //////////////////
    //Change state combo
    $('#field-form-state-id').on('change', function () {
        cboLoadCity($(this).val())
    });
    //////////////////
    //Change departments combo
    $('#field-form-departaments-id').on('change', function () {
        cboLoadCategories($(this).val())
    });
    //////////////////
    //Change categorie combo
    $('#field-form-categories-id').on('change', function () {
        cboLoadSubCategories($(this).val())
    });
    //////////////////
    //Change branch combo
    $('#field-form-store-id').on('change', function () {
        cboLoadBranch($(this).val())
    });






    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
        e.preventDefault();
        var $active = $('.wizard .nav-tabs .nav-item .active');
        var $activeli = $active.parent("li");

        $($activeli).next().find('a[data-toggle="tab"]').removeClass("disabled");
        $($activeli).next().find('a[data-toggle="tab"]').click();
    });


    $(".prev-step").click(function (e) {
        e.preventDefault();
        var $active = $('.wizard .nav-tabs .nav-item .active');
        var $activeli = $active.parent("li");

        $($activeli).prev().find('a[data-toggle="tab"]').removeClass("disabled");
        $($activeli).prev().find('a[data-toggle="tab"]').click();

    });


    $('.checkout-form').card({
        // a selector or DOM element for the container
        // where you want the card to appear
        container: '.card-wrapper', // *required*

        // all of the other options from above
        placeholders: {
            number: '0000 0000 0000 0000',
            name: 'Arya Stark',
            expiry: '00/0000',
            cvc: '000'
        }
    });


    window.add_cart_item = function () {

        var id_prod = '1';
        var cant_prod = '1';
        var price = '12';
        $.ajax({
            /* the route pointing to the post function */
            url: '/add-to-cart',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: { id_prod: id_prod, cant_prod: cant_prod, price: price },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                alert(data.success);
            }
        });
    }


    const map_canvas = document.querySelector("#gomap-canvas");
    if (typeof (map_canvas) != 'undefined' && map_canvas != null) {
        initMap();
    }

});
// var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
// var CSRF_TOKENa = $('meta[name="csrf-token"]').attr('content');



function cboLoadState(value) {
    $.ajax({
        url: url_sites + "/load-state/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseState) {

            $('#field-form-state-id').html('');
            $("#field-form-state-id").html('<option value=""> Seleccionar uno </option>');
            var first_element = responseState[0].id;
            responseState.forEach(element => {
                $('#field-form-state-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
            });
            $("#field-form-state-id").selectpicker("refresh");
            cboLoadCity(first_element)
        }
    });
}
function cboLoadCity(value) {
    $.ajax({
        url: url_sites + "/load-city/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseSCat) {

            $('#field-form-city-id').html('');
            $("#field-form-city-id").html('<option value="" selected="true"> Seleccionar uno </option>');
            responseSCat.forEach(element => {
                $('#field-form-city-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
            });
            $("#field-form-city-id").selectpicker("refresh");
        }
    });
}
function cboLoadCategories(value) {
    $.ajax({
        url: url_sites + "/load-categorie/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseCat) {

            $('#field-form-categories-id').html('');
            $("#field-form-categories-id").html('<option value=""> Seleccionar uno </option>');
            var first_element = responseCat[0].id;
            responseCat.forEach(element => {
                $('#field-form-categories-id').append('<option value=' + element.id + '> ' + element.name_es + ' </option>');
            });
            $("#field-form-categories-id").selectpicker("refresh");
            cboLoadSubCategories(first_element)
        }
    });
}
function cboLoadSubCategories(value) {
    $.ajax({
        url: url_sites + "/load-subcategorie/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseSCat) {

            $('#field-form-categories_sub-id').html('');
            $("#field-form-categories_sub-id").html('<option value="" selected="true"> Seleccionar uno </option>');
            responseSCat.forEach(element => {
                $('#field-form-categories_sub-id').append('<option value=' + element.id + '> ' + element.name_es + ' </option>');
            });
            $("#field-form-categories_sub-id").selectpicker("refresh");
        }
    });
}
function cboLoadBranch(value) {
    $.ajax({
        url: url_sites + "/load-branch/" + value,
        dataType: 'json',
        method: 'GET',
        success: function (responseBranc) {

            $('#field-form-branch-id').html('');
            $("#field-form-branch-id").html('<option value=""> Seleccionar uno </option>');
            responseBranc.forEach(element => {
                $('#field-form-branch-id').append('<option value=' + element.id + '> ' + element.name + ' </option>');
            });
            $("#field-form-branch-id").selectpicker("refresh");
        }
    });
}






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
                success: function (json) {
                    $.ajax({
                        url: 'new-currnecy',
                        type: 'post',
                        data: { usd_eur: json.quotes.USDEUR, usd_usd: json.quotes.USDUSD, usd_cop: json.quotes.USDCOP, usd_brl: json.quotes.USDBRL },
                        success: function (response) {

                        }
                    });
                }
            });
        }
    }
}

setInterval(function () { tick(); }, 1000);

var map, infoWindow;
function initMap() {
    var lat_user = document.getElementById('info-user-lat').innerHTML;
    var lon_user = document.getElementById('info-user-lon').innerHTML;
    map = new google.maps.Map(document.getElementById('gomap-canvas'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 6
    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
}

function aaaaaainitMap() {


    var map = new google.maps.Map(document.getElementById('gomap-canvas'), {
        zoom: 40,
        center: { lat: 59.325, lng: 18.070 }
    });

    marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: { lat: 59.327, lng: 18.067 }
    });
    marker.addListener('click', toggleBounce);
}



















