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
<body class="hold-transition fixed skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">
<?php
  include '_layouts/header.php';
  include '_layouts/sidebar.php';
?>
<?php
  echo $halaman;
?>
<?php
  include '_layouts/js.php';
  include '_layouts/control-sidebar.php';
?>
</div>
</body>
</html>