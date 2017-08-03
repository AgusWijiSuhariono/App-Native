<script type="text/javascript">
 	$(function(){
		$('.select2').select2({
			minimumInputLength: 3,
			allowClear: true,
			placeholder: 'masukkan nama propinsi',
			ajax: {
				dataType: 'json',
				url: 'action/daftarProvinsi.php',
				delay: 800,
				data: function(params) {
					return {
						search: params.term
					}
				},
				processResults: function (data, page) {
					return {
						results: data
					};
				},
			}
		}).on('select2:select', function (evt) {
			 var data = $(".select2 option:selected").text();
      		 alert("Data yang dipilih adalah "+data);
		});
 	});
</script>
<div class="row">
	<div class="col-lg-4">
		<form class="form-group">
			<label>Contoh Select2 Ajax</label>
			<select name="kabupaten" class="form-control select2">
				<option value="">- pilih kabupaten -</option>
			</select>
		</form>
	</div>
</div>