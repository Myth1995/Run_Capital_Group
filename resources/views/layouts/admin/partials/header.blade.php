<div class="page-main-header">
  <div class="main-header-right row m-0">
    <!--<div class="main-header-left">-->
    <!--  <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="" src="{{asset('assets/images/logo/logo.png')}}" alt="" style="height: 85px;"></a></div>-->
    <!--  <div class="dark-logo-wrapper"><a href="{{ route('index') }}"><img class="" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="" style="height: 85px;"></a></div>-->
      <!--<div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>-->
    <!--</div>-->
    <div class="left-menu-header col" style="left: 290px; z-index: 100;">
        <div class="nav-menu custom-scrollbar" style="display: flex; padding-left: 50px;">
            <div>
                <a href="{{route('index')}}" class="nav-link link-nav {{routeActive('index')}}" style="display: flex;">
                    <!--<i data-feather="home"></i>-->
                    <img src="{{asset('assets/images/header/1.png')}}" alt="" style="height: 20px;" />
                    <span style="font-weight: bold;">&nbsp;Tablero</span>
                </a>
            </div>
            <div class="dropdown" id="dropmenu2">
                <a class="nav-link {{ prefixActive('/dashboard-02') }}" href="javascript:void(0)" style="display: flex;">
                    <!--<i data-feather="layout"></i>-->
                    <img src="{{asset('assets/images/header/2.png')}}" alt="" style="height: 20px;" />&nbsp;
                    <p style="font-weight: bold; display: flex;">Empresa&nbsp;&nbsp;
                        <i class="fa fa-angle-right" style="padding-top: 4px;"></i>
                        <i class="fa fa-angle-down" style="padding-top: 4px;"></i>
                    </p>
                </a>
                <!--<ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/dashboard-02') }}; padding-left: 30px;">-->
                    <!--<li>-->
                    <div class="dropdown-content">
                        <a href="{{route('dashboard-02')}}" class="{{routeActive('dashboard-02')}}">Comercio Electronico</a>
                    </div>
                    <!--</li>-->
                </ul>
            </div>
            <div class="dropdown" id="dropmenu3">
                <a class="nav-link {{ prefixActive('/dashboard1') }}" href="javascript:void(0)" style="display: flex;">
                    <img src="{{asset('assets/images/header/3.png')}}" alt="" style="height: 20px;" />&nbsp;
                    <!--<img src="{{asset('assets/images/sidebar/equipo.png')}}" class="img-20" height="20px" alt="" />&nbsp;&nbsp;-->
                    <p style="font-weight: bold; display: flex;">General&nbsp;
                        <i class="fa fa-angle-right" style="padding-top: 4px;"></i>
                        <i class="fa fa-angle-down" style="padding-top: 4px;"></i>
                    </p></a>
                <!--<ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/dashboard1') }}; padding-left: 30px;">-->
                    <!--<li>-->
                    <div class="dropdown-content">
                        <a href="{{ route('general-widget') }}" class="{{routeActive('general-widget')}}">Ajuste</a>
                    <!--</li>-->
                    <!--<li>-->
                        <a href="{{route('refferal')}}" class="{{routeActive('refferal')}}">Referencias</a>
                        <a href="{{route('blogpage')}}" class="{{routeActive('blogpage')}}">Blog</a>
                    </div>
                    <!--</li>-->
                </ul>
            </div>
            <div class="dropdown">
                <!--<a class="nav-link menu-title {{ prefixActive('/widgets') }}" href="javascript:void(0)" style="display: flex;"><i data-feather="airplay"></i><span style="font-weight: bold;">Proyectos&nbsp;&nbsp;</span></a>-->
                <a class="nav-link {{ prefixActive('/widgets') }}" href="javascript:void(0)" style="display: flex;">
                    <img src="{{asset('assets/images/header/4.png')}}" alt="" style="height: 24px;" />&nbsp;
                    <span style="font-weight: bold;">Proyectos&nbsp;&nbsp;</span>
                </a>
                <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/widgets') }}; padding-left: 30px;">
                    
                    
                    <!--<li><a href="{{ route('chart-widget') }}" class="{{routeActive('chart-widget')}}">Chart</a></li>-->
                </ul>
            </div>
        </div>
    <!--  <ul>-->
    <!--    <li>-->
    <!--      <form class="form-inline search-form">-->
    <!--        <div class="search-bg"><i class="fa fa-search"></i>-->
    <!--          <input class="form-control-plaintext" placeholder="Search here.....">-->
    <!--        </div>-->
    <!--      </form>-->
    <!--      <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>-->
    <!--    </li>-->
    <!--  </ul>-->
    </div>
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li class="onhover-dropdown">
          <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
          <ul class="notification-dropdown onhover-show-div">
            <li>
              <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
            </li>
            <li class="noti-primary">
                <a href="{{route('notification-panel')}}">
                  <div class="media">
                    <span class="notification-bg bg-light-primary">
                        <img class="img-20" height="20px" src="{{asset('assets/images/notification/notifybox.png')}}" alt="mail" />
                        <!--<i data-feather="mail"> </i>-->
                    </span>
                    <div class="media-body">
                      <p>Delivery successful </p>
                      <span style="color: #cccccc; font-size: 10px;">{{ \Illuminate\Support\Str::limit("You have deposited 3000 USDT successfully at 2021-12-23.", 30, '...') }}</span><br/>
                      <span>Hace 10 minutes</span>
                    </div>
                  </div>
                </a>
            </li>
            <li class="noti-secondary">
             <a href="{{route('notification-panel')}}">
              <div class="media">
                <span class="notification-bg bg-light-secondary">
                    <img class="img-20" height="20px" src="{{asset('assets/images/notification/notifybox.png')}}" alt="mail" />
                    <!--<i data-feather="check-circle"> </i>-->
                </span>
                <div class="media-body">
                  <p>Order Complete</p>
                  <span style="color: #cccccc; font-size: 10px;">{{ \Illuminate\Support\Str::limit("You have deposited 3000 USDT successfully at 2021-12-23.", 30, '...') }}</span><br/>
                  <span>1 hour ago</span>
                </div>
              </div>
             </a>
            </li>
            <li class="noti-success">
             <a href="{{route('notification-panel')}}">
              <div class="media">
                <span class="notification-bg bg-light-success">
                    <img class="img-20" height="20px" src="{{asset('assets/images/notification/notifybox.png')}}" alt="mail" />
                    <!--<i data-feather="file-text"> </i>-->
                </span>
                <div class="media-body">
                  <p>Tickets Generated</p>
                  <span style="color: #cccccc; font-size: 10px;">{{ \Illuminate\Support\Str::limit("You have deposited 3000 USDT successfully at 2021-12-23.", 30, '...') }}</span><br/>
                  <span>3 hour ago</span>
                </div>
              </div>
             </a>
            </li>
            <li class="noti-danger">
             <a href="{{route('notification-panel')}}">
              <div class="media">
                <span class="notification-bg bg-light-danger">
                    <img class="img-20" height="20px" src="{{asset('assets/images/notification/notifybox.png')}}" alt="mail" />
                    <!--<i data-feather="user-check"> </i>-->
                </span>
                <div class="media-body">
                  <p>Delivery Complete</p>
                  <span style="color: #cccccc; font-size: 10px;">{{ \Illuminate\Support\Str::limit("You have deposited 3000 USDT successfully at 2021-12-23.", 30, '...') }}</span><br/>
                  <span>6 hour ago</span>
                </div>
              </div>
             </a>
            </li>
          </ul>
        </li>
        <li>
            <div class="mode"><i class="fa fa-lightbulb-o"></i></div>
        </li>
        <li class="onhover-dropdown p-0">
          <a class="btn btn-primary-light" type="button" href="{{ route('logout') }}"><i data-feather="log-out"></i>Log out</a>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>
