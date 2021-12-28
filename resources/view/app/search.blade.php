@extends('app.layouts.app')

@section('head-tag')
    <title>نمایش جستجو برای عبارت "<?= $_GET['search'] ?>"</title>
@endsection

@section('content')

    <div class="main-container container pt-40" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">
                <h1 class="page-title">نتایج جستجو برای: <?= $_GET['search'] ?></h1>
                <?php foreach ($posts as $post) {?>
                <article class="entry card post-list">
                    <div class="entry__img-holder post-list__img-holder card__img-holder"
                        style="background-image: url('<?= asset($post->image) ?>')">
                        <a href="<?= route('home.post', [$post->id]) ?>" class="thumb-url"></a>
                        <img src="<?= asset($post->image) ?>" alt="" class="entry__img d-none">
                        <a href="categories.html"
                            class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">
                            <?= $post->category()->name ?>
                        </a>
                    </div>

                    <div class="entry__body post-list__body card__body">
                        <div class="entry__header">
                            <h2 class="entry__title">
                                <a href="<?= route('home.post', [$post->id]) ?>"><?= $post->title ?></a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>نویسنده:</span>
                                    <a href="#"><?= $post->user()->username ?></a>
                                </li>
                                <li class="entry__meta-date">
                                    <?= toPersianNum(formatDate($post->published_at, '%A, %d %B %Y')) ?>
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p style="text-align: justify"><?= str_limit($post->summary, 150) ?></p>
                        </div>
                    </div>
                </article>
                <?php } ?>
                <!-- Pagination -->
                <?= paginateView($postCount, 2) ?>
            </div> <!-- end posts -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Widget Popular Posts -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">محبوب ترین مقالات</h4>
                    <ul class="post-list-small">
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" alt=""
                                                class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/thumb/post-2.jpg" src="img/empty.png" alt=""
                                                class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/thumb/post-6.jpg" src="img/empty.png" alt=""
                                                class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">چرا لانچرهای اندروید دیگر محبوبیت گذشته را ندارند؟</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/thumb/post-5.jpg" src="img/empty.png" alt=""
                                                class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">بهرامی راد</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            ۴ اردیبهشت ۱۳۹۸
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    </ul>
                </aside> <!-- end widget popular posts -->

                <!-- Widget Newsletter -->
                <aside class="widget widget_mc4wp_form_widget">
                    <h4 class="widget-title">خبرنامه</h4>
                    <p class="newsletter__text">
                        <i class="ui-email newsletter__icon"></i>
                        برای اطلاع از آخرین خبرها مشترک شوید
                    </p>
                    <form class="mc4wp-form" method="post">
                        <div class="mc4wp-form-fields">
                            <div class="form-group">
                                <input type="email" name="EMAIL" placeholder="ایمیل" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-lg btn-color" value="عضویت">
                            </div>
                        </div>
                    </form>
                </aside> <!-- end widget newsletter -->

                <!-- Widget Ad 300 -->
                <aside class="widget widget_media_image">
                    <a href="#">
                        <img src="img/content/mag-1.jpg" alt="">
                    </a>
                </aside> <!-- end widget ad 300 -->

            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection
