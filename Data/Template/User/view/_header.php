<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
/**
* Created by PhpStorm.
* User: touko
* Date: 16-8-9
* Time: 下午10:35
*/
?>

<!DOCTYPE html>
<!--
This is a starter view page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?> - insky.Pro</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo RESOURCE; ?>/adminLTE/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo RESOURCE; ?>/adminLTE/css/AdminLTE.min.css">
<!-- User style -->
<link rel="stylesheet" href="<?php echo RESOURCE; ?>/insky/css/User.css">
<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
page. However, you can choose any other skin. Make sure you
apply the skin class to the body tag so the changes take effect.
-->
<link rel="stylesheet" href="<?php echo RESOURCE; ?>/adminLTE/css/skins/skin-red.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

<!-- Main Header -->
<header class="main-header">

<!-- Logo -->
<a href="glance" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>insky</b>pro</span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>insky</b>.Pro</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
<span class="sr-only">Toggle navigation</span>
</a>
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
<!-- Menu toggle button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-envelope-o"></i>
<span class="label label-success">4</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 4 messages</li>
<li>
<!-- inner menu: contains the messages -->
<ul class="menu">
<li><!-- start message -->
<a href="#">
<div class="pull-left">
<!-- User Image -->
<img src="<?php echo RESOURCE; ?>/adminLTE/img/user2-160x160.jpg" class="img-circle" alt="User Image">
</div>
<!-- Message title and timestamp -->
<h4>
Support Team
<small><i class="fa fa-clock-o"></i> 5 mins</small>
</h4>
<!-- The message -->
<p>Why not buy a new awesome theme?</p>
</a>
</li>
<!-- end message -->
</ul>
<!-- /.menu -->
</li>
<li class="footer"><a href="#">See All Messages</a></li>
</ul>
</li>
<!-- /.messages-menu -->

<!-- Notifications Menu -->
<li class="dropdown notifications-menu">
<!-- Menu toggle button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bell-o"></i>
<span class="label label-warning">10</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 10 notifications</li>
<li>
<!-- Inner Menu: contains the notifications -->
<ul class="menu">
<li><!-- start notification -->
<a href="#">
<i class="fa fa-users text-aqua"></i> 5 new members joined today
</a>
</li>
<!-- end notification -->
</ul>
</li>
<li class="footer"><a href="#">View all</a></li>
</ul>
</li>

<!-- User Account Menu -->
<li class="dropdown user user-menu">
<!-- Menu Toggle Button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!-- The user image in the navbar-->
<img src="<?php echo RESOURCE; ?>/adminLTE/img/user2-160x160.jpg" class="user-image" alt="User Image">
<!-- hidden-xs hides the username on small devices so only the image appears. -->
<span class="hidden-xs">Alexander Pierce</span>
</a>
<ul class="dropdown-menu">
<!-- The user image in the menu -->
<li class="user-header">
<img src="<?php echo RESOURCE; ?>/adminLTE/img/user2-160x160.jpg" class="img-circle" alt="User Image">

<p>
Alexander Pierce - Web Developer
<small>Member since Nov. 2012</small>
</p>
</li>
<!-- Menu Body -->
<li class="user-body">
<div class="row">
<div class="col-xs-4 text-center">
<a href="#">Followers</a>
</div>
<div class="col-xs-4 text-center">
<a href="#">Sales</a>
</div>
<div class="col-xs-4 text-center">
<a href="#">Friends</a>
</div>
</div>
<!-- /.row -->
</li>
<!-- Menu Footer-->
<li class="user-footer">
<div class="pull-left">
<a href="#" class="btn btn-default btn-flat">Profile</a>
</div>
<div class="pull-right">
<a href="#" class="btn btn-default btn-flat">Sign out</a>
</div>
</li>
</ul>
</li>
<!-- Control Sidebar Toggle Button -->
<li>
<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>