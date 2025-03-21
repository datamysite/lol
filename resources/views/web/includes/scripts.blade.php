<script src="{{URL::to('/')}}/public/js/jquery.min.js"></script>
<script src="{{URL::to('/')}}/public/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/public/owl-carousel/owl.carousel.min.js"></script>
<script src="{{URL::to('/')}}/public/js/isotope-docs.min.js?6"></script>
<script src="{{URL::to('/')}}/public/js/main.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{URL::to('/')}}/public/js/slider.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/public/js/menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))
    <script type="text/javascript">
    	Swal.fire("Success!", "{{ session()->get('success') }}", "success");
    </script>
@endif