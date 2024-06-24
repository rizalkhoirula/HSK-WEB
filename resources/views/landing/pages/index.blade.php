@extends('landing.layout.main')

@section('content')

<!-- banner-area -->
<section class="banner-area banner-bg-six tg-motion-effects" data-background="{{ asset('landing/assets/img/banner/h6_hero_bg.jpg') }}">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 col-md-9 col-sm-10 order-0 order-lg-2">
                <div class="banner__images-six">
                    <div class="main-img tg-svg">
                        <img src="{{ asset('landing/assets/img/banner/h6_hero_img.jpg') }}" alt="img">
                        <span class="svg-icon" id="banner-svg" data-svg-icon="{{ asset('landing/assets/img/banner/h6_banner_img_shape03.svg') }}"></span>
                    </div>
                    <div class="about__enrolled about__enrolled-two" data-aos="fade-right" data-aos-delay="1000">
                        <img src="{{ asset('landing/assets/img/others/student_grp.png') }}" alt="img">
                        <p class="title">250K+ Students</p>
                    </div>
                    <div class="banner__review" data-aos="fade-left" data-aos-delay="1000">
                        <div class="icon">
                            <img src="{{ asset('landing/assets/img/icons/star.svg') }}" alt="" class="injectable">
                        </div>
                        <h6 class="title">4.9/5 <span>Real Reviews</span></h6>
                    </div>
                    <div class="banner__courses" data-aos="fade-up" data-aos-delay="1000">
                        <div class="icon">
                            <i class="skillgro-closed-book"></i>
                        </div>
                        <h6 class="title">45+ <span>Courses</span></h6>
                    </div>
                    <div class="shape-wrap">
                        <img src="{{ asset('landing/assets/img/banner/h6_banner_img_shape01.svg') }}" alt="shape">
                        <img src="{{ asset('landing/assets/img/banner/h6_banner_img_shape02.svg') }}" alt="shape" class="alltuchtopdown">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__content-six">
                    <h2 class="title" data-aos="fade-up" data-aos-delay="200">Confidently
                        <span class="position-relative">
                            speak
                            <svg preserveAspectRatio="none" viewBox="0 0 194 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.9248 9.14229C87.0423 -1.40948 102.959 -2.82734 187.674 4.88873C191.725 5.32113 194.527 8.47862 193.917 11.9277C191.244 28.0571 189.524 43.3886 188.756 57.9225C188.7 60.899 185.565 63.5436 181.778 63.8252C102.954 70.9044 92.6515 71.8966 16.8703 66.8017C13.194 66.5503 9.79525 63.7447 9.26809 60.547C6.50283 45.3964 3.45086 30.4336 0.112199 15.6584C-0.58143 12.5612 2.01274 9.65513 5.91093 9.14229" fill="currentcolor" />
                            </svg>
                        </span>
                        a new language
                    </h2>
                    <span class="sub-title" data-aos="fade-up" data-aos-delay="400">More than 240 thousand new users SignUp Here!</span>
                    <ul class="about__info-list banner__info-list list-wrap" data-aos="fade-up" data-aos-delay="600">
                        <li class="about__info-list-item">
                            <i class="flaticon-angle-right"></i>
                            <p class="content">Live classes online 24/7</p>
                        </li>
                        <li class="about__info-list-item">
                            <i class="flaticon-angle-right"></i>
                            <p class="content">Learn in small groups or 1-on-1</p>
                        </li>
                        <li class="about__info-list-item">
                            <i class="flaticon-angle-right"></i>
                            <p class="content">Free 7-day trial</p>
                        </li>
                    </ul>
                    <div class="banner__btn-wrap-three" data-aos="fade-up" data-aos-delay="800">
                        <a href="courses.html" class="btn arrow-btn btn-four">Explore All Course <img src="{{ asset('landing/assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                        <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="play-btn popup-video"><i class="fas fa-play"></i> <span>See How It Work</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-area-end -->

