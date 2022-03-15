@extends('layouts.admin.master')

@section('title')General {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<style>
        .dark-only table.dataTable.display tbody tr td:first-child, td:nth-child(5) {
            font-weight: bold;
            border-left: 1px solid #111727;
        }
        table.dataTable.display tbody tr td:nth-child(2) {
            color: #24695C;
        }
        table.dataTable.display tbody tr td:last-child {
            /*display: flex;*/
            /*border-bottom: none;*/
        }
        table.dataTable.display tbody tr td:last-child img {
            margin: auto;
        }
        
        table.dataTable.display thead 
            tr th::before, th::after {
            content: none !important;
        }
        
        table.dataTable.display tbody tr td {
            border: 0px;
        }
        
        table.dataTable.display thead tr th {
            border: 0px;
            color: #bbb;
        }
        
        .blog-box.blog-list a img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
        }
        .blog-list .blog-details h6:hover {
            transform: scale(1.05);
        }
        .cal-date-widget .blog-box.blog-list {
            display: flex;
            flex-direction: row;
        }
        .more-btn-panel {
            display: flex;
            border-radius: 0 0 10px 10px;
        }
        .more-btn-panel:hover {
            /*background-color: #a4a4a4;*/
        }
        .more-btn {
            margin: auto;
            cursor: default;
        }
        .more-btn:hover {
            /*background-color: #a4a4a4;*/
        }
        .post-preview-title {
            font-weight: bolder;
        }
        .recipient-body {
            display: flex;
            justify-content: space-between;
        }
        .dataTables_length#row-select-multiple_length {
            display: none;
        }
        
        .detail .part-title {
            color: #bebebe;
        }
        
        .detail .part-content {
            font-weight: bold;
            font-size: 18px;
        }
        
        #circle {
          width: 7px;
          height: 9px;
          margin-right: 5px;
          margin-top: 6px;
          -webkit-border-radius: 7px;
          -moz-border-radius: 7px;
          border-radius: 7px;
          background: #24695c;
        }
