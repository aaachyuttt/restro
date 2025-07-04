<div>
    <header class="header-section">
        <div class="black-bg"></div>
        <div class="red-bg"></div>
        <div class="container-fluid">
            <div class="main-header-wrapper">
                <div class="logo-image">
                    <a href="{{ route('home') }}">
                        <img src="assets/img/logo/logo.svg" alt="img">
                    </a>
                </div>
                <div class="main-header-items">
                    <div class="header-top-wrapper">
                        <span><i class="fa-regular fa-clock"></i> {{ $opening_time }}</span>
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            {!! isset($social_media['facebook'])
                                ? '<a href="' . $social_media['facebook'] . '"><i class="fab fa-facebook-f"></i></a>'
                                : '' !!}
                            {!! isset($social_media['instagram'])
                                ? '<a href="' . $social_media['instagram'] . '"><i class="fab fa-instagram"></i></a>'
                                : '' !!}
                            {!! isset($social_media['youtube'])
                                ? '<a href="' . $social_media['youtube'] . '"><i class="fab fa-youtube"></i></a>'
                                : '' !!}
                        </div>
                    </div>
                    <div id="header-sticky" class="header-1">
                        <div class="mega-menu-wrapper">
                            <div class="header-main">
                                <div class="logo">
                                    <a href="{{ route('home') }}" class="header-logo">
                                        <img src="assets/img/logo/logo.svg" alt="logo-img">
                                    </a>
                                </div>
                                <div class="header-left">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li class="has-dropdown active menu-thumb">
                                                        <a href="{{ route('home') }}">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="{{ url('about') }}">
                                                            About Us
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('menu') }}">
                                                            Menu
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.php">
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-right d-flex justify-content-end align-items-center">
                                    {{-- <a href="#0" class="search-trigger search-icon"><i
                                            class="fal fa-search"></i></a> --}}
                                    @guest
                                        <a href="{{ route('login') }}" style="font-weight:bold"
                                            class="header__cart">Login</a>
                                    @endguest
                                    @auth
                                        <div class="header__cart">
                                            <a style="font-weight:bold"> {{ auth()->user()->name }}</i>
                                            </a>
                                            <div class="header__right__dropdown__wrapper">
                                                <div class="single__header__right__dropdown">
                                                    <a href="{{ route('my-orders') }}">My Orders</a>
                                                </div>
                                                <div class="single__header__right__dropdown">
                                                    <a href="{{ route('my-orders') }}">My Account</a>
                                                </div>
                                                <div class="single__header__right__dropdown">
                                                    <a href="{{ route('logout') }}">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endauth
                                    <div class="header__cart">
                                        <a href="#"> <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                                            <span
                                                style="font-size: 10px;font-weight: 500;line-height: 15px;position: absolute;top: 0;right: -10px;width: 15px;height: 15px; padding: 0 4px; text-align: center; border-radius: 100%; background: var(--theme2); color: var(--white);"
                                                class="cart-badge">{{ $cart_count }}</span> </a>
                                        <div class="header__right__dropdown__wrapper">
                                            <div class="header__right__dropdown__inner">
                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="assets/img/blog/blogRecentThumb3_1.png"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.php">Fried Chicken</a>
                                                        <p>1 x <span class="price">$ 80.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="assets/img/blog/blogRecentThumb3_2.png"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.php">Fried Noodles</a>
                                                        <p>1 x <span class="price">$ 60.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="assets/img/blog/blogRecentThumb3_3.png"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.php">Special Pasta</a>
                                                        <p>1 x <span class="price">$ 70.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="dropdown__price">Total: <span>$1,100.00</span>
                                            </p>
                                            <div class="header__right__dropdown__button">
                                                <a href="cart.php" class="theme-btn mb-2">View Cart</a>
                                                <a href="checkout.php" class="theme-btn style3">Checkout</a>
                                            </div>
                                        </div>
                                    </div>


                                    <a class="theme-btn" href="menu.php">ORDER NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <div class="header__hamburger d-xl-block my-auto">
                                        <div class="sidebar__toggle">
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
