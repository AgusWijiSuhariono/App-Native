<script type="text/javascript">
	$(document).ready(function() {
	    var table = $('#tabelAuthor').DataTable( {
	        "processing": true,
	        "serverSide": true,
	        "ajax": "action/dataTables.php",
	        "columnDefs": [ {
	            "targets": -1,
	            "data": null,
	            "defaultContent": "<button class='btn btn-success btn-xs tblEdit'>Edit / Delete</button>"
	        }]
	    });

	    $('#tabelAuthor tbody').on( 'click', '.tblEdit', function () {
	        var data = table.row( $(this).parents('tr') ).data();
	        window.location.href = "edit.php?id="+ data[4];
	    } );
	});
</script>
<h4>Contoh Menggunakan Datatables</h4>
<i>Tombol <button class='btn btn-success btn-xs'>Edit / Delete</button> Hanya dummy dengan id author</i>
<div class="row" style="margin-top: 30px">
	<div class="col-lg-12">
		<table id="tabelAuthor" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nama Awal</th>
					<th>Nama Akhir</th>
					<th>Email</th>
					<th>Tgl. Lahir</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nama Awal</td>
					<td>Nama Akhir</td>
					<td>Email</td>
					<td>Tgl. Lahir</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>