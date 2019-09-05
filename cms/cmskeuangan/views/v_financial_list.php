<div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Quick Financial Health Check</h3>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover" id="financial-health">
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
            </tbody>
        </table>
    </div>
</div>

<script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#financial-health').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, 
            "order": [[ 1, 'asc' ]],
            "ajax":
            {
                "url": "<?php echo base_url('index.php/financial/viewFinancial') ?>", // URL file untuk proses select datanya
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]],
            "columns": [
                { "data": "id" },
                { "data": "question" },  
                { "data": "variable_1" },
                { "data": "variable_2" }, 
                { "data": "variable_3" },
                { "data": "variable_4" },
                { "data": "value_1" },
                { "data": "value_2" },
                { "data": "value_3" },
                { "data": "value_4" }, 
                { "data": "id", "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        var html  = "<a class='btn btn-default btn-sm' href='financial/editdata/"+ data +"'>Edit</a>"
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
            location.href='financial/deldata/' + id;
        }
    }
</script>