<div id="page_content">
    <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Running Example</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <h5 style="font-size: 16px; color: #444; font-weight: 400; margin-bottom: 25px;">Rating Matrix</h5>
                        <table class="uk-table uk-table-hover uk-table-nowrap uk-table-align-vertical">
                            <thead>
                                <tr>
                                    <th class="uk-width-1-10"></th>
                                    <?php foreach ($kolom->result() as $row) { ?>
                                    <th class="uk-text-center md-bg-grey-100 uk-text-small"><?php echo $row->COLUMN_NAME; ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>

                            <!-- <?php foreach ($build_array as $row) { ?>
                                <tr>
                                    <td class="md-bg-grey-100 uk-text-small">U_<?php echo $row['parent_array']->id_user; ?></td>
                                    <?php foreach ($row["child_array"] as $kolom) {?>
                                    <td class="uk-text-center"><?php echo $kolom->COLUMN_NAME;?></td>
                                    <?php } ?>
                                </tr>
                            <?php } ?> -->

                            <?php foreach ($list_matrix->result() as $row) { ?>
                                <tr>
                                    <td class="md-bg-grey-100 uk-text-small"><?php echo 'U_'.$row->id_user; ?></td>
                                    <td><?php if($row->Rui_1==NULL): echo '•'; else: echo $row->Rui_1; endif; ?></td>
                                    <td><?php if($row->Rui_2==NULL): echo '•'; else: echo $row->Rui_2; endif; ?></td>
                                    <td><?php if($row->Rui_3==NULL): echo '•'; else: echo $row->Rui_3; endif; ?></td>
                                    <td><?php if($row->Rui_4==NULL): echo '•'; else: echo $row->Rui_4; endif; ?></td>
                                    <td><?php if($row->Rui_5==NULL): echo '•'; else: echo $row->Rui_5; endif; ?></td>
                                    <td><?php if($row->Rui_6==NULL): echo '•'; else: echo $row->Rui_6; endif; ?></td>
                                    <td><?php if($row->Rui_7==NULL): echo '•'; else: echo $row->Rui_7; endif; ?></td>
                                    <td><?php if($row->Rui_8==NULL): echo '•'; else: echo $row->Rui_8; endif; ?></td>
                                    <td><?php if($row->Rui_9==NULL): echo '•'; else: echo $row->Rui_9; endif; ?></td>
                                    <td><?php if($row->Rui_10==NULL): echo '•'; else: echo $row->Rui_10; endif; ?></td>
                                    <td><?php if($row->Rui_11==NULL): echo '•'; else: echo $row->Rui_11; endif; ?></td>
                                    <td><?php if($row->Rui_12==NULL): echo '•'; else: echo $row->Rui_12; endif; ?></td>
                                    <td><?php if($row->Rui_13==NULL): echo '•'; else: echo $row->Rui_13; endif; ?></td>
                                    <td><?php if($row->Rui_14==NULL): echo '•'; else: echo $row->Rui_14; endif; ?></td>
                                    <td><?php if($row->Rui_15==NULL): echo '•'; else: echo $row->Rui_15; endif; ?></td>
                                    <td><?php if($row->Rui_16==NULL): echo '•'; else: echo $row->Rui_16; endif; ?></td>
                                    <td><?php if($row->Rui_17==NULL): echo '•'; else: echo $row->Rui_17; endif; ?></td>
                                    <td><?php if($row->Rui_19==NULL): echo '•'; else: echo $row->Rui_19; endif; ?></td>
                                    <td><?php if($row->Rui_20==NULL): echo '•'; else: echo $row->Rui_20; endif; ?></td>
                                    <td><?php if($row->Rui_21==NULL): echo '•'; else: echo $row->Rui_21; endif; ?></td>
                                    <td><?php if($row->Rui_22==NULL): echo '•'; else: echo $row->Rui_22; endif; ?></td>
                                    <td><?php if($row->Rui_23==NULL): echo '•'; else: echo $row->Rui_23; endif; ?></td>
                                    <td><?php if($row->Rui_24==NULL): echo '•'; else: echo $row->Rui_24; endif; ?></td>
                                    <td><?php if($row->Rui_25==NULL): echo '•'; else: echo $row->Rui_25; endif; ?></td>
                                    <td><?php if($row->Rui_26==NULL): echo '•'; else: echo $row->Rui_26; endif; ?></td>
                                    <td><?php if($row->Rui_27==NULL): echo '•'; else: echo $row->Rui_27; endif; ?></td>
                                    <td><?php if($row->Rui_28==NULL): echo '•'; else: echo $row->Rui_28; endif; ?></td>
                                    <td><?php if($row->Rui_29==NULL): echo '•'; else: echo $row->Rui_29; endif; ?></td>
                                    <td><?php if($row->Rui_30==NULL): echo '•'; else: echo $row->Rui_30; endif; ?></td>
                                    <td><?php if($row->Rui_31==NULL): echo '•'; else: echo $row->Rui_31; endif; ?></td>
                                    <td><?php if($row->Rui_32==NULL): echo '•'; else: echo $row->Rui_32; endif; ?></td>
                                    <td><?php if($row->Rui_33==NULL): echo '•'; else: echo $row->Rui_33; endif; ?></td>
                                    <td><?php if($row->Rui_34==NULL): echo '•'; else: echo $row->Rui_34; endif; ?></td>
                                    <td><?php if($row->Rui_36==NULL): echo '•'; else: echo $row->Rui_36; endif; ?></td>
                                    <td><?php if($row->Rui_37==NULL): echo '•'; else: echo $row->Rui_37; endif; ?></td>
                                    <td><?php if($row->Rui_38==NULL): echo '•'; else: echo $row->Rui_38; endif; ?></td>
                                    <td><?php if($row->Rui_39==NULL): echo '•'; else: echo $row->Rui_39; endif; ?></td>
                                    <td><?php if($row->Rui_40==NULL): echo '•'; else: echo $row->Rui_40; endif; ?></td>
                                    <td><?php if($row->Rui_41==NULL): echo '•'; else: echo $row->Rui_41; endif; ?></td>
                                    <td><?php if($row->Rui_42==NULL): echo '•'; else: echo $row->Rui_42; endif; ?></td>
                                    <td><?php if($row->Rui_43==NULL): echo '•'; else: echo $row->Rui_43; endif; ?></td>
                                    <td><?php if($row->Rui_44==NULL): echo '•'; else: echo $row->Rui_44; endif; ?></td>
                                    <td><?php if($row->Rui_45==NULL): echo '•'; else: echo $row->Rui_45; endif; ?></td>
                                    <td><?php if($row->Rui_47==NULL): echo '•'; else: echo $row->Rui_47; endif; ?></td>
                                    <td><?php if($row->Rui_48==NULL): echo '•'; else: echo $row->Rui_48; endif; ?></td>
                                    <td><?php if($row->Rui_49==NULL): echo '•'; else: echo $row->Rui_49; endif; ?></td>
                                    <td><?php if($row->Rui_50==NULL): echo '•'; else: echo $row->Rui_50; endif; ?></td>
                                    <td><?php if($row->Rui_51==NULL): echo '•'; else: echo $row->Rui_51; endif; ?></td>
                                    <td><?php if($row->Rui_52==NULL): echo '•'; else: echo $row->Rui_52; endif; ?></td>
                                    <td><?php if($row->Rui_53==NULL): echo '•'; else: echo $row->Rui_53; endif; ?></td>
                                    <td><?php if($row->Rui_54==NULL): echo '•'; else: echo $row->Rui_54; endif; ?></td>
                                    <td><?php if($row->Rui_55==NULL): echo '•'; else: echo $row->Rui_55; endif; ?></td>
                                    <td><?php if($row->Rui_56==NULL): echo '•'; else: echo $row->Rui_56; endif; ?></td>
                                    <td><?php if($row->Rui_57==NULL): echo '•'; else: echo $row->Rui_57; endif; ?></td>
                                    <td><?php if($row->Rui_58==NULL): echo '•'; else: echo $row->Rui_58; endif; ?></td>
                                    <td><?php if($row->Rui_59==NULL): echo '•'; else: echo $row->Rui_59; endif; ?></td>
                                    <td><?php if($row->Rui_60==NULL): echo '•'; else: echo $row->Rui_60; endif; ?></td>
                                    <td><?php if($row->Rui_61==NULL): echo '•'; else: echo $row->Rui_61; endif; ?></td>
                                    <td><?php if($row->Rui_62==NULL): echo '•'; else: echo $row->Rui_62; endif; ?></td>
                                    <td><?php if($row->Rui_63==NULL): echo '•'; else: echo $row->Rui_63; endif; ?></td>
                                    <td><?php if($row->Rui_64==NULL): echo '•'; else: echo $row->Rui_64; endif; ?></td>
                                    <td><?php if($row->Rui_65==NULL): echo '•'; else: echo $row->Rui_65; endif; ?></td>
                                    <td><?php if($row->Rui_66==NULL): echo '•'; else: echo $row->Rui_66; endif; ?></td>
                                    <td><?php if($row->Rui_67==NULL): echo '•'; else: echo $row->Rui_67; endif; ?></td>
                                    <td><?php if($row->Rui_68==NULL): echo '•'; else: echo $row->Rui_68; endif; ?></td>
                                    <td><?php if($row->Rui_69==NULL): echo '•'; else: echo $row->Rui_69; endif; ?></td>
                                    <td><?php if($row->Rui_70==NULL): echo '•'; else: echo $row->Rui_70; endif; ?></td>
                                    <td><?php if($row->Rui_71==NULL): echo '•'; else: echo $row->Rui_71; endif; ?></td>
                                    <td><?php if($row->Rui_72==NULL): echo '•'; else: echo $row->Rui_72; endif; ?></td>
                                    <td><?php if($row->Rui_73==NULL): echo '•'; else: echo $row->Rui_73; endif; ?></td>
                                    <td><?php if($row->Rui_74==NULL): echo '•'; else: echo $row->Rui_74; endif; ?></td>
                                    <td><?php if($row->Rui_76==NULL): echo '•'; else: echo $row->Rui_76; endif; ?></td>
                                    <td><?php if($row->Rui_77==NULL): echo '•'; else: echo $row->Rui_77; endif; ?></td>
                                    <td><?php if($row->Rui_78==NULL): echo '•'; else: echo $row->Rui_78; endif; ?></td>
                                    <td><?php if($row->Rui_79==NULL): echo '•'; else: echo $row->Rui_79; endif; ?></td>
                                    <td><?php if($row->Rui_80==NULL): echo '•'; else: echo $row->Rui_80; endif; ?></td>
                                    <td><?php if($row->Rui_81==NULL): echo '•'; else: echo $row->Rui_81; endif; ?></td>
                                    <td><?php if($row->Rui_82==NULL): echo '•'; else: echo $row->Rui_82; endif; ?></td>
                                    <td><?php if($row->Rui_83==NULL): echo '•'; else: echo $row->Rui_83; endif; ?></td>
                                    <td><?php if($row->Rui_84==NULL): echo '•'; else: echo $row->Rui_84; endif; ?></td>
                                    <td><?php if($row->Rui_85==NULL): echo '•'; else: echo $row->Rui_85; endif; ?></td>
                                    <td><?php if($row->Rui_86==NULL): echo '•'; else: echo $row->Rui_86; endif; ?></td>
                                    <td><?php if($row->Rui_87==NULL): echo '•'; else: echo $row->Rui_87; endif; ?></td>
                                    <td><?php if($row->Rui_88==NULL): echo '•'; else: echo $row->Rui_88; endif; ?></td>
                                    <td><?php if($row->Rui_89==NULL): echo '•'; else: echo $row->Rui_89; endif; ?></td>
                                    <td><?php if($row->Rui_90==NULL): echo '•'; else: echo $row->Rui_90; endif; ?></td>
                                    <td><?php if($row->Rui_91==NULL): echo '•'; else: echo $row->Rui_91; endif; ?></td>
                                    <td><?php if($row->Rui_92==NULL): echo '•'; else: echo $row->Rui_92; endif; ?></td>
                                    <td><?php if($row->Rui_93==NULL): echo '•'; else: echo $row->Rui_93; endif; ?></td>
                                    <td><?php if($row->Rui_94==NULL): echo '•'; else: echo $row->Rui_94; endif; ?></td>
                                    <td><?php if($row->Rui_95==NULL): echo '•'; else: echo $row->Rui_95; endif; ?></td>
                                    <td><?php if($row->Rui_96==NULL): echo '•'; else: echo $row->Rui_96; endif; ?></td>
                                    <td><?php if($row->Rui_97==NULL): echo '•'; else: echo $row->Rui_97; endif; ?></td>
                                    <td><?php if($row->Rui_98==NULL): echo '•'; else: echo $row->Rui_98; endif; ?></td>
                                    <td><?php if($row->Rui_99==NULL): echo '•'; else: echo $row->Rui_99; endif; ?></td>
                                    <td><?php if($row->Rui_100==NULL): echo '•'; else: echo $row->Rui_100; endif; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
