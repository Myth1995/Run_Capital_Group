@extends('layouts.admin.master')

@section('title')Ecommerce {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
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
        }
        
        .commerce .transaction .barcode {
            width: 30%;
            border: 1px solid;
        }
        
        .commerce .transaction .price {
            width: 70%;
            text-align: right;
        }
        
        .commerce .transaction .price .rest {
            color: #AAAAAA;
        }
    </style>
@endpush
    @section('content')
    
    <div class="container">
        <div class="commerce m-l-20">
            <div class="title m-b-30">{{$unit}}</div>
            <div class="content m-b-30">
                <div class="m-b-10">
                    <span style="color: #dd0000;">Attention!</span> This address only supports Tether transfers via the ERC20 protocol. Do not send transfers from smart contracts,
                    ETH coins or any other crypto to it. Such deposits will not be credited.
                </div>
                <div class="m-b-10">
                    Send the <b>exact amount of {{number_format((float)$val, 2, '.', '')}} USD</b> to the address shown on this page <b>in one transaction.</b>
                </div>
                <div class="m-b-10">
                    Send exactly the amount shown in one transaction, otherwise your deposit may fail. Payments in multiple transactions are not supported.
                </div>
                <div class="m-b-10">
                    The funds will be credited to your wallet as soon as we get 18 confirmations from the Ethereum network.
                </div>
                <div class="m-b-10">
                    <span style="color: #dd0000;">Attention!</span> Please note that the address the system gave you for this funding is unique and can only be used once.
                    Each new funding has to be initiated in Deposit Funds inside your account.
                </div>
                
                <div>
                    Crypto deposits are monitored according to our AML program.
                </div>
            </div>
            <div class="transaction">
                <div class="barcode">
                    
                </div>
                <div class="price">
                    <h5>{{($unit == "BTC" || $unit == "XRP") ?  number_format((float)$val / $data, 4, '.', '') : number_format((float)$val / $data, 2, '.', '')}} {{$unit}}</h5>
                    <h6 class="rest">{{number_format((float)$val, 2, '.', '')}}USD</h6>
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
    @endpush
@endsection