@extends('app.layouts.app')

@section('head-tag')
    <title>دسته بندی | <?= $category->name ?></title>
@endsection

@section('content')

    <!-- Breadcrumb Area Start Here -->
    <section class="breadcrumbs-area" style="background-image: url('<?= asset('img/banner/breadcrumbs-banner.jpg') ?>');">
        <div class="container">
            <div class="breadcrumbs-content">
                <h1>بایگانی سالانه</h1>
                <ul>
                    <li>
                        <a href="index.html">خانه</a> -
                    </li>
                    <li>بایگانی ها</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End Here -->
    <!-- Archive Page Area Start Here -->
    <section class="bg-body section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <form id="archive-search" class="archive-search-box bg-accent item-shadow-1">
                        <div class="row tab-space5">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="ne-custom-select">
                                        <select id="ne-year" class="select2">
                                            <option value="0">انتخاب سال</option>
                                            <option value="1">2000</option>
                                            <option value="2">2001</option>
                                            <option value="3">2002</option>
                                            <option value="4">2003</option>
                                            <option value="5">2004</option>
                                            <option value="6">2005</option>
                                            <option value="7">2006</option>
                                            <option value="8">2007</option>
                                            <option value="9">2008</option>
                                            <option value="10">2009</option>
                                            <option value="11">2010</option>
                                            <option value="12">2011</option>
                                            <option value="13">2012</option>
                                            <option value="14">2013</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="ne-custom-select">
                                        <select id="ne-month" class="select2">
                                            <option value="0">انتخاب ماه</option>
                                            <option value="1">فروردین</option>
                                            <option value="2">اردیبهشت</option>
                                            <option value="3">خرداد</option>
                                            <option value="4">تیر</option>
                                            <option value="5">مرداد</option>
                                            <option value="6">شهریور</option>
                                            <option value="7">مهر</option>
                                            <option value="8">آبان</option>
                                            <option value="9">آذر</option>
                                            <option value="10">دی</option>
                                            <option value="11">بهمن</option>
                                            <option value="12">اسفند</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="ne-custom-select">
                                        <select id="ne-categories" class="select2">
                                            <option value="0">انتخاب دسته</option>
                                            <option value="1">ورزش</option>
                                            <option value="2">سیاست</option>
                                            <option value="3">تکنولوژی</option>
                                            <option value="4">مسافرت</option>
                                            <option value="5">مد و زیبایی</option>
                                            <option value="6">کسب و کار</option>
                                            <option value="7">غذا</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-right">
                                <button type="submit" class="btn-ftg-ptp-40 disabled mb-5">جستجو</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="media media-none--lg mb-30">
                                <div class="position-relative width-40">
                                    <a href="single-news-1.html" class="img-opacity-hover img-overlay-70">
                                        <img src="<?= asset('img/news/news145.jpg') ?>" alt="news" class="img-fluid">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">مردم</div>
                                    </div>
                                </div>
                                <div class="media-body p-mb-none-child media-margin30">
                                    <div class="post-date-dark">
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
                                    <h3 class="title-semibold-dark size-lg mb-15">
                                        <a href="single-news-1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                            چاپ و با استفاده</a>
                                    </h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20-r mb-30">
                        <div class="col-sm-6 col-12">
                            <div class="pagination-btn-wrapper text-center--xs mb15--xs">
                                <ul>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="pagination-result text-left pt-10 text-center--xs">
                                <p class="mb-none">صفحه 1 از 4</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">بایگانی</div>
                        </div>
                        <ul class="archive-list">
                            <li>
                                <a href="#">فروردین 1398 (12)</a>
                            </li>
                            <li>
                                <a href="#">اسفند 1397 (4)</a>
                            </li>
                            <li>
                                <a href="#">بهمن 1397 (11)</a>
                            </li>
                            <li>
                                <a href="#">دی 1397 (79)</a>
                            </li>
                            <li>
                                <a href="#">آذر 1397 (5)</a>
                            </li>
                            <li>
                                <a href="#">آبان 1397 (7)</a>
                            </li>
                            <li>
                                <a href="#">مهر 1397 (41)</a>
                            </li>
                            <li>
                                <a href="#">شهریور 1397 (1)</a>
                            </li>
                            <li>
                                <a href="#">مرداد 1397 (1)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <div class="ne-banner-layout1 text-center">
                            <a href="#">
                                <img src="<?= asset('img/banner/banner3.jpg') ?>" alt="ad" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">خبرنامه</div>
                        </div>
                        <div class="newsletter-area bg-primary">
                            <h2 class="title-medium-light size-xl pl-30 pr-30">در لیست ایمیل ما عضو شوید تا به روز رسانی ها
                                را دریافت کنید!</h2>
                            <img src="<?= asset('img/banner/newsletter.png') ?>" alt="newsletter"
                                class="img-fluid m-auto mb-15">
                            <p>در خبرنامه ما عضو شوید تا به روز بمانید</p>
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
    <!-- Archive Page Area End Here -->
@endsection







<h2><?= $category->name ?></h2>
</div>
</div>
<div class="row d-flex">
    <?php foreach($posts as $post) { ?>
    <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
            <a href="<?= route('home.post', [$post->id]) ?>" class="block-20"
                style="background-image: url('<?= asset($post->image) ?>');">
            </a>
            <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="<?= route('home.post', [$post->id]) ?>"><?= $post->title ?></a>
                </h3>
                <div class="meta mb-3">
                    <div><a href="#"><?= formatDate($post->created_at, '%B %d، %Y') ?></a></div>
                    <div><a href="#"><?= $post->user()->first_name . ' ' . $post->user()->last_name ?></a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                </div>
