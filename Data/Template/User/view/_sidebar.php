<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
/**
* Created by PhpStorm.
* User: touko
* Date: 16-8-9
* Time: 下午11:52
*/
?>

<aside class="main-sidebar">
<section class="sidebar">
<div class="user-panel">
<div class="pull-left image">
<img src="<?php echo RESOURCE; ?>/adminLTE/img/user2-160x160.jpg" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
<p><?php echo $userName; ?></p>
<!-- Status -->
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>

<!-- search form (Optional) -->
<form action="#" method="get" class="sidebar-form">
<div class="input-group">
<input type="text" name="q" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
<!-- /.search form -->

<!-- Sidebar Menu -->
<ul class="sidebar-menu">

<li class="header">服务</li>
<li><a href="<?php echo $urlAdjust ?>glance"><i class="fa fa-link"></i> <span>概览</span></a></li>
<li><a href="<?php echo $urlAdjust ?>usage"><i class="fa fa-link"></i> <span>节点信息</span></a></li>

<li class="header">财务</li>
<li><a href="<?php echo $urlAdjust ?>change"><i class="fa fa-link"></i> <span>套餐变更</span></a></li>
<li><a href="<?php echo $urlAdjust ?>pay"><i class="fa fa-link"></i> <span>账户充值</span></a></li>

<li class="header">其他</li>
<li><a href="<?php echo $urlAdjust ?>setting"><i class="fa fa-link"></i> <span>账户设置</span></a></li>
<li><a href="<?php echo $urlAdjust ?>ticket"><i class="fa fa-link"></i> <span>工单</span></a></li>

</ul>
<!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>