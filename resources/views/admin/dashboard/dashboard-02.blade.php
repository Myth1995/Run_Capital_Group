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
            margin: auto;
            width: 76%;
        }
        .commerce .title {
            font-size: 35px;
            color: #e5821c;
            text-align: center;
        }
        .commerce .intro {
            border-bottom: 1px solid grey;
        }
        .commerce .about {
            font-size: 20px;
        }
        
    </style>
@endpush
    @section('content')
    
    <div class="container">
        <div class="commerce">
            <div class="title m-b-50">La plataforma de primera calided para le</div>
            <div class="row intro">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 about">
                    <div class="container">
                        <div class="m-b-30">Fundada en 1999, Binary.com es uno de los nombres mas antiguos y respetados del comercio de opciones binarias en linea.</div>
                        <div class="m-b-30">A traves adfasfas dfsadfasdfkasdfk afasdfa asdfasdfasf asfasfasdfa asfasdfasfa ads asfasff asfasdsas </div>
                        <div class="m-b-30">A traves adfasfas dfsadfasdfkasdfk afasdfa asdfasdfasf asfasfasdfa asfasdfasfa ads asfasff asfasdsas </div>
                        <div class="m-b-30">A traves adfasfas dfsadfasdfkasdfk afasdfa asdfasdfasf asfasfasdfa asfasdfasfa ads asfasff asfasdsas </div>
                    </div>
                </div>
            </div>
            <div>
                Nuestros valores
            </div>
            <div class="row desc">
                
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