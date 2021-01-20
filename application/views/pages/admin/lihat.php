<div id="page_content">
    <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Data Admin</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Id Admin</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Id Admin</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php 
                        foreach ($list_admin->result() as $row){
                        ?>
                            <tr>
                                <td><?php echo $row->id_admin; ?></td>
                                <td><?php echo $row->nama_admin; ?></td>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo md5($row->password); ?></td>
                                <td>
                                <a class="md-btn md-btn-primary md-btn-small md-btn-wave-light" href="<?= base_url('Admin/edit/' .$row->id_admin);?>">Edit</a>
                                <a class="md-btn md-btn-danger md-btn-small md-btn-wave-light" href="<?= base_url('Admin/hapus/' .$row->id_admin);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
