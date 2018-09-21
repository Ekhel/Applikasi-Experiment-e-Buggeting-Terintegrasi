<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>e - Bugetting</title>

        <meta name="description" content="top menu &amp; navigation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
        
        <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/datatables/dataTables.bootstrap.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/ace-extra.min.js"></script>
       

    </head>

    <body class="skin-1">
        <div id="navbar" class="navbar navbar-default navbar-collapse h-navbar ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="<?php echo base_url(); ?>home" class="navbar-brand">
                        <small>
                            <i class="fa fa-home"></i>
                            e - Bugetting
                        </small>
                    </a>

                    <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                        <span class="sr-only">Toggle user menu</span>

                        <img src="<?php echo base_url()?>assets/css/bootstrap.min.cssassets/images/avatars/user.jpg" alt="Jason's Photo" />
                    </button>

                    <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                        <span class="sr-only">Toggle sidebar</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="light-blue dropdown-modal user-min">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php base_url('assets/images/avatars/avatar2.png')?>" alt="image" />
                                <span class="user-info">
                                    <small>User,</small>
                                    Michael
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>addNew">
                                        <i class="ace-icon fa fa-user"></i>
                                        Buat Akun
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('home/applikasi'); ?>">
                                        <i class="ace-icon fa fa-user"></i>
                                        Applikasi
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo base_url(); ?>logout">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Data Master
                                &nbsp;
                                <i class="ace-icon fa fa-angle-down bigger-110"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                                <li>
                                    <a href="<?php echo base_url('jenis_belanja')?>">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Jenis Belanja
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('sub_jenis_belanja')?>">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Sub Jenis belanja
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Akun Rekening Belanja
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Sub Akun Rekening Belanja
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Ssh')?>">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Standart Satuan Harga
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Proses
            &nbsp;
                                <i class="ace-icon fa fa-angle-down bigger-110"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                                <li>
                                    <a href="<?php echo base_url('Belanja_langsung/renjalist')?>">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        KUA - PPAS
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-user bigger-110 blue"></i>
                                        Belanja Langsung
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Belanja Tidak Langsung
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Pendapatan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        SilPa
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Content
                                &nbsp;
                                <i class="ace-icon fa fa-angle-down bigger-110"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                                <li>
                                    <a href="<?php echo base_url('home/applikasi'); ?>">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Applikasi
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-user bigger-110 blue"></i>
                                        Menu I
                                    </a>
                                </li>

                                 <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-map bigger-110 blue"></i>
                                        Menu II
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    
                </nav>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

           
            <div class="main-content">
                 <?php echo $contents;?>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">SICKAT</span>
                            Application &copy; 2016-2018 Penlap | BAPPEDA KAB. JAYAPURA
                        </span>

                        &nbsp; &nbsp;
                       
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url()?>assets/datatables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url()?>assets/datatables/dataTables.bootstrap.js"></script>
        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
       
        
        

        <!-- page specific plugin scripts -->

        <!-- ace scripts -->
        <script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
             var $sidebar = $('.sidebar').eq(0);
             if( !$sidebar.hasClass('h-sidebar') ) return;
            
             $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
                if( event_name !== 'sidebar_fixed' ) return;
            
                var sidebar = $sidebar.get(0);
                var $window = $(window);
            
                //return if sidebar is not fixed or in mobile view mode
                var sidebar_vars = $sidebar.ace_sidebar('vars');
                if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
                    $sidebar.removeClass('lower-highlight');
                    //restore original, default marginTop
                    sidebar.style.marginTop = '';
            
                    $window.off('scroll.ace.top_menu')
                    return;
                }
            
            
                 var done = false;
                 $window.on('scroll.ace.top_menu', function(e) {
            
                    var scroll = $window.scrollTop();
                    scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
                    if (scroll > 17) scroll = 17;
            
            
                    if (scroll > 16) {          
                        if(!done) {
                            $sidebar.addClass('lower-highlight');
                            done = true;
                        }
                    }
                    else {
                        if(done) {
                            $sidebar.removeClass('lower-highlight');
                            done = false;
                        }
                    }
            
                    sidebar.style['marginTop'] = (17-scroll)+'px';
                 }).triggerHandler('scroll.ace.top_menu');
            
             }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
            
             $(window).on('resize.ace.top_menu', function() {
                $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
             });
            
            
            });
        </script>
    </body>
</html>
