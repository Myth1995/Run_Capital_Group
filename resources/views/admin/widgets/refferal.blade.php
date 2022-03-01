@extends('layouts.admin.master')

@section('title')General {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
<style>
    input {
        height: 55px;
    }
    
    .card .border-tab.nav-tabs .nav-link.active, .card .border-tab.nav-tabs .nav-link.hover {
        color: black;
        font-weight: bold;
    }
    
    .refferal-table table thead th {
        padding: 10px 25px;
        border-radius: 5px;
    }
</style>
@endpush
    @section('content')        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="justify-content: center;">
                                <div class="col-sm-5 col-xs-12" style="margin-top: 10px;">
                                    <div class="card" style="border-radius: 7px; margin-bottom: 10px;">
                                        <div class="card-body pb-0">
                                            <h6>Total Rewards</h6>
                                            <h4 style="border-bottom: 1px solid; margin-top: 25px; padding-bottom: 15px;">0.00 USDT</h4>
                                            <h6 style="margin-bottom: 15px;">Inviter Rewards</h6>
                                            <div class="row" style="border-bottom: 1px solid; padding-bottom: 15px;">
                                                <div class="col-sm-8">
                                                    <span style="font-size: 8px;">
                                                        You're earning 20% of the trading fees your refferals pay.
                                                        <a style="color: #2bab96;" href="/">Learn more</a>
                                                    </span>
                                                </div>
                                                <div class="col-sm-4" style="text-align: right; font-size: 12px;">
                                                    0.00 USDT
                                                </div>
                                            </div>
                                            <div class="row" style="border-bottom: 1px solid;">
                                                <div class="col-sm-6">
                                                    <h6 style="margin-top: 20px; margin-bottom: 30px;">Total Invited</h6>
                                                </div>
                                                <div class="col-sm-6" style="align-self: center;">
                                                    <p style="text-align: right;">0</p>
                                                </div>
                                            </div>
                                            <div style="padding-top: 20px; margin-bottom: 40px">
                                                <span style="background-color: #9bd9c4; color: black; padding: 5px; border-radius: 5px; font-size: 8px;">View Your Rewards in Activity</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-size: 8px">
                                        Inviter Rewards last forever, or until the Referral user gets VIP status. Referral Rewards end 60 days after the referral signup date.
                                        <a style="color: #2bab96;" href="/">Learn more about the Referral Program</a>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-12">
                                    <div class="card" style="border-radius: 7px; background-color: #2fbaa3;">
                                        <div class="card-body pb-0">
                                            <h4 style="margin-top: 25px; padding-bottom: 20px;">Invite your friends to RunBinaryGroup and earn 20% on their trading fees</h4>
                                            <div class="mb-4" style="position: relative;">
            									<label class="form-label" for="exampleFormControlInput1">Your Refferal Link</label>
            									<input class="form-control" id="exampleFormControlInput1" type="text" value="https://runbinarygroup.com/login" style="padding-right: 46px; background-color: #2fbaa3;" />
            									<img src="{{asset('assets/images/dashboard/refferal/copy.svg')}}" alt="" width="20px" style="position: absolute; top: 45px; right: 15px; cursor: pointer;"/>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-6" style="position: relative;">
                									<label class="form-label" for="exampleFormControlInput1">Your Refferal Code</label>
                									<input class="form-control" id="exampleFormControlInput1" type="text" value="TDS5D" style="padding-right: 46px; background-color: #2fbaa3;" />
                									<img src="{{asset('assets/images/dashboard/refferal/copy.svg')}}" alt="" width="20px" style="position: absolute; top: 45px; right: 25px; cursor: pointer;"/>
            									</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5>Refferal Detail</h5>
                            
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                              <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true">Referrals</a></li>
                              <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Futures</a></li>
                              <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false">Referral Rewards</a></li>
                            </ul>
                            
                            <div class="refferal-table">
                                <table style="border-radius: 10px;">
                                    <thead>
                                        <tr>
                                            <th>ACCOUNT</th>
                                            <th>REWARD RATIO</th>
                                            <th>CASHBACK RATIO</th>
                                            <th>ACCOUNT STATUS</th>
                                            <th>REMAINING DAYS FOR REWARDS</th>
                                            <th>REMAINING DAYS FOR CASHBACK</th>
                                            <th>START ON</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7" style="text-align: center; padding: 10px 0;">NO DATA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>

    @push('scripts')    
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
    @endpush
@endsection