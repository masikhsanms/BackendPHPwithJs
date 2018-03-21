<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/plugins/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <script type="text/javascript" src="jquery-1.10.0.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 <!-- header -->
    <?php include 'halaman/header.php' ?>
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
      <?php include 'halaman/sidebar.php' ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
  <?php 
      if(isset($_GET['page'])){
        
        $page = $_GET['page'];
     
        switch ($page) {
          case 'home':
            include "halaman/home.php";
            break;
          case 'inventori':
            include "halaman/inventori.php";
            break;
          case 'item':
            include "halaman/item.php";
            break;
          case 'user':
            include "halaman/user.php";
            break;      
          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
      }else{
        include "halaman/home.php";
      }

   ?>   


  </div>
  <!-- /.content-wrapper -->
  
  <!-- footer -->

  <?php include 'halaman/footer.php' ?>
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
        var url = "http://localhost/erp/";
</script>

<!-- jQuery 3 -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.js"></script>
<!-- DataTables -->
<script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script src="assets/scripts/items.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<!-- start datatable -->
<script>
    $(function () {
    $('#tabel').DataTable()
  })
</script>
<!-- start datatable -->


</body>
</html>
