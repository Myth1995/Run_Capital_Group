<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    @includeIf('layouts.admin.partials.css')
    <style>
        .modal-dialog .btn-group .dropdown-toggle, #dropdown-menu { width: 300px }
        .modal-dialog .btn-group img { margin-right: 10px; }
        .modal-dialog .btn-group .dropdown-toggle { padding-right: 50px }
        .modal-dialog .btn-group .dropdown-toggle .glyphicon { margin-left: 20px; margin-right: -40px }
        .modal-dialog .btn-group #dropdown-menu>li>a:hover { background: #f1f9fd } /* $search-blue */
        .modal-dialog .btn-group .dropdown-header { background: #ccc; font-size: 14px; font-weight: 700; padding-top: 5px; padding-bottom: 5px; margin-top: 10px; margin-bottom: 5px }
        .modal-dialog .btn-group #dropdown-menu {
            position: absolute;
            top: 75px;
            left: 50px;
            z-index: 9999;
            background-color: grey;
            display: none;
        }
        
        .modal-dialog .number-wrapper {
          position: relative;
          text-align: right;
          border: 1px solid grey;
          padding: 5px 10px 5px 5px;
          height: 50px;
          border-radius: 4px;
        }
        
        .modal-dialog .number-wrapper input:focus {
            border-color: yellow;
        }
        
        .modal-dialog .number-wrapper:after,
        .modal-dialog .number-wrapper:before {
          position: absolute;
          right: 5px;
          width: 1.6em;
          height: .9em;
          font-size: 10px;
          pointer-events: none;
          background: #fff;
        }
        
        /*.modal-dialog .number-wrapper:after {*/
          /*color: blue;*/
        /*  content: "\25B2";*/
        /*  margin-top: 1px;*/
        /*  margin-right: 30px;*/
        /*}*/
        
        /*.modal-dialog .number-wrapper:before {*/
          /*color: red;*/
        /*  content: "\25BC";*/
        /*  margin-bottom: 5px;*/
        /*  margin-right: 30px;*/
        /*  bottom: -.5em;*/
        /*}*/
        
        .modal-dialog .number-wrapper input {
            width: 90%;
            border: none;
            margin-right: 5px;
            height: 95%;
        }
        
        /*.modal-dialog input[type=number]::-webkit-inner-spin-button {*/
        /*  -webkit-appearance: none;*/
        /*}*/
    </style>
  </head>
  <body class="">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      @includeIf('layouts.admin.partials.header')
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @includeIf('layouts.admin.partials.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright {{date('Y')}}-{{date('y', strtotime('+1 year'))}} © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <div class="modal fade modal-bookmark" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="withdrawModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="width: 70%; margin: auto;">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="width: 100%; text-align: center;">Cantidad</h3>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                        <div class="form-row">
                            <div class="form-group col-md-12" style="justify-content: center; background-color: rgba(200, 200, 200, 0.2); display: flex;">
                                <div>
                                    <img src="{{asset('assets/images/sidebar/perfil-del-usuario.png')}}" width='40' height='40' alt='' style='margin: auto;' />
                                </div>
                                <div class="py-2" id="task-title" type="text" required="" autocomplete="off" style="margin: auto; width: 96%;">
                                    <h6 for="task-title">mitiago2012.jjpm@gmail.com</h6>
                                    <div>Josepalomero</div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="task-title">Moneda</label>
                                <select class="form-select" required="">
                                    <option><img src="{{asset('assets/images/dashboard/deposit/atar.png')}}" width='40' height="40" alt="USDT" />USDT</option>
                                    <option>TRX Tron</option>
                                    <option>LTC Litecoin</option>
                                    <option>BTC Bitcoin</option>
                                    <option>XRP Ripple</option>
                                    <option>BNB Binance Coin</option>
                                    <option>DOGE Dogecoin</option>
                                </select>
                            </div>
                            
                            <!--<div class="btn-group">-->
                            <!--    <button type="button" class="btn btn-default" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="onClickCurUnit()">-->
                            <!--      <img src="{{asset('assets/images/dashboard/deposit/atar.png')}}" width='40' height="40" alt="USDT" />-->
                            <!--      0123 4567 8912 3456-->
                            <!--      <span class="glyphicon glyphicon-chevron-down"></span>-->
                            <!--    </button>-->
                                
                            <!--    <ul id="dropdown-menu">-->
                            <!--      <li class="dropdown-header">Member name (you)</li>-->
                            <!--      <li>-->
                            <!--        <a href="#" title="Select this card"><img src="{{asset('assets/images/dashboard/deposit/atar.png')}}" width='40' height="40" alt="USDT" />0123 4567 8912 3456</a>-->
                            <!--      </li>-->
                            <!--      <li>-->
                            <!--        <a href="#" title="Select this card"><img src="{{asset('assets/images/dashboard/deposit/atar.png')}}" width='40' height="40" alt="USDT" />0123 4567 8912 3456</a>-->
                            <!--      </li>-->
                            <!--      <li class="dropdown-header">Member name</li>-->
                            <!--      <li>-->
                            <!--        <a href="#" title="Select this card"><img src="{{asset('assets/images/dashboard/deposit/atar.png')}}" width='40' height="40" alt="USDT" />0123 4567 8912 3456</a>-->
                            <!--      </li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            
                            <div class="form-group col-md-12">
                                <label for="sub-task">Cantidad</label>
                                <div class="number-wrapper">
                                    <input type="number" placeholder="Ingresa la cantidad" required="" autocomplete="off" />
                                    USDT
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="sub-task">Nota(optical)</label>
                                <div class="number-wrapper">
                                    <input type="text" placeholder="Ingresa la cantidad" required="" maxLength="50" autocomplete="off" />
                                    <span>0/50</span>
                                </div>
                            </div>
                        </div>
                        <input id="index_var" type="hidden" value="6" />
                        <div class="row" style="justify-content: space-around;">
                            <button class="btn col-md-5" id="Bookmark" style="background-color: #c4c4c4;" onclick="submitBookMark()" type="submit">Paso anterior</button>
                            <button class="btn col-md-5" style="background-color: #f3ebae;" type="button" data-bs-dismiss="modal">Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @includeIf('layouts.admin.partials.js')
    <script>
        function onClickCurUnit() {
            $('#dropdown-menu')[0].style.display = $('#dropdown-menu')[0].style.display == 'block' ? 'none' : 'block';
        }
        
        $('.input-cond')[0].keyup(updateCount);
        $('.input-cond')[0].keydown(updateCount);
        
        function updateCount() {
            var cs = $(this).val().length;
            $('#characters').text(cs);
        }
    </script>
  </body>
</html>