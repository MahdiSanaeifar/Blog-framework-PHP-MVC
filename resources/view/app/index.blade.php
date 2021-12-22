@extends('app.layouts.app')

@section('head-tag')
    <title>وبسایت خبری</title>
@endsection

@section('content')

    <!-- News Feed Area Start Here -->
    <section class="bg-accent border-bottom add-top-margin">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="topic-box topic-box-margin">اخبار داغ</div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                    <div class="feeding-text-dark">
                        <ol id="sample" class="ticker">
                            <li>
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای</a>
                            </li>
                            <li>
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</a>
                            </li>
                            <li>
                                <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Feed Area End Here -->
    <!-- News Info List Area Start Here -->
    <section class="bg-body">
        <div class="container">
            <ul class="news-info-list text-center--md">
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>ایران
                </li>
                <li>
                    <i class="fa fa-calendar" aria-hidden="true"></i>شنبه، 18 خرداد 1398
                </li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>آخرین به‌روزرسانی 11:30 صبح
                </li>
                <li>
                    <i class="fa fa-cloud" aria-hidden="true"></i>℃29 تبریز، ایران
                </li>
            </ul>
        </div>
    </section>
    <!-- News Info List Area End Here -->
    <!-- News Slider Area Start Here -->
    <section class="bg-accent section-space-less2">
        <div class="container">
            <div class="row tab-space1">
                <div class="col-lg-6 col-md-12">
                    <div class="img-overlay-70 img-scale-animate mb-2">
                        <img src="img/news/news1.jpg" alt="news" class="img-fluid width-100">
                        <div class="mask-content-lg">
                            <div class="topic-box-sm color-cinnabar mb-20">سیاست</div>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>توسط</span>
                                        <a href="single-news-1.html">جان اسنو</a>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h1 class="title-medium-light">
                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده</a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row tab-space1">
                        <div class="col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-sm">
                                    <div class="topic-box-sm color-azure-radiance mb-10">ورزش</div>
                                    <h2 class="title-medium-light">
                                        <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ و</a>
                                    </h2>
                                </div>
                                <img src="img/news/news2.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-sm">
                                    <div class="topic-box-sm color-apple mb-10">مد و زیبایی</div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </a>
                                    </h3>
                                </div>
                                <img src="img/news/news4.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-sm">
                                    <div class="topic-box-sm color-razzmatazz mb-10">موزیک</div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                    </h3>
                                </div>
                                <img src="img/news/news4.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Slider Area End Here -->
    <!-- Top Story Area Start Here -->
    <section class="bg-body section-space-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="mb-20-r ne-isotope">
                        <div class="topic-border color-cinnabar mb-30">
                            <div class="topic-box-lg color-cinnabar">اخبار داغ</div>
                            <div class="isotope-classes-tab isotop-btn">
                                <a href="#" data-filter=".politics" class="current">سیاست</a>
                                <a href="#" data-filter=".fashion">مد و زیبایی</a>
                                <a href="#" data-filter=".travel">مسافرت</a>
                                <a href="#" data-filter=".gadget">ابزار</a>
                            </div>
                            <div class="more-info-link">
                                <a href="post-style-1.html">بیشتر
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="featuredContainer">
                            <div class="row politics">
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-overlay-70 img-scale-animate mb-30">
                                        <a href="single-news-1.html">
                                            <img src="img/news/news5.jpg" alt="news" class="img-fluid width-100">
                                        </a>
                                        <div class="mask-content-lg">
                                            <div class="topic-box-sm color-cinnabar mb-20">سیاست</div>
                                            <div class="post-date-light">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">وحید</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>22 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2 class="title-medium-light size-lg">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news6.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 اردیبهشت 1397
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news7.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 خرداد 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news8.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>15 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news9.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>23 فروردین 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fashion">
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-overlay-70 img-scale-animate mb-30">
                                        <a href="single-news-1.html">
                                            <img src="img/news/news46.jpg" alt="news" class="img-fluid width-100">
                                        </a>
                                        <div class="mask-content-lg">
                                            <div class="topic-box-sm color-azure-radiance mb-20">مد و زیبایی</div>
                                            <div class="post-date-light">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">وحید</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>22 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2 class="title-medium-light size-lg">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news6.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 اردیبهشت 1397
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news7.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 خرداد 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news8.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>15 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news9.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>23 فروردین 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row travel">
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-overlay-70 img-scale-animate mb-30">
                                        <a href="single-news-1.html">
                                            <img src="img/news/news48.jpg" alt="news" class="img-fluid width-100">
                                        </a>
                                        <div class="mask-content-lg">
                                            <div class="topic-box-sm color-web-orange mb-20">ابزار</div>
                                            <div class="post-date-light">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">وحید</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>22 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2 class="title-medium-light size-lg">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news6.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 اردیبهشت 1397
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news7.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 خرداد 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news8.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>15 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news9.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>23 فروردین 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gadget">
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-overlay-70 img-scale-animate mb-30">
                                        <a href="single-news-1.html">
                                            <img src="img/news/news49.jpg" alt="news" class="img-fluid width-100">
                                        </a>
                                        <div class="mask-content-lg">
                                            <div class="topic-box-sm color-web-orange mb-20">ابزار</div>
                                            <div class="post-date-light">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">وحید</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>22 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2 class="title-medium-light size-lg">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news6.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 اردیبهشت 1397
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news7.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>10 خرداد 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news8.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>15 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="media mb-30">
                                        <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news9.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="media-body">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>23 فروردین 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-medium-dark size-md mb-none">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row tab-space1 mb-25">
                        <div class="col-12">
                            <div class="topic-border color-apple mb-30 width-100">
                                <div class="topic-box-lg color-apple">سبک زندگی</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-xs">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>10 اردیبهشت 1397
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </a>
                                    </h3>
                                </div>
                                <img src="img/news/news10.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-xs">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>10 اردیبهشت 1397
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی </a>
                                    </h3>
                                </div>
                                <img src="img/news/news11.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-xs">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>10 اردیبهشت 1397
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </a>
                                    </h3>
                                </div>
                                <img src="img/news/news12.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-xs">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>10 اردیبهشت 1397
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </a>
                                    </h3>
                                </div>
                                <img src="img/news/news13.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-xs">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>10 اردیبهشت 1397
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </a>
                                    </h3>
                                </div>
                                <img src="img/news/news14.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-xs">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>10 اردیبهشت 1397
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </a>
                                    </h3>
                                </div>
                                <img src="img/news/news13.jpg" alt="news" class="img-fluid width-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">در ارتباط باشید</div>
                        </div>
                        <ul class="stay-connected overflow-hidden">
                            <li class="facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <div class="connection-quantity">50.2 k</div>
                                <p>طرفدار</p>
                            </li>
                            <li class="twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <div class="connection-quantity">10.3 k</div>
                                <p>دنبال کننده</p>
                            </li>
                            <li class="linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                <div class="connection-quantity">25.4 k</div>
                                <p>طرفدار</p>
                            </li>
                            <li class="rss">
                                <i class="fa fa-rss" aria-hidden="true"></i>
                                <div class="connection-quantity">20.8 k</div>
                                <p>مشترک</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <div class="ne-banner-layout1 text-center">
                            <a href="#">
                                <img src="img/banner/banner3.jpg" alt="ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-scampi mb-5">
                            <div class="topic-box-lg color-scampi">اخبار جدید</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="mt-25">
                                    <a href="single-news-1.html" class="img-opacity-hover">
                                        <img src="img/news/news42.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="mt-25">
                                    <a href="single-news-2.html" class="img-opacity-hover">
                                        <img src="img/news/news43.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="mt-25">
                                    <a href="single-news-3.html" class="img-opacity-hover">
                                        <img src="img/news/news44.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                            صنعت</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="mt-25">
                                    <a href="single-news-1.html" class="img-opacity-hover">
                                        <img src="img/news/news45.jpg" alt="ad" class="img-fluid mb-10 width-100">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ne-banner-layout1 mt-20-r text-center">
                        <a href="#">
                            <img src="img/banner/banner2.jpg" alt="ad" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Story Area End Here -->
    <!-- Video Area Start Here -->
    <section class="bg-accent section-space-less4">
        <div class="container">
            <div class="row tab-space2">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="img-overlay-70">
                        <div class="mask-content-sm">
                            <div class="topic-box-sm color-pomegranate mb-20">تناسب اندام</div>
                            <h3 class="title-medium-light">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
                            </h3>
                        </div>
                        <div class="text-center">
                            <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                <img src="img/banner/play.png" alt="play" class="img-fluid">
                            </a>
                        </div>
                        <img src="img/news/news18.jpg" alt="news" class="img-fluid width-100">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="img-overlay-70">
                        <div class="mask-content-sm">
                            <div class="topic-box-sm color-persian-green mb-20">کسب و کار</div>
                            <h3 class="title-medium-light">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</a>
                            </h3>
                        </div>
                        <div class="text-center">
                            <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                <img src="img/banner/play.png" alt="play" class="img-fluid">
                            </a>
                        </div>
                        <img src="img/news/news18.jpg" alt="news" class="img-fluid width-100">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="img-overlay-70">
                        <div class="mask-content-sm">
                            <div class="topic-box-sm color-web-orange mb-20">غذا</div>
                            <h3 class="title-medium-light">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
                            </h3>
                        </div>
                        <div class="text-center">
                            <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                <img src="img/banner/play.png" alt="play" class="img-fluid">
                            </a>
                        </div>
                        <img src="img/news/news18.jpg" alt="news" class="img-fluid width-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Area End Here -->
    <!-- Latest News Area Start Here -->
    <section class="bg-body section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="topic-border color-cutty-sark mb-30 width-100">
                        <div class="topic-box-lg color-cutty-sark">دنیای تکنولوژی</div>
                    </div>
                    <div class="img-overlay-70 img-scale-animate mb-30">
                        <div class="mask-content-sm">
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>توسط</span>
                                        <a href="single-news-1.html">وحید</a>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>30 اردیبهشت 1398
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-light">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h3>
                        </div>
                        <img src="img/news/news19.jpg" alt="news" class="img-fluid width-100">
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-3.html">
                            <img src="img/news/news20.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-2.html">
                            <img src="img/news/news21.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-1.html">
                            <img src="img/news/news22.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="topic-border color-pomegranate mb-30 width-100">
                        <div class="topic-box-lg color-pomegranate">سلامتی و تندرستی</div>
                    </div>
                    <div class="img-overlay-70 img-scale-animate mb-30">
                        <div class="mask-content-sm">
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>توسط</span>
                                        <a href="single-news-1.html">وحید</a>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>22 اردیبهشت 1398
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-light">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h3>
                        </div>
                        <img src="img/news/news23.jpg" alt="news" class="img-fluid width-100">
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-1.html">
                            <img src="img/news/news28.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-2.html">
                            <img src="img/news/news28.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-3.html">
                            <img src="img/news/news28.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="topic-border color-web-orange mb-30 width-100">
                        <div class="topic-box-lg color-web-orange">دنیای تکنولوژی</div>
                    </div>
                    <div class="img-overlay-70 img-scale-animate mb-30">
                        <div class="mask-content-sm">
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>توسط</span>
                                        <a href="single-news-1.html">وحید</a>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>16 خرداد 1398
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-light">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h3>
                        </div>
                        <img src="img/news/news27.jpg" alt="news" class="img-fluid width-100">
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-1.html">
                            <img src="img/news/news28.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-2.html">
                            <img src="img/news/news29.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <a class="img-opacity-hover" href="single-news-3.html">
                            <img src="img/news/news30.jpg" alt="news" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>10 اردیبهشت 1397
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ne-banner-layout1 mb-50 mt-20-r text-center">
                        <a href="#">
                            <img src="img/banner/banner2.jpg" alt="ad" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="ne-isotope">
                <div class="row">
                    <div class="col-12">
                        <div class="topic-border color-azure-radiance mb-30">
                            <div class="topic-box-lg color-azure-radiance">ورزش</div>
                            <div class="isotope-classes-tab isotop-btn">
                                <a href="#" data-filter=".tenies" class="current">تنیس</a>
                                <a href="#" data-filter=".cricket">کریکت</a>
                                <a href="#" data-filter=".football">فوتبال</a>
                                <a href="#" data-filter=".cycling">دوچرخه سواری</a>
                            </div>
                            <div class="more-info-link">
                                <a href="post-style-1.html">بیشتر
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featuredContainer">
                    <div class="row tenies">
                        <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                            <div class="img-overlay-70 img-scale-animate mb-30">
                                <img src="img/news/news31.jpg" alt="news" class="img-fluid width-100">
                                <div class="topic-box-top-lg">
                                    <div class="topic-box-sm color-cod-gray mb-20">تنیس</div>
                                </div>
                                <div class="mask-content-lg">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>توسط</span>
                                                <a href="single-news-1.html">وحید</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>30 اردیبهشت 1398
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title-medium-light size-lg">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                            صنعت</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                            <div class="row keep-items-4-md">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">راگبی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">بوکسینگ</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>10 اردیبهشت 1397
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">شنا</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>6 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                از</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 اردیبهشت 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">اتومبیل رانی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>22 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>30 فروردین 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cricket">
                        <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                            <div class="img-overlay-70 img-scale-animate mb-30">
                                <img src="img/news/news51.jpg" alt="news" class="img-fluid width-100">
                                <div class="topic-box-top-lg">
                                    <div class="topic-box-sm color-cod-gray mb-20">کریکت</div>
                                </div>
                                <div class="mask-content-lg">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>توسط</span>
                                                <a href="single-news-1.html">وحید</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>30 اردیبهشت 1398
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title-medium-light size-lg">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                            صنعت</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                            <div class="row keep-items-4-md">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">راگبی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">بوکسینگ</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>10 اردیبهشت 1397
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">شنا</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>6 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                از</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 اردیبهشت 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">اتومبیل رانی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>22 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>30 فروردین 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row football">
                        <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                            <div class="img-overlay-70 img-scale-animate mb-30">
                                <img src="img/news/news50.jpg" alt="news" class="img-fluid width-100">
                                <div class="topic-box-top-lg">
                                    <div class="topic-box-sm color-cod-gray mb-20">فوتبال</div>
                                </div>
                                <div class="mask-content-lg">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>توسط</span>
                                                <a href="single-news-1.html">وحید</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>30 اردیبهشت 1398
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title-medium-light size-lg">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                            صنعت</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                            <div class="row keep-items-4-md">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">راگبی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">بوکسینگ</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>10 اردیبهشت 1397
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">شنا</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>6 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                از</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 اردیبهشت 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">اتومبیل رانی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>22 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>30 فروردین 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cycling">
                        <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
                            <div class="img-overlay-70 img-scale-animate mb-30">
                                <img src="img/news/news52.jpg" alt="news" class="img-fluid width-100">
                                <div class="topic-box-top-lg">
                                    <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                </div>
                                <div class="mask-content-lg">
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>توسط</span>
                                                <a href="single-news-1.html">وحید</a>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>30 اردیبهشت 1398
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title-medium-light size-lg">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                            صنعت</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
                            <div class="row keep-items-4-md">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news32.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">راگبی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">بوکسینگ</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>10 اردیبهشت 1397
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news34.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">شنا</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>6 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                از</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-1.html">
                                            <img src="img/news/news35.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>17 اردیبهشت 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-2.html">
                                            <img src="img/news/news36.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">اتومبیل رانی</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>22 خرداد 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                    <div class="mb-25 position-relative">
                                        <a class="img-opacity-hover" href="single-news-3.html">
                                            <img src="img/news/news37.jpg" alt="news" class="img-fluid width-100 mb-15">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">دوچرخه سواری</div>
                                        </div>
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>30 فروردین 1398
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md">
                                            <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News Area End Here -->
    <!-- More News Area Start Here -->
    <section class="bg-accent section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ne-isotope">
                        <div class="topic-border color-scampi mb-30">
                            <div class="topic-box-lg color-scampi">خبرهای بیشتر</div>
                            <div class="isotope-classes-tab isotop-btn">
                                <a href="#" data-filter=".politics" class="current">سیاست</a>
                                <a href="#" data-filter=".fashion">مد و زیبایی</a>
                                <a href="#" data-filter=".health">سلامتی و تندرستی</a>
                                <a href="#" data-filter=".travel">مسافرت</a>
                                <a href="#" data-filter=".gadget">ابزار</a>
                            </div>
                            <div class="more-info-link">
                                <a href="post-style-1.html">بیشتر
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="featuredContainer">
                            <div class="row politics">
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cinnabar mb-20">سیاست</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-2.html" class="img-opacity-hover">
                                                <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-web-orange mb-20">غذا</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-3.html" class="img-opacity-hover">
                                                <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-azure-radiance mb-20">ورزش</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-apple mb-20">سبک زندگی</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fashion">
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-2.html" class="img-opacity-hover">
                                                <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-web-orange mb-20">غذا</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-3.html" class="img-opacity-hover">
                                                <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-azure-radiance mb-20">ورزش</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cinnabar mb-20">سیاست</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-apple mb-20">سبک زندگی</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row health">
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-3.html" class="img-opacity-hover">
                                                <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-azure-radiance mb-20">ورزش</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-apple mb-20">سبک زندگی</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cinnabar mb-20">سیاست</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-2.html" class="img-opacity-hover">
                                                <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-web-orange mb-20">غذا</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row travel">
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-3.html" class="img-opacity-hover">
                                                <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-azure-radiance mb-20">ورزش</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cinnabar mb-20">سیاست</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-2.html" class="img-opacity-hover">
                                                <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-web-orange mb-20">غذا</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-apple mb-20">سبک زندگی</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gadget">
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-apple mb-20">سبک زندگی</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-1.html" class="img-opacity-hover">
                                                <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-cinnabar mb-20">سیاست</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-2.html" class="img-opacity-hover">
                                                <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-web-orange mb-20">غذا</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="media media-none--lg mb-30">
                                        <div class="position-relative width-40">
                                            <a href="single-news-3.html" class="img-opacity-hover">
                                                <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm color-azure-radiance mb-20">ورزش</div>
                                            </div>
                                        </div>
                                        <div class="media-body p-mb-none-child media-margin30">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>توسط</span>
                                                        <a href="single-news-1.html">جان اسنو</a>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>30 اردیبهشت 1398
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="single-news-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                    از صنعت چاپ و با استفاده</a>
                                            </h3>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. چاپگرها و متون
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                    <div class="sidebar-box">
                        <div class="ne-banner-layout1 text-center">
                            <a href="#">
                                <img src="img/banner/banner6.jpg" alt="ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">خبرنامه</div>
                        </div>
                        <div class="newsletter-area bg-primary">
                            <h2 class="title-medium-light size-xl">در لیست ایمیل ما عضو شوید تا به روز رسانی ها را دریافت
                                کنید!</h2>
                            <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid mb-40">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                            <form>
                                <div class="input-group stylish-input-group">
                                    <input type="text" placeholder="ایمیل خود را وارد کنید" class="form-control ltr_input">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- More News Area End Here -->
    <!-- Category Area Start Here -->
    <section class="bg-body section-space-less2">
        <div class="container">
            <div class="row tab-space1">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                        <img src="img/category/ctg1.jpg" alt="news" class="img-fluid width-100">
                        <div class="content p-30-r">
                            <div class="ctg-title-xs">موزیک</div>
                            <h3 class="title-regular-light size-lg">
                                <a href="post-style-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
                            </h3>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>22 اردیبهشت 1398
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                        <img src="img/category/ctg2.jpg" alt="news" class="img-fluid width-100">
                        <div class="content p-30-r">
                            <div class="ctg-title-xs">تحصیلات</div>
                            <h3 class="title-regular-light size-lg">
                                <a href="post-style-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</a>
                            </h3>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>20 خرداد 1398
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                        <img src="img/category/ctg3.jpg" alt="news" class="img-fluid width-100">
                        <div class="content p-30-r">
                            <div class="ctg-title-xs">مسافرت</div>
                            <h3 class="title-regular-light size-lg">
                                <a href="post-style-3.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
                            </h3>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>3 اردیبهشت 1398
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                        <img src="img/category/ctg4.jpg" alt="news" class="img-fluid width-100">
                        <div class="content p-30-r">
                            <div class="ctg-title-xs">ورزش</div>
                            <h3 class="title-regular-light size-lg">
                                <a href="post-style-4.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                            </h3>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>9 خرداد 1398
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                        <img src="img/category/ctg5.jpg" alt="news" class="img-fluid width-100">
                        <div class="content p-30-r">
                            <div class="ctg-title-xs">غذا</div>
                            <h3 class="title-regular-light size-lg">
                                <a href="post-style-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</a>
                            </h3>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>28 فروردین 1398
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                        <img src="img/category/ctg6.jpg" alt="news" class="img-fluid width-100">
                        <div class="content p-30-r">
                            <div class="ctg-title-xs">تحصیلات</div>
                            <h3 class="title-regular-light size-lg">
                                <a href="post-style-2.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                            </h3>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>19 خرداد 1398
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Area End Here -->

@endsection
