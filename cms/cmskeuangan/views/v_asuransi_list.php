<div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Kecukupan Asuransi Jiwa</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Variabel</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($total != 0) {
                        $i=1;
                            foreach (is_object($asuransi) || is_array($asuransi) ? $asuransi : array() as $idx => $row) {
                                echo '<tr class="<?=$i%2==0?\'even\':\'odd\'?> pointer">';                                                    
                                    echo '<td class=" ">'.$i.'</td>';
                                    echo '<td class=" ">'.$row->question.'</td>';
                                    echo '<td class=" ">'.$row->variable.'</td>';
                                    echo '<td class=" ">
                                    <a onclick="location.href=\''.site_url('user/editdata/'.$row->id).'\';" class="edit" data-toggle="modal"><i class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Edit"></i></a>
                                    <a onclick="if (confirm(\'Hapus Data -'.$row->question.'- ?\')) location.href=\''.site_url('user/deldata/'.$row->id).'\';" class="delete" data-toggle="modal"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete"></i></a>
                                          </td>';
                                echo '</tr>';
                                                    
                                $i++;
                            }
                    } else {
                        echo '<td colspan="3" style="text-align:center;"><i>Tidak Ada Data</i></td>';
                    }
                ?>
                <tr>
                    <td>RUMUS</td>
                    <td>Maka kebutuhan nilai pertanggungan asuransi jiwa Anda adalah = X ; diperhitungkan sbb :</td>
                    <td>X = (B / 0.5%) - A + C</td>
                    <td><a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>