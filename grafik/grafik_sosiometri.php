<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <script src="https://code.highcharts.com/highcharts.src.js"></script>
        <script src="highcharts.js"></script>
      <script src="highcharts-3d.js"></script>
      <script src="jquery-3.2.1.min.js"></script>

      <script>
<?php
include '../koneksi/koneksi.php';
 $sql="SELECT teman1, COUNT( * ) AS id_sosiometri FROM `setup_sosiometri` GROUP BY teman1
HAVING COUNT(`teman1`) >1 ;";  
$result = $connect->query($sql);
?>

<?php
$arrayFramework = array();
$arrayNilai = array();
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$arrayFramework[] = '"'.$row['teman1'].'"';
$arrayNilai[] = $row['id_sosiometri'];
}
}
?>
      $(function(){
  var chart = new Highcharts.Chart({
      chart: {
          renderTo: 'contohGrafikBar',
          type: 'bar',
      },
      title: {
          text: 'Siswa yang disukai Oleh Teman sekelompok'
      },
      xAxis: {
          categories: [<?= join($arrayFramework) ?>],
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
          name: 'Teman yang disukai',
          data: [<?= join($arrayNilai) ?>],
          color: '#42a5f5',

      }]
  });
});

</script>
</head>
<body>
  <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Garfik Sosiometri</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
                <div class="row">
                <div class="col-lg-6">

                    <!--Area chart example -->
                    <div class="panel panel-info">
                        <div class="panel-heading" style=" background-color: #42a5f5;color: white;">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <b> Grafik Pilihan Teman yang disukai</b>                        
                        </div>

                        <div class="panel-body">
                            <div id="contohGrafikBar"></div>
                        </div>

                    </div>
                    <!--End area chart example -->
                </div>
                <div class="col-lg-6">
                        <!--Area chart example -->
                    <div class="panel panel-danger">
                        <div class="panel-heading" style=" background-color: #42a5f5; color: white;">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <b> Grafik Pilihan Teman yang Tidak disukai</b>                        
                        </div>

                        <div class="panel-body">
                            <?php
                            include '../grafik/grafik_sosiometri1.php'; 

                             ?>
                        </div>
                      </div>
                </div>

               

            </div>



  
</body>
</html>