$(document).ready(function () {
    $('body').on('change', '#darkMode', function (e) {
        if (this.checked) {
            jQuery('head').append('<link rel="stylesheet" id="darkModeCss" href="assets/css/dark-mode.css" type="text/css" />');
            $(".custom-icon").each(function (key, icon ) {
                $(icon).attr("src", icon.src.replace("assets/images/icons/", "assets/images/icons/dark_mode/"));
            });
        } else {
            $('head').find('link#darkModeCss').remove();
            $(".custom-icon").each(function (key, icon ) {
                $(icon).attr("src", icon.src.replace("assets/images/icons/dark_mode/", "assets/images/icons/"));
            });
        }
    })
})
