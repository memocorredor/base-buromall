$(function () {
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
});
