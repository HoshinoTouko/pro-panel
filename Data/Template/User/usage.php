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
端口: <b>8338</b>
</div>
<!-- /.col -->
<div class="col-sm-8 invoice-col">
连接密码: <b>123456216545541465464983456789</b>
</div>
<!-- /.col -->
</div>
<!-- /.row -->

<!-- this row will not appear when printing -->
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
<span class="info-box-number">Coffee</span>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="info-box">
<span class="info-box-icon bg-aqua"><i class="fa fa-bookmark-o"></i></span>
<div class="info-box-content">
<span class="info-box-text">剩余流量</span>
<span class="info-box-number">50%</span>
<div class="progress">
<div class="progress-bar bg-aqua" style="width: 50%"></div>
</div>
<span class="progress-description">
5 GB / 10 GB
</span>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="info-box">
<span class="info-box-icon bg-green"><i class="fa fa-bookmark-o"></i></span>
<div class="info-box-content">
<span class="info-box-text">剩余天数</span>
<span class="info-box-number">50%</span>
<div class="progress">
<div class="progress-bar bg-green" style="width: 100%"></div>
</div>
<span class="progress-description">
50 天
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
<th>倍率</th>
<th>状态</th>
<th>介绍</th>
</tr>
<tr>
<td>JP1</td>
<td>jp1.node</td>
<td>chacha20</td>
<td>
<span class="badge bg-yellow">2</span>
</td>
<td><span class="label label-success">可用</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>

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
<th>倍率</th>
<th>状态</th>
<th>介绍</th>
</tr>
<tr>
<td>HK1</td>
<td>hk1.node</td>
<td>chacha20</td>
<td>
<span class="badge bg-red">3</span>
</td>
<td><span class="label label-success">可用</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>

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
<th>倍率</th>
<th>状态</th>
<th>介绍</th>
</tr>
<tr>
<td>US1</td>
<td>us1.snode</td>
<td>chacha20</td>
<td>
<span class="badge bg-green">1</span>
</td>
<td><span class="label label-success">可用</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>
<tr>
<td>KR1</td>
<td>kr1.snode</td>
<td>chacha20</td>
<td>
<span class="badge bg-blue">1.5</span>
</td>
<td><span class="label label-success">可用</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>

</tbody></table>
</div>
<!-- /.box-body -->
</div>
</div>

</div>

</section>

</div>



<?php include \Core\Template::load('User/view/_footer'); ?>