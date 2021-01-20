<div id="page_content">
    <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Data User</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Id User</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Zipcode</th>
                            <th>Occupation</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Id User</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Zipcode</th>
                            <th>Occupation</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php 
                        foreach ($list_user->result() as $row){
                        ?>
                            <tr>
                                <td><?php echo $row->id_user; ?></td>
                                <td><?php echo $row->age; ?></td>
                                <td><?php echo $row->gender; ?></td>
                                <td><?php echo $row->zipcode; ?></td>
                                <td><?php echo $row->name_occupation; ?></td>
                                <td>
                                    <a class="md-btn md-btn-primary md-btn-small md-btn-wave-light" href="<?= base_url('User/edit/' .$row->id_user);?>">Edit</a>
                                    <a class="md-btn md-btn-danger md-btn-small md-btn-wave-light" href="<?= base_url('User/hapus/' .$row->id_user);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                                </td>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
