$(function() {
    // login_page
    altair_login_page.init();
});

// variables
var $login_card = $('#login_card'),
    $login_admin = $('#login_admin'),
    $login_help = $('#login_help'),
    $login_peserta = $('#login_peserta'),
    $register_peserta = $('#register_peserta'),
    $login_password_reset = $('#login_password_reset');

altair_login_page = {
    init: function () {
        // show login admin (hide other forms)
        var login_admin_show = function() {
            $login_admin
                .show()
                .siblings()
                .hide();
        };

        // show login peserta (hide other forms)
        var login_peserta_show = function() {
            $login_peserta
                .show()
                .siblings()
                .hide();
        };

        // show register peserta (hide other forms)
        var register_peserta_show = function() {
            $register_peserta
                .show()
                .siblings()
                .hide();
        };

        // show login help (hide other forms)
        var login_help_show = function() {
            $login_help
                .show()
                .siblings()
                .hide();
        };

        // show password reset form (hide other forms)
        var password_reset_show = function() {
            $login_password_reset
                .show()
                .siblings()
                .hide();
        };

        $('#login_help_show').on('click',function(e) {
            e.preventDefault();
            // card animation & complete callback: login_help_show
            altair_md.card_show_hide($login_card,undefined,login_help_show,undefined);
        });

        $('#login_peserta_show').on('click',function(e) {
            e.preventDefault();
            $(this).fadeOut('280');
            // card animation & complete callback: login_peserta_show
            altair_md.card_show_hide($login_card,undefined,login_peserta_show,undefined);
        });

        $('.back_to_login_admin').on('click',function(e) {
            e.preventDefault();
            $('#login_peserta_show').fadeIn('280');
            // card animation & complete callback: login_admin_show
            altair_md.card_show_hide($login_card,undefined,login_admin_show,undefined);
        });

        $('#register_peserta_show').on('click',function(e) {
            e.preventDefault();
            $(this).fadeOut('280');
            // card animation & complete callback: register_peserta_show
            altair_md.card_show_hide($login_card,undefined,register_peserta_show,undefined);
        });

        $('.back_to_login_peserta').on('click',function(e) {
            e.preventDefault();
            $('#register_peserta_show').fadeIn('280');
            // card animation & complete callback: login_peserta_show
            altair_md.card_show_hide($login_card,undefined,login_peserta_show,undefined);
        });

        $('#password_reset_show').on('click',function(e) {
            e.preventDefault();
            // card animation & complete callback: password_reset_show
            altair_md.card_show_hide($login_card,undefined,password_reset_show,undefined);
        });


    }
};