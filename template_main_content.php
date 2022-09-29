<?php
include '_loader.php';
if(isset($_GET['halaman'])){
  $halaman=$_GET['halaman'];
}
else{
  $halaman='dashboard';
}

ob_start();
$file='_halaman/'.$halaman.'.php';
if(!file_exists($file)){
  include '_halaman/error.php';
}
else{
  include $file;
}
$halaman = ob_get_contents();
ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
<?php include '_layouts/head.php'?>
<body class="hold-transition fixed skin-blue sidebar-collapse">
<div class="wrapper">
<?php
  include '_layouts/header.php';
  include '_layouts/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$judul?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Examples</a></li> -->
        <li class="active"><?=$judul?></li>
      </ol>
    </section>
<?php
  echo $halaman;
?>
</div>
<?php
  include '_layouts/footer.php';
  include '_layouts/js.php';
  include '_layouts/control-sidebar.php';
?>
</div>
</body>
</html>