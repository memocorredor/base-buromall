$(function () {
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
});
