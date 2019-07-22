<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hasil Implementasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h4>Maka kebutuhan nilai pertanggungan asuransi jiwa Anda adalah</h4>
  <div class="col-md-9">
  <table style="width:100%">
    <tr>
        <td style="width:20%;">Variable A : </td>
        <td><?=$this->session->userdata('A')?></td> 
    </tr>
    <tr>
        <td style="width:20%;">Variable B : </td>
        <td><?=$this->session->userdata('B')?></td> 
    </tr>
    <tr>
        <td style="width:20%;">Variable C : </td>
        <td><?=$this->session->userdata('C')?></td> 
    </tr>
    <tr>
        <td style="width:20%;">Total X : </td>
        <td><?=$this->session->userdata('total')?></td> 
    </tr>
  </table>
  </div>
  <div class="col-md-12">
   <table class="table table-striped responsive-utilities jambo_table bulk_action">
        <thead>
            <tr class="headings">
                <th class="column-title">No</th>                                                                                        
                <th class="column-title">Pertanyaan</th>
                <th class="column-title">Variable 1</th>
                <th class="column-title">Variable 2</th> 
                <th class="column-title">Variable 3</th>
                <th class="column-title">Variable 4</th>
                <th class="column-title">Value 1</th>
                <th class="column-title">Value 2</th>
                <th class="column-title">Value 3</th>
                <th class="column-title">Value 4</th>                                            
            </tr>
        </thead>

        <tbody>
        <?php
            $i=1;
            foreach (is_object($financial_health) || is_array($financial_health) ? $financial_health : array() as $idx => $row) {
                echo '<tr>';
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
                echo '</tr>';
                    
                $i++;
            }
        ?>
        </tbody>
    </table>
  </div>
  <div style="margin-top:100px;">
  <table class="table table-bordered">
        <thead>
            <tr class="headings">
                <th class="column-title">Score</th>                                                                                        
                <th class="column-title">Interpretation</th>                                            
            </tr>
        </thead>

        <tbody>
        <?php
            $i=1;
            foreach (is_object($keterangan) || is_array($keterangan) ? $keterangan : array() as $idx => $row) {
                echo '<tr>';
                    echo '<td class=" ">'.$row->score.'</td>';                                                    
                    echo '<td class=" ">'.$row->interpretation.'</td>';
                echo '</tr>';
                    
                $i++;
            }
        ?>
        </tbody>
    </table>
  </div>
</div>

</body>
</html>
