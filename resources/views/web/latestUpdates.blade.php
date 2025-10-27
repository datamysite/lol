@extends('web.includes.master')
@section('metaAddition')
@if(!empty($nofollow))
<meta name="robots" content="noindex, follow">
@endif
@endsection
@section('content')

<section  class="header">
        
        @include('web.includes.header')

        <div class="sub-header-div text-center" style="background-image: url('{{URL::to('/public/images/home-bg.png')}}');">
            <div class="sub-header-content">
                <h2 class="text-white">Latest Updates</h2>
                <br>
                <p class="text-center">Stay connected with our latest happenings, exciting events, and behind-the-scenes moments! From community meet-ups and animal rescue drives to podcast launches and collaborations, this section brings you a glimpse of all the action. Explore photos and stories from our recent events and see how we’re making a difference—one paw at a time!</p>
            </div>
        </div>
</section>

    <div class="container-fluid fh5co-news" id="blogs">
        <div class="container">
            <br>
            <div class="row">
                @foreach($data as $val)
                    <div class="col-md-3">
                        <article class="card h-100 hover-effect-scale bg-body-tertiary border-0 update-card">
                          <div class="card-img-top position-relative overflow-hidden">
                            <div class="ratio hover-effect-target update-image" style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                            <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 ">
                              <span class="badge text-bg-info d-inline-flex align-items-center update-date-badge">
                                <i class="fa fa-calendar ms-1"></i>&nbsp;
                                {{date('d M, Y', strtotime($val->created_at))}}
                              </span>
                              <span class="badge text-bg-white d-inline-flex align-items-center update-image-badge">
                                <i class="fa fa-images ms-1"></i>&nbsp;
                                {{count($val->images)}}
                              </span>
                            </div>
                                <a href="{{URL::to('/public/storage/updates/'.$val->images[0]->image)}}"
                                 class="lightbox_{{$val->id}}"
                                 data-lcl-thumb="{{URL::to('/public/storage/updates/'.$val->images[0]->image)}}"
                                 data-lcl-title="Image {{$val->id}}">
                                    <img src="{{URL::to('/public/storage/updates/'.$val->images[0]->image)}}" alt="Image">
                                </a>
                            </div>
                          </div>
                          <div class="card-body pb-3">
                            <h3 class="h6 mb-2">
                              <a class="hover-effect-underline stretched-link me-1 open-gallery-image text-black" href="javascript:void(0)" data-id="{{base64_encode($val->id)}}">{{$val->heading}}</a>
                            </h3>
                          </div>
                        </article>

                        @php $imgCount = count($val->images); @endphp
                        <div class="d-none">
                            @for($i=1; $i<$imgCount; $i++)
                                <a href="{{URL::to('/public/storage/updates/'.$val->images[$i]->image)}}"
                                 class="lightbox_{{$val->id}}"
                                 data-lcl-thumb="{{URL::to('/public/storage/updates/'.$val->images[$i]->image)}}"
                                 data-lcl-title="Image {{$val->id}}"></a>
                            @endfor
                        </div> 
                    </div>
                @endforeach
                
                  <div class="col-lg-12 blog-pagination">
                    <br>
                    {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
                  </div>
              </div>
            <br>
        </div>
    </div>


@endsection
@section('addStyle')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lc-lightbox-lite@1.5.0/css/lc_lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/lc-lightbox-lite@1.5.0/skins/light.css">
@endsection
@section('addScript')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lc-lightbox-lite@1.5.0/js/lc_lightbox.lite.min.js"></script>
    <script>
        @foreach($data as $val)
          lc_lightbox('.lightbox_{{$val->id}}', {
            wrap_class: 'lcl_fade_oc',
            gallery   : true,
            thumb: false,
            thumb_attr: 'data-lcl-thumb',
            skin      : 'light',
            radius    : 4,
            padding   : 0,
            border_w  : 0
          });         
        @endforeach
    </script>
@endsection