</style>
@endpush
    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="database"></i></div>-->
                                <img src="{{asset('assets/images/dashboard/box1.png')}}" alt="" height="70px" class="mr-4" />
                                <div class="media-body">
                                    <span class="m-0">Depositos</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="{{asset('assets/images/dashboard/box1.png')}}" alt="" height="100px" class="mr-4" />
                                    </i>
                                    <!--<i class="icon-bg" data-feather="database"></i>-->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>-->
                                <img src="{{asset('assets/images/dashboard/box2.png')}}" alt="" height="70px"/>
                                <div class="media-body">
                                    <span class="m-0">Retiros</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="{{asset('assets/images/dashboard/box2.png')}}" alt="" height="100px" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="message-circle"></i></div>-->
                                <img src="{{asset('assets/images/dashboard/box3.png')}}" alt="" height="70px" class="mr-4" />
                                <div class="media-body">
                                    <span class="m-0">Activos</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="{{asset('assets/images/dashboard/box3.png')}}" alt="" height="100px" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="user-plus"></i></div>-->
                                <img src="{{asset('assets/images/dashboard/box4.png')}}" alt="" height="70px" class="mr-4" />
                                <div class="media-body">
                                    <span class="m-0">Pendientes</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="{{asset('assets/images/dashboard/box4.png')}}" alt="" height="100px" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card">
                        <div class="cal-date-widget card-body">
                            <div class="row">
                                <div class="col-xl-6 col-xs-12 col-md-12 col-sm-12">
                                    <div class="card profile-greeting">
                                        <div class="card-header p-t-10">
                                            <div class="header-top">
                                                <div class="setting-list bg-primary position-unset">
                                                    <ul class="list-unstyled setting-option">
                                                        <!--<li>-->
                                                        <!--    <div class="setting-white"><i class="icon-settings"></i></div>-->
                                                        <!--</li>-->
                                                        <!--<li><i class="view-html fa fa-code font-white"></i></li>-->
                                                        <!--<li><i class="icofont icofont-maximize full-card font-white"></i></li>-->
                                                        <!--<li><i class="icofont icofont-minus minimize-card font-white"></i></li>-->
                                                        <!--<li><i class="icofont icofont-refresh reload-card font-white"></i></li>-->
                                                        <!--<li><i class="icofont icofont-error close-card font-white"></i></li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center p-t-0 p-b-10">
                                            <h3 class="font-light">Bienvenido de nuevo, Juan!!</h3>
                                            <!--<p>We are glad that you are visite this dashboard. we will be happy to help you grow your business.</p>-->
                                        </div>
                                        <div class="confetti">
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                        </div>
                                    </div>
                                    <div class="card b-r-10 m-b-0 m-t-55">
                                        <h4 class="post-preview-title m-t-5 m-b-15 m-l-20">Run Binary Blog</h4>
                                        <div class="m-b-20 card" style="height: 1px;"></div>
                                        <div class="row m-l-10">
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                    	                        <div class="blog-box blog-list col-md-12">
                    	                            <div class="m-r-20">
                    	                                <div class="blog-wrraper">
                    	                                    <a href="blog-single.html"><img class="img-fluid sm-100-wp p-0" src="{{asset('assets/images/blog/blog1.png')}}" alt="" /></a>
                    	                                </div>
                    	                            </div>
                    	                            <div class="col-xs-8">
                    	                                <div class="blog-details">
                                                            <a href="learning-detailed.html"> <h6>Maximize risk adjusted returns with IML </h6></a>
                    	                                    <div class="blog-date">02 December 2021</div>
                    	                                </div>
                    	                            </div>
                    	                        </div>
                        	                </div>
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                    	                        <div class="blog-box blog-list col-md-12">
                    	                            <div class="m-r-20">
                    	                                <div class="blog-wrraper">
                    	                                    <a href="blog-single.html"><img class="img-fluid sm-100-w p-0" src="{{asset('assets/images/blog/blog2.png')}}" alt="" /></a>
                    	                                </div>
                    	                            </div>
                    	                            <div class="col-xs-8">
                    	                                <div class="blog-details">
                                                            <a href="learning-detailed.html"> <h6>Maximize risk adjusted returns with IML</h6></a>
                    	                                    <div class="blog-date">03 December 2021</div>
                    	                                </div>
                    	                            </div>
                    	                        </div>
                        	                </div>
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                    	                        <div class="blog-box blog-list col-md-12">
                    	                            <div class="m-r-20">
                    	                                <div class="blog-wrraper">
                    	                                    <a href="blog-single.html"><img class="img-fluid sm-100-w p-0" src="{{asset('assets/images/blog/blog3.png')}}" alt="" /></a>
                    	                                </div>
                    	                            </div>
                    	                            <div class="col-xs-8">
                    	                                <div class="blog-details">
                                                            <a href="learning-detailed.html"> <h6>Maximize risk adjusted returns with IML</h6></a>
                    	                                    <div class="blog-date">04 December 2021</div>
                    	                                </div>
                    	                            </div>
                    	                        </div>
                        	                </div>
                        	            </div>
                    	                <div class="col-xl-12 col-xs-12 more-btn-panel" style="justify-content: center; padding: 10px 0;">
                    	                    <span>Leer mas</span>
                    	                </div>
                    	            </div>
                                </div>
                                <div class="col-xl-6 col-xs-12 col-md-12 col-sm-12">
                                    <div class="card m-b-10">
                                        <div class="card-body pb-0">
                                            <h4 class="card-title" style="font-weight: bold;">Resumen de Inversión </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Detalles</th>
                                                                <th scope="col">Monto</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Deposito Realizado</td>
                                                                <td style="color: #24695C;">$0.00 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ganancias Esperadas</td>
                                                                <td style="color: #24695C;">Sin Iniciar</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fecha de Inicio</td>
                                                                <td style="color: #BDBFBB;">Sin Iniciar</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durabilidad</td>
                                                                <td style="color: #24695C;">Sin Iniciar</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dias de Pagos</td>
                                                                <td style="color: #24695C;">Sin Iniciar</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="chart-wrapper">
                                                        <div id="echart_dashboard" style="height: 300px; width: 100%;">
                                                    </div>
                                                    <button class="btn btn-light" style="padding: 0.3rem 1.3rem;position: absolute;right: 10px;bottom: 15px;">Siguiente</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-t-10 p-10">
                                    <h5 style="font-weight: bold; ">Atención al Cliente</h5>
                                    <div class="recipient-body">
                                        <div style="display: flex;">
                                            <img class="img-40 rounded-circle" src="{{asset('assets/images/dashboard/telephone/auriculares.png')}}" style="height: 40px;" alt="#">
                                            <div class="m-l-10">
                                                <h6>Asistencia</h6>
                                                <div style="font-size: 12px;">runcapitalgroup@gmail.com</div>
                                            </div>
                                        </div>
                                        <div class="p-10 b-r-10" style="display: flex; border: 2px solid #24695C;">
                                            <img class="img-30 m-r-10" src="{{asset('assets/images/dashboard/telephone/tel-icon.png')}}" style="height: 30px;" alt="#">
                                            <!--<i class="icofont icofont-telephone m-r-10" style="font-size: 30px; color: #1F695C;"></i>-->
                                            <div style="font-size: 9px; color: #1F695C">
                                                <div>Whatsapp</div>
                                                <div>+1 809 461 8099</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-12 xl-100 box-col-12 detail card">
                  <div class="row">
                    <div class='col-md-6 p-l-45 p-t-45'>
                        <h5 class='b-b-info p-b-5'>Datos de la Empresa</h5>
                        <div class="d-flex">
                            <div class="col-md-4">
                                <p class='part-title'>Maximo diario</p>
                                <p class='part-content'>22,3234$</p>
                                <p class='part-title'>Maximo anual</p>
                                <p class='part-content'>116,4225$</p>
                            </div>
                            <div class="col-md-4">
                                <p class='part-title'>Minimo diario</p>
                                <p class='part-content'>11,3234$</p>
                                <p class='part-title'>Minimo anual</p>
                                <p class='part-content'>14,4225$</p>
                            </div>
                            <div class="col-md-4">
                                <p class='part-title'>Volatilidad(1M)</p>
                                <p class='part-content'>22,3234$</p>
                                <p class='part-title'>Cap. de mercado</p>
                                <p class='part-content'>1.5B $</p>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class="chart-widget-top">
                            <div>
                              <!--<h5 class="p-t-50">Whatsapp +1 809 461 8099</h5>-->
                              <!--<div class="main-header-left">-->
                              <!--  <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="" src="{{asset('assets/images/logo/logo.png')}}" alt="" style="height: 85px;"></a></div>-->
                              <!--  <div class="dark-logo-wrapper"><a href="{{ route('index') }}"><img class="" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="" style="height: 85px;"></a></div>-->
                                <!--<div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>-->
                              <!--</div>-->
                              <div id="chart-widget1" style='width: 500px; '></div>
                              <div class="card-body">
                                  <div>
                                    <h4 class="num total-value">$ <span class="counter">3654</span>.00</h4>
                                  </div>
                                  <div class="col-5 d-flex">
                                    <h6 class="f-w-600 font-primary">+$2,3247</h6>
                                    <span class="num">&nbsp;&nbsp;(<span class="">+11.84</span>%<i class="icon-angle-up f-12"></i>)</span>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card">
                        <div class="cal-date-widget card-body">
                            <div class="col-sm-12">
                	            <div class="card">
                	                <div class="card-header" style="padding-top: 10px;">
                	                    <h5>Historial de Transacciones</h5>
                	                </div>
                	                <div style="display: flex; padding-left: 30px; position: absolute; top: 60px; z-index: 8;">
                	                    <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                          <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false" onClick="tableShow(1)" style="padding-left: 0px;">Transacciones Generales</a></li>
                                          <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true" onClick="tableShow(2)">Mis Propias Transacciones</a></li>
                                        </ul>
        	                            <!--<button class="btn btn-primary mb-3 m-r-10" onClick="tableShow(1)">Transacciones Generales</button>-->
                                        <!-- <a class="btn btn-success" href="{{ url('table-data/2') }}" >Transacciones Generales</a> -->
        	                            <!--<button class="btn btn-secondary mb-3" onClick="tableShow(2)">Mis Propias Transacciones</button>-->
        	                        </div>
                	                <div class="card-body table-panel" style="margin-top: -25px;">
                                        <div class="table-responsive">
                	                       @include('admin/dashboard/table')
                                        </div>
                	                </div>
                	            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @push('scripts')    
        <script type="text/javascript">
            $(document).ready(function() {
                if(document.URL.includes("top-profile")) {
                    console.log("before");
                    window.scrollTo(0, document.body.scrollHeight+100);
                    console.log("after");
                    $('.nav.nav-tabs .nav-link')[0].className = "nav-link";
                    $('.nav.nav-tabs .nav-link')[1].className = "nav-link active";
                    tableShow(2);
                }
            });
            function tableShow(i) {
                $.get('/table-data/'+i, function(result) {
                    $('div.table-responsive table tbody').empty();
                    $('div.table-responsive table tbody').fadeOut();
                    let data = result;
                    data.map(function(value, index) {
                        let tr = $("<tr><td><b>"+data[index].startDate+"</b></td><td><b>"+data[index].type+"</b></td><td>"+data[index].name+"</td><td><b>"+data[index].salary+"</b></td><td>"+data[index].unit+`</td><td style="display: flex;"><div id="circle"></div><b>Completado</b></td></tr>`);
                        $('div.table-responsive table tbody').append(tr);
                    });
                    $('div.table-responsive table tbody').fadeIn();
                    console.log(data);
                });
            }
        </script>
        <script src="{{asset('assets/js/echart.js')}}"></script>
        <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
        <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
        <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
        <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/js/general-widget.js')}}"></script>
        <script src="{{asset('assets/js/height-equal.js')}}"></script>
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
        <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
        
        <script src="{{asset('assets/js/chart/apex-chart/moment.min.js')}}"></script>
        <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
        <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
        <script src="{{asset('assets/js/chart-widget.js')}}"></script>

    @endpush
@endsection