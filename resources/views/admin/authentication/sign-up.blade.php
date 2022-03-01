@extends('admin.authentication.master')

@section('title')Sign Up
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
@endpush

@section('content')
    <section>
	    <div class="container-fluid p-0">
	        <div class="row m-0">
	            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/3.jpg') }}" alt="looginpage" /></div>
	            <div class="col-xl-7 p-0">
	                <div class="login-card">
	                    <form class="theme-form login-form" method="POST" action="{{ route('register.custom') }}">
							@csrf
	                        <h4>Create your account</h4>
	                        <h6>Enter your personal details to create account</h6>
	                        <div class="form-group">
	                            <label>Your Name</label>
								<div class="input-group">
									<span class="input-group-text"><i class="icon-user"></i></span>
									<input class="form-control" required="" id="first_name" name="name" placeholder="Nombre Completo"/>
									<input class="form-control m-l-10" required="" id="last_name" name="surename" placeholder="Apellidos"/>
								</div>
	                        </div>
	                        <div class="form-group row">
            					<div class="col-sm-6">
            						<label>Telefono</label>
            						<input class="form-control" id="telNo" name="telNo" type="tel" placeholder="Telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
            					</div>
            					<div class="col-sm-6">
            					    <label>Pais</label>
            						<select class="form-select" id="citizen" required="2">
            							<option selected>Dominican Republic</option>
            							<option>United States</option>
            						</select>
            					</div>
            				</div>
	                        <div class="form-group">
	                            <label>Email Address</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-email"></i></span>
	                                <input class="form-control" type="email" id="email" name="email" required="" placeholder="Test@gmail.com" />
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <div class="col-sm-6">
    	                            <label>Password</label>
    	                            <div class="input-group">
    	                                <span class="input-group-text"><i class="icon-lock"></i></span>
    	                                <input class="form-control" type="password" id="password" name="password" required="" placeholder="*********" />
    	                                <div class="show-hide"><span class="show"> </span></div>
    	                            </div>
    	                        </div>
    	                        <div class="col-sm-6">
    	                            <label>Password Confirm</label>
    	                            <div class="input-group">
    	                                <span class="input-group-text"><i class="icon-lock"></i></span>
    	                                <input class="form-control" type="password" name="password_confirm" required="" placeholder="*********" />
    	                                <div class="show-hide"><span class="show"> </span></div>
    	                            </div>
    	                        </div>
	                        </div>
        					
	                        <div class="form-group">
	                            <div class="checkbox">
	                                <input id="checkbox1" type="checkbox" />
	                                <label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy </span></label>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <button class="btn btn-primary btn-block" type="submit">Create Account</button>
	                        </div>
	                        <div class="login-social-title">
	                            <h5>Sign in with</h5>
	                        </div>
	                        <div class="form-group">
	                            <ul class="login-social">
	                                <li>
	                                    <a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a>
	                                </li>
	                                <li>
	                                    <a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram"> </i></a>
	                                </li>
	                            </ul>
	                        </div>
	                        <p>Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>


    @push('scripts')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    @endpush

@endsection