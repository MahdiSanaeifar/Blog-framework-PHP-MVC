@extends('app.layouts.app')
@section('head-tag')
    <title>درباره ما</title>
@endsection
@section('content')

    <!-- Breadcrumb Area Start Here -->
    <section class="breadcrumbs-area" style="background-image: url('img/banner/breadcrumbs-banner.jpg');">
        <div class="container">
            <div class="breadcrumbs-content">
                <h1>با ما در ارتباط باشید</h1>
                <ul>
                    <li>
                        <a href="index.html">خانه</a> -
                    </li>
                    <li>تماس</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End Here -->
    <!-- Contact Page Area Start Here -->
    <section class="bg-body section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mb-30">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">درباره ما</div>
                    </div>
                    <h2 class="title-semibold-dark size-xl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک</h2>
                    <p class="size-lg mb-40">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                        فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                        شصت و سه درصد گذشته، حال</p>
                    <div class="google-map-area mb-50">
                        <div id="googleMap" style="width:100%; height:400px;"></div>
                    </div>
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">اطلاعات تماس</div>
                    </div>
                    <ul class="address-info">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>تبریز، فلکه دانشگاه، برج بلور، طبقه 456
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i><span class="ltr_text">+98 50 67 89
                                10</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>info@newsedge.com
                        </li>
                        <li>
                            <i class="fa fa-fax" aria-hidden="true"></i><span class="ltr_text">+98 50 67 89
                                10</span>
                        </li>
                    </ul>
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">با ما در ارتباط باشید</div>
                    </div>
                    <form id="contact-form" class="contact-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="نام" class="form-control" name="name"
                                            id="form-subject" data-error="فیلد نام الزامی است" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="ایمیل" class="form-control ltr_input" name="email"
                                            id="form-email" data-error="فیلد ایمیل الزامی است" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea placeholder="پیام" class="textarea form-control" name="message"
                                            id="form-message" rows="7" cols="20" data-error="فیلد پیام الزامی است"
                                            required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                    <div class="form-group mb-none">
                                        <button type="submit" class="btn-ftg-ptp-56 disabled">ارسال پیام</button>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                    <div class="form-response"></div>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
                <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">در ارتباط باشید</div>
                        </div>
                        <ul class="stay-connected overflow-hidden">
                            <li class="facebook">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <div class="connection-quantity">50.2 k</div>
                                    <p>طرفدار</p>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <div class="connection-quantity">10.3 k</div>
                                    <p>دنبال کننده</p>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    <div class="connection-quantity">25.4 k</div>
                                    <p>طرفدار</p>
                                </a>
                            </li>
                            <li class="rss">
                                <a href="#">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                    <div class="connection-quantity">20.8 k</div>
                                    <p>مشترک</p>
                                </a>
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
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">خبرنامه</div>
                        </div>
                        <div class="newsletter-area bg-primary">
                            <h2 class="title-medium-light size-xl pl-30 pr-30">در لیست ایمیل ما عضو شوید تا به روز رسانی ها
                                را دریافت کنید!</h2>
                            <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid m-auto mb-15">
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
    <!-- Contact Page Area End Here -->

@endsection
