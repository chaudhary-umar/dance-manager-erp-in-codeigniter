<!DOCTYPE html>

<!-- 

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7

Version: 4.7.5

Author: KeenThemes

Website: http://www.keenthemes.com/

Contact: support@keenthemes.com

Follow: www.twitter.com/keenthemes

Dribbble: www.dribbble.com/keenthemes

Like: www.facebook.com/keenthemes

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes

Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes

License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!-->

<html lang="en">

<!--<![endif]-->

<!-- BEGIN HEAD -->



<head>

    <meta charset="utf-8" />

    <title>Dance Manager || Dashboard</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <meta content="Dance Manager" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES --> 
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url(); ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo base_url(); ?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/DM-Master-Logo.png" /> </head>

<!-- END HEAD -->



<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">

    <!-- BEGIN HEADER -->

    <div class="page-header navbar navbar-fixed-top">

        <!-- BEGIN HEADER INNER -->

        <div class="page-header-inner ">

            <!-- BEGIN LOGO -->

            <div class="page-logo">

                <a href="index.html">

                    <img src="<?php echo base_url(); ?>assets/DM-Master-Logo.png" alt="logo" class="logo-default" style="width: 143px; height: 69px;" /> </a>

                <div class="menu-toggler sidebar-toggler">

                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->

                </div>

            </div>

            <!-- END LOGO -->

            <!-- BEGIN RESPONSIVE MENU TOGGLER -->

            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

            <!-- END RESPONSIVE MENU TOGGLER -->

            <!-- BEGIN PAGE ACTIONS -->

            <!-- DOC: Remove "hide" class to enable the page header actions -->

            <!-- BEGIN PAGE TOP -->

            <div class="page-top">

                <!-- BEGIN HEADER SEARCH BOX -->

                <!-- BEGIN TOP NAVIGATION MENU -->

                <div class="top-menu">

                    <ul class="nav navbar-nav pull-right">

                        <li class="separator hide"> </li>

                        <!-- BEGIN NOTIFICATION DROPDOWN -->

                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                        <li class="dropdown dropdown-user dropdown-dark">

                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                                <span class="username username-hide-on-mobile"> Admin</span>

                                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->

                                <img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/layouts/layout4/img/avatar9.jpg" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li class="nav-item">
                                    <a href="table_users" class="nav-link ">
                                    <i class="fa fa-users"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                    </a>
                                    </li>
                                <li>
                                    <a href="login">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>

                        </li>

                        <!-- END USER LOGIN DROPDOWN -->

                    </ul>

                </div>

                <!-- END TOP NAVIGATION MENU -->

            </div>

            <!-- END PAGE TOP -->

        </div>

        <!-- END HEADER INNER -->

    </div>

    <!-- END HEADER -->

    <!-- BEGIN HEADER & CONTENT DIVIDER -->

    <div class="clearfix"> </div>

    <!-- END HEADER & CONTENT DIVIDER -->

    <!-- BEGIN CONTAINER -->

    <div class="page-container">

        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">

<!-- BEGIN SIDEBAR -->

<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->

<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                    <li class="sidebar-search-wrapper">
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()?>dashboard" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Calander</span>
                            <span class="selected"></span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-tasks"></i>
                            <span class="arrow"></span>
                            <span class="title">Tables</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>table_accounts" class="nav-link ">
                                    <span class="title">Accounts</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item  ">
                                <a href="accounts_charges" class="nav-link ">
                                    <span class="title">Accounts Charges</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="payments" class="nav-link ">
                                    <span class="title">Payments</span>
                                </a>
                            </li> -->

                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>table_students" class="nav-link ">
                                    <span class="title">Students</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>table_classes" class="nav-link ">
                                    <span class="title">Classes</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>table_vendors" class="nav-link ">
                                    <span class="title">Vendors</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>table_staff" class="nav-link ">
                                    <span class="title">Staff</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>prospects" class="nav-link ">
                                    <span class="title">Prospects</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item start active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-tasks"></i>
                            <span class="arrow"></span>
                            <span class="title">Reports</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>report_accounts" class="nav-link ">
                                    <span class="title">Accounts</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item  ">
                                <a href="accounts_charges" class="nav-link ">
                                    <span class="title">Accounts Charges</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="payments" class="nav-link ">
                                    <span class="title">Payments</span>
                                </a>
                            </li> -->

                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>report_students" class="nav-link ">
                                    <span class="title">Students</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>report_classes" class="nav-link ">
                                    <span class="title">Classes</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>report_classes" class="nav-link ">
                                    <span class="title">Financial</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>report_classes" class="nav-link ">
                                    <span class="title">Other</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                        <!-- <li class="nav-item  ">
                        <a href="add_user" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add User</span>
                            <span class="selected"></span>

                        </a>
                        </li> -->

                        <li class="nav-item ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-sticky-note"></i>
                            <span class="arrow"></span>
                            <span class="title">Options</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>report_classes" class="nav-link ">
                                    <span class="title">Recital</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="<?php echo base_url()?>report_students" class="nav-link ">
                                    <span class="title">Costume Cycle</span>
                                </a>
                            </li>
                            
                        </ul>
                        <li class="nav-item  ">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Attendance</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        <li class="nav-item  ">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-paper-plane-o"></i>
                            <span class="title">More</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        <li class="nav-item  ">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-gear"></i>
                            <span class="title">Settings</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        
                        <li class="nav-item  ">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-buysellads"></i>
                            <span class="title">About</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        
                        <li class="nav-item  ">
                            <a href="<?php echo base_url()?>login" class="nav-link nav-toggle">
                                <i class="fa fa-sign-out"></i>
                                <span class="title">Log out</span>
                            </a>
                        </li>
                    </li>
                </ul>
    <!-- END SIDEBAR MENU -->
