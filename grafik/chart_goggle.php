  <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Garfik Sosiometri</font></h1>
                </div>
                 <!-- end  page header -->
            </div>

            <html>
  <head>
  	<?php
include '../koneksi/-koneksi.php';
$satu =mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM setup_sosiometri WHERE nama_siswa='Zakiati Salma' "));
$dua =mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM setup_sosiometri WHERE nama_siswa='Riri fadilla' "));
?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
			[' Data Siswa yang mengisi Angket', 'Angket Sosiometi'],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Riri fadilla", <?php echo "".$dua." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,],
			["Zakiati Salma", <?php echo "".$satu." ";?>,]


        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'center' },
          chart: { title: ' PEMILIHAN TEMAN TERBAIK ',
                   subtitle: 'popularity by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Angka Yang diperoleh'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
  	<div class="row">
                <div class="col-lg-12">

                    <!--Area chart example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                        
                        </div>

                        <div class="panel-body">
                            <div id="top_x_div" style="width: 100%; height: 700px;"></div>
                        </div>

                    </div>
                    <!--End area chart example -->
                </div>
            </div>
  </body>
</html>