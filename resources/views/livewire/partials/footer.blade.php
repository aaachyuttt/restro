<div>
    <footer class="footer-section bg-title fix">
        <div class="footer-widgets-wrapper">
            <div class="shape1 float-bob-y d-none d-xxl-block"><img src="assets/img/shape/footerShape1_1.png"
                    alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="assets/img/shape/footerShape1_2.png" alt="shape"></div>
            <div class="shape3 d-none d-xxl-block"><img src="assets/img/shape/footerShape1_3.png" alt="shape"></div>
            <div class="shape4  d-none d-xxl-block"><img src="assets/img/shape/footerShape1_4.png" alt="shape"></div>
            <div class="container">
                <div class="footer-top">
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="item2">
                                    <h6>address</h6>
                                    <p>{{ $address }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="item2">
                                    <h6>send email</h6>
                                    <p>{{ $email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-regular fa-phone-volume"></i></div>
                                <div class="item2">
                                    <h6>call emergency</h6>
                                    <p>{{ $phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <a href="{{ route('home') }}">
                                    <img src="assets/img/logo/logoWhite.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p>
                                    {{ $about }}
                                </p>
                                <div class="social-icon d-flex align-items-center">
                                    {!! isset($socialMedia['facebook'])
                                        ? '<a href="' . $socialMedia['facebook'] . '"><i class="fab fa-facebook-f"></i></a>'
                                        : '' !!}
                                    {!! isset($socialMedia['instagram'])
                                        ? '<a href="' . $socialMedia['instagram'] . '"><i class="fab fa-instagram"></i></a>'
                                        : '' !!}
                                    {!! isset($socialMedia['youtube'])
                                        ? '<a href="' . $socialMedia['youtube'] . '"><i class="fab fa-youtube"></i></a>'
                                        : '' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Quick Links</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="{{ url('about') }}">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Our Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Our Blogs
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        FAQ’S
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Our Menu</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="{{ route('menu') }}">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Burger King
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.php">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Pizza king
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.php">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Fresh Food
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.php">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Vegetable
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.php">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Desserts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Contact Us</h3>
                            </div>
                            <p>We are open:</p>
                            <p>{{ $openingTime }}</p>
                            {{-- <p>Monday – Friday: 11am – 11pm</p>
                             <ul class="list-area">
                                <li class="mb-2">
                                    Monday – Friday: <span class="text-theme-color2"> 11am – 11pm </span>
                                </li>
                                <li>
                                    Saturday: <span class="text-theme-color2"> 11am – 11am </span>
                                </li>
                            </ul> --}}
                            <form action="#" class="mt-4">
                                <div class="form-control">
                                    <input class="email" type="email" placeholder="Your email address">
                                    <button type="submit" class="submit-btn"><i
                                            class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                                <div class="form-control style2 mt-3">
                                    <input id="checkbox" name="checkbox" type="checkbox">
                                    <label for="checkbox">I agree to the <a href="{{ url('privacy-policy') }}">Privacy
                                            Policy.
                                        </a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-between">
                    <p class="wow fadeInLeft" data-wow-delay=".3s">
                        © All Copyright 2025 by <a href="{{ route('home') }}">FreshEat</a>
                    </p>
                    <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a class="text-white" href="{{ url('terms-and-conditions') }}">
                                Terms & Condition
                            </a>
                        </li>
                        <li>
                            <a class="text-white" href="{{ url('privacy-policy') }}">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
