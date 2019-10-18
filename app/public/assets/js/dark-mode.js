$(document).ready(function () {
    $('#dark-mode').on('click', function (e) {
        e.preventDefault();
        let isDarkModeOn = $(this).data('dark-mode');
        if (!isDarkModeOn) {
            jQuery('head').append('<link rel="stylesheet" id="darkModeCss" href="assets/css/dark-mode.css" type="text/css" />');
            $(".custom-icon").each(function (key, icon) {
                $(icon).attr("src", icon.src.replace("assets/images/icons/", "assets/images/icons/dark_mode/"));
            });
        } else {
            $('head').find('link#darkModeCss').remove();
            $(".custom-icon").each(function (key, icon) {
                $(icon).attr("src", icon.src.replace("assets/images/icons/dark_mode/", "assets/images/icons/"));
            });
        }

        $(this).data('dark-mode', !isDarkModeOn);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "changeMode",
            data: {'dark_mode': !isDarkModeOn},
            success: function (res) {
                console.log(res)
            },
            error: function (err) {
                console.log(err)
            }
        })
    })
})
