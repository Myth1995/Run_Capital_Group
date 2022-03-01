@extends('layouts.admin.master')

@section('title')General {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
@endpush
    @section('content')        
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-sm-6">
                    <h6>Información Personal</h6>
                    <form class="theme-form mega-form row">    
                    	<div class="mb-3 col-sm-6">
    						<label class="col-form-label">Nombre Completo</label>
    						<input class="form-control" type="text" placeholder="Nombre Completo" required />
    					</div>
    					<div class="mb-3 col-sm-6">
    						<label class="col-form-label">Apellidos</label>
    						<input class="form-control" type="text" placeholder="Apellidos" required />
    					</div>
    					<div class="mb-3 col-sm-6">
    						<label class="col-form-label">Pais</label>
    						<select class="form-select" id="citizen" required="2">
    							<option selected>Dominican Republic</option>
    							<option>United States</option>
    						</select>
    					</div>
    					<div class="mb-3 col-sm-6">
    						<label class="col-form-label">Telefono</label>
    						<input class="form-control" id="telNo" name="telNo" type="tel" placeholder="Telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
    					</div>
    					<div class="mb-3 col-sm-6">
    						<label class="col-form-label">Telegram</label>
    						<input class="form-control" type="text" placeholder="Telegram" />
    					</div>
    					<div class="mb-3 col-sm-6">
    						<label class="col-form-label">Correo Electronico</label>
    						<input class="form-control" type="text" placeholder="Correo Electronico" />
    					</div>
    					<div class="mb-3 col-sm-12">
    						<label class="col-form-label">Metodo de Cobro</label>
    						<input class="form-control" type="text" placeholder="Metodo de Cobro" />
    					</div>
                        
                        <span>Para mayor seguridad, recomendamos cambiar su contrasena con regularidad.</span>
    					<div class="mb-3 col-sm-6">
    						<label class="col-form-label">CONTRASENA ANTERIOR</label>
    						<input class="form-control" type="text" placeholder="Contrasena Anterior" />
    					</div>
    					<br/>
    					<div class="mb-3 col-sm-6">
    						<label class="col-form-label">NUEVA CONTRASENA</label>
    						<input class="form-control" type="text" placeholder="Nueva Contrasena" />
    					</div>
    					<div class="mb-3 col-sm-3">
    					    <button class="btn btn-primary active" type="submit">Guardar</button>
    				    </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="col-sm-8" style="margin: auto;">
                            <h5 style="text-align: center;">2 Factor Authentication</h5>
                            <span style="color: #918e8c;">Two Factor Authentication (2FA) is a security measure that drastically improves the security of your account by requiring an authentication code as well as your password in order to sign in.</span>
                            <h5>How would you like to receive your authentication codes?</h5>
                            <div class="row b-r-10 bg-dark m-t-20 m-b-20 p-t-10 p-b-10">
                                <div class="col-sm-3" style="display: flex;">
                                    <img src="{{asset('assets/images/dashboard/general/android-icon.png')}}" alt="" height="30px" class="mr-4" style="margin: auto;" />
                                </div>
                                <div class="col-sm-9">
                                    <h5>SMS text message -></h5>
                                    <span>Receive an SMS to your mobile when signing in.</span>
                                </div>
                            </div>
                            <div class="b-r-10 m-t-20 m-b-20">
                                <div class="row p-t-10 p-b-10" style="text-align: center; background-color: #3b4350; color: #adb9b6; border-radius: 10px 10px 0 0;">
                                    <span>Recommended</span>
                                </div>
                                <div class="row p-t-10 p-b-10 bg-dark">
                                    <div class="col-sm-3" style="display: flex;">
                                        <img src="{{asset('assets/images/dashboard/general/qrcode-solid.svg')}}" alt="" height="30px" class="mr-4" style="margin: auto;" />
                                    </div>
                                    <div class="col-sm-9">
                                        <h5>Use an app -></h5>
                                        <span style="font-size: 12px;">Receive codes from an authentication app such as Google Authenticator or Authy(recommended).</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @push('scripts')    
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
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    @endpush
@endsection