<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <title>MovieLens - Dataset</title>
	<link rel="shortcut icon" href="<?= base_url('asset/img/logo.png')?>" type="image/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css')?>"> -->

    <!-- dropify -->
    <link rel="stylesheet" href="<?= base_url('asset/assets/skins/dropify/css/dropify.css')?>">

    <!-- uikit -->
    <link rel="stylesheet" href="<?= base_url('asset/bower_components/uikit/css/uikit.almost-flat.min.css')?>"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?= base_url('asset/assets/css/login_page.css')?>" />
	<link rel="stylesheet" href="<?= base_url('asset/css/login.css')?>" />

</head>
<body class="login_page">
    <div class="layer-body"></div>
    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_admin">
                <div class="login_heading">
                    <div class="user_avatar" style="background-color: transparent;"></div>
                </div>
                <h2 class="heading_a uk-margin-medium-bottom">Login Admin</h2>
                <form action="<?php echo base_url('Auth/proses_login_admin') ?>" method="post">
					<?php echo  $this->session->flashdata('msg');?>
					<?php if(isset($msg)){?>
						<?php echo $msg;?>
					<?php } ?>
                    <div class="uk-form-row">
                        <label for="login_username">Username</label>
                        <input class="md-input" type="text" name="username" />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Password</label>
                        <input class="md-input" type="password" name="password" />
                    </div>
                    <div class="uk-margin-medium-top">
						<button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- common functions -->
    <script src="<?= base_url('asset/assets/js/common.min.js')?>"></script>
    <!-- uikit functions -->
    <script src="<?= base_url('asset/assets/js/uikit_custom.min.js')?>"></script>
    <!-- altair core functions -->
    <script src="<?= base_url('asset/assets/js/altair_admin_common.min.js')?>"></script>

    <!-- page specific plugins -->
    <!--  dropify -->
    <script src="<?= base_url('asset/assets/js/custom/dropify/dist/js/dropify.min.js')?>"></script>

    <!--  form file input functions -->
    <script src="<?= base_url('asset/assets/js/pages/forms_file_input.min.js')?>"></script>

    <!-- altair login page functions -->
    <script src="<?= base_url('asset/assets/js/pages/login.js')?>"></script>

    <script>
        // check for theme
        if (typeof(Storage) !== "undefined") {
            var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
            if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
                root.className += ' app_theme_dark';
            }
        }
    </script>

</body>
</html>
