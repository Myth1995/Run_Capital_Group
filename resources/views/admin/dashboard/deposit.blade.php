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
        }
        
        .faq .pay {
            background: rgba(220, 220, 220, 0.2);
            padding: 15px;
        }
        
        
        .faq .pay .desc {
            /*display: flex;*/
            /*justify-content: space-between;*/
        }
        
        .faq .pay .desc .text {
            width: 100%;
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
          background-color: #24695C;
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
            background-color: rgba(200, 200, 200, 0.7);
        }
        
        .deposit button.depo-btn:hover {
            background-color: #24695C;
        }
        
        .desc .depo-btn {
            color: #FFFFFF !important;
            background-color: rgba(200, 200, 200, 0.7);
        }
        
        .desc button.depo-btn:hover {
            background-color: #24695C;
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

        .deposit .confirm-btn {
            background-color: #ffcc00;
        }
        
        .deposit .cancel-btn {
            background-color: #DDDDDD;
        }
    </style>
@endpush
    @section('content')
    
    <div class="container">
        <div class="con-inner">
            <div class="deposit">
                <h3 class="m-b-20 f-30">Depositar fondos en la cuenta</h3>
                <div class="recv-panel m-b-20">
                    <div class="me-4">
    					<label class="input-group" id="country-label">EXTERNO</label>
    					<label class="switch">
                          <input type="checkbox" onchange="doCheck(this)">
                          <span class="slider round"></span>
                        </label>
    				</div>
                    <div class="m-r-20">
                        <label class="input-group">MONTO A DEPOSTAR</label>
                        <div class="input-group">
        					<input class="form-control" id="defaultValue" type="text" placeholder="0.00" aria-describedby="inputGroupPrepend2" required="" style='height: 35px; width: 55%;' />
        					<select class="form-select" id="inputGroupPrepend2" style="background-image: none;">
        					    <option>USD</option>
        					    <option>EUR</option>
        					</select>
        				</div>
    				</div>
    				<button class="btn depo-btn" style="height: 70%; margin-top: 25px;" id="deposit" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" disabled>Depositar</button>
    				<!--<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Vertically centered</button>-->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <!--<div class="modal-header">-->
                                    <!--    <h5 class="modal-title">Modal title</h5>-->
                                    <!--    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>-->
                                    <!--</div>-->
                                    <div class="modal-body">
                                        <div style="text-align: center;">
                                            <img src="{{asset('assets/images/dashboard/deposit/advertir.png')}}" class="m-10" width='70' height="80" alt="USDT" />
                                        </div>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    </div>
                                    <div class="modal-footer" style="margin: auto;">
                                        <button class="btn cancel-btn" type="button" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn confirm-btn" type="button">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="last-panel m-b-20 b-b-info p-b-10">
                    <label style="align-self: center;">Más Popular: </label>
                    <div class="m-l-20 b-r-5 px-3 py-1" style="border: 1px solid #24695C; color: #24695C;"><img src="{{asset('assets/images/dashboard/deposit/tether.png')}}" width='20' height='20' alt="Tether" />&nbsp;Tether</div>
                </div>
                
                <h5 class="m-b-20 f-20">Metodos Disponibles</h5>
                <table class="table table-card">
                    <thead>
                        <th>
                            <td></td>
                            <td>Fee %</td>
                            <td>Confirmación</td>
                            <td></td>
                        </th>
                    </thead>
        			<tbody>
        			    <tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/atar.png')}}" width='40' height="40" alt="USDT" />
        					</td>
        					<td>Tether (USDT)</td>
        					<td class="green-cell">0.00%</td>
        					<td class="green-cell">6-12 horas</td>
        					<td>
        						<button class="btn depo-btn deposits" onClick="onDepositBtn(10)">Depositar</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/moneda.png')}}" width='40' height="40" alt="TRX" />
        					</td>
        					<td>TRON (TRX)</td>
        					<td class="green-cell">0.00%</td>
        					<td class="green-cell">6-12 horas</td>
        					<td>
        						<button class="btn depo-btn deposits" onClick="onDepositBtn(20)">Depositar</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/litecoin.png')}}" width='40' height="40" alt="LTC" />
        					</td>
        					<td>Litecoin (LTC)</td>
        					<td class="green-cell">0.00%</td>
        					<td class="green-cell">6-12 horas</td>
        					<td>
        						<button class="btn depo-btn deposits" onClick="onDepositBtn(30)">Depositar</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/bitcoin.png')}}" width='40' height="40" alt="BTC" />
        					</td>
        					<td>Bitcoin (BTC)</td>
        					<td class="green-cell">0.00%</td>
        					<td class="green-cell">6-12 horas</td>
        					<td>
        						<button class="btn depo-btn deposits" onClick="onDepositBtn(40)">Depositar</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/xrp.png')}}" width="40" height="40" alt="XRP" />
        					</td>
        					<td>Ripple (XRP)</td>
        					<td class="green-cell">0.00%</td>
        					<td class="green-cell">6-12 horas</td>
        					<td>
        						<button class="btn depo-btn deposits" onClick="onDepositBtn(50)">Depositar</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/binance.png')}}" width='40' height="40" alt="BNB" />
        					</td>
        					<td>Binance Coin (BNB)</td>
        					<td class="green-cell">0.00%</td>
        					<td class="green-cell">6-12 horas</td>
        					<td>
        						<button class="btn depo-btn deposits" onClick="onDepositBtn(60)">Depositar</button>
        					</td>
        				</tr>
        				<tr>
        				    <td>
        						<img src="{{asset('assets/images/dashboard/deposit/dogecoin.png')}}" width='40' height="40" alt="DOGE" />
        					</td>
        					<td>Dogecoin (DOGE)</td>
        					<td class="green-cell">0.00%</td>
        					<td class="green-cell">6-12 horas</td>
        					<td>
        						<button class="btn depo-btn deposits" onClick="onDepositBtn(70)">Depositar</button>
        					</td>
        				</tr>
        				<tr>
        				    <td colspan="5" style="text-align: center;">
        						<img src="{{asset('assets/images/dashboard/deposit/mas.png')}}" width='40' height="40" alt="Add" />
        					</td>
        				</tr>
        			</tbody>
                </table>
                <div class="modal" id="confirmModalCenter">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <p>Transport Protocol: The value field can not be empty!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq">
                <div class="container my-5 px-5">
                    <div class="tags mb-5">
                        <h5 class="title mb-3">Preguntas más frecuentes</h5>
                        <ul>
                            <li><a style="color: black;" href="#"><img src="{{asset('assets/images/dashboard/deposit/faq.png')}}" width='25' height="25" alt="Add" />&nbsp;Video Tutorial</a></li>
                            <li><a style="color: black;" href="#"><img src="{{asset('assets/images/dashboard/deposit/faq.png')}}" width='25' height="25" alt="Add" />&nbsp;Video Tutorial</a></li>
                            <li><a style="color: black;" href="#"><img src="{{asset('assets/images/dashboard/deposit/faq.png')}}" width='25' height="25" alt="Add" />&nbsp;Video Tutorial</a></li>
                        </ul>
                    </div>
                    <div class="pay">
                        <h5 class="title">
                            <img src="{{asset('assets/images/dashboard/deposit/transfer1.png')}}" width='30' height="30" alt="Add" />
                            Binance Pay
                        </h5>
                        <div class="desc">
                            <div class="text">
                                Si vas a retirar fondos a otro usuario de Binance. puedes utilizar Binance Pay para realizar una transferenia instantanea sin comisiones.
                            </div>
                            <div style="text-align: center;">
                                <button class="btn depo-btn" onClick="onDepositBtn()">Depositar</button>
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
        <script>
            var dd = document.getElementById("confirmModalCenter");
            
            $(document).ready(function() {
                $("#confirmModalCenter").click(function(e) {
                    dd.style="display: none;";
                });
            });
            function onDepositBtn(id) {
                var val = Number(document.getElementById("defaultValue").value)
                if (val < 50) {
                    dd.style="display: block; background-color: rgba(100, 100, 100, 0.7);"
                }
                else {
                    // id /= 10;
                    window.location.href = ('/dashboard/deposit-fund?value='+ val + '&kind='+id)
                }
            }
            
            let depoBtns = document.getElementsByClassName("deposits");
            
            let country = document.getElementById("country-label");
            
            function doCheck(checkboxElem) {
                if (checkboxElem.checked) {
                    document.getElementById("deposit").disabled=false;
                    country.innerText = "INTERNO";
                    for(let i = 0; i < depoBtns.length; i++) {
                        depoBtns[i].disabled = true;
                    }
                } else {
                    document.getElementById("deposit").disabled=true;
                    country.innerText = "EXTERNO";
                    for(let i = 0; i < depoBtns.length; i++) {
                        depoBtns[i].disabled = false;
                    }
                }
            }
            
            
        </script>
    @endpush
@endsection