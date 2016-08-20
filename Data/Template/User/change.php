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
套餐更换
<small>Change</small>
</h1>
</section>


<section id="contacts" class="content">
<div class="row">

<?php  $planNum = 0;  while ( isset($planData[$planNum]) ) {  ?>
<div class="col-sm-12 col-md-4">
<div class="box box-default">
<div class="box-header with-border">
<h2 class="box-title"><?php echo $planData[$planNum]->name; ?></h2>
</div>
<div class="box-body">
<div class="col-xs-12">
<?php echo $planData[$planNum]->describtion; ?>
<p>
仅需
<b style="font-size: larger"> ￥<?php echo $planData[$planNum]->price; ?></b>
</p>
</div>
</div>
<div class="box-footer no-padding">
<ul class="nav nav-pills nav-stacked">
<li>
<a href="#">选择</a>
</li>
</ul>
</div>
</div>
</div>

<?php $planNum++; } ?>

</div>
</section>


</div>



<?php include \Core\Template::load('User/view/_footer'); ?>