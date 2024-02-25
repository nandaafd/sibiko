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
$sql = "SELECT * FROM setup_sosiometri";
$result = $connect->query($sql);
?>

<?php
$arrayFramework = array();
$arrayNilai = array();
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$arrayFramework[] = '"'.$row['nama_siswa'].'"';
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
          text: 'Grafik Banyak Siswa dipilih'
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
          name: 'Grafik Sosiometri',
          data: [<?= join($arrayNilai) ?>],
          color: 'red',

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
    <div class="col-lg-12">

 <div id="contohGrafikBar"></div>
    </div>
</div>


  
</body>
</html>