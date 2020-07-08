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

    <title>Dance Manager</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <meta content="Dance Manager" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME GLOBAL STYLES -->

    <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />

    <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />

    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->

    <link href="assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />

    <link href="assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />

    <!-- END THEME LAYOUT STYLES -->

    <link rel="shortcut icon" href="assets/DM-Master-Logo.png" /> </head>

<!-- END HEAD -->



<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">

    <div class="page-wrapper">

        <!-- BEGIN HEADER -->

        <div class="page-header navbar navbar-fixed-top">

            <!-- BEGIN HEADER INNER -->

            <div class="page-header-inner ">

                <!-- BEGIN LOGO -->

                <div class="page-logo">

                    <a href="index.html">

                        <img src="assets/DM-Master-Logo.png" alt="logo" class="logo-default" style="width: 143px; height: 69px;" /> </a>

                    <div class="menu-toggler sidebar-toggler">

                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->

                    </div>

                </div>

                <!-- END LOGO -->

                <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">

                    <span></span>

                </a>

                <!-- END RESPONSIVE MENU TOGGLER -->

                <!-- BEGIN TOP NAVIGATION MENU -->

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

                                    <span class="username username-hide-on-mobile"> Admin </span>

                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->

                                    <img alt="" class="img-circle" src="assets/layouts/layout4/img/avatar9.jpg" /> </a>

                                <ul class="dropdown-menu dropdown-menu-default">

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

                <!-- END TOP NAVIGATION MENU -->

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
                        <a href="dashboard" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>

                        </a>
                    </li>
                    <li class="nav-item  start active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-tasks"></i>
                            <span class="arrow"></span>
                            <span class="title">Accounts</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="table_accounts" class="nav-link ">
                                    <span class="title">User Accounts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="accounts_charges" class="nav-link ">
                                    <span class="title">Accounts Charges</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="accounts_charges" class="nav-link ">
                                    <span class="title">Payments</span>
                                </a>
                            </li>

                            <li class="nav-item  ">
                                <a href="table_students" class="nav-link ">
                                    <span class="title">Students</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_classes" class="nav-link ">
                                    <span class="title">Classes</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_vendors" class="nav-link ">
                                    <span class="title">Vendors</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_staff" class="nav-link ">
                                    <span class="title">Staff</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-sticky-note"></i>
                            <span class="arrow"></span>
                            <span class="title">Reports</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="report_accounts" class="nav-link ">
                                    <span class="title">Accounts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_students" class="nav-link ">
                                    <span class="title">Students</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Classes</span>
                                </a>
                            </li>
                        </ul>
                        <li class="nav-item  ">
                        <a href="add_user" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add User</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-user-secret"></i>
                                <span class="title">Costume Cycle</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-pencil-square-o"></i>
                                <span class="title">Recitals</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="attendance" class="nav-link nav-toggle">
                                <i class="icon-eye"></i>
                                <span class="title">Attendance</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-check-circle"></i>
                                <span class="title">About</span>

                            </a>
                        </li>
                         <li class="nav-item start">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-balance-scale"></i>
                                <span class="arrow"></span>
                                <span class="title">Extras</span>
                            </a>
                            <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Billing</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Emails</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-credit-card"></i>
                                <span class="title">Payments</span>
                            </a>
                        </li>
                    </ul>
                </li>
                       <li class="nav-item start">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="arrow"></span>
                                <span class="title">Options</span>

                            </a>
                        <ul class="sub-menu">
                                <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">Option 1</span>

                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Option 2</span>
                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-cursor"></i>
                                <span class="title">Option 3</span>

                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-key"></i>
                                <span class="title">Option 4</span>

                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-equalizer"></i>
                                <span class="title">Option 5</span>

                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-eye"></i>
                                <span class="title">Option 6</span>

                            </a>
                        </li>
                    </ul>
                </li>
                        <li class="nav-item  ">
                            <a href="login" class="nav-link nav-toggle">
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

                    <div class="row">

                        <div class="col-md-12">

                            <!-- BEGIN EXAMPLE TABLE PORTLET-->

                            <div class="portlet light bordered">

                                <div class="portlet-title">

                                    <div class="caption font-dark">

                                        <i class="fa fa-user-circle "></i>

                                        <span class="caption-subject bold uppercase">Payments</span>

                                    </div>



                                </div>

                                <div class="portlet-body">


                <button type="button" class="btn red mt-ladda-btn ladda-button btn-outline" data-style="slide-right" data-spinner-color="#333">
                <a style="text-decoration:none;" href="<?php echo site_url('htmltopdf/charges_pdf'); ?>"><span class="ladda-label">
                <i class="fa fa-file-pdf-o" ></i> PDF </span></a>
                </button>

                <button type="button" class="btn green mt-ladda-btn ladda-button btn-outline" data-style="slide-right" data-spinner-color="#333">
                <a style="text-decoration:none;" href="<?php echo site_url('excel_export/action_charges'); ?>"><span class="ladda-label">
                <i class="fa fa-file-excel-o" ></i> EXCEL </span></a>
                </button>


                <button type="button" class="btn purple mt-ladda-btn ladda-button btn-outline" data-style="slide-right" data-spinner-color="#333">
                <a style="text-decoration:none;" href="<?php echo site_url('users/exportCSV'); ?>"><span class="ladda-label">
                <i class="fa fa-file-text-o"></i> CSV </span></a>
                </button>

                                    <button type="button" class="btn purple mt-ladda-btn ladda-button btn-outline" data-style="slide-right" data-spinner-color="#333">
                                        <a style="text-decoration:none;" href="<?php echo site_url('accounts_charges/add/'); ?>"><span class="ladda-label">
                                        <i class="glyphicon glyphicon-plus"></i> ADD </span></a>
                                    </button>

                                    <div class="table-toolbar">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="btn-group">



                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                   <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">

                                        <thead style="color: #26C6DA;">

                                            <tr>

                                                <th class="center"> Code </th>
                                                <th class="center"> Account.No </th>

                                                <th class="center">First Name</th>

                                                <th class="center">Last Name</th>

                                                <th class="center">Address</th>
                                                <th class="center">City</th>
                                                <th class="center">Email</th>
                                                <th class="center">Zip Code</th>
                                                <th class="center">Date</th>
                                               

                                            </tr>

                                        </thead>
                                        <tbody>
                                    <?php
                                    if($fetch_data->num_rows() >0)
                                    {
                                        foreach ($fetch_data->result() as $row)
                                        {
                                            ?>
                                            <tr class="odd gradeX">

                                                <td>  <?php echo $row->id; ?> </td>
                                                <td>
                                                    <?php echo $row->accountno; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->firstname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->lastname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->address; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->city; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->email; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->zip_code; ?>
                                                </td>
                                                <td>
                                                    <?php echo date(" d M, Y", strtotime($row->created_date)); ?>
                                                </td>
                                               
                                            </tr>

                                            <?php
                                        }

                                    }
                                    else
                                    {
                                        ?>
                                    <tr>
                                        <td colspan="3">No data Found</td>
                                    </tr>
                                        <?php
                                    }
                                    ?>


                                    </tbody>
                                    </table>

                                </div>

                            </div>

                            <!-- END EXAMPLE TABLE PORTLET-->

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

    </div>

    <div class="quick-nav-overlay"></div>

    <!-- END QUICK NAV -->

    <!--[if lt IE 9]>

<script src="assets/global/plugins/respond.min.js"></script>

<script src="assets/global/plugins/excanvas.min.js"></script>

<script src="assets/global/plugins/ie8.fix.min.js"></script>

<![endif]-->

    <!-- BEGIN CORE PLUGINS -->

    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>

    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>

    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>

    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>

    <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>

    <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME GLOBAL SCRIPTS -->

    <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>

    <!-- END THEME GLOBAL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN THEME LAYOUT SCRIPTS -->

    <script src="assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>

    <script src="assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>

    <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>

    <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

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
