<!-- Footer -->
<footer class="footer footer--light">
    <div class="container">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-5 col-md-6">
                    <aside class="widget widget-logo">
                        <a href="<?=route('home.index')?>">
                            <img src="<?=asset('images/logo.png')?>"
                                 srcset="<?=asset('images/logo.png')?> 1x, <?=asset('img/logo_default_white@2x.png')?> 2x"
                                 class="logo__img" alt="">
                        </a>
                        <p class="copyright">

                            استفاده از مطالب تاپ‌کالا مگ برای مقاصد غیرتجاری با ذکر نام تاپ‌کالا مگ و لینک به منبع
                            بلامانع است. حقوق این سایت به شرکت توس وردپرس(فروشگاه آنلاین تاپ‌کالا) تعلق دارد.

                        </p>
                        <div class="socials socials--large socials--rounded mb-24">
                            <a href="<?= App\System::where('section','=','facebook')->get()[0]->content ?>" class="social social-facebook" aria-label="facebook"><i
                                        class="ui-facebook"></i></a>
                            <a href="<?= App\System::where('section','=','twitter')->get()[0]->content ?>" class="social social-twitter" aria-label="twitter"><i
                                        class="ui-twitter"></i></a>
                            <a href="<?= App\System::where('section','=','googleplus')->get()[0]->content ?>" class="social social-google-plus" aria-label="google+"><i
                                        class="ui-google"></i></a>
                            <a href="<?= App\System::where('section','=','instagram')->get()[0]->content ?>" class="social social-instagram" aria-label="instagram"><i
                                        class="ui-instagram"></i></a>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-3 col-md-6">
                    <aside class="widget widget_nav_menu">
                        <h4 class="widget-title">هشتگ های داغ</h4>
                        <ul>
                            <?php foreach ($recentTag as $tag){ ?>
                            <li><a href="<?=route('home.tag', [$tag->slug])?>">#<?=$tag->title?></a></li>
                            <?php } ?>
                        </ul>
                    </aside>
                </div>

                <div class="col-lg-4 col-md-6">
                    <aside class="widget widget_mc4wp_form_widget">
                        <h4 class="widget-title">خبرنامه</h4>
                        <p class="newsletter__text">
                            <i class="ui-email newsletter__icon"></i>
                            برای اطلاع از آخرین خبرها مشترک شوید
                        </p>
                        <form class="mc4wp-form" action="<?= route('home.subscriber') ?>" method="POST">
                            <div class="mc4wp-form-fields">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="ایمیل" required="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-lg btn-color" value="عضویت">
                                </div>
                            </div>
                        </form>
                    </aside>
                </div>

            </div>
        </div>
    </div> <!-- end container -->
</footer> <!-- end footer -->


<div id="back-to-top">
    <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
</div>

</main> <!-- end main-wrapper -->
