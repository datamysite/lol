<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{URL::to('/')}}/public/images/favicon.png">
    <title>{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}</title>
    <meta name="description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}">
    <meta name="keywords" content="{{@$metaTags->keywords}}{{@$ametaTags['keywords']}}">
    @yield('metaAddition')

    <link rel="canonical" href="{{@URL::current()}}" />
    
    @include('web.includes.style')
    @yield('addStyle')

</head>

<body>

    @yield('content')

    
    @include('web.includes.scripts')
    @yield('addScript')
</body>

</html>