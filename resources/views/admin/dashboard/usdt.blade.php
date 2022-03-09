@extends('layouts.admin.master')

@section('title')Ecommerce {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .commerce {
            width: 65%;
        }
        .commerce .title {
            font-size: 35px;

        }
        .commerce .transaction {
            display: flex;
            height: 250px;
            border-bottom: 1px solid #DADADA;
        }
        
        .commerce .content {
            font-size: 16px;
        }
        
        .commerce .transaction .barcode {
            width: 30%;
            /*border: 1px solid;*/
        }
        
        .commerce .transaction .price {
            width: 70%;
            text-align: right;
            position: relative;
        }
        
        .commerce .transaction .price .input-info {
            position: relative;
        }
        
        .commerce .transaction .price .input-info img {
            position: absolute;
            top: 7px;
            right: 17px;
            width: 20px;
        }
        
        .commerce .transaction .price .input-info .tooltiptext:after {
            border-color: #999 transparent transparent transparent;
        }
        
        .commerce .transaction .price .addr {
            /*display: flex;*/
            position: absolute;
            bottom: 0;
            right: 0;
        }
        
        .commerce .transaction .price .rest {
            color: #AAAAAA;
        }
        
        .commerce .transaction .price .addr .tooltip-copy {
            position: relative;
        }
        
        .commerce .transaction .price .addr .tooltip-copy #copy-result {
            position: absolute;
            margin-left: 10px;
            display: none;
        }
        
        .commerce .bottom-panel {
            display: flex;
            justify-content: space-between;
        }
        
        .commerce .btn-pay {
            background-color: #24695C;
            color: white;
        }
        
        .commerce #confirmModalCenter {
            display: none;
        }
        
        .commerce #confirmModalCenter .trans-info .info {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

    </style>
