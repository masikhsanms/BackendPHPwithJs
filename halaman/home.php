  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php

      include 'koneksi.php';

      $sql = mysqli_query($konek, "SELECT SUM(tb_item.stok) as stok, tb_kategori.kategori FROM tb_item INNER JOIN tb_kategori ON tb_kategori.id = tb_item.id_kategori GROUP BY tb_kategori.kategori");

      $data = array();


      while ($row = mysqli_fetch_assoc($sql))
        { 
            // selipkan semua hasil looping data dari database kedalam array
            $data[] = $row;
        }
        
        // echo json_encode($data[0]['stok']);

    ?>


      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#"><span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span></a>
            <div class="info-box-content">
              <span class="info-box-text">ATK</span>
              <span class="info-box-number"><?php echo $data[0]['stok']; ?><small> <?php echo $data[0]['kategori']; ?></small></span>
            </div>

            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#"><span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Elektronik</span>
              <span class="info-box-number"><?php echo $data[1]['stok'] ?><small> <?php echo $data[1]['kategori']; ?></small></span>
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
            <a href="#"><span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span></a>

            <div class="info-box-content">
             <span class="info-box-text">Furniture</span>
              <span class="info-box-number"><?php echo $data[2]['stok'] ?><small> <?php echo $data[2]['kategori']; ?></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#"><span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Perlengkapan</span>
              <span class="info-box-number"><?php echo $data[3]['stok'] ?><small> <?php echo $data[3]['kategori']; ?></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


         <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
                   
          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">

         <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->



      </div>
      <!-- /.row -->

  </section>
  
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/scripts/home.js"></script>  
