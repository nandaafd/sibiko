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
include 'koneksi.php';
$sql = "SELECT * FROM tb_benchmark";
$result = $connect->query($sql);
?>

<?php
$arrayPie = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arrayPie[] =  "["."'".$row['framework']."'".",".$row['penggunaan']."]";
    }
}
?>
      $(function(){
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
          data: [<?= join($arrayPie) ?>],
      }]
  });
 });
</script>
</head>
<body>


<div class="row">
    <div class="col-lg-12">
        <div id="contohGrafikPie"></div>
    </div>
</div>


  
</body>
</html>