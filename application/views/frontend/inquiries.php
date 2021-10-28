<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Inquiry</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_admin.png') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <a class="nav-link text-secondary" data-widget="pushmenu" href="#"><i class=""></i></a>
          <div class="col-sm-5">
            <h1>Inquiry Data</h1>
          </div>
          <!-- Main content 
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin');?>">Home</a></li>
              <li class="breadcrumb-item active">Surat Pending</li>
            </ol>
          </div>-->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Inquiry data is data on demand for imported export products from all companies that are members of the world</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <!-- maksimal 5 th biar bisa nampilin page dan sorting -->
                <tr>
                  <th width="20">No</th>      
                  <th width="150">ID Inquiry</th>			
                  <th width="150">Tanggal</th>
                  <th width="500">Wanted</th>
                  <th width="400">Country</th>		
                  <th colspan="1">Action</th>
                </tr>
            
    
            <tr>
              <td>1</td>      
              <td>ID0001</td>			
              <td>23/04/2021</td>
              <td>Black Papper</td>
                    <td>Egypt</td>
              
              <td> <a class="btn btn-info btn-sm" <?php echo anchor('frontend/Inquiry/detail','Detail'); ?></a> </td>
                    
            </tr>

     
                </tbody>
              </table>
                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
     
    </div>
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


 

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>
<!-- main js -->
<script src="<?php echo base_url('assets/dist/js/main.js');?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