<!-- categories-area -->
<section class="categories-area-two section-pt-140 section-pb-110">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="section__title mb-50 mb-xs-20">
                    <span class="sub-title">Top Search Categories</span>
                    <h2 class="title bold">Our Language categories</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="view-all-categories">
                    <a href="courses.html"><span>Browse All Categories</span><img src="assets/img/icons/right_arrow.svg" alt="" class="injectable"></a>
                </div>
            </div>
        </div>


        {{-- // filter --}}
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="tgmenu__search">
                    <form action="/" method="get" class="tgmenu__search-form">
                        <div class="input-grp">
                            <input name="input" type="text" placeholder="Search For Course . . .">
                            <button type="submit"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}

        @if($id_kategori == '0')

        <div class="slider__search banner__search">
            <form action="/" method="get" class="slider__search-form">
                <input hidden type="text" name="id_kategori" value="all">
                <input type="text" name="input" placeholder="Search Here . . .">
                <button type="submit">Find Courses</button>
            </form>
        </div>

        @else

        <div class="slider__search banner__search">
            <form action="/" method="get" class="slider__search-form">
                <input hidden type="text" name="id_kategori" value="{{ $id_kategori }}">
                <input type="text" name="input" placeholder="Search Here . . .">
                <button type="submit">Find Courses</button>
            </form>
        </div>

        @endif


        <div class="row">
            @foreach ($data as $item )
            <div class="col-xl-2 col-lg-4 col-sm-4 ">
                <div class="categories__item-two">
                    <a href="javascript:void(0);" class="justify-content-center" data-bs-toggle="modal" data-bs-target="#itemModal{{ $item->id }}">
                        <div class="content">
                            <img src="{{ asset('images/'.$item->image) }}" alt="img">
                            <span class="name"><strong>{{ $item->name }}</strong>{{ $item->name_mandarin }}</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="itemModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->name }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{ asset('images/'.$item->image) }}" alt="img">
                                </div>
                                <div class="col-lg-6">
                                    <strong>{{ $item->name }}</strong>
                                    <p>{{ $item->name_mandarin }}</p>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- categories-area-end -->

{{-- <!-- choose-area -->
<section class="choose__area-three section-pb-140">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="choose__img-three">
                    <img src="assets/img/others/h6_choose_img.jpg" alt="img">
                    <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose__content-three">
                    <div class="section__title mb-15">
                        <span class="sub-title">Why Choose Us</span>
                        <h2 class="title bold">Transform Your Language with Our Courses</h2>
                    </div>
                    <p>Groove’s intuitive shared inbox makes it easy for team members to organize, prioritize anIn this episode of the Smashing Pod we’re talking about Web Platform Baseline.</p>
                    <div class="choose__list-wrap">
                        <div class="choose__list-item">
                            <div class="icon">
                                <i class="skillgro-profit"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Learn skills with 120k+</h4>
                                <span>video courses.</span>
                            </div>
                        </div>
                        <div class="choose__list-item">
                            <div class="icon">
                                <i class="flaticon-mortarboard"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Choose courses taught by</h4>
                                <span>real-world experts.</span>
                            </div>
                        </div>
                    </div>
                    <a href="lesson.html" class="btn arrow-btn btn-four">Start Free Trial <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose-area-end -->

<!-- courses-area -->
<section class="courses-area-five section-py-140 courses__bg-four" data-background="assets/img/bg/h6_courses_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section__title text-center mb-50">
                    <span class="sub-title">Top Class Courses</span>
                    <h2 class="title bold">Get The Best Language Class Experience With us</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-seven">
                    <div class="courses__item-thumb-six">
                        <a href="course-details.html"><img src="assets/img/courses/h6_course_thumb01.jpg" alt="img"></a>
                        <a href="course-details.html" class="courses__wishlist-two"><img src="assets/img/icons/heart02.svg" alt="" class="injectable"></a>
                        <a href="courses.html" class="courses__item-tag-three">English</a>
                        <div class="courses__review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(4.8)</span>
                        </div>
                    </div>
                    <div class="courses__item-content-six">
                        <div class="courses__item-content-six-top">
                            <h2 class="title"><a href="course-details.html">Martiniza</a></h2>
                            <h3 class="price">$75.00</h3>
                        </div>
                        <span>Professional Tutor</span>
                        <ul class="courses__item-meta-two list-wrap">
                            <li>English <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                            <li>Russian <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                        </ul>
                        <p>The foundation of the Monte areay ssori philosophy</p>
                    </div>
                    <div class="courses__item-bottom-three courses__item-bottom-four">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i>Lessons 05</li>
                            <li><i class="skillgro-group"></i>Students 22</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-seven">
                    <div class="courses__item-thumb-six">
                        <a href="course-details.html"><img src="assets/img/courses/h6_course_thumb02.jpg" alt="img"></a>
                        <a href="course-details.html" class="courses__wishlist-two"><img src="assets/img/icons/heart02.svg" alt="" class="injectable"></a>
                        <a href="courses.html" class="courses__item-tag-three">German</a>
                        <div class="courses__review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(4.8)</span>
                        </div>
                    </div>
                    <div class="courses__item-content-six">
                        <div class="courses__item-content-six-top">
                            <h2 class="title"><a href="course-details.html">Martiniza</a></h2>
                            <h3 class="price">$99.00</h3>
                        </div>
                        <span>Professional Tutor</span>
                        <ul class="courses__item-meta-two list-wrap">
                            <li>German <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                            <li>English <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                        </ul>
                        <p>The foundation of the Monte areay ssori philosophy</p>
                    </div>
                    <div class="courses__item-bottom-three courses__item-bottom-four">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i>Lessons 08</li>
                            <li><i class="skillgro-group"></i>Students 15</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-seven">
                    <div class="courses__item-thumb-six">
                        <a href="course-details.html"><img src="assets/img/courses/h6_course_thumb03.jpg" alt="img"></a>
                        <a href="course-details.html" class="courses__wishlist-two"><img src="assets/img/icons/heart02.svg" alt="" class="injectable"></a>
                        <a href="courses.html" class="courses__item-tag-three">Japan</a>
                        <div class="courses__review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(4.8)</span>
                        </div>
                    </div>
                    <div class="courses__item-content-six">
                        <div class="courses__item-content-six-top">
                            <h2 class="title"><a href="course-details.html">Martiniza</a></h2>
                            <h3 class="price">$80.00</h3>
                        </div>
                        <span>Professional Tutor</span>
                        <ul class="courses__item-meta-two list-wrap">
                            <li>Japan <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                            <li>English <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                        </ul>
                        <p>The foundation of the Monte areay ssori philosophy</p>
                    </div>
                    <div class="courses__item-bottom-three courses__item-bottom-four">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i>Lessons 09</li>
                            <li><i class="skillgro-group"></i>Students 29</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-seven">
                    <div class="courses__item-thumb-six">
                        <a href="course-details.html"><img src="assets/img/courses/h6_course_thumb04.jpg" alt="img"></a>
                        <a href="course-details.html" class="courses__wishlist-two"><img src="assets/img/icons/heart02.svg" alt="" class="injectable"></a>
                        <a href="courses.html" class="courses__item-tag-three">Italy</a>
                        <div class="courses__review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(4.8)</span>
                        </div>
                    </div>
                    <div class="courses__item-content-six">
                        <div class="courses__item-content-six-top">
                            <h2 class="title"><a href="course-details.html">Martiniza</a></h2>
                            <h3 class="price">$65.00</h3>
                        </div>
                        <span>Professional Tutor</span>
                        <ul class="courses__item-meta-two list-wrap">
                            <li>Italy <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                            <li>Russian <img src="assets/img/icons/graph.svg" alt="" class="injectable"></li>
                        </ul>
                        <p>The foundation of the Monte areay ssori philosophy</p>
                    </div>
                    <div class="courses__item-bottom-three courses__item-bottom-four">
                        <ul class="list-wrap">
                            <li><i class="flaticon-book"></i>Lessons 07</li>
                            <li><i class="skillgro-group"></i>Students 30</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all-btn view-all-categories">
            <a href="courses.html"><span>Discover All Class</span><img src="assets/img/icons/right_arrow.svg" alt="" class="injectable"></a>
        </div>
    </div>
</section>
<!-- courses-area-end -->

<!-- faq-area -->
<section class="faq__area-three tg-motion-effects section-py-140">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                <div class="faq__img-four">
                    <div class="main-img">
                        <img src="assets/img/others/h6_faq_img01.jpg" alt="img" data-aos="fade-down" data-aos-delay="400">
                        <img src="assets/img/others/h6_faq_img02.jpg" alt="img" data-aos="fade-up" data-aos-delay="400">
                    </div>
                    <div class="faq__language-wrap" data-aos="fade-right" data-aos-delay="600">
                        <h2 class="title">160k</h2>
                        <span>Country Language</span>
                    </div>
                    <div class="shape">
                        <img src="assets/img/others/h6_faq_shape01.svg" alt="shape" class="alltuchtopdown">
                        <img src="assets/img/others/h6_faq_shape02.svg" alt="shape" class="tg-motion-effects4">
                        <img src="assets/img/others/h6_faq_shape03.svg" alt="shape" class="tg-motion-effects3">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="faq__content-two faq__content-three">
                    <div class="section__title mb-15">
                        <span class="sub-title">Faq’s</span>
                        <h2 class="title bold">Why Our Schools are the Right Fit for Your Child?</h2>
                    </div>
                    <p>Groove’s intuitive shared inbox makes it easy for team members to organize, prioritize and.In this episod.</p>
                    <div class="faq__wrap faq__wrap-two">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Well Trained Professionals
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sorem ipsum dolor sit amet consectur adipiscing elit sed eius mod
                                            nt labore dolore magna aliquaenim ad minim sorem ipsum dolor sit
                                            amet consectur adipiscing elit sed eius modam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Flexible Class Plans
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sorem ipsum dolor sit amet consectur adipiscing elit sed eius mod
                                            nt labore dolore magna aliquaenim ad minim sorem ipsum dolor sit
                                            amet consectur adipiscing elit sed eius modam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Learn From Anywhere
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Sorem ipsum dolor sit amet consectur adipiscing elit sed eius mod
                                            nt labore dolore magna aliquaenim ad minim sorem ipsum dolor sit
                                            amet consectur adipiscing elit sed eius modam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-area-end -->

<!-- testimonial-area -->
<section class="testimonial__area-five section-pb-130">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="testimonial__img-three tg-svg">
                    <div class="testimonial__mask-img">
                        <img src="assets/img/others/h6_testimonial_img.jpg" alt="img">
                    </div>
                    <div class="banner__review" data-aos="fade-left" data-aos-delay="1000">
                        <div class="icon">
                            <img src="assets/img/icons/star.svg" alt="" class="injectable">
                        </div>
                        <h6 class="title">4.9/5 <span>Real Reviews</span></h6>
                    </div>
                    <div class="testimonial__img-icon">
                        <img src="assets/img/icons/quote02.svg" alt="" class="injectable">
                    </div>
                    <span class="svg-icon" id="testimonial-svg" data-svg-icon="assets/img/others/h6_testimonial_shape.svg"></span>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="testimonial__content-three">
                    <div class="section__title mb-25">
                        <span class="sub-title">Testimonials</span>
                        <h2 class="title bold">What’s our client Say <br> About us</h2>
                    </div>
                    <div class="swiper-container testimonial-active-four">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__item-four">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>“ Manage and strea mline operations tear acrosers multiple locations wear sales channels, and employees improve efficiency stre sales channe amline ”</p>
                                    <div class="testimonial__bottom-two">
                                        <h4 class="title">Brooklyn Simmons</h4>
                                        <span>Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item-four">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>“ Manage and strea mline operations tear acrosers multiple locations wear sales channels, and employees improve efficiency stre sales channe amline ”</p>
                                    <div class="testimonial__bottom-two">
                                        <h4 class="title">Brooklyn Simmons</h4>
                                        <span>Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item-four">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>“ Manage and strea mline operations tear acrosers multiple locations wear sales channels, and employees improve efficiency stre sales channe amline ”</p>
                                    <div class="testimonial__bottom-two">
                                        <h4 class="title">Brooklyn Simmons</h4>
                                        <span>Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-pagination testimonial-pagination-two"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- fact-area-two -->
<section class="fact__area-two section-pb-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="fact__inner-wrap-two">
                    <div class="section__title white-title mb-30">
                        <h2 class="title">Thousands of
                            <span class="position-relative">
                                <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565" fill="currentcolor" />
                                </svg>
                                courses
                            </span>
                            authored by industry experts</h2>
                    </div>
                    <div class="fact__item-wrap">
                        <div class="fact__item">
                            <h2 class="count"><span class="odometer" data-count="45"></span>K+</h2>
                            <p>Active Students</p>
                        </div>
                        <div class="fact__item">
                            <h2 class="count"><span class="odometer" data-count="328"></span>+</h2>
                            <p>Best Instructors</p>
                        </div>
                    </div>
                    <div class="fact__img-wrap tg-svg">
                        <img src="assets/img/others/fact_img.png" alt="img">
                        <div class="shape-one">
                            <img src="assets/img/others/fact_shape01.svg" alt="img" class="injectable">
                        </div>
                        <div class="shape-two">
                            <span class="svg-icon" id="fact-btn" data-svg-icon="assets/img/others/fact_shape02.svg"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fact-area-two-end -->

<!-- blog-area -->
<section class="blog__post-area-six section-pt-140 section-pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section__title text-center mb-50">
                    <span class="sub-title">News & Blogs</span>
                    <h2 class="title">Our Latest News Feed</h2>
                    <p>when known printer took a galley of type scrambl edmake</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog__post-item-four shine__animate-item">
                    <div class="blog__post-thumb-four">
                        <a href="blog-details.html" class="shine__animate-link"><img src="assets/img/blog/h6_blog_post01.jpg" alt="img"></a>
                    </div>
                    <div class="blog__post-content-four">
                        <a href="blog.html" class="post-tag-three">Marketing</a>
                        <h2 class="title"><a href="blog-details.html">Learn from Anywhere with Our eLearning Platform</a></h2>
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                                <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog__post-item-four shine__animate-item">
                    <div class="blog__post-thumb-four">
                        <a href="blog-details.html" class="shine__animate-link"><img src="assets/img/blog/h6_blog_post02.jpg" alt="img"></a>
                    </div>
                    <div class="blog__post-content-four">
                        <a href="blog.html" class="post-tag-three">Agency</a>
                        <h2 class="title"><a href="blog-details.html">platform has given me the bility to learn on my own schedule</a></h2>
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                                <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog__post-item-four shine__animate-item">
                    <div class="blog__post-thumb-four">
                        <a href="blog-details.html" class="shine__animate-link"><img src="assets/img/blog/h6_blog_post03.jpg" alt="img"></a>
                    </div>
                    <div class="blog__post-content-four">
                        <a href="blog.html" class="post-tag-three">Play Ground</a>
                        <h2 class="title"><a href="blog-details.html">learning platform where you can easily access course content</a></h2>
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                                <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end --> --}}
@endsection
