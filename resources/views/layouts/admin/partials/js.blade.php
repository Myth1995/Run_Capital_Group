<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- Plugins JS start-->
@stack('scripts')
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
<!-- Plugin used-->

<script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>

<script>
    function onDeposit() {
        window.location.href = "{{ route('deposit')}}";
    }
    
    var target = document.getElementById("dropmenu2");
    
    target.addEventListener("mouseover", mOver2, false);
    target.addEventListener("mouseout", mOut2, false);
    
    function mOver2() {
       target.classList.add("active")
    }
    
    function mOut2() {  
       target.classList.remove("active")
    }
    
    target3 = document.getElementById("dropmenu3");
    
    target3.addEventListener("mouseover", mOver3, false);
    target3.addEventListener("mouseout", mOut3, false);
    
    function mOver3() {
       target3.classList.add("active")
    }
    
    function mOut3() {  
       target3.classList.remove("active")
    }
</script>