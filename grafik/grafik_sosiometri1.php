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
 $sql="SELECT tidaksuka1, COUNT( * ) AS id_sosiometri FROM  `setup_sosiometri`GROUP BY tidaksuka1
HAVING COUNT(  `tidaksuka1` ) >1 ;";  
$result = $connect->query($sql);
?>

<?php
$arrayFramework = array();
$arrayNilai = array();
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$arrayFramework[] = '"'.$row['tidaksuka1'].'"';
$arrayNilai[] = $row['id_sosiometri'];
}
}
?>
      $(function(){
  var chart = new Highcharts.Chart({
      chart: {
          renderTo: 'contohGrafikBar1',
          type: 'bar',
      },
      title: {
          text: 'Siswa yang tidak disukai Oleh Teman sekelompok'
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
          name: 'Tidak disukai',
          data: [<?= join($arrayNilai) ?>],
          color: '#ff1744',

      }]
  });
});

</script>
</head>
<body>
 <div id="contohGrafikBar1"></div>
            



  
</body>
</html>