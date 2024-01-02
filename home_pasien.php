<?php
session_start();

// Mendapatkan role dari session atau dari tempat lain sesuai kebutuhan
if (isset($_SESSION['role_id'])) {
    $role = $_SESSION['role_id'];

    // Tentukan file sidebar yang akan dimuat berdasarkan role
    if ($role === 1) {
        $sidebar_file = 'components/sidebar_admin.php';
    } elseif ($role === 2) {
        $sidebar_file = 'components/sidebar_dokter.php';
    } else {
        // Atur default jika $_SESSION['role_id'] tidak terdefinisi atau tidak sesuai
        $sidebar_file = 'components/sidebar_pasien.php';
    }
} else {
    // Atur default jika $_SESSION['role_id'] belum terdefinisi
    $sidebar_file = 'components/sidebar_pasien.php';
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<?php 	
    include('components/head.php'); 
?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php 	
    include('components/navbar.php'); 
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 	
    include('components/sidebar.php'); 
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <?php 	
    include('pages/pasien.php'); 
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php include($sidebar_file); ?>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php 	
    include('components/footer.php'); 
  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
