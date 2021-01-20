<!-- google web fonts -->
<script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="<?= base_url('asset/assets/js/common.min.js')?>"></script>
    <!-- uikit functions -->
    <script src="<?= base_url('asset/assets/js/uikit_custom.min.js')?>"></script>
    <!-- altair common functions/helpers -->
    <script src="<?= base_url('asset/assets/js/altair_admin_common.min.js')?>"></script>

    <!-- page specific plugins -->
        <!-- d3 -->
        <script src="<?= base_url('asset/bower_components/d3/d3.min.js')?>"></script>
        <!-- metrics graphics (charts) -->
        <script src="<?= base_url('asset/bower_components/metrics-graphics/dist/metricsgraphics.min.js')?>"></script>
        <!-- c3.js (charts) -->
        <script src="<?= base_url('asset/bower_components/c3js-chart/c3.min.js')?>"></script>
        <!-- chartist (charts) -->
        <script src="<?= base_url('asset/bower_components/chartist/dist/chartist.min.js')?>"></script>
        <!--  charts functions -->
        <script src="<?= base_url('asset/assets/js/pages/plugins_charts.js')?>"></script>
        <!-- maplace (google maps) -->
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="<?= base_url('asset/bower_components/maplace-js/dist/maplace.min.js')?>"></script>
        <!-- peity (small charts) -->
        <script src="<?= base_url('asset/bower_components/peity/jquery.peity.min.js')?>"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="<?= base_url('asset/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')?>"></script>
        <!-- countUp -->
        <script src="<?= base_url('asset/bower_components/countUp.js/dist/countUp.min.js')?>"></script>
        <!-- handlebars.js -->
        <script src="<?= base_url('asset/bower_components/handlebars/handlebars.min.js')?>"></script>
        <script src="<?= base_url('asset/assets/js/custom/handlebars_helpers.min.js')?>"></script>
        <!-- CLNDR -->
        <script src="<?= base_url('asset/bower_components/clndr/clndr.min.js')?>"></script>

        <!--  dashbord functions -->
        <script src="<?= base_url('asset/assets/js/pages/dashboard.min.js')?>"></script>

		<!-- datatables -->
		<script src="<?= base_url('asset/bower_components/datatables/media/js/jquery.dataTables.min.js')?>"></script>
		<!-- datatables buttons-->
		<script src="<?= base_url('asset/bower_components/datatables-buttons/js/dataTables.buttons.js')?>"></script>
		<script src="<?= base_url('asset/assets/js/custom/datatables/buttons.uikit.js')?>"></script>
		<script src="<?= base_url('asset/bower_components/jszip/dist/jszip.min.js')?>"></script>
		<script src="<?= base_url('asset/bower_components/pdfmake/build/pdfmake.min.js')?>"></script>
		<script src="<?= base_url('asset/bower_components/pdfmake/build/vfs_fonts.js')?>"></script>
		<script src="<?= base_url('asset/bower_components/datatables-buttons/js/buttons.colVis.js')?>"></script>
		<script src="<?= base_url('asset/bower_components/datatables-buttons/js/buttons.html5.js')?>"></script>
		<script src="<?= base_url('asset/bower_components/datatables-buttons/js/buttons.print.js')?>"></script>
		
		<!-- datatables custom integration -->
		<script src="<?= base_url('asset/assets/js/custom/datatables/datatables.uikit.min.js')?>"></script>

		<!--  datatables functions -->
        <script src="<?= base_url('asset/assets/js/pages/plugins_datatables.min.js')?>"></script>
        
        <!--  dropify -->
        <script src="<?= base_url('asset/assets/js/custom/dropify/dist/js/dropify.min.js')?>"></script>

        <!--  form file input functions -->
        <script src="<?= base_url('asset/assets/js/pages/forms_file_input.min.js')?>"></script>

        <!-- parsley (validation) -->
        <script>
        // load parsley config (altair_admin_common.js)
        altair_forms.parsley_validation_config();
        // load extra validators
        altair_forms.parsley_extra_validators();
        </script>
        <script src="<?= base_url('asset/bower_components/parsleyjs/dist/parsley.min.js')?>"></script>
        <!-- jquery steps -->
        <script src="<?= base_url('asset/assets/js/custom/wizard_steps.min.js')?>"></script>
        <!-- handlebars.js -->
        <script src="<?= base_url('asset/bower_components/handlebars/handlebars.min.js')?>"></script>
        <script src="<?= base_url('asset/assets/js/custom/handlebars_helpers.min.js')?>"></script>

        <!--  forms wizard functions -->
        <script src="<?= base_url('asset/assets/js/pages/forms_wizard.min.js')?>"></script>

    <!-- <script>
        $(function() {
            var node = document.createElement("P");
            var textnode = document.createTextNode("Water");
            var x = document.getElementById("wizard_advanced").querySelector(".button_finish");
            node.appendChild(textnode);
            x.appendChild(node);
            alert('suuuu');
        });
    </script> -->
    
    <script>
        $(function() {
            if(isHighDensity()) {
                $.getScript( "<?= base_url('asset/assets/js/custom/dense.min.js')?>", function(data) {
                    // enable hires images
                    altair_helpers.retina_images();
                });
            }
            if(Modernizr.touch) {
                // fastClick (touch devices)
                FastClick.attach(document.body);
            }
        });
        $window.load(function() {
            // ie fixes
            altair_helpers.ie_fix();
        });
    </script>

    <script>
        $(function() {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $slim_sidebar_toggle = $('#style_sidebar_slim'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $html = $('html'),
                $body = $('body');


            $switcher_toggle.click(function(e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $html
                    .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i app_theme_dark')
                    .addClass(this_theme);

                if(this_theme == '') {
                    localStorage.removeItem('altair_theme');
                    $('#kendoCSS').attr('href',"<?= base_url('asset/bower_components/kendo-ui/styles/kendo.material.min.css')?>");
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                    if(this_theme == 'app_theme_dark') {
                        $('#kendoCSS').attr('href',"<?= base_url('asset/bower_components/kendo-ui/styles/kendo.materialblack.min.css')?>")
                    } else {
                        $('#kendoCSS').attr('href',"<?= base_url('asset/bower_components/kendo-ui/styles/kendo.material.min.css')?>");
                    }
                }

            });

            // hide style switcher
            $document.on('click keyup', function(e) {
                if( $switcher.hasClass('switcher_active') ) {
                    if (
                        ( !$(e.target).closest($switcher).length )
                        || ( e.keyCode == 27 )
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if(localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
            }


        // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    localStorage.removeItem('altair_sidebar_slim');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });

        // toggle slim sidebar

            // change input's state to checked if mini sidebar is active
            if((localStorage.getItem("altair_sidebar_slim") !== null && localStorage.getItem("altair_sidebar_slim") == '1') || $body.hasClass('sidebar_slim')) {
                $slim_sidebar_toggle.iCheck('check');
            }

            $slim_sidebar_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_slim", '1');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_slim');
                    location.reload(true);
                });

        // toggle boxed layout

            if((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

        // main menu accordion mode
            if($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function(){
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function(){
                    $sidebar_main.removeClass('accordion_mode');
                });


        });
    </script>
</body>
</html>
