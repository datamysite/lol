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

    
    @include('web.includes.scripts')
    @yield('addScript')
</body>

</html>