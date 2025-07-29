<nav class="navbar fixed-top navbar-expand-xl" id="desktop-nav">
            <div class="container">
                <div class=" main-logos">
                    <a class="navbar-brand mobile-logo {{!empty($mm) && $mm == 'kj' ? 'active' : ''}}" href="{{URL::to('/kasturijha')}}">
                        <img src="{{URL::to('/')}}/public/images/kj-logo.png" alt="LOL" height="40px" style="margin-top: 10px;" />
                    </a>
                    <a class="navbar-brand mobile-logo {{empty($mm) ? 'active' : ''}}" href="{{URL::to('/')}}">
                        <img src="{{URL::to('/')}}/public/images/lol-j-logo.png" alt="LOL" height="55px" />
                    </a>
                    <a class="navbar-brand mobile-logo {{!empty($mm) && $mm == 'lol' ? 'active' : ''}}" href="{{URL::to('/letsoffleash')}}">
                        <img src="{{URL::to('/')}}/public/images/lol-logo.png" alt="LOL" height="50px" />
                    </a>
                </div>
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>

                <div id="my-nav" class="collapse navbar-collapse">

                    <div>
                        <ul class="navbar-nav float-right menu-links">
                            <li class="nav-item">
                                <a class="nav-link {{$nav == 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{$nav == 'about' ? 'active' : ''}}" href="{{route('about')}}">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{$nav == 'blogs' ? 'active' : ''}}" href="{{route('blogs')}}">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact us</a>
                            </li>

                        </ul>
                    </div>

                    <ul class="navbar-nav mx-auto logo-desktop">
                        <li class="nav-item active main-logos">
                            <a class="nav-link {{!empty($mm) && $mm == 'kj' ? 'active' : ''}}" href="{{URL::to('/kasturijha')}}">
                                <img src="{{URL::to('/')}}/public/images/kj-logo.png" alt="LOL Logo" height="60px" style="padding-top:10px;" />
                            </a>
                            <a class="nav-link {{empty($mm) ? 'active' : ''}}" href="{{URL::to('/')}}">
                                <img src="{{URL::to('/')}}/public/images/lol-j-logo.png" alt="LOL Logo" height="60px" />
                            </a>
                            <a class="nav-link {{!empty($mm) && $mm == 'lol' ? 'active' : ''}}" href="{{URL::to('/lol')}}">
                                <img src="{{URL::to('/')}}/public/images/lol-logo.png" alt="LOL Logo" height="60px" />
                            </a>
                        </li>
                    </ul>
                    
                       <ul class="navbar-nav float-right menu-links">
                            <li class="nav-item">
                                <a class="nav-link" href="#insights">Insights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content">Content</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#community">Community</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#latest-updates">Latest Updates</a>
                            </li>

                        </ul>
                </div>
            </div>
        </nav>
