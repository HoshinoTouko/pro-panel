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
账户充值
<small>Payment</small>
</h1>
</section>


<section class="invoice">
<!-- title row -->
<div class="row">
<div class="col-xs-12">
<h2 class="page-header">
<i class="fa fa-globe"></i> Hoshizora Network Limit.
<small class="pull-right">Date: Now</small>
</h2>
</div>
</div>


<div class="row invoice-info">
<div class="col-sm-4 invoice-col">
From
<address>
<strong>User Name</strong><br>
San Francisco, CA 94107<br>
Phone: 123 456 789<br>
Email: user@domain.com
</address>
</div>
<!-- /.col -->
<div class="col-sm-4 invoice-col">
To
<address>
<strong>Hoshizora Network Limit.</strong><br>
San Francisco, CA 94107<br>
Phone: (555) 539-1037<br>
Email: pay@domain.com
</address>
</div>
<!-- /.col -->
<div class="col-sm-4 invoice-col">
<b>共消费</b> 12450 元<br>
<br>
<b>账户ID: </b> 4F3S8J<br>
<b>预计截止日期: </b> 2/22/2014<br>
<b>账户: </b> 968-34567
</div>
<!-- /.col -->
</div>
<!-- /.row -->

<!-- Table row -->
<div class="row">
<div class="col-xs-12 table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Product</th>
<th>invoiceID</th>
<th>Description</th>
<th>Subtotal</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Call of Duty</td>
<td>455-981-221</td>
<td>El snort testosterone trophy driving gloves handsome</td>
<td>$64.50</td>
</tr>

</tbody>
</table>
</div>
<!-- /.col -->
</div>
<!-- /.row -->

<div class="row no-print">
<div class="col-xs-12">
<a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
<button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
</button>
<button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
<i class="fa fa-download"></i> Generate PDF
</button>
</div>

</div>

<br>

</section>

<section id="" class="invoice">

<div class="row">
<div class="col-xs-12">
<h2 class="page-header">
账户充值
</h2>
</div>
</div>

<div class="row no-print invoice-info">
<div class="col-xs-12 invoice-col">
<div class="input-group input-group-sm">
<input type="text" class="form-control">
<span class="input-group-btn">
<button type="button" class="btn btn-info btn-flat">Go!</button>
</span>
</div>
</div>
</div>
</section>

</div>



<?php include \Core\Template::load('User/view/_footer'); ?>