<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>
	</head>
	<body>

<script src="../../code/highcharts.js"></script>
<script src="../../code/highcharts-3d.js"></script>
<script src="../../code/modules/exporting.js"></script>

<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057"> Grafik Jumlah Siswa & Jenis Kelamin</font></h1>
</div>
<!-- end  page header -->
</div>
<?php 
include '../koneksi/koneksi.php';
$jmlsiswa =mysqli_num_rows(mysqli_query($connect, "SELECT * FROM data_siswa"));
$laki =mysqli_num_rows(mysqli_query($connect,"SELECT * FROM data_siswa WHERE kelamin='Laki-laki' "));
$pr =mysqli_num_rows(mysqli_query($connect,"SELECT * FROM data_siswa WHERE kelamin='Perempuan' "));
 ?>

           <div class="row">
                <div class="col-lg-12">

                    <!--Area chart example -->
                    <div class="panel panel-info">
                        <div class="panel-heading" style=" background-color: #42a5f5;color: white;">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <b> Grafik Jumlah Siswa & Jenis Kelamin</b>                        
                        </div>

                        <div class="panel-body">
                           <div id="container" style="height: 400px"></div>
                        </div>

                    </div>
                    <!--End area chart example -->
                </div>
            </div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: ' Grafik Jumlah Siswa & Jenis Kelamin'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        name: 'Grafik Siswa',
        data: [
            ['Jumlah Siswa', <?php echo "".$jmlsiswa." ";?>],
            ['Lakik Laki', <?php echo "".$laki." ";?>],
            ['Perempuan', <?php echo "".$pr." ";?>]
        ]
    }]
});
		</script>
	</body>
</html>
