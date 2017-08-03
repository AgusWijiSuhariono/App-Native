<script type="text/javascript">
	$(function(){
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
		});

	 	$("#tgl_mulai").on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            $("#tgl_akhir").datepicker('setStartDate', startDate);
            if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                $("#tgl_akhir").val($("#tgl_mulai").val());
            }
        });
	});
</script>
<div class="row">
	<div class="col-lg-12">
		<h2>Contoh Bootstrap Datepicker</h2>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label>Tgl Awal</label>
			<div class="input-group date">
				<div class="input-group-addon">
			        <span class="glyphicon glyphicon-th"></span>
			    </div>
			    <input id="tgl_mulai" placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
			</div>
		</div>
		<div class="form-group">
			<label>Tgl Akhir</label>
			<div class="input-group date">
				<div class="input-group-addon">
			        <span class="glyphicon glyphicon-th"></span>
			    </div>
			    <input id="tgl_akhir" placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir">
			</div>
		</div>
	</div>
</div>