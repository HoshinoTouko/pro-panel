<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
/**
* Created by PhpStorm.
* User: touko
* Date: 16-8-10
* Time: 上午12:08
*/
include \Core\Template::load('User/view/_header');
include \Core\Template::load('User/view/_sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section id="header" class="content-header">
<h1>
节点详细信息
<small>Node details</small>
</h1>
</section>


<section class="content">
<div id="nodeDetails" class="row">
<div class="col-md-12">
<div class="box">
<div class="box-header with-border">
<h3 class="box-title"><?php echo $nodeName; ?> - 连接详细信息</h3>
</div>
<div class="box-body">

<div class="col-sm-12 col-md-6">
<p style="font-size: larger">
地址:
<?php echo $host; ?>
</p>
<p style="font-size: larger">
端口:
<b>
<?php echo $port; ?>
</b>
</p>
<p style="font-size: larger">
连接密码:
<b>
<?php echo $passwd; ?>
</b>
</p>
<p style="font-size: larger">
加密方式:
<b>
<?php echo $method; ?>
</b>
</p>
<p style="font-size: larger">
混淆协议:
<b>
<?php echo $ssrMethod; ?>
</b>
</p>
</div>

<div class="col-sm-12 col-md-6">
<div class="col-sm-12">
<p style="font-size: larger">
<?php echo $intro; ?>
</p>
</div>
<div class="col-sm-12">
<button type="button" class="btn btn-primary" style="margin-right: 5px;">
<i class="fa fa-download"></i>
下载配置文件(Json)
</button>
</div>
</div>



</div>

<div class="box-footer">
<div class="col-sm-12">
<h3>QR Code</h3>
<div class="col-md-6 col-sm-12">
<h4>SSR</h4>
<div id="qrcode1"></div>
</div>
<div class="col-md-6 col-sm-12">
<h4>SS</h4>
<div id="qrcode2"></div>
</div>
</div>





</div>
</div>
</div>
</div>
</section>

</div>


<?php include \Core\Template::load('User/view/_footer'); ?>