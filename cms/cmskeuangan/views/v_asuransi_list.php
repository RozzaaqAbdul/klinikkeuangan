<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Kecukupan Asuransi Jiwa</h2>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover" id="asuransi">
        <thead>
            <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Variabel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        </thead>
        <tbody>
            <tr>
                <td><b>RUMUS</b></td>
                <td>Maka kebutuhan nilai pertanggungan asuransi jiwa Anda adalah = X ; diperhitungkan sbb :</td>
                <td>X = (B / 0.5%) - A + C</td>
                <td><a class='btn btn-default btn-sm' href='#'>Edit</a></td>
            </tr>
        </tbody>
    </table> 
    <div>
    </div>
</div>

<script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#asuransi').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, 
            "order": [[ 1, 'asc' ]],
            "ajax":
            {
                "url": "<?php echo base_url('index.php/asuransi/viewAsuransi') ?>",
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]],
            "columns": [
                { "data": "id" },
                { "data": "question" },  
                { "data": "variable" },
                { "data": "id", "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        var html  = "<a class='btn btn-default btn-sm' href='asuransi/editdata/"+ data +"'>Edit</a>"
                        html += "<a style='color:white;margin-left:5px;' class='btn btn-danger btn-sm' onclick=Delete("+ data +")>Delete</a>"
                        return html
                    },
                    "orderable": false,
                    "searchable": false
                },
            ],
        });
        tabel.on( 'order.dt search.dt', function () {
            tabel.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
            } );
        }).draw();
    });

    function Delete(id)
    {
        if (confirm("Are You Sure to Delete this Record ?")) {
            location.href='asuransi/deldata/' + id;
        }
    }
</script>