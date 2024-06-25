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
                    <h2 class="title" data-aos="fade-up" data-aos-delay="200">Master
                        <span class="position-relative">
                            Chinese
                            <svg preserveAspectRatio="none" viewBox="0 0 194 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.9248 9.14229C87.0423 -1.40948 102.959 -2.82734 187.674 4.88873C191.725 5.32113 194.527 8.47862 193.917 11.9277C191.244 28.0571 189.524 43.3886 188.756 57.9225C188.7 60.899 185.565 63.5436 181.778 63.8252C102.954 70.9044 92.6515 71.8966 16.8703 66.8017C13.194 66.5503 9.79525 63.7447 9.26809 60.547C6.50283 45.3964 3.45086 30.4336 0.112199 15.6584C-0.58143 12.5612 2.01274 9.65513 5.91093 9.14229" fill="currentcolor" />
                            </svg>
                        </span>
                        fluently
                    </h2>
                    <span class="sub-title" data-aos="fade-up" data-aos-delay="400">Join over 240 thousand learners!</span>
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
<a href="https://wa.me/+6282140466901/?text=I%20want%20course%20in%20here%21" class="btn arrow-btn btn-four">Send us message now! <img src="{{ asset('landing/assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                        <a href="https://www.youtube.com/watch?v=nLjcJbY87VM&pp=ygUISFNLIHRlc3Q%3D" class="play-btn popup-video"><i class="fas fa-play"></i> <span>How its work</span></a>
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

@endsection
