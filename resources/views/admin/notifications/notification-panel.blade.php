@extends('layouts.admin.master')

@section('title')General {{ $title }}
@endsection

@push('css')
<style>
    .notification-panel .inbox .media {
        border-bottom: 1px solid grey;
        margin-bottom: 1em;
    }
    .notification-panel .inbox .media .media-size-email {
        display: flex;
        margin-right: 10px;
    }
    .notification-panel .inbox .media .media-size-email .seen {
        height: 10px;
        width: 10px;
        background-color: rgb(38, 161, 113);
        margin: auto 10px;
        border-radius: 5px;
    }
    .notification-panel .inbox .media .media-body {
        display: flex;
        cursor: pointer;
    }
    .notification-panel .inbox .media .media-body h6 {
        font-weight: 600;
    }
    .notification-panel .inbox .media .media-body .notify-text {
        height: 27px;
        content-visibility: auto;
    }
    .notification-panel .inbox .media .media-body span {
        opacity: 0.7;
    }
</style>
@endpush
    @section('content')        
        <div class="notification-panel">
            <div class="container-fluid">
                <div class="card" style="padding: 20px;">
                    <div class="inbox">
                        <div class="media">
                            <div class="media-size-email">
                                <div class="seen"></div>
                                <label class="d-block mb-0" for="chk-ani">
                                    <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
                                </label>
                            </div>
                            <div class="media-body">
                                <div class="col-sm-11">
                                    <h6>Pork Lorn</h6>
                                    <p class="notify-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                                </div>
                                <span>11:59 PM</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-size-email">
                                <div class="seen"></div>
                                <label class="d-block mb-0" for="chk-ani">
                                    <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
                                </label>
                            </div>
                            <div class="media-body">
                                <div class="col-sm-11">
                                    <h6>Dee Deo</h6>
                                    <p class="notify-text">Popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                                </div>
                                <span>09:59 AM</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-size-email">
                                <div class="seen"></div>
                                <label class="d-block mb-0" for="chk-ani">
                                    <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
                                </label>
                            </div>
                            <div class="media-body">
                                <div class="col-sm-11">
                                    <h6>Peg Legge</h6>
                                    <p class="notify-text">A Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.</p>
                                </div>
                                <span>07:59 AM</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-size-email">
                                <div class="seen"></div>
                                <label class="d-block mb-0" for="chk-ani">
                                    <input class="checkbox_animated" id="chk-ani" type="checkbox" />
                                </label>
                            </div>
                            <div class="media-body">
                                <div class="col-sm-11">
                                    <h6>Olive Yew</h6>
                                    <p class="notify-text">Looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                                </div>
                                <span>05:59 AM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                let ary = document.getElementsByClassName("notification-panel")[0].getElementsByClassName("notify-text");
                let len = ary.length;

                for(let i = 0; i < len; i++) {
                    if(ary[i].offsetHeight > 24) {
                        ary[i].style.offsetHeight = 27;
                        // ary[i].style.visibility = "collapse";
                    }
                }
            });
        </script>
    @endpush
@endsection