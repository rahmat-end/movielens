<div id="page_content">
    <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Data Item</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Id Item</th>
                            <th>Movie</th>
                            <th>Release</th>
                            <th>Video Release</th>
                            <th>IMDB Url</th>
                            <th>Genre</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Id Item</th>
                            <th>Movie</th>
                            <th>Release</th>
                            <th>Video Release</th>
                            <th>IMDB Url</th>
                            <th>Genre</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php 
                        foreach ($list_item->result() as $row){
                        ?>
                            <tr>
                                <td><?php echo $row->id_item; ?></td>
                                <td><?php echo $row->movie; ?></td>
                                <td><?php echo $row->release_date; ?></td>
                                <td><?php $tanggal = $row->video_release_date; echo getIndoHari($tanggal); ?></td>
                                <td style="white-space: normal!important;"><?php echo $row->imdb_url; ?></td>
                                <td style="white-space: normal!important;">
                                    <?php if($row->unknown==NULL): echo ''; else: echo $row->unknown.', '; endif; ?>
                                    <?php if($row->action==NULL): echo ''; else: echo $row->action.', '; endif; ?>
                                    <?php if($row->adventure==NULL): echo ''; else: echo $row->adventure.', '; endif; ?>
                                    <?php if($row->animation==NULL): echo ''; else: echo $row->animation.', '; endif; ?>
                                    <?php if($row->children==NULL): echo ''; else: echo $row->children.', '; endif; ?>
                                    <?php if($row->comedy==NULL): echo ''; else: echo $row->comedy.', '; endif; ?>
                                    <?php if($row->crime==NULL): echo ''; else: echo $row->crime.', '; endif; ?>
                                    <?php if($row->documentary==NULL): echo ''; else: echo $row->documentary.', '; endif; ?>
                                    <?php if($row->drama==NULL): echo ''; else: echo $row->drama.', '; endif; ?>
                                    <?php if($row->fantasy==NULL): echo ''; else: echo $row->fantasy.', '; endif; ?>
                                    <?php if($row->film_noir==NULL): echo ''; else: echo $row->film_noir.', '; endif; ?>
                                    <?php if($row->horror==NULL): echo ''; else: echo $row->horror.', '; endif; ?>
                                    <?php if($row->musical==NULL): echo ''; else: echo $row->musical.', '; endif; ?>
                                    <?php if($row->mystery==NULL): echo ''; else: echo $row->mystery.', '; endif; ?>
                                    <?php if($row->romance==NULL): echo ''; else: echo $row->romance.', '; endif; ?>
                                    <?php if($row->sci_fi==NULL): echo ''; else: echo $row->sci_fi.', '; endif; ?>
                                    <?php if($row->thriller==NULL): echo ''; else: echo $row->thriller.', '; endif; ?>
                                    <?php if($row->war==NULL): echo ''; else: echo $row->war.', '; endif; ?>
                                    <?php if($row->western==NULL): echo ''; else: echo $row->western.', '; endif; ?>
                                </td>
                                <td>
                                    <a class="md-btn md-btn-primary md-btn-small md-btn-wave-light" href="<?= base_url('Item/edit/' .$row->id_item);?>">Edit</a>
                                    <a class="md-btn md-btn-danger md-btn-small md-btn-wave-light" href="<?= base_url('Item/hapus/' .$row->id_item);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                                </td>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
