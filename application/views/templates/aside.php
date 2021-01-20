<!-- main sidebar -->
<aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="<?= base_url('asset/img/logo.png');?>" alt="" height="15" width="45"/>
                    <img class="logo_light" src="<?= base_url('asset/img/logo.png');?>" alt="" height="15" width="45"/>
                </a>
                <a href="index.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="<?= base_url('asset/img/logo.png');?>" alt="" height="32" width="32"/>
                    <img class="logo_light" src="<?= base_url('asset/img/logo.png');?>" alt="" height="32" width="32"/>
                </a>
            </div>
        </div>
        
        <div class="menu_section">
            <ul>
                <li class="current_section" title="Dashboard">
                    <a href="<?= base_url('Auth/dash');?>">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                <li title="Admin">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Admin</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('Admin/lihat');?>">Daftar</a></li>
                        <li><a href="<?= base_url('Admin/add');?>">Tambah</a></li>
                    </ul>
                </li>
                <li title="User">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">User</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('User/lihat');?>">Daftar</a></li>
                        <li><a href="<?= base_url('User/add');?>">Tambah</a></li>
                    </ul>
                </li>
                <li title="Occupation">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">work</i></span>
                        <span class="menu_title">Occupation</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('Occupation/lihat');?>">Daftar</a></li>
                        <li><a href="<?= base_url('Occupation/add');?>">Tambah</a></li>
                    </ul>
                </li>
                <li title="Item">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">label</i></span>
                        <span class="menu_title">Item</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('Item/lihat');?>">Daftar</a></li>
                        <li><a href="<?= base_url('Item/add');?>">Tambah</a></li>
                    </ul>
                </li>
                <li title="Data">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">assignment_turned_in</i></span>
                        <span class="menu_title">Data</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('Data/lihat');?>">Daftar</a></li>
                        <li><a href="<?= base_url('Data/add');?>">Tambah</a></li>
                    </ul>
                </li>
                <li title="Rekomendasi">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">stars</i></span>
                        <span class="menu_title">Rekomendasi</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('Rekomendasi/matrix');?>">Rating Matrix</a></li>
                        <li><a href="<?= base_url('Rekomendasi/prior');?>">Prior, Likelihood</a></li>
                        <li><a href="<?= base_url('Rekomendasi/score');?>">Classification Score, Reliability</a></li>
                        <li><a href="<?= base_url('Rekomendasi/item');?>">Rekomendasi Item</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->