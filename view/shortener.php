<script type="text/javascript">
	$(function(){
		$("#callShortener").on("click",function(){		
			var urlData = $("#dataUrl").val();
			$("#elUrl").hide(100);
			if(urlData!=""){
				$("#elLoading").show(100);
				$.ajax({
				  	method: "GET",
				  	url: "/BlogNative/action/panggilShortener.php?url="+urlData,
					success:function(data) {
						$("#shortenerCode").html(data);
				    	$("#elLoading").hide(100); 
				    	$("#elUrl").show(100);
				    }
				});
			}else{
				alert("Anda Belum memasukkan data Url");
			}
		});
	});
</script>
<div class="row">
	<div class="col-lg-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<a class="btn btn-success" id="callShortener"><span class="glyphicon glyphicon-refresh"></span> Generate Shortener</a>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Masukkan Url Anda</label>
							<input value="" type="text" name="dataUrl" id="dataUrl" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div id="elLoading" style="display: none">
							<img width="300px" src="/BlogNative/assets/img/loading-animation.gif">
						</div>
						<div id="elUrl" style="display: none">
							Shortener anda adalah : 
							<h1 id="shortenerCode"></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>