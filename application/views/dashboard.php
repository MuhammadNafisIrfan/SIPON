
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $connection = mysqli_connect("localhost", "root", "", "sipon");

                $query = "SELECT id FROM santri ORDER by id";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);
                echo '<h3> '.$row.' </h3>';
                      
                      ?>

                <p>Jumlah Santri</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $connection = mysqli_connect("localhost", "root", "", "sipon");

                $query = "SELECT id FROM pelanggaran ORDER by id";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);
                echo '<h3> '.$row.' </h3>';
                      
                      ?>
                <p>Santri Melanggar</p>
              </div>
              <div class="icon">
                <i class="fa fa-minus-circle"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $connection = mysqli_connect("localhost", "root", "", "sipon");

                $query = "SELECT id FROM tunggakan ORDER by id";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);
                echo '<h3> '.$row.' </h3>';
                      
                      ?>
                <p>Santri Berhutang</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="col-xl-12 col-lg-12">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Overview Santri</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div id="chartContainer" style="height: 370px; width: 100%;">
      </div>
    </div>
  </div>
</div>
</div>
        <!-- /.row -->
        <!-- Main row -->
        <?php

$connection = mysqli_connect("localhost", "root", "", "sipon");

$query = "SELECT * FROM tunggakan";

$sel_que = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($sel_que)){

    $pending = $row['id'];

}
$query2 = "SELECT * FROM santri";

$sel_que2 = mysqli_query($connection, $query2);

while($row = mysqli_fetch_array($sel_que2)){

    $failure = $row['id'];

}
$query3 = "SELECT * FROM pelanggaran";

$sel_que3 = mysqli_query($connection, $query3);

while($row = mysqli_fetch_array($sel_que3)){

    $success = $row['id'];

}

$dataPoints = array(
    array("label"=> "Santri Berhutang", "y"=> $pending),
    array("label"=> "Santri Melanggar ", "y"=> $success),
    array("label"=> "Total Santri ", "y"=> $failure)
);

?>

<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
animationEnabled: true,
exportEnabled: true,
theme: "dark1",
title:{
text: "Diagram Santri"
},
data: [{
type: "bar",
indexLabelFontColor: "#5A5757",
indexLabelPlacement: "outside",   
dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
}]
});
chart.render();

}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

