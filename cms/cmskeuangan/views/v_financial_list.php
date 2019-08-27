<div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Quick Financial Health Check</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Variabel 1</th>
                    <th>Variabel 2</th>
                    <th>Variabel 3</th>
                    <th>Variabel 4</th>
                    <th>Value 1</th>
                    <th>Value 2</th>
                    <th>Value 3</th>
                    <th>Value 4</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($totalFinancial != 0) {
                $i=1;
                    foreach (is_object($financial) || is_array($financial) ? $financial : array() as $idx => $row) {
                        echo '<tr class="<?=$i%2==0?\'even\':\'odd\'?> pointer">';                                                   
                            echo '<td class=" ">'.$i.'</td>';
                            echo '<td class=" ">'.$row->question.'</td>';
                            echo '<td class=" ">'.$row->variable_1.'</td>';
                            echo '<td class=" ">'.$row->variable_2.'</td>';
                            echo '<td class=" ">'.$row->variable_3.'</td>';
                            echo '<td class=" ">'.$row->variable_4.'</td>';
                            echo '<td class=" ">'.$row->value_1.'</td>';
                            echo '<td class=" ">'.$row->value_2.'</td>';
                            echo '<td class=" ">'.$row->value_3.'</td>';
                            echo '<td class=" ">'.$row->value_4.'</td>';
                            echo '<td class=" ">
                                    <a onclick="location.href=\''.site_url('financial/editdata/'.$row->id).'\';" class="edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a onclick="if (confirm(\'Hapus Data -'.$row->question.'- ?\')) location.href=\''.site_url('user/deldata/'.$row->id).'\';" class="delete" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                  </td>';
                        echo '</tr>';
                                                    
                        $i++;
                    }
            } else {
                echo '<td colspan="3" style="text-align:center;"><i>Tidak Ada Data</i></td>';
            }
            ?>
            </tbody>
        </table>
        <div class="btn-toolbar">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>