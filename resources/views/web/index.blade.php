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
                <div class="swiper-slide" data-background="{{URL::to('public/images/lol-junction.jpg')}}" style="background-image: url({{URL::to('public/images/lol-junction.jpg')}});">
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
                <div class="swiper-slide" data-background="{{URL::to('public/images/world.png')}}" style="background-image: url({{URL::to('public/images/world.png')}});">
                    <div class="inner">
                        <p><font class="text-theme">Welcome</font> to the world of</p> 
                        <h2>Kasturi Jha</h2> 
                        <a class="hero-cta" href="https://www.youtube.com/@LetsOffLeash" target="_blank"><i class="fab fa-youtube"></i> View Channel</a>
                    </div>
                </div>
                <div class="swiper-slide" data-background="{{URL::to('public/images/lol-junction.jpg')}}" style="background-image: url({{URL::to('public/images/lol-junction.jpg')}});">
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
                            <img src="{{URL::to('/')}}/public/images/ab1.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/ab2.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/ab3.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about3.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about2.png" alt="" class="img-fluid" />
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

    @if(count($updates) !== 0)
        <div class="container-fluid fh5co-news" id="latest-updates">
            <div class="container">
                <h2>Latest Updates</h2>
                <p class="text-center">Big things are coming! We have amazing guests, including pet experts and animal lovers, sharing valuable insights and heartwarming stories. Our upcoming episodes will cover pet care tips, training advice, and the latest trends in the animal world. Plus, exciting collaborations and new segments are on the way! Stay tuned, subscribe, and follow us for all the latest updates.</p>
                <br>
                <div class="row">
                    @foreach($updates as $val)
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                          <div class="card">
                            <a href="{{$val->link}}" target="_blank">
                                <img class="card-img" src="{{URL::to('public/storage/updates/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                            </a>
                            <div class="card-body">
                                <div class="news-block">
                                    <a href="{{$val->link}}" target="_blank">
                                        <h6 class="card-title text-theme2">{{$val->heading}}</h6>
                                    </a>
                                    <small class="text-muted cat">
                                        <i class="far fa-clock text-theme"></i>&nbsp;&nbsp;{{ \Carbon\Carbon::parse($val->created_at)->diffForHumans() }}
                                    </small>
                                </div>
                            </div>
                          </div>
                          <hr>
                        </div>
                    @endforeach
                  </div>
                <br>
            </div>
        </div>
    @endif

    <div class="container-fluid our-content container-stiped" id="content">
        <div class="container">
            <h2>OUR CONTENT</h2>
            <div class="row">
                <div class="col-md-12">
                    <p>Our YouTube channel is a hub of engaging and thought-provoking content that brings stories to life through compelling visuals and in-depth storytelling. From exclusive interviews with experts and rescuers to heartwarming animal rescue stories and insightful discussions on human resilience, every video is crafted to educate, inspire, and entertain. Whether you're looking for eye-opening narratives or practical solutions to real-world issues, our channel offers a diverse range of content that connects, informs, and uplifts.</p>
                    <br>
                </div>
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="letsoffleash" class="tab-pane fade in active show">
                          <div class="row">
                            @foreach($videos as $val)
                                <div class="col-md-4">
                                    <iframe src="https://www.youtube.com/embed/{{$val->iframe}}" allowfullscreen></iframe>
                                    <h5 class="text-theme2">{{$val->name}} - <font class="text-theme text-bold">Kasturi Jha</font></h5>
                                </div>
                            @endforeach
                            
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

    <div class="container-fluid fh5co-news" id="insights">
        <div class="container">
            <h2>Insights</h2>
            <p>At <strong>LOL "Let's Off Leash,"</strong> we’re building more than just content—we’re building a movement. With a powerful mix of storytelling, real experiences, and purpose-driven voices, our platform reaches 5 million+ people monthly who care about compassion, community, and change. We’ve created over 100 original pieces of content, welcomed 100+ inspiring guests, and continue to grow with a strong 6.7%+ click-through rate. Every story shared is a step toward awareness, empathy, and action. We're here to amplify voices that matter—join us in making an impact that goes beyond the screen.</p>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="viewership">1,000,000 +</h3>
                    <p>Viewership per month</p>
                    <br>
                </div>
                <div class="col-md-3">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <h5>5 Million+</h5>
                    <p>Online Reach per month</p>
                </div>

                <div class="col-md-3">
                    <i class="fa-solid fa-chart-simple"></i>
                    <h5>6.7%+</h5>
                    <p>Click through Rate</p>
                </div>

                <div class="col-md-3">
                    <i class="fa-solid fa-photo-film"></i>
                    <h5>100+</h5>
                    <p>Content Pieces</p>
                </div>

                <div class="col-md-3">
                    <i class="fa fa-users"></i>
                    <h5>100+</h5>
                    <p>Guests</p>
                </div>
            </div>
            <br>
            <hr>
        </div>
    </div>
