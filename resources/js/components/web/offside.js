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

});
