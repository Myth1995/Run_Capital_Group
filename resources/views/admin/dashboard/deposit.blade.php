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
            width: 60%;
        }
        .deposit .recv-panel {
            display: flex; 
            flex-direction: row;
        }
        .deposit .last-panel {
            display: flex; 
            flex-direction: row;
        }
        .deposit .table-card .green-cell {
            color: #24695C;
        }
        
        .faq {
            width: 40%;
        }
        
        .faq .tags {
            margin: auto;
        }
        
        .faq .tags ul li {
            font-size: 18px;
            margin-bottom: 10px;
            text-decoration: underline;
        }
        
        .faq .pay {
            background: rgba(220, 220, 220, 0.2);
            padding: 15px;
        }
        
        
        .faq .pay .desc {
            display: flex;
            justify-content: space-between;
        }
        
        .faq .pay .desc .text {
            width: 70%;
        }
        
        .deposit .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }
        
        .deposit .switch input { 
          opacity: 0;
          width: 0;
          height: 0;
        }
        
        .deposit .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        .deposit .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        .deposit input:checked + .slider {
          background-color: #1e918b;
        }
        
        .deposit input:focus + .slider {
          box-shadow: 0 0 1px #1e918b;
        }
        
        .deposit input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }
        
        /* Rounded sliders */
        .deposit .slider.round {
          border-radius: 34px;
        }
        
        .deposit .slider.round:before {
          border-radius: 50%;
        }
        
        .deposit .depo-btn {
            color: #FFFFFF !important;
        }

    </style>
@endpush
    @section('content')
    
    <div class="container">
        <div class="con-inner">
            <div class="deposit">
                <h3 class="m-b-20 f-30">Depositing fund to the account</h3>
                <div class="recv-panel m-b-20">
                    <div class="me-4">
    					<label class="input-group">COUNTRY</label>
    					<label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span>
                        </label>
    				</div>
                    <div class="m-r-20">
                        <label class="input-group">AMOUNT AND CURRENCY OF DEPOSIT</label>
                        <div class="input-group">
        					<input class="form-control" id="validationDefaultUsername" type="text" placeholder="0.00" aria-describedby="inputGroupPrepend2" required="" style='height: 35px' />
        					<select class="select-currency" id="inputGroupPrepend2">
        					    <option>USD</option>
        					    <option>EUR</option>
        					</select>
        				</div>
    				</div>
    				<button class="btn btn-info depo-btn" style="height: 70%; margin-top: 25px;" disabled>Deposit</button>
                </div>
                <div class="last-panel m-b-20 b-b-info p-b-10">
                    <label style="align-self: center;">Last Used: </label>
                    <div class="m-l-20 b-r-5 px-3 py-1" style="border: 1px solid rgb(55 251 215); color: rgb(55 251 215);">Tether</div>
                </div>
                
                <h5 class="m-b-20 f-20">Credit or debit cards</h5>
                <table class="table table-card">
                    <thead>
                        <th>
                            <td></td>
                            <td>Fee %</td>
                            <td>Completion</td>
                            <td></td>
                        </th>
                    </thead>
        			<tbody>
        			    <tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/atar.png')}}" width='40' height="40" alt="USDT" />
        					</td>
        					<td>Tether (USDT)</td>
        					<td class="green-cell">3.50%</td>
        					<td class="green-cell">Instant</td>
        					<td>
        						<button class="btn btn-info depo-btn" disabled>Deposit</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/moneda.png')}}" width='40' height="40" alt="TRX" />
        					</td>
        					<td>TRON (TRX)</td>
        					<td class="green-cell">3.50%</td>
        					<td class="green-cell">Instant</td>
        					<td>
        						<button class="btn btn-info depo-btn" disabled>Deposit</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/litecoin.png')}}" width='40' height="40" alt="LTC" />
        					</td>
        					<td>Litecoin (LTC)</td>
        					<td class="green-cell">3.50%</td>
        					<td class="green-cell">Instant</td>
        					<td>
        						<button class="btn btn-info depo-btn" disabled>Deposit</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/bitcoin.png')}}" width='40' height="40" alt="BTC" />
        					</td>
        					<td>Bitcoin (BTC)</td>
        					<td class="green-cell">3.50%</td>
        					<td class="green-cell">Instant</td>
        					<td>
        						<button class="btn btn-info depo-btn" disabled>Deposit</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/xrp.png')}}" width="40" height="40" alt="XRP" />
        					</td>
        					<td>Ripple (XRP)</td>
        					<td class="green-cell">3.50%</td>
        					<td class="green-cell">Instant</td>
        					<td>
        						<button class="btn btn-info depo-btn" disabled>Deposit</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/binance.png')}}" width='40' height="40" alt="BNB" />
        					</td>
        					<td>Binance Coin (BNB)</td>
        					<td class="green-cell">3.50%</td>
        					<td class="green-cell">Instant</td>
        					<td>
        						<button class="btn btn-info depo-btn" disabled>Deposit</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/dogecoin.png')}}" width='40' height="40" alt="DOGE" />
        					</td>
        					<td>Dogecoin (DOGE)</td>
        					<td class="green-cell">3.50%</td>
        					<td class="green-cell">Instant</td>
        					<td>
        						<button class="btn btn-info depo-btn" disabled>Deposit</button>
        					</td>
        				</tr>
        			</tbody>
                </table>
                
            </div>
            <div class="faq">
                <div class="container my-5 px-5">
                    <div class="tags mb-5">
                        <h5 class="title mb-3">FAQ</h5>
                        <ul>
                            <li><a href="#">Video Tutorial</a></li>
                            <li><a href="#">Video Tutorial</a></li>
                            <li><a href="#">Video Tutorial</a></li>
                        </ul>
                    </div>
                    <div class="pay">
                        <h5 class="title">Binance Pay</h5>
                        <div class="desc">
                            <div class="text">
                                Si vas a retirar fondos a otro usuario de Binance. puedes utilizar Binance Pay para realizar una transferenia instantanea sin comisiones.
                            </div>
                            <div>
                                <i data-feather="layout"></i>
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
        <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
        <script src="{{ asset('assets/js/icons/icon-clipart.js') }}"></script>
    @endpush
@endsection