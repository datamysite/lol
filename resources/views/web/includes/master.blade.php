<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{URL::to('/')}}/public/images/favicon.png">
    <title>LOL - Let`s off Leash</title>

    @include('web.includes.style')
    @yield('addStyle')

</head>

<body>

    @yield('content')

    @include('web.includes.footer')
    

    <div class="social-media-wi">
        <ul>
            <li class="wi-youtube">
                <a class="nav-link" href="https://www.youtube.com/@LetsOffLeash" target="_blank" class="text-theme"><i class="fab fa-youtube"></i></a>
            </li>
            <li class="wi-instagram">
                <a class="nav-link" href="https://instagram.com/letsoffleash" target="_blank" class="text-theme"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="wi-facebook">
                <a class="nav-link" href="http://facebook.com/LetsOffLeashlol" target="_blank" class="text-theme"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="wi-linkedin">
                <a class="nav-link" href="https://linkedin.com/company/letsoffleash" target="_blank" class="text-theme"><i class="fab fa-linkedin"></i></a>
            </li>

        </ul>
    </div>

    @include('web.includes.scripts')
    @yield('addScript')
</body>

</html>