<!-- 
    <div class="container-fluid fh5co-news" id="services">
        <div class="container">
            <h2>Services</h2>
            <p class="text-center">Boost your brand with our pet-focused audience! We offer sponsorships, including featured segments, product placements, and shoutouts in our podcasts. Let’s collaborate to showcase your brand authentically—reach out today!</p>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="sponsorships-div">
                        <div class="sponsorships-details text-theme2">
                            <ul>
                                <li>Exclusive branding</li>
                                <li>Logo in visuals</li>
                                <li>Mentions in episodes</li>
                                <li>Social media shoutouts</li>
                            </ul>
                        </div>
                        <a href="#contact" class="sponsorships-title">
                            Title Sponsorship
                        </a>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="sponsorships-div">
                        <div class="sponsorships-details text-theme2">
                            <ul>
                                <li>Sponsor a segment</li>
                                <li>Integrated messaging</li>
                                <li>Audience engagement</li>
                                <li>Social media coverage</li>
                            </ul>
                        </div>
                        <a href="#contact" class="sponsorships-title">
                            Rapid Fire Round Sponsorship
                        </a>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="sponsorships-div">
                        <div class="sponsorships-details text-theme2">
                            <ul>
                                <li>Brand in a segment.</li>
                                <li>Examples: <br>"Tech Tips, Wellness Moment"</li>
                                <li>Promote across platforms</li>
                            </ul>
                        </div>
                        <a href="#contact" class="sponsorships-title">
                            Branded Segment Integration
                        </a>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="sponsorships-div">
                        <div class="sponsorships-details text-theme2">
                            <ul>
                                <li>Product/service giveaway</li>
                                <li>Cross-promotion</li>
                                <li>Audience engagement</li>
                                <li>Social media posts</li>
                            </ul>
                        </div>
                        <a href="#contact" class="sponsorships-title">
                            Giveaway Collaboration
                        </a>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="sponsorships-div">
                        <div class="sponsorships-details text-theme2">
                            <ul>
                                <li>Branded hampers</li>
                                <li>Include products/services</li>
                                <li>Showcase on episodes/social media</li>
                                <li>Hashtag for sharing</li>
                            </ul>
                        </div>
                        <a href="#contact" class="sponsorships-title">
                            Guest Hamper Sponsorship
                        </a>
                    </div>
                    <br>
                </div>    
            </div>
            <br>
        </div>
    </div>


 -->


    <div class="social-media-wi">
        <ul>
            <li class="wi-youtube">
                <a class="nav-link" href="https://www.youtube.com/@LetsOffLeash" target="_blank" class="text-theme"><i class="fab fa-youtube"></i></a>
            </li>
            <li class="wi-instagram">
                <a class="nav-link" href="https://www.instagram.com/loljunctionpodcast" target="_blank" class="text-theme"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="wi-facebook">
                <a class="nav-link" href="http://facebook.com/LetsOffLeashlol" target="_blank" class="text-theme"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="wi-linkedin">
                <a class="nav-link" href="https://linkedin.com/company/letsoffleash" target="_blank" class="text-theme"><i class="fab fa-linkedin"></i></a>
            </li>

        </ul>
    </div>

@endsection
                  