<header class="transparent-header">
    <div id="header-fixed-height"></div>
    <div class="tg-header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tg-header__top-info list-wrap">
                        <li><img src="{{ asset('landing/assets/img/icons/map_marker.svg') }}" alt="Icon"> <span>589 5th Ave, NY 10024, USA</span></li>
                        <li><img src="{{ asset('landing/assets/img/icons/envelope.svg') }}" alt="Icon"> <a href="mailto:info@skillgrodemo.com">info@skillgrodemo.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tg-header__top-right">
                        <ul class="tg-header__top-social list-wrap">
                            <li>Follow Us On :</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="tg-header__area tg-header__style-six">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('landing/assets/img/logo/logo.svg') }}" alt="Logo"></a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="#">Home</a>
                                        <ul class="sub-menu mega-menu">
                                            <li>
                                                <ul class="list-wrap mega-sub-menu">
                                                    <li>
                                                        <a href="index.html">Main Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-2.html">Online Course <span class="tg-badge">Hot</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="index-3.html">University <span class="tg-badge-two">New</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.html">Yoga Instructor<span class="tg-badge-two">New</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="index-5.html">Kindergarten<span class="tg-badge">Hot</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="list-wrap mega-sub-menu">
                                                    <li class="active">
                                                        <a href="index-6.html">Language Academy<span class="tg-badge-two">New</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="index-7.html">Business Coach <span class="tg-badge-two">New</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="index-8.html">Kitchen Coach <span class="tg-badge">Hot</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="mega-menu-img">
                                                    <a href="courses.html"><img src="{{ asset('landing/assets/img/others/mega_menu_img.jpg') }}" alt="img"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Kategori</a>
                                        <ul class="sub-menu">
                                            @foreach ($kategori as $item )
                                            <li><a href="/detail/kategori/{{ $item->id }}">{{ $item->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="instructors.html">Our Instructors</a>
                                                <ul class="sub-menu">
                                                    <li><a href="instructors.html">Our Instructors</a></li>
                                                    <li><a href="instructor-details.html">Instructor Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="events.html">Our Events</a>
                                                <ul class="sub-menu">
                                                    <li><a href="events.html">Our Events</a></li>
                                                    <li><a href="events-details.html">Event Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop Page</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="check-out.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="blog.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-2.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-3.html">Blog Full Width</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="login.html">Student Login</a></li>
                                            <li><a href="registration.html">Student Registration</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Dashboard</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="instructor-dashboard.html">Instructor Dashboard</a>
                                                <ul class="sub-menu">
                                                    <li><a href="instructor-dashboard.html">Dashboard</a></li>
                                                    <li><a href="instructor-profile.html">Profile</a></li>
                                                    <li><a href="instructor-enrolled-courses.html">Enrolled Courses</a></li>
                                                    <li><a href="instructor-wishlist.html">Wishlist</a></li>
                                                    <li><a href="instructor-review.html">Reviews</a></li>
                                                    <li><a href="instructor-attempts.html">My Quiz Attempts</a></li>
                                                    <li><a href="instructor-history.html">Order History</a></li>
                                                    <li><a href="instructor-courses.html">My Course</a></li>
                                                    <li><a href="instructor-announcement.html">Announcements</a></li>
                                                    <li><a href="instructor-quiz.html">Quiz Attempts</a></li>
                                                    <li><a href="instructor-assignment.html">Assignments</a></li>
                                                    <li><a href="instructor-setting.html">Settings</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="student-dashboard.html">Student Dashboard</a>
                                                <ul class="sub-menu">
                                                    <li><a href="student-dashboard.html">Dashboard</a></li>
                                                    <li><a href="student-profile.html">Profile</a></li>
                                                    <li><a href="student-enrolled-courses.html">Enrolled Courses</a></li>
                                                    <li><a href="student-wishlist.html">Wishlist</a></li>
                                                    <li><a href="student-review.html">Reviews</a></li>
                                                    <li><a href="student-attempts.html">My Quiz Attempts</a></li>
                                                    <li><a href="student-history.html">Order History</a></li>
                                                    <li><a href="student-setting.html">Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tgmenu__action tgmenu__action-six">
                                <ul class="list-wrap">
                                    <li class="header-search">
                                        <a href="javascript:void(0)" class="search-open-btn">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                    <li class="header-user">
                                        <a href="instructor-dashboard.html"><img src="{{ asset('landing/assets/img/icons/user.svg') }}" alt="" class="injectable"></a>
                                    </li>
                                    <li class="mini-cart-icon">
                                        <a href="cart.html" class="cart-count">
                                            <img src="{{ asset('landing/assets/img/icons/cart.svg') }}" class="injectable" alt="img">
                                            <span class="mini-cart-count">0</span>
                                        </a>
                                    </li>
                                    <li class="header-btn">
                                        <a href="login.html" class="btn arrow-btn">Learn For Free <img src="{{ asset('landing/assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-login-btn mobile-login-btn-two">
                                <a href="login.html"><img src="{{ asset('landing/assets/img/icons/user.svg') }}" alt="" class="injectable"></a>
                            </div>
                            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                            <div class="nav-logo">
                                <a href="index.html"><img src="{{ asset('landing/assets/img/logo/logo.svg') }}" alt="Logo"></a>
                            </div>
                            <div class="tgmobile__search">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="tgmobile__menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>

    <!-- header-search -->
    <div class="search__popup">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search__wrapper">
                        <div class="search__close">
                            <button type="button" class="search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="search__form">
                            <form action="#">
                                <div class="search__input">
                                    <input class="search-input-field" type="text" placeholder="Type keywords here">
                                    <span class="search-focus-border"></span>
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!-- header-search-end -->

</header>
