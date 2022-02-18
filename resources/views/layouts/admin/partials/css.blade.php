<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
<!-- Plugins css start-->
@stack('css')
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
<link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
<style>
    .main-nav .icon-state 
        .switch-state {
            height: 27px;
            background-color: #202938;
        }
        .switch-state:before {
            bottom: 2px;
            height: 22px;
            width: 22px;
        }
    
    .main-nav .icon-state .switch-state:after {
        top: 8px;
        left: 8px;
    }
    
    .main-nav .sidebar-user .user-info {
        display: flex;
        justify-content: space-between;
    }
    
    .main-nav .sidebar-user .avail-bal {
        text-align: center;
        margin-top: 30px;
        font-weight: bold;
    }
    
    .main-nav .sidebar-user .val-usd {
        text-align: center;
        color: #24695C;
        font-size: 30px;
    }
    
    .main-nav .sidebar-user .benefit {
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
    }
    
    .main-nav .sidebar-user .benefit bold {
        font-weight: bold;
    }
    
    .main-nav .sidebar-user .benefit .percent {
        color: #eb7e7e;
    }
    
    .main-nav .main-navbar .video-panel {
        margin-top: 20px;
    }
    
    .main-nav .sidebar-user .but-group{
        padding: 5px 8px;
        font-size: 10px;
        width: 100px;
        height: 35px;
    }
    
    .main-navbar .nav-menu .sidebar-gif {
        display: flex !important;
    } 
    .main-navbar .nav-menu .sidebar-gif img{
        margin: auto;
    }
    
    /* Dropdown Button */
    .nav-menu .dropbtn {
      background: none;
      color: #24695c;
      padding: 5px 16px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      display: flex;
      cursor: pointer;
    }
    
    /* The container <div> - needed to position the dropdown content */
    .nav-menu .dropdown {
      position: relative;
      display: inline-block;
    }
    
    /* Dropdown Content (Hidden by Default) */
    .nav-menu .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 185px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    /* Links inside the dropdown */
    .nav-menu .dropdown-content a {
      color: #24695c;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    /* Change color of dropdown links on hover */
    .nav-menu .dropdown-content a:hover {background-color: #ddd;}
    
    
    /* Show the dropdown menu on hover */
    .nav-menu .dropdown:hover .dropdown-content {display: block;}
    
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .nav-menu .dropdown:hover .dropbtn {background-color: #3e8e41;}
    
    .nav-menu .dropdown .nav-link .fa-angle-down {
        display: none;
    }
    
    .nav-menu .dropdown.active .nav-link .fa-angle-down {
        display: block;
    }
    
    .nav-menu .dropdown .nav-link .fa-angle-right {
        display: block;
    }
    
    .nav-menu .dropdown.active .nav-link .fa-angle-right {
        display: none;
    }

</style>
