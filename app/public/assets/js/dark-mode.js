$(document).ready(function () {
    $('body').on('change', '#darkMode', function (e) {
        if (this.checked) {
            jQuery('head').append('<link rel="stylesheet" id="darkModeCss" href="assets/css/dark-mode.css" type="text/css" />');
        } else {
            $('head').find('link#darkModeCss').remove();
        }
    })
})
