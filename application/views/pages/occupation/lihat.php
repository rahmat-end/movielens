<div id="page_content">
    <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Data Occupation</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Id Occupation</th>
                            <th>Name Occupation</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Id Occupation</th>
                            <th>Name Occupation</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php 
                        foreach ($list_occupation->result() as $row){
                        ?>
                            <tr>
                                <td><?php echo $row->id_occupation; ?></td>
                                <td><?php echo $row->name_occupation; ?></td>
                                <td>
                                    <a class="md-btn md-btn-primary md-btn-small md-btn-wave-light" href="<?= base_url('Occupation/edit/' .$row->id_occupation);?>">Edit</a>
                                    <a class="md-btn md-btn-danger md-btn-small md-btn-wave-light" href="<?= base_url('Occupation/hapus/' .$row->id_occupation);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
