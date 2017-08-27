<?php
$connect = mysqli_connect('localhost','root','agusbiji','blog');
$sql = "SELECT * FROM tb_benchmark ORDER BY nilai DESC";
$result = $connect->query($sql);

$arrayFramework = array();
$arrayNilai = array();
$arrayPie = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arrayFramework[] = '"'.$row['framework'].'"';
        $arrayNilai[] = $row['nilai'];
        $arrayPie[] =  "["."'".$row['framework']."'".",".$row['penggunaan']."]";
    }
}
?>
<script type="text/javascript">
	$(function(){
		var chart = new Highcharts.Chart({
		    chart: {
		        renderTo: 'contohGrafikBar',
		        type: 'bar',
		    },
		    title: {
		        text: 'Data Benchmark Framework PHP'
		    },
		    xAxis: {
		        categories: [<?= join($arrayFramework, ',') ?>],
		        title: {
		            text: null
		        }
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'request / sec',
		            align: 'high'
		        },
		        labels: {
		            overflow: 'justify'
		        }
		    },
		    tooltip: {
		        valueSuffix: ' req / sec'
		    },
		    plotOptions: {
		        bar: {
		            dataLabels: {
		                enabled: true
		            }
		        }
		    },
		    legend: {
		        layout: 'vertical',
		        align: 'right',
		        verticalAlign: 'top',
		        x: -40,
		        y: 80,
		        floating: true,
		        borderWidth: 1,
		        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
		        shadow: true
		    },
		    credits: {
		        enabled: false
		    },
		    series: [{
		        name: 'Benchmark',
		        data: [<?= join($arrayNilai, ',') ?>],
		        color: '#FFB41A',
		    }]
		});


		var chart = new Highcharts.Chart({
		    chart: {
		        renderTo: 'contohGrafikPie',
		       	type: 'pie',
		        options3d: {
		            enabled: true,
		            alpha: 45,
		            beta: 0
		        }
		    },
		    title: {
		        text: 'Sample Penggunaan PHP Framework'
		    },
		    tooltip: {
		        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b><br>Penggunaan : <b>{point.y}</b>'
		    },
		    plotOptions: {
		        pie: {
		            allowPointSelect: true,
		            cursor: 'pointer',
		            depth: 35,
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}'
		            }
		        }
		    },
		    series: [{
		        type: 'pie',
		        name: 'Penggunaan Framework',
		        data: [<?= join($arrayPie,",") ?>],
		    }]
		});
	});
</script>
<div class="row">
	<h4>Tutorial Membuat Highcharts</h4>
</div>
<div class="row">
	<div class="col-lg-12">
		<div id="contohGrafikBar"></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div id="contohGrafikPie"></div>
	</div>
</div>