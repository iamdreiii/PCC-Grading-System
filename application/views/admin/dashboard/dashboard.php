<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>

<?php $this->load->view('admin/dashboard/layout/head');?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('admin/dashboard/layout/header');?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view('admin/dashboard/layout/sidebar');?>
   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard <?php echo $school_year['school_year']?>
        <small>pcc.edu.ph</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-university"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">BSE STUDENTS</span>
              <span class="info-box-number"><?php echo $usercountbse?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-university"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">BPA STUDENTS</span>
              <span class="info-box-number"><?php echo $usercountbpa?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">STAFF</span>
              <span class="info-box-number"><?php echo $staffcount?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Students</span>
              <span class="info-box-number"><?php echo $usercount?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Visualization</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              <div class="col-md-8">
                <div class="box-body chart-responsive">
                <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div>
              </div>
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Students Per Year Level</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">First Year</span>
                    <span class="progress-number"><?php echo $stud1?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: <?php echo $stud1?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Second Year</span>
                    <span class="progress-number"><?php echo $stud2?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: <?php echo $stud2?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Third Year</span>
                    <span class="progress-number"><?php echo $stud3?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: <?php echo $stud3?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Fourth Year</span>
                    <span class="progress-number"><?php echo $stud4?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: <?php echo $stud4?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
      <!-- Main row -->
      
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <?php $this->load->view('admin/dashboard/layout/control_sidebar');?>
 

</div>

<?php $this->load->view('admin/dashboard/scripts/footer');?>
<script>
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function getRandomColor2() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function shadeColor(color, percent) {
    var f = parseInt(color.slice(1), 16),
        t = percent < 0 ? 0 : 255,
        p = percent < 0 ? percent * -1 : percent,
        R = f >> 16,
        G = f >> 8 & 0x00FF,
        B = f & 0x0000FF;
    return (
        "#" +
        (0x1000000 +
            (Math.round((t - R) * p) + R) * 0x10000 +
            (Math.round((t - G) * p) + G) * 0x100 +
            (Math.round((t - B) * p) + B))
            .toString(16)
            .slice(1)
    );
}

$.ajax({
    url: 'Dashboard/fetchChartData',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
        var data = response.data;
        var labels = response.labels;
        var courseKeys = response.courseKeys;
        var courseLabels = response.courseLabels;

        var barColors = [];
        for (var i = 0; i < courseKeys.length; i++) {
            barColors.push(getRandomColor());
        }

        var barBorderColors = [];
        for (var i = 0; i < courseKeys.length; i++) {
            var color = getRandomColor2();
            barBorderColors.push(color);
            // Generate a darker shade for the border color
            var borderColor = shadeColor(color, -0.2);
            barBorderColors.push(borderColor);
        }

        var bar = new Morris.Bar({
            element: 'bar-chart',
            resize: true,
            data: data,
            xkey: 'y',
            ykeys: courseKeys,
            labels: courseLabels,
            barColors: barColors,
            barBorderColor: barBorderColors,
            hideHover: 'auto',
            xLabelAngle: 45, // Rotate x-axis labels if needed
            xLabelMargin: 10 // Adjust the margin between x-axis labels if needed
        });
    },
    error: function(xhr, status, error) {
        console.error('Error fetching chart data:', error);
    }
});

</script>
</body>
</html>
