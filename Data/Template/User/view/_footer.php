<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
/**
* Created by PhpStorm.
* User: touko
* Date: 16-8-9
* Time: 下午10:36
*/
?>

<!-- Main Footer -->
<footer class="main-footer">
<!-- To the right -->
<div class="pull-right hidden-xs">
Anything you want
</div>
<!-- Default to the left -->
<strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
</footer>
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo RESOURCE; ?>/adminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQ QRCode -->
<script src="<?php echo RESOURCE; ?>/insky/js/jquery.qrcode.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo RESOURCE; ?>/adminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo RESOURCE; ?>/adminLTE/js/app.min.js"></script>


<?php 
if ( isset( $extraJs ) )
echo $extraJs;
; ?>


</body>
</html>