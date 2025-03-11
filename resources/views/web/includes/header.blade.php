<nav class="navbar fixed-top navbar-expand-xl" id="desktop-nav">
            <div class="container">
                <a class="navbar-brand mobile-logo" href="#">
                    <img src="{{URL::to('/')}}/public/images/kj-logo.png" alt="LOL" height="45px" style="margin-top: 10px;" />
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <img src="{{URL::to('/')}}/public/images/lol-logo.png" alt="LOL" height="55px" />
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <img src="{{URL::to('/')}}/public/images/lol-j-logo.png" alt="LOL" height="50px" />
                </a>
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>

                <div id="my-nav" class="collapse navbar-collapse">

                    <div>
                        <ul class="navbar-nav float-right menu-links">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact us</a>
                            </li>

                        </ul>
                    </div>

                    <ul class="navbar-nav mx-auto logo-desktop">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{URL::to('/')}}">
                                <img src="{{URL::to('/')}}/public/images/kj-logo.png" alt="LOL Logo" height="55px" />
                                &nbsp;|&nbsp;
                                <img src="{{URL::to('/')}}/public/images/lol-logo.png" alt="LOL Logo" height="80px" />
                                &nbsp;|&nbsp;
                                <img src="{{URL::to('/')}}/public/images/lol-j-logo.png" alt="LOL Logo" height="65px" />
                            </a>
                        </li>
                    </ul>
                    
                       <ul class="navbar-nav float-right menu-links">
                            <li class="nav-item">
                                <a class="nav-link" href="">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content">Content</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#community">Community</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Latest Updates</a>
                            </li>

                        </ul>
                </div>
            </div>
        </nav>