@endpush
    @section('content')
    
    <div class="container">
        <div class="commerce m-l-20">
            <div class="title m-b-30">{{$title}}</div>
            <div class="content m-b-30">
                <?php
                    echo str_replace("moneymoney", number_format((float)$val / $data, 2, '.', '')."&nbsp;&nbsp;".$unit, $text);
                ?>
            </div>
            <div class="transaction p-b-10">
                <div class="barcode">
                    <img src="{{asset('assets/images/dashboard/deposit/fund/')}}{{$qr}}" width='200' height="200" alt="qrcode" />
                </div>
                <div class="price">
                    <h5>{{($unit == "BTC" || $unit == "XRP") ?  number_format((float)$val / $data, 4, '.', '') : number_format((float)$val / $data, 2, '.', '')}} {{$unit}}</h5>
                    <h6 class="rest">{{number_format((float)$val, 2, '.', '')}}USD</h6>
                    <div class="addr">
                        <div style="display: flex;">
                            <div class="m-r-20 f-16">{{$addr}}</div>
                            <i class="fa fa-copy tooltip-copy" style="font-size:24px; cursor: pointer;" onclick="onCopy()">
                                <span id="copy-result">Copied!</span>
                            </i>
                        </div>
                        <div class="row m-t-10">
                            <div class="col-sm-9 f-16 input-info" style="text-align: left;">
                                <input class="form-control" type="text" placeholder="Introduce el Id.de transaccion" />
                                <img src="{{asset('assets/images/dashboard/deposit/fund/info-24.png')}}" onmouseover="onImgOver()" onmouseout="onImgOut()"/>
                                <span class="tooltiptext" id="tooltiptext" style="left: 91%; visibility: hidden; background-color: #999;" >Information</span>
                            </div>
                            <div class="col-sm-3" id="countdown-time">
                                29m 59s
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-panel m-t-20">
                <div>
                    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><img src="{{asset('assets/images/dashboard/deposit/right-cross.png')}}" class="m-10" width='20' height="30" alt="Before" style="transform: rotate(180deg);" />Cambiar Detalles</a>
                </div>
                <div>
                    <button class="btn btn-pay" id="trans-addr" onclick="onPay()">He pagado</button>
                    <div class="modal" id="confirmModalCenter">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content py-3" style="width: 75%; margin: auto;">
                                <div style=" display: flex; flex-direction: column; width: 100%; margin: auto;">
                                    <div class="mb-3" style="margin: auto;">
                                        <img src="{{asset('assets/images/dashboard/deposit/send/sand-clock1.png')}}" width=100 height=100 alt="" />
                                    </div>
                                    <div class="m-b-10" style="font-size: 17px; margin: auto;">
                                        <span>Pago pendiente</span>
                                    </div>
                                    <div class="m-b-20" style="margin: auto;">
                                        <h2><b>
                                            <span style="font-size: 40px;">{{$val}}</span>&nbsp;<span style="font-size: 24px;">{{$unit}}</span>
                                        </b></h2>
                                    </div>
                                    <div class="trans-info px-4 py-4" style="margin: auto; width: 90%; background-color: #DDDDDD;">
                                        <div class="info">
                                            <label>Hacia</label>
                                            <span>soldavilada@gmail.com</span>
                                        </div>
                                        
                                        <div class="info">
                                            <label>Fecha</label>
                                            <span><?php echo date("Y-m-d H:i:s"); ?></span>
                                        </div>
                                        
                                        <div class="info">
                                            <label>Metodo de Pago</label>
                                            <span>Biletera de fondos</span>
                                        </div>
                                        
                                        <div class="info">
                                            <label>Modena</label>
                                            <span>{{$val}}&nbsp;&nbsp;{{$unit}}</span>
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
        <script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
        <script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
        <script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
        <script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
        <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
        <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
        <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
        <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
        <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
        <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/js/owlcarousel/owl-custom.js')}}"></script>
        <script src="{{asset('assets/js/dashboard/dashboard_2.js')}}"></script>
        <script>
            function onCopy() {
                var addr = {!! json_encode($addr) !!};
                navigator.clipboard.writeText(addr);
                // document.getElementById("copy-result").style="display: block; transition: opacity 1s;";
            }
            
            var countDownDate = 1;

            // Update the count down every 1 second
            var x = setInterval(function() {
            
              // Get today's date and time
            //   var now = new Date().getTime();
                
              // Find the distance between now and the count down date
              var distance = 1800 - countDownDate;
                
              // Time calculations for days, hours, minutes and seconds
            //   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            //   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (60 * 60)) / 60) < 10 ? '0' + Math.floor((distance % (60 * 60)) / 60) : Math.floor((distance % (60 * 60)) / 60);
              var seconds = Math.floor(distance % 60) < 10 ? '0' + Math.floor(distance % 60) : Math.floor(distance % 60);
                
              // Output the result in an element with id="demo"
              document.getElementById("countdown-time").innerHTML = minutes + "m " + seconds + "s ";
                
              // If the count down is over, write some text 
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown-time").innerHTML = "EXPIRED";
              }
              countDownDate += 1;
            }, 1000);
            
            var dd = document.getElementById("confirmModalCenter");
            
            function onPay() {
                var trans_addr = document.getElementById("trans-addr").value;
                // debugger;
                // if(trans_addr.length == 0) {
                //     alert("Invalid text!");
                //     return;
                // }
                var money = {!! json_encode($val) !!};
                var unit = {!! json_encode($unit) !!};
                // window.location.href = ('/dashboard/send?money='+money+'&unit='+unit);
                
                dd.style="display: block; background-color: rgba(100, 100, 100, 0.7);"
            }
            
            function onImgOver() {
                document.getElementById("tooltiptext").style = "visibility: visible; left: 91%; background-color: #999;";
            }
            
            function onImgOut() {
                document.getElementById("tooltiptext").style = "visibility: hidden; left: 91%; background-color: #999;";
            }
            
            $(document).ready(function() {
                $("#confirmModalCenter").click(function(e) {
                    dd.style="display: none;";
                    // window.location.href = ('/dashboard');
                });
            });
        </script>
    @endpush
@endsection