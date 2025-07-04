<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{URL::to('/')}}/public/images/favicon.png">
    <title>{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}</title>
    <meta name="description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}">
    <meta name="keywords" content="{{@$metaTags->keywords}}{{@$ametaTags['keywords']}}">
    @yield('metaAddition')

    <link rel="canonical" href="{{@URL::current()}}" />

    @include('web.includes.style')
    @yield('addStyle')

    @foreach($headSnippet as $val)
        @if($val->position == 'Head')
          <!-- {{$val->name}} // Start -->
              {!! $val->snippet_code !!}
          <!-- {{$val->name}} // End -->
        @endif
      @endforeach
</head>

<body>

    @yield('content')


    @include('web.includes.footer')
    
    @include('web.includes.scripts')
    @yield('addScript')

    
  @foreach($bodySnippet as $val)
    @if($val->position == 'Body')
      <!-- {{$val->name}} // Start -->
          {!! $val->snippet_code !!}
      <!-- {{$val->name}} // End -->
    @endif
  @endforeach
</body>

</html>