@extends('web.includes.master')

@section('content')

<section id="fh5co-hero-carousel"  class="creative-carousal--hero carousel slide header">
        
        @include('web.includes.header')

        <div class="carousel-slider swiper-container-horizontal">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="{{URL::to('public/images/world.png')}}" style="background-image: url({{URL::to('public/images/world.png')}});">
                    <div class="inner">
                        <p><font class="text-theme">Welcome</font> to the world of</p> 
                        <h2>Kasturi Jha</h2> 
                        <a class="hero-cta" href="https://www.youtube.com/@LetsOffLeash" target="_blank"><i class="fab fa-youtube"></i> View Channel</a>
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{URL::to('public/images/lol-junction.png')}}" style="background-image: url({{URL::to('public/images/lol-junction.png')}});">
                    <div class="inner"><h2>LOL Junction</h2> 
                    <p>Storytelling podcast on <br><font class="text-theme">Entrepreneurship</font>, <font class="text-theme">Wellness</font>, and <font class="text-theme">Lifestyle</font>.</p>
                    <br>
                    <a class="hero-cta" href="https://open.spotify.com/show/61pd8PHv95YUwPprdu5LZP" target="_blank"><i class="fab fa-spotify"></i> Listen to Podcast</a> 
                </div>
                </div>
                <div class="swiper-slide" data-background="{{URL::to('public/images/letsoffleash.png')}}" style="background-image: url({{URL::to('public/images/letsoffleash.png')}});">
                    <div class="inner">
                        <h2>Let’s Off Leash </h2> 
                        <p>The world’s first <br>animal podcast by <font class="text-theme">Kasturi Jha</font></p> 
                        <br>
                        <a class="hero-cta" href="https://open.spotify.com/show/61pd8PHv95YUwPprdu5LZP" target="_blank"><i class="fab fa-spotify"></i> Listen to Podcast</a>
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{URL::to('public/images/kasturi-jha2.png')}}" style="background-image: url({{URL::to('public/images/kasturi-jha2.png')}});">
                    <div class="inner">
                        <h2>Kasturi Jha</h2> 
                        <p>
                            Brand <font class="text-theme">promotion</font>
                            <br>Influencer <font class="text-theme">Marketing</font>
                            <br>Event <font class="text-theme">Hosting</font>.
                        </p> 
                        <br>
                        <a class="hero-cta" href="#contact">
                             Work with <i class="fa fa-handshake"></i> Kasturi</a>
                    </div>
                </div>
            </div>
            <!-- End Of Swiper -->
            <div class="slide-progress"> 
                <span>01</span>
                <div class="swiper-pagination swiper-pagination-progressbar"><span class="swiper-pagination-progressbar-fill"></span></div>
                <span>04</span> 
            </div>
            <!-- end of progress -->
            <div class="swiper-button-prev">PREV</div>
            <!-- end button-prev -->
            <div class="swiper-button-next">NEXT</div>
            <!-- end button-next -->
            </div>
        </section>

    <div class="container-fluid fh5co-about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

    

                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about-main.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about3.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about2.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about4.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-us-content">
                        <h2>ABOUT US</h2>
                        <p>
                            Welcome to LOL "Let's Off Leash" – where freedom meets storytelling! 
                            <br>Founded and hosted by Kasturi Jha, "Let’s Off Leash" is more than just a podcast; it’s a movement dedicated to bringing unheard stories of animals and people to the forefront. With a global community of over 250K followers and 30K+ YouTube subscribers, we are committed to inspiring, educating, and transforming lives through powerful narratives. Featuring over 20 incredible guests, including veterinarians, animal rescuers, biologists, and storytellers, we explore the profound connections between humans and animals through heartwarming rescues, extraordinary human journeys, and insightful discussions.
                            <br><br>
                            Our storytelling approach follows a unique Problem = Insight = Solution framework, ensuring that each episode not only highlights challenges but also provides actionable solutions. We cover topics ranging from health and wellness to lifestyle and entertainment, addressing real-world issues with practical insights. LOL "Let's Off Leash" is your go-to destination for uplifting stories, meaningful discussions, and a deeper understanding of the bond between animals and people. Join us on this journey of exploration and inspiration, and let’s off leash together!
                        </p>
                        <a href="https://www.youtube.com/@LetsOffLeash" class="read-more" target="_blank">Visit Channel</a>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid our-content container-stiped" id="content">
        <div class="container">
            <h2>OUR CONTENT</h2>
            <div class="row">
                <div class="col-md-12">
                    <p>Our YouTube channel is a hub of engaging and thought-provoking content that brings stories to life through compelling visuals and in-depth storytelling. From exclusive interviews with experts and rescuers to heartwarming animal rescue stories and insightful discussions on human resilience, every video is crafted to educate, inspire, and entertain. Whether you're looking for eye-opening narratives or practical solutions to real-world issues, our channel offers a diverse range of content that connects, informs, and uplifts.</p>
                    <br>
                </div>
                <div class="col-md-12">
                    <div class="tabs-wrapper">
                        <div id="scroller" class="nav nav-tabs">
                          <a data-toggle="tab" href="#letsoffleash" class="active show">LetsOffLeash</a>
                          <a data-toggle="tab" href="#lol-junction">LOL Junction</a>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="letsoffleash" class="tab-pane fade in active show">
                          <div class="row">
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/K8Gu3k5vAx0?si=aDde_8vTwP2aM2-V" allowfullscreen></iframe>
                                <h5 class="text-theme2">Salman Khan Exotic Pet Dog - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/uvi-hqkNoPg?si=tgrmmFOpk_dNZ9JG" allowfullscreen></iframe>
                                <h5 class="text-theme2">Must-Listen Podcast for Pet Parents - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/3zMfNM7EslE?si=TBa5XM8J2azg4-ij" allowfullscreen></iframe>
                                <h5 class="text-theme2">Lebanon’s Animals Left to Suffer War - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/pd1f8lYVYe4?si=a9mw-C5XA4o44OVW" allowfullscreen></iframe>
                                <h5 class="text-theme2">Real Talk Dog vs Cat real fight to death - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/RAAjkx7t6Pc?si=8opFPfpVQXr3IVDo" allowfullscreen></iframe>
                                <h5 class="text-theme2">How Do Dogs See The World? - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/KgItsWczMUo?si=bsKhfp28bbId3Uss" allowfullscreen></iframe>
                                <h5 class="text-theme2">Pet Health Insurance: Veterinarian Answers Pet Questions - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                          </div>
                        </div>
                        <div id="lol-junction" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/rL_3BLBIZko?si=WQZ3AM0Hu5gP-0jN" allowfullscreen></iframe>
                                <h5 class="text-theme2">Must Do This Business in 2025 - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/uHx59MKFu6Y?si=kzBwqEFj66JYcu3y" allowfullscreen></iframe>
                                <h5 class="text-theme2">Live Telepathic Conversations - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                            <div class="col-md-4">
                                <iframe src="https://www.youtube.com/embed/CZdKINL4QGk?si=bcgwkbuGHSZOk4oF" allowfullscreen></iframe>
                                <h5 class="text-theme2">Dr. Navneet: Explosive Conversation - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                            </div>
                          </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-12 text-center">
                    <a href="https://www.youtube.com/@LetsOffLeash" class="read-more" target="_blank">Visit Channel</a>
                </div>
            </div>
        </div>

    </div>


    <div class="container-fluid fh5co-news" id="blogs">
        <div class="container">
            <h2>Featured Blogs</h2>
            <p class="text-center">Discover expert advice, heartwarming stories, and essential tips on pet care and animal well-being. Our blog dives into everything from pet training and nutrition to heart-touching rescue stories, helping you become the best pet parent possible!</p>
            <br>
            <div class="row">
                @foreach($blogs as $val)
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img" src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                        
                        <div class="card-body">
                          <h4 class="card-title text-theme2">{{$val->heading}}</h4>
                          <small class="text-muted cat">
                            <i class="far fa-clock text-theme"></i>&nbsp;&nbsp;{{ \Carbon\Carbon::parse($val->created_at)->diffForHumans() }}
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-user text-theme"></i>&nbsp;&nbsp;{{$val->author->name}}
                          </small>
                          <p class="card-text">{{$val->short_description}}</p>
                          <a href="{{route('blogs.detail', [$val->slug])}}" class="text-theme" target="_blank">Read More..</a>
                        </div>
                      </div>
                      <hr>
                    </div>
                @endforeach
              </div>
            <br>
        </div>
    </div>

    <div class="container-fluid fh5co-news container-stiped" id="community">
        <div class="container">
            <h2>Community & Impact</h2>
            <p>At <strong>LOL "Let's Off Leash,"</strong> we believe in the power of storytelling to create meaningful change. Our growing community is a testament to the impact of our content, with countless listeners and viewers sharing how our stories have inspired them. From successful rescue missions to individuals taking action in their own communities, we are proud to foster a space where real change happens. We collaborate with organizations, animal welfare groups, and passionate individuals to extend our reach and make a difference. Want to be part of our movement? Share your story, support our mission, or join us in spreading awareness. Together, we can create a world where compassion and understanding thrive.</p>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-comments"></i>
                    <h5>Listener Stories</h5>
                    <p>Our content has inspired people to adopt pets, support rescues, and make compassionate lifestyle changes.</p>
                </div>

                <div class="col-md-3">
                    <i class="fa fa-handshake"></i>
                    <h5>Collaborations & Partnerships</h5>
                    <p>We partner with ethical brands and animal welfare organizations to amplify positive change.</p>
                </div>

                <div class="col-md-3">
                    <i class="fa fa-users"></i>
                    <h5>How to Get Involved</h5>
                    <p>Support us by subscribing, sharing, volunteering, or contributing your own stories.</p>
                </div>

                <div class="col-md-3">
                    <i class="fa fa-trophy"></i>
                    <h5>Milestones & Achievements</h5>
                    <p>From viral stories to esteemed guest features, we continue to inform, inspire, and ignite change.</p>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </div>

@endsection