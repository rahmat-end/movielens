<div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid uk-margin-medium-bottom" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <h4 class="heading_a uk-margin-bottom">MovieLens Dataset</h4>
                    <div class="md-card">
                        <div class="md-card-content">
                            <img src="<?= base_url('asset/img/dataset-cover.png')?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_b uk-margin-bottom">Charts</h3>

            <!-- <h4 class="heading_a uk-margin-bottom uk-margin-large-top">C3.js</h4>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Donut Chart</h4>
                            <div id="c3_chart_donut" class="c3chart"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Stacked Bars Chart</h4>
                            <div id="c3_chart_bar_stacked" class="c3chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Spline Chart</h4>
                            <div id="c3_chart_spline" class="c3chart"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Stacked Area Chart</h4>
                            <div id="c3_chart_area_stacked" class="c3chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="heading_a uk-margin-bottom uk-margin-large-top">Chartist</h4> -->
            <div class="uk-grid" data-uk-grid-margin>
                <!-- <div class="uk-width-large-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Simple Line Chart</h4>
                            <div id="chartist_simple_lines" class="chartist"></div>
                        </div>
                    </div>
                </div> -->
                <div class="uk-width-large-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Diagram Garis Data Nilai Secara Berurutan</h4>
                            <div id="chartist_line_area" class="chartist"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Distribusi Occupation</h4>
                            <div id="chartist_distributed_series" class="chartist"></div>
                            <div id="chartist_distributed_series2" class="chartist"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Distribusi Genre</h4>
                            <div id="chartist_distributed_series3" class="chartist"></div>
                            <div id="chartist_distributed_series4" class="chartist"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Grafik Gender</h4>
                            <div id="chartist_simple_pie" class="chartist chartist-labels-inside"></div>
                            <div style="display: flex; justify-content: center">
                                <div style="display: flex; align-items: center; margin-right: 15px;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #1F77B4; margin-right: 6px; border: none;"></div>
                                    <p>Male</p>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #FF7F0E; margin-right: 6px; border: none;"></div>
                                    <p>Female</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Grafik Rating</h4>
                            <div id="chartist_simple_pie2" class="chartist chartist-labels-inside"></div>
                            <div style="display: flex; justify-content: center">
                                <div style="display: flex; align-items: center; margin-right: 15px;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #1F77B4; margin-right: 6px; border: none;"></div>
                                    <p>Like</p>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #FF7F0E; margin-right: 6px; border: none;"></div>
                                    <p>Not Like</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Grafik Age</h4>
                            <div id="chartist_simple_pie3" class="chartist chartist-labels-inside"></div>
                            <div style="display: flex; justify-content: center">
                                <div style="display: flex; align-items: center; margin-right: 15px;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #1F77B4; margin-right: 6px; border: none;"></div>
                                    <p>0 - 20</p>
                                </div>
                                <div style="display: flex; align-items: center; margin-right: 15px;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #FF7F0E; margin-right: 6px; border: none;"></div>
                                    <p>21 - 30</p>
                                </div>
                                <div style="display: flex; align-items: center; margin-right: 15px;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #2CA02C; margin-right: 6px; border: none;"></div>
                                    <p>31 - 40</p>
                                </div>
                                <div style="display: flex; align-items: center; margin-right: 15px;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #D62728; margin-right: 6px; border: none;"></div>
                                    <p>41 - 50</p>
                                </div>
                                <div style="display: flex; align-items: center; margin-right: 15px;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #9467BD; margin-right: 6px; border: none;"></div>
                                    <p>51 - 60</p>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <div style="display: inline-block; width: 8px; height: 8px; background-color: #8C564B; margin-right: 6px; border: none;"></div>
                                    <p>> 60</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">Animating a Donut with SVG.animate</h4>
                            <div id="chartist_donut_animate" class="chartist"></div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </div>

    <!-- secondary sidebar -->
    <aside id="sidebar_secondary" class="tabbed_sidebar">
        <ul class="uk-tab uk-tab-icons uk-tab-grid" data-uk-tab="{connect:'#dashboard_sidebar_tabs', animation:'slide-horizontal'}">
            <li class="uk-active uk-width-1-3"><a href="#"><i class="material-icons">&#xE422;</i></a></li>
            <li class="uk-width-1-3 chat_sidebar_tab"><a href="#"><i class="material-icons">&#xE0B7;</i></a></li>
            <li class="uk-width-1-3"><a href="#"><i class="material-icons">&#xE8B9;</i></a></li>
        </ul>

        <div class="scrollbar-inner">
            <ul id="dashboard_sidebar_tabs" class="uk-switcher">
                <li>
                    <div class="timeline timeline_small uk-margin-bottom">
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                            <div class="timeline_date">
                                09<span>Aug</span>
                            </div>
                            <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                            <div class="timeline_date">
                                15<span>Aug</span>
                            </div>
                            <div class="timeline_content">Deleted post <a href="#"><strong>Ut ad nam et porro nisi delectus sit harum.</strong></a></div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                            <div class="timeline_date">
                                19<span>Aug</span>
                            </div>
                            <div class="timeline_content">
                                Added photo
                                <div class="timeline_content_addon">
                                    <img src="<?= base_url('asset/assets/img/gallery/Image16.jpg')?>" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                            <div class="timeline_date">
                                21<span>Aug</span>
                            </div>
                            <div class="timeline_content">
                                New comment on post <a href="#"><strong>Nulla soluta similique ratione.</strong></a>
                                <div class="timeline_content_addon">
                                    <blockquote>
                                        Quisquam quia doloremque libero facere sit doloremque.&hellip;
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                            <div class="timeline_date">
                                29<span>Aug</span>
                            </div>
                            <div class="timeline_content">
                                Added to Friends
                                <div class="timeline_content_addon">
                                    <ul class="md-list md-list-addon">
                                        <li>
                                            <div class="md-list-addon-element">
                                                <img class="md-user-image md-list-addon-avatar" src="<?= base_url('asset/assets/img/avatars/avatar_02_tn.png')?>" alt=""/>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">Beth Flatley</span>
                                                <span class="uk-text-small uk-text-muted">Eos quia praesentium.</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="md-list md-list-addon chat_users">
                        <li>
                            <div class="md-list-addon-element">
                                <span class="element-status element-status-success"></span>
                                <img class="md-user-image md-list-addon-avatar" src="<?= base_url('asset/assets/img/avatars/avatar_02_tn.png')?>" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <div class="md-list-action-placeholder"></div>
                                <span class="md-list-heading">Aurore Lynch</span>
                                <span class="uk-text-small uk-text-muted uk-text-truncate">Ratione enim dicta.</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <span class="element-status element-status-success"></span>
                                <img class="md-user-image md-list-addon-avatar" src="<?= base_url('asset/assets/img/avatars/avatar_09_tn.png')?>" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <div class="md-list-action-placeholder"></div>
                                <span class="md-list-heading">Cali Nicolas</span>
                                <span class="uk-text-small uk-text-muted uk-text-truncate">Porro maiores.</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <span class="element-status element-status-danger"></span>
                                <img class="md-user-image md-list-addon-avatar" src="<?= base_url('asset/assets/img/avatars/avatar_04_tn.png')?>" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <div class="md-list-action-placeholder"></div>
                                <span class="md-list-heading">Mikayla Dibbert</span>
                                <span class="uk-text-small uk-text-muted uk-text-truncate">Quia dolor non.</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <span class="element-status element-status-warning"></span>
                                <img class="md-user-image md-list-addon-avatar" src="<?= base_url('asset/assets/img/avatars/avatar_07_tn.png')?>" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <div class="md-list-action-placeholder"></div>
                                <span class="md-list-heading">Naomie Dicki</span>
                                <span class="uk-text-small uk-text-muted uk-text-truncate">Adipisci pariatur dolorem.</span>
                            </div>
                        </li>
                    </ul>
                    <div class="chat_box_wrapper chat_box_small" id="chat">
                        <div class="chat_box chat_box_colors_a">
                            <div class="chat_message_wrapper">
                                <div class="chat_user_avatar">
                                    <img class="md-user-image" src="<?= base_url('asset/assets/img/avatars/avatar_11_tn.png')?>" alt=""/>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eum? </p>
                                    </li>
                                    <li>
                                        <p> Lorem ipsum dolor sit amet.<span class="chat_message_time">13:38</span> </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat_message_wrapper chat_message_right">
                                <div class="chat_user_avatar">
                                    <img class="md-user-image" src="<?= base_url('asset/assets/img/avatars/avatar_03_tn.png')?>" alt=""/>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus distinctio dolor earum est hic id impedit ipsum minima mollitia natus nulla perspiciatis quae quasi, quis recusandae, saepe, sunt totam.
                                            <span class="chat_message_time">13:34</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat_message_wrapper">
                                <div class="chat_user_avatar">
                                    <img class="md-user-image" src="<?= base_url('asset/assets/img/avatars/avatar_11_tn.png')?>" alt=""/>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea mollitia pariatur porro quae sed sequi sint tenetur ut veritatis.
                                            <span class="chat_message_time">23 Jun 1:10am</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat_message_wrapper chat_message_right">
                                <div class="chat_user_avatar">
                                    <img class="md-user-image" src="<?= base_url('asset/assets/img/avatars/avatar_03_tn.png')?>" alt=""/>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetur. </p>
                                    </li>
                                    <li>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            <span class="chat_message_time">Friday 13:34</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <h4 class="heading_c uk-margin-small-bottom uk-margin-top">General Settings</h4>
                    <ul class="md-list">
                        <li>
                            <div class="md-list-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery data-switchery-size="small" checked id="settings_site_online" name="settings_site_online" />
                                </div>
                                <span class="md-list-heading">Site Online</span>
                                <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery data-switchery-size="small" id="settings_seo" name="settings_seo" />
                                </div>
                                <span class="md-list-heading">Search Engine Friendly URLs</span>
                                <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery data-switchery-size="small" id="settings_url_rewrite" name="settings_url_rewrite" />
                                </div>
                                <span class="md-list-heading">Use URL rewriting</span>
                                <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                            </div>
                        </li>
                    </ul>
                    <hr class="md-hr">
                    <h4 class="heading_c uk-margin-small-bottom uk-margin-top">Other Settings</h4>
                    <ul class="md-list">
                        <li>
                            <div class="md-list-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#7cb342" checked id="settings_top_bar" name="settings_top_bar" />
                                </div>
                                <span class="md-list-heading">Top Bar Enabled</span>
                                <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#7cb342" id="settings_api" name="settings_api" />
                                </div>
                                <span class="md-list-heading">Api Enabled</span>
                                <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#d32f2f" id="settings_minify_static" checked name="settings_minify_static" />
                                </div>
                                <span class="md-list-heading">Minify JS files automatically</span>
                                <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <button type="button" class="chat_sidebar_close uk-close"></button>
        <div class="chat_submit_box">
            <div class="uk-input-group">
                <input type="text" class="md-input" name="submit_message" id="submit_message" placeholder="Send message">
                <span class="uk-input-group-addon">
                    <a href="#"><i class="material-icons md-24">&#xE163;</i></a>
                </span>
            </div>
        </div>

    </aside>
    <!-- secondary sidebar end -->
