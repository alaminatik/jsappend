<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
            <title><?php echo $title; ?></title>
            <meta name="description" content="Bootstrap Metro Dashboard">
                <meta name="author" content="Dennis Ji">
                    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
                        <!-- end: Meta -->
                        <!-- start: Mobile Specific -->
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                            <!-- end: Mobile Specific -->

                            <!-- start: CSS -->

                            <link id="bootstrap-style" href="<?php echo base_url(); ?>admin_asset/css/bootstrap.min.css" rel="stylesheet">
                                <link href="<?php echo base_url(); ?>admin_asset/css/bootstrap-responsive.min.css" rel="stylesheet">


                                    <link id="base-style" href="<?php echo base_url(); ?>admin_asset/css/style.css" rel="stylesheet">
                                        <link id="base-style-responsive" href="<?php echo base_url(); ?>admin_asset/css/style-responsive.css" rel="stylesheet">
                                            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
                                                <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
                                                <!-- end: CSS -->
                                                <!-- start: Favicon -->
                                                <link rel="shortcut icon" href="<?php echo base_url();?>admin_asset/img/favicon.ico" type="image/x-icon">
                                                    <link rel="icon" href="<?php echo base_url();?>admin_asset/img/favicon.ico" type="image/x-icon">
                                                        <!-- end: Favicon -->
                                                        <script type="text/javascript">
                                                            function check_delete() {
                                                                var chk = confirm("Are you sure to delete this ?");
                                                                if (chk) {
                                                                    return true;
                                                                }
                                                                else {
                                                                    return false;
                                                                }
                                                            }
                                                        </script>
                                                        <link rel="stylesheet" href="<?php echo base_url(); ?>admin_asset/css/main_custom.css" >
                                                            <link href="https://fonts.googleapis.com/css?family=Open+Sans|Righteous|Roboto" rel="stylesheet">
                                                                <style>
                                                                    .control-label{
                                                                        font-family: 'Open Sans', sans-serif;
                                                                        font-family: 'Roboto', sans-serif;
                                                                        font-family: 'Righteous', cursive;
                                                                    }

                                                                    .hd.in,.hd1{
                                                                        margin-left: 10px;
                                                                        background: transparent;
                                                                        background-color: #dcd1d1;
                                                                        font-size: 12px;

                                                                    }

                                                                    .nav-tabs.nav-stacked > li > a, .nav-tabs.nav-stacked > li > ul > li > a{
                                                                        color: unset;
                                                                    }
                                                                    .sidebar-nav > ul{
                                                                        background-color: gainsboro;
                                                                    }
                                                                </style>
                                                                </head>

                                                                <body>
                                                                    <!-- start: Header -->
                                                                    <div class="navbar">
                                                                        <div class="navbar-inner">
                                                                            <div class="container-fluid">
                                                                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                                                                                    <span class="icon-bar"></span>
                                                                                    <span class="icon-bar"></span>
                                                                                    <span class="icon-bar"></span>
                                                                                </a>
                                                                                <a class="brand" href="<?php echo base_url(); ?>Super_Admin/dashboard"><span>Inventory Management</span></a>

                                                                                <!-- start: Header Menu -->
                                                                                <div class="nav-no-collapse header-nav">
                                                                                    <ul class="nav pull-right">
                                                                                        <!-- <li class="dropdown hidden-phone">
                                                                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                                                                <i class="halflings-icon white warning-sign"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu notifications">
                                                                                                <li class="dropdown-menu-title">
                                                                                                    <span>You have 11 notifications</span>
                                                                                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                                                                                </li>	
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon blue"><i class="icon-user"></i></span>
                                                                                                        <span class="message">New user registration</span>
                                                                                                        <span class="time">1 min</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                                                                                        <span class="message">New comment</span>
                                                                                                        <span class="time">7 min</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                                                                                        <span class="message">New comment</span>
                                                                                                        <span class="time">8 min</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                                                                                        <span class="message">New comment</span>
                                                                                                        <span class="time">16 min</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon blue"><i class="icon-user"></i></span>
                                                                                                        <span class="message">New user registration</span>
                                                                                                        <span class="time">36 min</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                                                                                        <span class="message">2 items sold</span>
                                                                                                        <span class="time">1 hour</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="warning">
                                                                                                    <a href="#">
                                                                                                        <span class="icon red"><i class="icon-user"></i></span>
                                                                                                        <span class="message">User deleted account</span>
                                                                                                        <span class="time">2 hour</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="warning">
                                                                                                    <a href="#">
                                                                                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                                                                                        <span class="message">New comment</span>
                                                                                                        <span class="time">6 hour</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                                                                                        <span class="message">New comment</span>
                                                                                                        <span class="time">yesterday</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="icon blue"><i class="icon-user"></i></span>
                                                                                                        <span class="message">New user registration</span>
                                                                                                        <span class="time">yesterday</span> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="dropdown-menu-sub-footer">
                                                                                                    <a>View all notifications</a>
                                                                                                </li>	
                                                                                            </ul>
                                                                                        </li> -->
                                                                                        <!-- start: Notifications Dropdown -->
                                                                                        <!-- <li class="dropdown hidden-phone">
                                                                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                                                                <i class="halflings-icon white tasks"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu tasks">
                                                                                                <li class="dropdown-menu-title">
                                                                                                    <span>You have 17 tasks in progress</span>
                                                                                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="header">
                                                                                                            <span class="title">iOS Development</span>
                                                                                                            <span class="percent"></span>
                                                                                                        </span>
                                                                                                        <div class="taskProgress progressSlim red">80</div> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="header">
                                                                                                            <span class="title">Android Development</span>
                                                                                                            <span class="percent"></span>
                                                                                                        </span>
                                                                                                        <div class="taskProgress progressSlim green">47</div> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="header">
                                                                                                            <span class="title">ARM Development</span>
                                                                                                            <span class="percent"></span>
                                                                                                        </span>
                                                                                                        <div class="taskProgress progressSlim yellow">32</div> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="header">
                                                                                                            <span class="title">ARM Development</span>
                                                                                                            <span class="percent"></span>
                                                                                                        </span>
                                                                                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="header">
                                                                                                            <span class="title">ARM Development</span>
                                                                                                            <span class="percent"></span>
                                                                                                        </span>
                                                                                                        <div class="taskProgress progressSlim orange">80</div> 
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                                                                                </li>	
                                                                                            </ul>
                                                                                        </li> -->
                                                                                        <!-- end: Notifications Dropdown -->
                                                                                        <!-- start: Message Dropdown -->
                                                                                        <!-- <li class="dropdown hidden-phone">
                                                                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                                                                <i class="halflings-icon white envelope"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu messages">
                                                                                                <li class="dropdown-menu-title">
                                                                                                    <span>You have 9 messages</span>
                                                                                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                                                                                </li>	
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="avatar"><img src="<?php echo base_url(); ?>admin_asset/img/avatar.jpg" alt="Avatar"></span>
                                                                                                        <span class="header">
                                                                                                            <span class="from">
                                                                                                                Dennis Ji
                                                                                                            </span>
                                                                                                            <span class="time">
                                                                                                                6 min
                                                                                                            </span>
                                                                                                        </span>
                                                                                                        <span class="message">
                                                                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                                                                        </span>  
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="avatar"><img src="<?php echo base_url(); ?>admin_asset/img/avatar.jpg" alt="Avatar"></span>
                                                                                                        <span class="header">
                                                                                                            <span class="from">
                                                                                                                Dennis Ji
                                                                                                            </span>
                                                                                                            <span class="time">
                                                                                                                56 min
                                                                                                            </span>
                                                                                                        </span>
                                                                                                        <span class="message">
                                                                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                                                                        </span>  
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="avatar"><img src="<?php echo base_url(); ?>admin_asset/img/avatar.jpg" alt="Avatar"></span>
                                                                                                        <span class="header">
                                                                                                            <span class="from">
                                                                                                                Dennis Ji
                                                                                                            </span>
                                                                                                            <span class="time">
                                                                                                                3 hours
                                                                                                            </span>
                                                                                                        </span>
                                                                                                        <span class="message">
                                                                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                                                                        </span>  
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="avatar"><img src="<?php echo base_url(); ?>admin_asset/img/avatar.jpg" alt="Avatar"></span>
                                                                                                        <span class="header">
                                                                                                            <span class="from">
                                                                                                                Dennis Ji
                                                                                                            </span>
                                                                                                            <span class="time">
                                                                                                                yesterday
                                                                                                            </span>
                                                                                                        </span>
                                                                                                        <span class="message">
                                                                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                                                                        </span>  
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#">
                                                                                                        <span class="avatar"><img src="<?php echo base_url(); ?>admin_asset/img/avatar.jpg" alt="Avatar"></span>
                                                                                                        <span class="header">
                                                                                                            <span class="from">
                                                                                                                Dennis Ji
                                                                                                            </span>
                                                                                                            <span class="time">
                                                                                                                Jul 25, 2012
                                                                                                            </span>
                                                                                                        </span>
                                                                                                        <span class="message">
                                                                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                                                                        </span>  
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                                                                                </li>	
                                                                                            </ul>
                                                                                        </li> -->
                                                                                        <!-- end: Message Dropdown -->
                                                                                        <!-- <li>
                                                                                            <a class="btn" href="#">
                                                                                                <i class="halflings-icon white wrench"></i>
                                                                                            </a>
                                                                                        </li> -->
                                                                                        <!-- start: User Dropdown -->
                                                                                        <li class="dropdown">
                                                                                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                                                                                <i class="halflings-icon white user"></i> <?php echo $this->session->userdata('admin_name'); ?>
                                                                                                <span class="caret"></span>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li class="dropdown-menu-title">
                                                                                                    <span>Account Settings</span>
                                                                                                </li>
                                                                                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                                                                                <li><a href="<?php echo base_url(); ?>Super_Admin/logout"><i class="halflings-icon off"></i> Logout</a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <!-- end: User Dropdown -->
                                                                                    </ul>
                                                                                </div>
                                                                                <!-- end: Header Menu -->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- start: Header -->

                                                                    <div class="container-fluid-full">
                                                                        <div class="row-fluid">

                                                                            <!-- start: Main Menu -->
                                                                            <div id="sidebar-left" class="span2" style="overflow-y: scroll">
                                                                                <div class="nav-collapse sidebar-nav">
                                                                                    <ul class="nav nav-tabs nav-stacked main-menu">
                                                                                        <li><a href="<?php echo base_url(); ?>Super_Admin/dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                                                                                        <?php if ($this->session->userdata('access_label') == 1) { ?>
                                                                                            <li>
                                                                                                <a class="dropmenus" href="#"><i class="icon-folder-open-alt" style="font-size: 13px;"></i><span class="hidden-tablet"> Category</span><span class="glyphicons-chevron-down" style="margin-left: 55px;"><i class="icon-caret-down"></i></span></a>
                                                                                                <ul class="hd">
                                                                                                    <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_category"><i class="icon-plus"></i><span class="hidden-tablet"> add_category</span></a></li>
                                                                                                    <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_category"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Category </span></a></li>
                                                                                                </ul>	
                                                                                            </li>
                                                                                        <?php } ?>

                                                                                        <?php if ($this->session->userdata('access_label') == 1) { ?>   
                                                                                            <li>
                                                                                                <a class="dropmenus" href="#"><i class="icon-truck"></i><span class="hidden-tablet"> Manufacturer</span><span class="glyphicons-chevron-down" style="margin-left: 24px;"><i class="icon-caret-down"></i></span></a>
                                                                                                <ul class="hd" class="tree">
                                                                                                    <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_manufacturer"><i class="icon-plus"></i><span class="hidden-tablet"> Add manufacturer</span></a></li>
                                                                                                    <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_manufacturer"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage manufacturer</span></a></li>
                                                                                                </ul>	
                                                                                            </li>
                                                                                        <?php } ?>

                                                                                        <?php if ($this->session->userdata('access_label') == 1 || $this->session->userdata('access_label') == 2) { ?>
                                                                                            <li class="tree"> 
                                                                                                <a class="dropmenus" href="#"><i class="icon-group"></i><span class="hidden-tablet"> Product</span><span class="glyphicons-chevron-down" style="margin-left: 62px;"><i class="icon-caret-down"></i></span></a>
                                                                                                <ul class="hd">
                                                                                                    <li style="margin: left;" class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_product"><i class="icon-plus"></i><span class="hidden-tablet"> Add Product</span></a></li>
                                                                                                    <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_product"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Product </span></a></li>
                                                                                                </ul>	
                                                                                            </li>
                                                                                        <?php } ?>

                                                                                        <?php if ($this->session->userdata('access_label') == 1) { ?>    
                                                                                            <li>
                                                                <!--                                <a class="dropmenus" href="<?php echo base_url(); ?>Super_Admin/manage_order"><i class="icon-font"></i><span class="hidden-tablet"> Manage Order</span></a>-->
    <!--                                                                                            <a href="<?php echo base_url(); ?>Super_Admin/manage_order"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Order </span></a>-->
                                                                                            </li>
                                                                                        <?php } ?>

                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-phone-sign"></i><span class="hidden-tablet"> Customer</span><span class="glyphicons-chevron-down" style="margin-left: 50px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_customer"><i class="icon-plus"></i><span class="hidden-tablet"> add_customer</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_customer"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Customer </span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/credit_customer"><i class="icon-credit-card"></i><span class="hidden-tablet"> Credit Customer </span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/paid_customer"><i class="icon-credit-card"></i><span class="hidden-tablet"> Paid Customer </span></a></li>
                                                                                            </ul>	
                                                                                        </li>

                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-briefcase"></i><span class="hidden-tablet"> Supplier</span><span class="glyphicons-chevron-down" style="margin-left: 60px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_supplier"><i class="icon-plus"></i><span class="hidden-tablet"> Add Supplier</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_supplier"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Supplier </span></a></li>
                                                                                            </ul>	
                                                                                        </li>

                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-book"></i><span class="hidden-tablet"> Invoice</span><span class="glyphicons-chevron-down" style="margin-left: 67px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_invoice"><i class="icon-plus"></i><span class="hidden-tablet"> New Invoice</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_invoice"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Invoice </span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/pos_invoice"><i class="icon-plus-sign"></i><span class="hidden-tablet"> New POS invoice</span></a></li>
                                                                                            </ul>	
                                                                                        </li>

                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Purchase</span><span class="glyphicons-chevron-down" style="margin-left: 55px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_purchase"><i class="icon-plus"></i><span class="hidden-tablet"> Add Purchase</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_purchase"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Purchase</span></a></li>
                                                                                            </ul>	
                                                                                        </li>

                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-folder-close"></i><span class="hidden-tablet"> Stock</span><span class="glyphicons-chevron-down" style="margin-left: 78px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/stock_report"><i class="icon-print"></i><span class="hidden-tablet"> Stock Report</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/stock_report_supplier_wise"><i class="icon-briefcase"></i><span class="hidden-tablet"> Stock Report ( Supplier Wise )</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/stock_report_product_wise"><i class="icon-group"></i><span class="hidden-tablet"> Stock Report ( Product Wise )</span></a></li>
                                                                                            </ul>	
                                                                                        </li>

                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-money"></i><span class="hidden-tablet"> Account</span><span class="glyphicons-chevron-down" style="margin-left: 62px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_account"><i class="icon-plus"></i><span class="hidden-tablet"> Create Account</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_account"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Account</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_income"><i class="icon-plus"></i><span class="hidden-tablet"> Income</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_expense"><i class="icon-minus"></i><span class="hidden-tablet"> Expense</span></a></li>
    <!--                                                                                            <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_tax"><i class="icon-plus"></i><span class="hidden-tablet"> Add Tax</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_tax"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Tax</span></a></li>-->
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/account_summary_report"><i class="icon-print"></i><span class="hidden-tablet"> Account Summary Report</span></a></li>
                                                                                            </ul>	
                                                                                        </li>

                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-print"></i><span class="hidden-tablet"> Report</span><span class="glyphicons-chevron-down" style="margin-left: 69px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/todays_report"><i class="icon-asterisk"></i><span class="hidden-tablet"> Todays Report</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/monthly_sales_report"><i class="icon-cog"></i><span class="hidden-tablet"> Monthly Sales Report</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/monthly_purchase_report"><i class="icon-print"></i><span class="hidden-tablet"> Monthly Purchase Report</span></a></li>

                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/yearly_sales_report"><i class="icon-signal"></i><span class="hidden-tablet"> Yearly Sales Report</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/yearly_purchase_report"><i class="icon-twitter"></i><span class="hidden-tablet"> Yearly Purchase Report</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/sales_report_product_wise"><i class="icon-cog"></i><span class="hidden-tablet"> Sales Report (Product Wise)</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/profit_report_invoice_wise"><i class="icon-certificate"></i><span class="hidden-tablet"> Profit Report (Invoice Wise)</span></a></li>

                                                                                            </ul>	
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropmenus" href="#"><i class="icon-credit-card"></i><span class="hidden-tablet"> Payment</span><span class="glyphicons-chevron-down" style="margin-left: 55px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_payment"><i class="icon-plus"></i><span class="hidden-tablet"> Add Payment</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_payment"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Payment</span></a></li>
                                                                                            </ul>	
                                                                                        </li>

                                                                                        <li >
                                                                                            <a class="dropmenus" href="#"><i class="icon-building"></i><span class="hidden-tablet"> Bank</span><span class="glyphicons-chevron-down" style="margin-left: 78px;"><i class="icon-caret-down"></i></span></a>
                                                                                            <ul class="hd" class="tree">
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/add_new_bank"><i class="icon-plus"></i><span class="hidden-tablet"> Add New Bank</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/bank_dr_cr_manage"><i class="icon-suitcase"></i><span class="hidden-tablet"> Bank Dr. And Cr. Manage</span></a></li>
                                                                                                <li class="hd1"><a href="<?php echo base_url(); ?>Super_Admin/manage_bank"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Bank </span></a></li>

                                                                                            </ul>	
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end: Main Menu -->

                                                                            <noscript>
                                                                                <div class="alert alert-block span10">
                                                                                    <h4 class="alert-heading">Warning!</h4>
                                                                                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                                                                                </div>
                                                                            </noscript>
                                                                            <!-- start: Content -->
                                                                            <div id="content" class="span10" style="min-height: 850px;">

                                                                                <?php echo $home_content; ?>
                                                                            </div><!--/.fluid-container-->

                                                                            <!-- end: Content -->
                                                                        </div><!--/#content.span10-->
                                                                    </div><!--/fluid-row-->

                                                                    <div class="modal hide fade" id="myModal">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                                                            <h3>Settings</h3>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Here settings can be configured...</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href="#" class="btn" data-dismiss="modal">Close</a>
                                                                            <a href="#" class="btn btn-primary">Save changes</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="clearfix"></div>

                                                                    <footer>

                                                                        <p>
                                                                            <span style="text-align:left;float:left">&copy; 2017 <a href="<?php echo base_url(); ?>Super_Admin/dashboard" alt="inventory_management">Inventory Management</a></span>

                                                                        </p>

                                                                    </footer>

                                                                    <script type="text/javascript" src="<?php echo base_url(); ?>admin_asset/js/jquery.js"></script>

                                                                    <script type="text/javascript" src="<?php echo base_url(); ?>admin_asset/js/jquery-1.9.1.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery-migrate-1.0.0.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery-ui-1.10.0.custom.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.ui.touch-punch.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/modernizr.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/bootstrap.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.cookie.js"></script>

                                                                    <script src='<?php echo base_url(); ?>admin_asset/js/fullcalendar.min.js'></script>

                                                                    <script src='<?php echo base_url(); ?>admin_asset/js/jquery.dataTables.min.js'></script>
                                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/excanvas.js"></script>
                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.flot.js"></script>
                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.flot.pie.js"></script>
                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.flot.stack.js"></script>
                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.flot.resize.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.chosen.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.uniform.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.cleditor.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.noty.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.elfinder.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.raty.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.iphone.toggle.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.uploadify-3.1.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.gritter.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.imagesloaded.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.masonry.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.knob.modified.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/jquery.sparkline.min.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/counter.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/retina.js"></script>

                                                                    <script src="<?php echo base_url(); ?>admin_asset/js/custom.js"></script>
                                                                    <script>
                                                            $(function () {

                                                                $("#btnPrint").live("click", function () {
                                                                    var divContents = $("#printableArea").html();
                                                                    var printWindow = window.open('', '', 'height=900,width=850');
                                                                    printWindow.document.write('<html><head><title>Invoice Details</title>');
                                                                    printWindow.document.write('</head><body >');
                                                                    printWindow.document.write(divContents);
                                                                    printWindow.document.write('</body></html>');
                                                                    printWindow.document.close();
                                                                    printWindow.print();
                                                                });

                                                                $("#report_print").live("click", function () {
                                                                    var divContents = $("#stock_report").html();
                                                                    var printWindow = window.open('', '', 'height=900,width=850');
                                                                    printWindow.document.write('<html><head><title>Stock Report</title>');
                                                                    printWindow.document.write('</head><body >');
                                                                    printWindow.document.write(divContents);
                                                                    printWindow.document.write('</body></html>');
                                                                    printWindow.document.close();
                                                                    printWindow.print();
                                                                });

                                                                $('.dropmenus').click(function (e) {

                                                                    var list = $(this).parent().siblings().children('ul');
                                                                    list.each(function () {
                                                                        if ($(this).hasClass('in')) {

                                                                            $(this).removeClass('in');
                                                                            $(this).hide('slow');
                                                                        }
                                                                    });

                                                                    $(this).next().toggleClass('in');

                                                                    $(this).next().toggle('slow');


                                                                });


                                                                $(document).on('click', '.delete', function (e) {


                                                                    var content = $(this).parent().parent();
                                                                    var sibling = $(this).parent().parent().siblings().length;

                                                                    if (sibling > 0) {
                                                                        content.remove();
                                                                    }
                                                                    //$(this).parent().children().remove();

                                                                    //content.remove();
                                                                });

                                                                var wraper = $('tbody');
                                                                $('.add').click(function (e) {
                                                                    e.preventDefault();
                                                                    var content = $('.clone:first-child').clone();
                                                                    var inputs = content.children().find('input');
                                                                    inputs.each(function () {
                                                                        $(this).val('');

                                                                    });
                                                                    wraper.append(content);
                                                                });

                                                                $('.auto_select').select2();
                                                                //                  $('.customer_name').on('change',function(){
                                                                //                     alert($('.customer_name option:selected').text()) ;
                                                                //                  });
                                                            });
                                                                    </script>
                                                                </body>
                                                                </html>