</div>

<!-- END SIDEBAR -->

</div>

        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->

        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->

               <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-eye font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">View Data</span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="#" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Serial</label>
                                                <div class="col-md-4">
                                                    
                                                    <span class="help-block"> <?php echo $data->id; ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Account.No</label>
                                                <div class="col-md-4">
                                                    
                                                    <span class="help-block"> <?php echo $data->accountno; ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">First Name</label>
                                                <div class="col-md-4">
                                                    
                                                    <span class="help-block"> <?php echo $data->firstname; ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Last Name</label>
                                                <div class="col-md-4">
                                                    
                                                    <span class="help-block"> <?php echo $data->lastname; ?></span>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-md-3">City</label>
                                                <div class="col-md-4">
                                                    
                                                    <span class="help-block">  <?php echo $data->city; ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Registration Date</label>
                                                <div class="col-md-4">
                                                    
                                                    <span class="help-block"><?php echo date(" d M, Y", strtotime($data->dateregistered)); ?>  </span>
                                                </div>
                                            </div>
                                         
                                        </div>
                                        
                                    </form><hr>
                                    <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                   <a href="<?php echo base_url();?>report_classes"> <button class="btn blue">
                                                        <i class="fa fa-arrow-left"></i> Back</button></a>
                                                    
                                                </div>
                                            </div>
                                    <!-- END FORM-->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>

        <!-- END CONTENT -->

        <!-- BEGIN QUICK SIDEBAR -->

        <a href="javascript:;" class="page-quick-sidebar-toggler">

            <i class="icon-login"></i>

        </a>

        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">

            <div class="page-quick-sidebar">

                <ul class="nav nav-tabs">

                    <li class="active">

                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users

                                <span class="badge badge-danger">2</span>

                            </a>

                    </li>

                    <li>

                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts

                                <span class="badge badge-success">7</span>

                            </a>

                    </li>

                    <li class="dropdown">

                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More

                                <i class="fa fa-angle-down"></i>

                            </a>

                        <ul class="dropdown-menu pull-right">

                            <li>

                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">

                                    <i class="icon-bell"></i> Alerts </a>

                            </li>

                            <li>

                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">

                                    <i class="icon-info"></i> Notifications </a>

                            </li>

                            <li>

                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">

                                    <i class="icon-speech"></i> Activities </a>

                            </li>

                            <li class="divider"></li>

                            <li>

                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">

                                    <i class="icon-settings"></i> Settings </a>

                            </li>

                        </ul>

                    </li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">

                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">

                            <h3 class="list-heading">Staff</h3>

                            <ul class="media-list list-items">

                                <li class="media">

                                    <div class="media-status">

                                        <span class="badge badge-success">8</span>

                                    </div>

                                    <img class="media-object" src="assets/layouts/layout/img/avatar3.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Bob Nilson</h4>

                                        <div class="media-heading-sub"> Project Manager </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <img class="media-object" src="assets/layouts/layout/img/avatar1.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Nick Larson</h4>

                                        <div class="media-heading-sub"> Art Director </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <div class="media-status">

                                        <span class="badge badge-danger">3</span>

                                    </div>

                                    <img class="media-object" src="assets/layouts/layout/img/avatar4.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Deon Hubert</h4>

                                        <div class="media-heading-sub"> CTO </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <img class="media-object" src="assets/layouts/layout/img/avatar2.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Ella Wong</h4>

                                        <div class="media-heading-sub"> CEO </div>

                                    </div>

                                </li>

                            </ul>

                            <h3 class="list-heading">Customers</h3>

                            <ul class="media-list list-items">

                                <li class="media">

                                    <div class="media-status">

                                        <span class="badge badge-warning">2</span>

                                    </div>

                                    <img class="media-object" src="assets/layouts/layout/img/avatar6.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Lara Kunis</h4>

                                        <div class="media-heading-sub"> CEO, Loop Inc </div>

                                        <div class="media-heading-small"> Last seen 03:10 AM </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <div class="media-status">

                                        <span class="label label-sm label-success">new</span>

                                    </div>

                                    <img class="media-object" src="assets/layouts/layout/img/avatar7.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Ernie Kyllonen</h4>

                                        <div class="media-heading-sub"> Project Manager,

                                            <br> SmartBizz PTL </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <img class="media-object" src="assets/layouts/layout/img/avatar8.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Lisa Stone</h4>

                                        <div class="media-heading-sub"> CTO, Keort Inc </div>

                                        <div class="media-heading-small"> Last seen 13:10 PM </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <div class="media-status">

                                        <span class="badge badge-success">7</span>

                                    </div>

                                    <img class="media-object" src="assets/layouts/layout/img/avatar9.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Deon Portalatin</h4>

                                        <div class="media-heading-sub"> CFO, H&D LTD </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <img class="media-object" src="assets/layouts/layout/img/avatar10.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Irina Savikova</h4>

                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>

                                    </div>

                                </li>

                                <li class="media">

                                    <div class="media-status">

                                        <span class="badge badge-danger">4</span>

                                    </div>

                                    <img class="media-object" src="assets/layouts/layout/img/avatar11.jpg" alt="...">

                                    <div class="media-body">

                                        <h4 class="media-heading">Maria Gomez</h4>

                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>

                                        <div class="media-heading-small"> Last seen 03:10 AM </div>

                                    </div>

                                </li>

                            </ul>

                        </div>

                        <div class="page-quick-sidebar-item">

                            <div class="page-quick-sidebar-chat-user">

                                <div class="page-quick-sidebar-nav">

                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">

                                        <i class="icon-arrow-left"></i>Back</a>

                                </div>

                                <div class="page-quick-sidebar-chat-user-messages">

                                    <div class="post out">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Bob Nilson</a>

                                            <span class="datetime">20:15</span>

                                            <span class="body"> When could you send me the report ? </span>

                                        </div>

                                    </div>

                                    <div class="post in">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Ella Wong</a>

                                            <span class="datetime">20:15</span>

                                            <span class="body"> Its almost done. I will be sending it shortly </span>

                                        </div>

                                    </div>

                                    <div class="post out">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Bob Nilson</a>

                                            <span class="datetime">20:15</span>

                                            <span class="body"> Alright. Thanks! :) </span>

                                        </div>

                                    </div>

                                    <div class="post in">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Ella Wong</a>

                                            <span class="datetime">20:16</span>

                                            <span class="body"> You are most welcome. Sorry for the delay. </span>

                                        </div>

                                    </div>

                                    <div class="post out">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Bob Nilson</a>

                                            <span class="datetime">20:17</span>

                                            <span class="body"> No probs. Just take your time :) </span>

                                        </div>

                                    </div>

                                    <div class="post in">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Ella Wong</a>

                                            <span class="datetime">20:40</span>

                                            <span class="body"> Alright. I just emailed it to you. </span>

                                        </div>

                                    </div>

                                    <div class="post out">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Bob Nilson</a>

                                            <span class="datetime">20:17</span>

                                            <span class="body"> Great! Thanks. Will check it right away. </span>

                                        </div>

                                    </div>

                                    <div class="post in">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Ella Wong</a>

                                            <span class="datetime">20:40</span>

                                            <span class="body"> Please let me know if you have any comment. </span>

                                        </div>

                                    </div>

                                    <div class="post out">

                                        <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg" />

                                        <div class="message">

                                            <span class="arrow"></span>

                                            <a href="javascript:;" class="name">Bob Nilson</a>

                                            <span class="datetime">20:17</span>

                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="page-quick-sidebar-chat-user-form">

                                    <div class="input-group">

                                        <input type="text" class="form-control" placeholder="Type a message here...">

                                        <div class="input-group-btn">

                                            <button type="button" class="btn green">

                                                    <i class="icon-paper-clip"></i>

                                                </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">

                        <div class="page-quick-sidebar-alerts-list">

                            <h3 class="list-heading">General</h3>

                            <ul class="feeds list-items">

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-info">

                                                    <i class="fa fa-check"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> You have 4 pending tasks.

                                                    <span class="label label-sm label-warning "> Take action

                                                            <i class="fa fa-share"></i>

                                                        </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> Just now </div>

                                    </div>

                                </li>

                                <li>

                                    <a href="javascript:;">

                                        <div class="col1">

                                            <div class="cont">

                                                <div class="cont-col1">

                                                    <div class="label label-sm label-success">

                                                        <i class="fa fa-bar-chart-o"></i>

                                                    </div>

                                                </div>

                                                <div class="cont-col2">

                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col2">

                                            <div class="date"> 20 mins </div>

                                        </div>

                                    </a>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-danger">

                                                    <i class="fa fa-user"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 24 mins </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-info">

                                                    <i class="fa fa-shopping-cart"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> New order received with

                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 30 mins </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-success">

                                                    <i class="fa fa-user"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 24 mins </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-info">

                                                    <i class="fa fa-bell-o"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> Web server hardware needs to be upgraded.

                                                    <span class="label label-sm label-warning"> Overdue </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 2 hours </div>

                                    </div>

                                </li>

                                <li>

                                    <a href="javascript:;">

                                        <div class="col1">

                                            <div class="cont">

                                                <div class="cont-col1">

                                                    <div class="label label-sm label-default">

                                                        <i class="fa fa-briefcase"></i>

                                                    </div>

                                                </div>

                                                <div class="cont-col2">

                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col2">

                                            <div class="date"> 20 mins </div>

                                        </div>

                                    </a>

                                </li>

                            </ul>

                            <h3 class="list-heading">System</h3>

                            <ul class="feeds list-items">

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-info">

                                                    <i class="fa fa-check"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> You have 4 pending tasks.

                                                    <span class="label label-sm label-warning "> Take action

                                                            <i class="fa fa-share"></i>

                                                        </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> Just now </div>

                                    </div>

                                </li>

                                <li>

                                    <a href="javascript:;">

                                        <div class="col1">

                                            <div class="cont">

                                                <div class="cont-col1">

                                                    <div class="label label-sm label-danger">

                                                        <i class="fa fa-bar-chart-o"></i>

                                                    </div>

                                                </div>

                                                <div class="cont-col2">

                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col2">

                                            <div class="date"> 20 mins </div>

                                        </div>

                                    </a>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-default">

                                                    <i class="fa fa-user"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 24 mins </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-info">

                                                    <i class="fa fa-shopping-cart"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> New order received with

                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 30 mins </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-success">

                                                    <i class="fa fa-user"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 24 mins </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="col1">

                                        <div class="cont">

                                            <div class="cont-col1">

                                                <div class="label label-sm label-warning">

                                                    <i class="fa fa-bell-o"></i>

                                                </div>

                                            </div>

                                            <div class="cont-col2">

                                                <div class="desc"> Web server hardware needs to be upgraded.

                                                    <span class="label label-sm label-default "> Overdue </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col2">

                                        <div class="date"> 2 hours </div>

                                    </div>

                                </li>

                                <li>

                                    <a href="javascript:;">

                                        <div class="col1">

                                            <div class="cont">

                                                <div class="cont-col1">

                                                    <div class="label label-sm label-info">

                                                        <i class="fa fa-briefcase"></i>

                                                    </div>

                                                </div>

                                                <div class="cont-col2">

                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col2">

                                            <div class="date"> 20 mins </div>

                                        </div>

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">

                        <div class="page-quick-sidebar-settings-list">

                            <h3 class="list-heading">General Settings</h3>

                            <ul class="list-items borderless">

                                <li> Enable Notifications

                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>

                                <li> Allow Tracking

                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>

                                <li> Log Errors

                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>

                                <li> Auto Sumbit Issues

                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>

                                <li> Enable SMS Alerts

                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>

                            </ul>

                            <h3 class="list-heading">System Settings</h3>

                            <ul class="list-items borderless">

                                <li> Security Level

                                    <select class="form-control input-inline input-sm input-small">

                                            <option value="1">Normal</option>

                                            <option value="2" selected>Medium</option>

                                            <option value="e">High</option>

                                        </select>

                                </li>

                                <li> Failed Email Attempts

                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>

                                <li> Secondary SMTP Port

                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>

                                <li> Notify On System Error

                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>

                                <li> Notify On SMTP Error

                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>

                            </ul>

                            <div class="inner-content">

                                <button class="btn btn-success">

                                        <i class="icon-settings"></i> Save Changes</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- END QUICK SIDEBAR -->

    </div>

    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->

    <div class="page-footer">

        <div class="page-footer-inner"> 2018 &copy; Dance Manager. All Rights Reserved.</a>

        </div>

        <div class="scroll-to-top">

            <i class="icon-arrow-up"></i>

        </div>

    </div>

    <!-- END FOOTER -->

    <!--[if lt IE 9]>

<script src="assets/global/plugins/respond.min.js"></script>

<script src="assets/global/plugins/excanvas.min.js"></script> 

<script src="assets/global/plugins/ie8.fix.min.js"></script> 

<![endif]-->

    <!-- BEGIN CORE PLUGINS -->

    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.input-ip-address-control-1.0.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/pages/scripts/form-input-mask.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function() {
            $('#clickmewow').click(function() {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>

</body>



</html>