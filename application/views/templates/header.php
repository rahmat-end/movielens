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

    <!-- additional styles for plugins -->
        <!-- weather icons -->
        <link rel="stylesheet" href="<?= base_url('asset/bower_components/weather-icons/css/weather-icons.min.css')?>" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="<?= base_url('asset/bower_components/metrics-graphics/dist/metricsgraphics.css')?>">
        <!-- c3.js (charts) -->
        <link rel="stylesheet" href="<?= base_url('asset/bower_components/c3js-chart/c3.min.css')?>">
        <!-- chartist -->
        <link rel="stylesheet" href="<?= base_url('asset/bower_components/chartist/dist/chartist.min.css')?>">

    <!-- dropify -->
    <link rel="stylesheet" href="<?= base_url('asset/assets/skins/dropify/css/dropify.css')?>">
    
    <!-- uikit -->
    <link rel="stylesheet" href="<?= base_url('asset/bower_components/uikit/css/uikit.almost-flat.min.css')?>" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?= base_url('asset/assets/icons/flags/flags.min.css')?>" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="<?= base_url('asset/assets/css/style_switcher.min.css')?>" media="all">
    
    <!-- altair admin -->
    <link rel="stylesheet" href="<?= base_url('asset/assets/css/main.min.css')?>" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="<?= base_url('asset/assets/css/themes/themes_combined.min.css')?>" media="all">

    <link rel="stylesheet" href="<?= base_url('asset/css/style.css')?>" />

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
        <link rel="stylesheet" href="assets/css/ie.css" media="all">
    <![endif]-->

</head>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><div class="thumb" style="background-color: #f8f8f8; display: inline-block; width: 35px; height: 35px; border-radius: 50%; overflow: hidden; margin-top: 7px; text-align: center;"><i class="material-icons" style="font-size: 30px;">&#xE87C;</i></div></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="javascript:void(0);" ><?php echo $this->session->userdata('nama_admin'); ?></a></li>
                                    <li><a href="<?= base_url('Auth/logout');?>">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form uk-autocomplete" data-uk-autocomplete="{source:'<?= base_url('asset/data/search_data.json')?>'}">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
                <script type="text/autocomplete">
                    <ul class="uk-nav uk-nav-autocomplete uk-autocomplete-results">
                        {{~items}}
                        <li data-value="{{ $item.value }}">
                            <a href="{{ $item.url }}" class="needsclick">
                                {{ $item.value }}<br>
                                <span class="uk-text-muted uk-text-small">{{{ $item.text }}}</span>
                            </a>
                        </li>
                        {{/items}}
                    </ul>
                </script>
            </form>
        </div>
    </header><!-- main header end -->
