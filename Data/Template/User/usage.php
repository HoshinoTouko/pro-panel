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
节点信息
<small>Usage</small>
</h1>
</section>


<section id="info" class="invoice">
<!-- title row -->
<div class="row">
<div class="col-xs-12">
<h2 class="page-header">
<i class="fa fa-plane"></i> <b>insky</b>.Pro
<small class="">Connection Information</small>
</h2>
</div>
</div>
<div class="row col-sm-12 col-md-6 invoice-info">
<div class="col-sm-4 invoice-col">
端口: <b><?php echo $port; ?></b>
</div>
<!-- /.col -->
<div class="col-sm-8 invoice-col">
连接密码: <b><?php echo $passwd; ?></b>
</div>
<!-- /.col -->
</div>
<br>

<!--
<div class="row no-print">
<div class="col-sm-12 col-md-6">
<div class="col-xs-12 pull-right">
<button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
<i class="fa fa-download"></i>
下载配置文件(Json)
</button>
</div>
</div>
</div>
-->

</section>

<section class="content">
<div id="usage" class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="info-box">
<span class="info-box-icon bg-yellow"><i class="fa fa-code"></i></span>
<div class="info-box-content">
<span class="info-box-text">类型</span>
<span class="info-box-number">Pro :/<br>Shadowsocks</span>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="info-box">
<span class="info-box-icon bg-brown"><i class="fa fa-tag"></i></span>
<div class="info-box-content">
<span class="info-box-text">套餐</span>
<span class="info-box-number"><?php echo $planName; ?></span>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="info-box">
<span class="info-box-icon bg-aqua"><i class="fa fa-bookmark-o"></i></span>
<div class="info-box-content">
<span class="info-box-text">剩余流量</span>
<span class="info-box-number"><?php echo $transferLeftPercent; ?> %</span>
<div class="progress">
<div class="progress-bar bg-aqua" style="width: <?php echo $transferLeftPercentage; ?>%"></div>
</div>
<span class="progress-description">
<?php echo $transferUsed; ?> GB / <?php echo $totalTransfer; ?> GB
</span>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="info-box">
<span class="info-box-icon bg-green"><i class="fa fa-bookmark-o"></i></span>
<div class="info-box-content">
<span class="info-box-text">剩余时长</span>
<span class="info-box-number"><?php echo $daysLeftPercent; ?>%</span>
<div class="progress">
<div class="progress-bar bg-green" style="width: <?php echo $daysLeftPercent; ?>%"></div>
</div>
<span class="progress-description">
<?php echo $daysLeft; ?> 天
</span>
</div>
</div>
</div>
</div>

<div id="node" class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">日本</h3>
</div>
<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
<table class="table table-hover">
<tbody><tr>
<th>名称</th>
<th>地址</th>
<th>加密</th>
<th>混淆</th>
<th>倍率</th>
<th>详情</th>
</tr>

<?php  $planNum = 0;  while ( isset($nodeData[$planNum]) ) {
if( $nodeData[$planNum]->region == 'JP' ) {  ?>
<tr>
<td>
<?php echo $nodeData[$planNum]->name; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->host; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->method; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->ssr_method; ?>
</td>
<td>
<span class="badge bg-yellow">
<?php echo $nodeData[$planNum]->times; ?>
</span>
</td>
<td>
<a href="node/<?php echo $nodeData[$planNum]->nid; ?>" type="button" class="btn btn-block btn-danger">
点此
</a>
</td>
</tr>
<?php  }
$planNum++; } ?>

</tbody></table>
</div>
<!-- /.box-body -->
</div>
<div class="box">
<div class="box-header">
<h3 class="box-title">香港</h3>
</div>
<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
<table class="table table-hover">
<tbody><tr>
<th>名称</th>
<th>地址</th>
<th>加密</th>
<th>混淆</th>
<th>倍率</th>
<th>详情</th>
</tr>

<?php  $planNum = 0;  while ( isset($nodeData[$planNum]) ) {
if( $nodeData[$planNum]->region == 'HK' ) {  ?>
<tr>
<td>
<?php echo $nodeData[$planNum]->name; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->host; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->method; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->ssr_method; ?>
</td>
<td>
<span class="badge bg-yellow">
<?php echo $nodeData[$planNum]->times; ?>
</span>
</td>
<td>
<a href="node/<?php echo $nodeData[$planNum]->nid; ?>" type="button" class="btn btn-block btn-danger">
点此
</a>
</td>
</tr>
<?php  }
$planNum++; } ?>

</tbody></table>
</div>
<!-- /.box-body -->
</div>
<div class="box">
<div class="box-header">
<h3 class="box-title">其他地区</h3>
</div>
<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
<table class="table table-hover">
<tbody><tr>
<th>名称</th>
<th>地址</th>
<th>加密</th>
<th>混淆</th>
<th>倍率</th>
<th>详情</th>
</tr>

<?php  $planNum = 0;  while ( isset($nodeData[$planNum]) ) {
if( $nodeData[$planNum]->region != 'JP' and $nodeData[$planNum]->region != 'HK' ) {  ?>
<tr>
<td>
<?php echo $nodeData[$planNum]->name; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->host; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->method; ?>
</td>
<td>
<?php echo $nodeData[$planNum]->ssr_method; ?>
</td>
<td>
<span class="badge bg-yellow">
<?php echo $nodeData[$planNum]->times; ?>
</span>
</td>
<td>
<a href="node/<?php echo $nodeData[$planNum]->nid; ?>" type="button" class="btn btn-block btn-danger">
点此
</a>
</td>
</tr>
<?php  }
$planNum++; } ?>

</tbody></table>
</div>
<!-- /.box-body -->
</div>
</div>

</div>

</section>

</div>



<?php include \Core\Template::load('User/view/_footer'); ?>