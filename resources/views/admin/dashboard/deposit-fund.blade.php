@extends('layouts.admin.master')

@section('title')Ecommerce {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
    <style>

        .con-inner {
            display: flex;
        }
        
        .deposit {
            /*margin: auto;*/
            width: 70%;
        }

        .deposit .pay-info {
            background-color: rgba(220, 220, 220, 0.5);
            width: 100%;
        }
        
        .deposit .pay-info .title {
            font-size: 12px;
            margin-bottom: 10px;
        }
        
        .deposit .pay-info .fee {
            color: red;
        }
        
        .deposit .pay-info .content {
            font-size: 16px;
        }
        
        .deposit .sel-protocol {
            border-color: #24695C;
            height: 40px;
            font-size: 20px;
        }
        
        .deposit .sel-protocol .opt {
            border-color: #24695C;
        }
        
        .deposit .confirm {
            background-color: #24695C;
            color: white;
            font-size: 16px;
        }
        
        .deposit #confirmModalCenter {
            display: none;
        }
        
        .deposit #confirmModalCenter .modal-content {
            background-color: red;
            color: white;
            text-align: left;
            display: flex;
        }
        
        .deposit #confirmModalCenter .modal-content p {
            margin: auto;
            font-size: 15px !important;
        }
    </style>
@endpush
    @section('content')
        @php
            $totalAry = [
                ["kind" => [10], "name" => "ERC20 (ETHEREUM)", "value" => 1],
                ["kind" => [10, 20], "name" => "TRC20 (TRON)", "value" => 2],
                ["kind" => [10, 40, 60], "name" => "BEP20 (BSC)", "value" => 3],
                ["kind" => [30], "name" => "LTC (LITECOIN)", "value" => 4],
                ["kind" => [40], "name" => "BTC (BITCOIN)", "value" => 5],
                ["kind" => [40, 60], "name" => "BNB (BEP2)", "value" => 6],
                ["kind" => [50], "name" => "XRP (RIPPLE)", "value" => 7],
                ["kind" => [70], "name" => "DOGE (DOGECOIN)", "value" => 8],
            ];
        @endphp
    <div class="container">
        <div class="con-inner">
            <div class="deposit">
                <h3 class="m-b-20 f-30">Confirmación de pago </h3>
                <div class="pay-info p-50">
                    <div class="row m-b-20">
                        <div class="col-sm-4">
                            <div class="title">BENEFICIARIO</div>
                            <h5 class="content">U 0698 2881 2734</h5>
                        </div>
                        <div class="col-sm-4">
                            <div class="title">IMPORTE DE LA TRANSFERENCIA</div>
                            <h5 class="content">{{number_format((float)$val, 2, '.', '')}} USD</h5>
                        </div>
                        <div class="col-sm-4">
                            <div class="title">TARIFA</div>
                            <h5 class="content fee">0.00 %</h5>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-4">
                            <div class="title">MONTO A SER ACREDITADO</div>
                            <h5>{{number_format((float)$val, 2, '.', '')}} USD</h5>
                        </div>
                    </div>
                </div>
                
                <div class="m-t-10">
                    <p>Seleccionar Red:</p>
                    <select class="sel-protocol" id="protocol">
                        <option value="0" class="opt">Seleccionar Red</option>
                        <!--<option value="1" class="opt">BEP20 (BSC)</option>-->
                        <!--<option value="2" class="opt">BTC (BITCOIN)</option>-->
                        <!--<option value="3" class="opt">BNB (BEP2)</option>-->
                        @foreach($totalAry as $el)
                            @if (in_array($kind, $el["kind"]))
                                <option value={{$el["value"]}} class="opt">{{$el["name"]}}</option>
                            @endif
                        @endforeach
                    </select>
                    <div>
                        <a href="{{ route('deposit')}}"><img src="{{asset('assets/images/dashboard/deposit/right-cross.png')}}" class="m-10" width='20' height="30" alt="Before" style="transform: rotate(180deg);" />Cambiar Detalles</a>
                    </div>
                    <div class="m-t-30" style="text-align: right;">
                        <button class="btn btn-primary" type="button" onclick="onConfirm()">CONFIRMAR</button>
                        <div class="modal" id="confirmModalCenter">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <p>Transport Protocol: The value field can not be empty!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal"></div>
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
        <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
        <script src="{{ asset('assets/js/icons/icon-clipart.js') }}"></script>
        <script>
            var dd = document.getElementById("confirmModalCenter");
            function onConfirm() {
                var el = document.getElementById("protocol");
                var value = el.value;
                if(value == 0) {
                    
                    dd.style="display: block; background-color: rgba(100, 100, 100, 0.7);"
                }
                else {
                    var money = {!! json_encode($val) !!};
                    var kind = {!! json_encode($kind) !!};
                    window.location.href = ('/dashboard/fund?money='+money+'&value='+value+'&kind='+kind);
                }
            }
            
            $(document).ready(function() {
                $("#confirmModalCenter").click(function(e) {
                    dd.style="display: none;";
                });
            });
        </script>
    @endpush
@endsection