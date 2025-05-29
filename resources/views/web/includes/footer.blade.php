<footer class="container-fluid fh5co-footer container-stiped">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-5">
                    <h2>CONTACT US TODAY NOW</h2>
                    <p class="light">
                        Have a story to share or a question for us? <br>Reach out—we’d love to hear from you!
                    </p>
                    <p>
                        <span class="email"><img src="{{URL::to('/')}}/public/images/email.png"
                                alt="email icon" /></span><b><a href="mailto:askforkasturi@letsoffleash.com">askforkasturi@letsoffleash.com</a></b>
                    </p>
                    <!-- <p>
                        <span class="phone"><img src="{{URL::to('/')}}/public/images/phone.png" alt="phone icon" /></span><b>+123-456-7890</b>
                    </p> -->
                    <h5 class="text-theme2">We Are Social:</h5>
                    <ul class="navbar-nav float-left social-links footer-social">
                       <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/@LetsOffLeash" target="_blank" class="text-theme"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://instagram.com/letsoffleash" target="_blank" class="text-theme"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://facebook.com/LetsOffLeashlol" target="_blank" class="text-theme"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://linkedin.com/company/letsoffleash" target="_blank" class="text-theme"><i class="fab fa-linkedin"></i></a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-7">
                    <div class="form-box container-stiped">
                        <h4>What would you like to talk about</h4>
                        <p>We'd Love to Hear From you !</p>
                        <hr />
                        <form action="{{route('enquiry.submit')}}" method="post">
                            @csrf
                            <table class="table table-light table-borderless container-stiped">
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="name" placeholder="Name..." required>
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="email" class="form-control" name="email" placeholder="Email address" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <textarea class="form-control" placeholder="You Message" name="description" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit">
                                            SUBMIT NOW
                                        </button>

                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <div class="container-fluid copy">
        <div class="col-lg-12">
            <p>&copy; 2025 <a href="javascript:void(0)" class="text-theme2"><strong>LOL - Let's Off Leash</strong></a>. All rights Reserved. Powered by <a href="https://daralafkarmarketing.ae/" target="_blank">Dar Alafkar Marketing LLC</a></p>
        </div>
    </div>
