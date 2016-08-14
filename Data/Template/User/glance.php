<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
/**
* Created by PhpStorm.
* User: touko
* Date: 16-8-9
* Time: 下午10:36
*/
include \Core\Template::load('User/view/_header');
include \Core\Template::load('User/view/_sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
概览
<small>Glance</small>
</h1>
</section>


<!-- Main content -->
<section id="glance" class="content">
<div class="row">

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-blue">
<div class="inner">
<h3>
<?php echo $transferLeft; ?>
<small class="text-white">%</small>
</h3>

<p>剩余流量</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="usage" class="small-box-footer">
More info <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
<h3>
<?php echo $daysLeft; ?>
<small class="text-white">天</small>
</h3>
<p>剩余天数</p>
</div>
<div class="icon">
<i class="fa fa-calendar"></i>
</div>
<a href="usage" class="small-box-footer">
More info <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-orange">
<div class="inner">
<h3>
<?php echo $planName; ?>
<small class="text-white"></small>
</h3>
<p>套餐类型</p>
</div>
<div class="icon">
<i class="fa fa-paper-plane"></i>
</div>
<a href="change" class="small-box-footer">
More info <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-xs-6">
<!-- small box -->
<div class="small-box bg-green">
<div class="inner">
<h3>
<?php echo $currencyLeft; ?>
<small class="text-white">$</small>
</h3>
<p>剩余货币</p>
</div>
<div class="icon">
<i class="fa fa-shopping-cart"></i>
</div>
<a href="pay" class="small-box-footer">
More info <i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>


</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include \Core\Template::load('User/view/_footer'); ?>