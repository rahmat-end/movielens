<div id="page_content">
    <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Running Example</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <h5 style="font-size: 16px; color: #444; font-weight: 400; margin-bottom: 25px;">Prior Probability Item i1 (User-Based Approach) dan User u1 (Item-Based Approach)</h5>
                        <table class="uk-table uk-table-hover uk-table-nowrap uk-table-align-vertical">
                            <thead>
                                <tr>
                                    <th class="uk-width-1-10"></th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">1</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">2</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">3</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">4</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">5</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($list_prior as $row) { ?>
                                <tr>
                                    <td class="md-bg-grey-100 uk-text-small"><?php echo $row['string']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val1']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val2']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val3']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val4']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val5']; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <h5 style="font-size: 16px; color: #444; font-weight: 400; margin-bottom: 25px; margin-top: 45px;">Likelihood Item i1 based on the ratings of the user u1</h5>
                        <table class="uk-table uk-table-hover uk-table-nowrap uk-table-align-vertical">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small" colspan="5">y</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th class="uk-width-1-10" style="width: 20px;"></th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">1</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">2</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">3</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">4</th>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small">5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="md-bg-grey-100 uk-text-small" rowspan="19" style="width: 20px;">in</td>
                                </tr>
                                <?php foreach ($list_likelihood_user as $row) { ?>
                                <tr>
                                    <td class="md-bg-grey-100 uk-text-small" style="width: 20px;"><?php echo $row['item']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val1']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val2']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val3']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val4']; ?></td>
                                    <td class="uk-text-center"><?php echo $row['val5']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
