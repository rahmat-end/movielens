<div id="page_content">
    <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Data Rating</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Id User</th>
                            <th>Id Item</th>
                            <th>Rating</th>
                            <th>Timestamp</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Id User</th>
                            <th>Id Item</th>
                            <th>Rating</th>
                            <th>Timestamp</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $count = 1; ?>
                        <?php 
                        foreach ($list_data->result() as $row){
                        ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row->id_user; ?></td>
                                <td><?php echo $row->movie; ?></td>
                                <td><?php echo $row->rating; ?></td>
                                <td><?php echo date('d/m/Y H:i:s', $row->timestamp); ?></td>
                            </tr>
                            <?php $count++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
