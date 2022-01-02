@extends('app.layouts.app')

@section('head-tag')
    <title>وبسایت خبری</title>
@endsection

@section('content')
<!-- Trending Now -->
    <div class="container">
        <div class="trending-now">
            <span class="trending-now__label">
                <i class="ui-flash"></i>
                خبرهای داغ</span>
            <div class="newsticker">
                <ul class="newsticker__list">
                    <?php foreach ($hotPosts as $post) {?>
                    <li class="newsticker__item">
                        <a href="<?=route('home.post', [$post->id])?>" class="newsticker__item-url">
                            <?=$post->title?>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="newsticker-buttons">
                <button class="newsticker-button newsticker-button--next" id="newsticker-button--next"
                    aria-label="previous article"><i class="ui-arrow-left"></i></button>
                <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev"
                    aria-label="next article"><i class="ui-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <!-- Featured Posts Grid -->
    <section class="featured-posts-grid">
        <div class="container">
            <div class="row row-8">

                <div class="col-lg-6">

                    <!-- Small post -->
                    <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                        <article class="entry card post-list featured-posts-grid__entry">
                            <div class="entry__img-holder post-list__img-holder card__img-holder"
                                style="background-image: url('<?=asset($widget1[0]->post()->image)?>')">
                                <a href="<?= route('home.post', [$widget1[0]->post_id]) ?>" class="thumb-url"></a>
                                <img src="<?=asset($widget1[0]->post()->image)?>" alt="" class="entry__img d-none">
                                <a href="<?= route('home.post', [$widget1[0]->post_id]) ?>"
                                    class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?=$widget1[0]->post()->category()->name?></a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <h2 class="entry__title">
                                    <a href="<?= route('home.post', [$widget1[0]->post_id]) ?>"><?=$widget1[0]->post()->title?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#"><?=$widget1[0]->post()->user()->username?></a>
                                    </li>
                                    <li class="entry__meta-date">
                                    <?= toPersianNum(formatDate($widget1[0]->post()->published_at, '%A, %d %B %Y')) ?>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end post -->

                    <!-- Small post -->
                    <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                        <article class="entry card post-list featured-posts-grid__entry">
                            <div class="entry__img-holder post-list__img-holder card__img-holder"
                                style="background-image: url('<?=asset($widget1[1]->post()->image)?>')">
                                <a href="<?= route('home.post', [$widget1[1]->post_id]) ?>" class="thumb-url"></a>
                                <img src="<?=asset($widget1[1]->post()->image)?>" alt="" class="entry__img d-none">
                                <a href="<?= route('home.post', [$widget1[1]->post_id]) ?>"
                                    class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple"><?=$widget1[1]->post()->category()->name?></a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <h2 class="entry__title">
                                    <a href="<?= route('home.post', [$widget1[1]->post_id]) ?>"><?=$widget1[1]->post()->title?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#"><?=$widget1[1]->post()->user()->username?></a>
                                    </li>
                                    <li class="entry__meta-date">
                                    <?= toPersianNum(formatDate($widget1[1]->post()->published_at, '%A, %d %B %Y')) ?>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end post -->

                    <!-- Small post -->
                    <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                        <article class="entry card post-list featured-posts-grid__entry">
                            <div class="entry__img-holder post-list__img-holder card__img-holder"
                                style="background-image: url('<?=asset($widget1[2]->post()->image)?>')">
                                <a href="<?= route('home.post', [$widget1[2]->post_id]) ?>" class="thumb-url"></a>
                                <img src="<?=asset($widget1[2]->post()->image)?>" alt="" class="entry__img d-none">
                                <a href="<?= route('home.post', [$widget1[2]->post_id]) ?>"
                                    class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue"><?=$widget1[2]->post()->category()->name?></a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <h2 class="entry__title">
                                    <a href="<?= route('home.post', [$widget1[2]->post_id]) ?>"><?=$widget1[2]->post()->title?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#"><?=$widget1[1]->post()->user()->username?></a>
                                    </li>
                                    <li class="entry__meta-date">
                                    <?= toPersianNum(formatDate($widget1[2]->post()->published_at, '%A, %d %B %Y')) ?>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end post -->

                </div> <!-- end col -->

                <div class="col-lg-6">

                    <!-- Large post -->
                    <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                        <article class="entry card featured-posts-grid__entry">
                            <div class="entry__img-holder card__img-holder">
                                <a href="<?= route('home.post', [$widget1[3]->post_id]) ?>">
                                    <img src="<?=asset($widget1[3]->post()->image)?>" alt="" class="entry__img">
                                </a>
                                <a href="<?= route('home.post', [$widget1[3]->post_id]) ?>"
                                    class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green"><?=$widget1[3]->post()->category()->name?></a>
                            </div>

                            <div class="entry__body card__body">
                                <h2 class="entry__title">
                                    <a href="<?= route('home.post', [$widget1[3]->post_id]) ?>"><?=$widget1[3]->post()->title?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#"><?=$widget1[1]->post()->user()->username?></a>
                                    </li>
                                    <li class="entry__meta-date">
                                    <?= toPersianNum(formatDate($widget1[2]->post()->published_at, '%A, %d %B %Y')) ?>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> <!-- end large post -->
                </div>

            </div>
        </div>
    </section> <!-- end featured posts grid -->


    <div class="main-container container pt-24" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content">

                <!-- Latest News -->
                <section class="section tab-post mb-16">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">آخرین عنوان ها</h3>

                        <div class="tabs tab-post__tabs">
                            <ul class="tabs__list">
                                <li class="tabs__item tabs__item--active">
                                    <a href="#tab-all" class="tabs__trigger"><?=$widget2[0]->category()->name?></a>
                                </li>
                                <li class="tabs__item">
                                    <a href="#tab-world" class="tabs__trigger"><?=$widget2[1]->category()->name?></a>
                                </li>
                                <li class="tabs__item">
                                    <a href="#tab-lifestyle" class="tabs__trigger"><?=$widget2[2]->category()->name?></a>
                                </li>
                                <li class="tabs__item">
                                    <a href="#tab-business" class="tabs__trigger"><?=$widget2[3]->category()->name?></a>
                                </li>
                            </ul> <!-- end tabs -->
                        </div>
                    </div>

                    <!-- tab content -->
                    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                        <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                            <div class="row card-row">
                                <?php foreach($w_2_1 as $post){ ?>
                                    <div class="col-md-6">
                                    <article class="entry card">
                                        <div class="entry__img-holder card__img-holder">
                                            <a href="<?=route('home.post',[$post->id])?>">
                                                <div class="thumb-container thumb-70">
                                                    <img data-src="<?=asset($post->image)?>" src="<?=asset($post->image)?>"
                                                        class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?=$post->category()->name?></a>
                                        </div>

                                        <div class="entry__body card__body">
                                            <div class="entry__header">

                                                <h2 class="entry__title">
                                                    <a href="<?=route('home.post',[$post->id])?>"><?=$post->title?></a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>نویسنده:</span>
                                                        <a href="#"><?=$post->user()->username?></a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                    <?= toPersianNum(formatDate($post->published_at, '%A, %d %B %Y')) ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p><?=str_limit($post->summary, 100)?></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <?php } ?>
                            </div>
                        </div> <!-- end pane 1 -->

                        <div class="tabs__content-pane" id="tab-world">
                            <div class="row card-row">
                            <?php foreach($w_2_2 as $post){ ?>
                                <div class="col-md-6">
                                    <article class="entry card">
                                        <div class="entry__img-holder card__img-holder">
                                            <a href="<?=route('home.post',[$post->id])?>">
                                                <div class="thumb-container thumb-70">
                                                    <img data-src="<?=asset($post->image)?>" src="<?=asset($post->image)?>"
                                                        class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple"><?=$post->category()->name?></a>
                                        </div>

                                        <div class="entry__body card__body">
                                            <div class="entry__header">

                                                <h2 class="entry__title">
                                                    <a href="<?=route('home.post',[$post->id])?>"><?=$post->title?></a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>نویسنده:</span>
                                                        <a href="#"><?=$post->user()->username?></a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                    <?= toPersianNum(formatDate($post->published_at, '%A, %d %B %Y')) ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p><?=str_limit($post->summary, 100)?></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <?php } ?>
                            </div>
                        </div> <!-- end pane 2 -->

                        <div class="tabs__content-pane" id="tab-lifestyle">
                            <div class="row card-row">
                                <?php foreach($w_2_3 as $post){ ?>
                                <div class="col-md-6">
                                    <article class="entry card">
                                        <div class="entry__img-holder card__img-holder">
                                            <a href="<?=route('home.post',[$post->id])?>">
                                                <div class="thumb-container thumb-70">
                                                    <img data-src="<?=asset($post->image)?>" src="<?=asset($post->image)?>"
                                                        class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple"><?=$post->category()->name?></a>
                                        </div>

                                        <div class="entry__body card__body">
                                            <div class="entry__header">

                                                <h2 class="entry__title">
                                                    <a href="<?=route('home.post',[$post->id])?>"><?=$post->title?></a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>نویسنده:</span>
                                                        <a href="#"><?=$post->user()->username?></a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                    <?= toPersianNum(formatDate($post->published_at, '%A, %d %B %Y')) ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p><?=str_limit($post->summary, 100)?></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <?php } ?>
                            </div>
                        </div> <!-- end pane 3 -->

                        <div class="tabs__content-pane" id="tab-business">
                            <div class="row card-row">
                            <?php foreach($w_2_4 as $post){ ?>
                                <div class="col-md-6">
                                    <article class="entry card">
                                        <div class="entry__img-holder card__img-holder">
                                            <a href="<?=route('home.post',[$post->id])?>">
                                                <div class="thumb-container thumb-70">
                                                    <img data-src="<?=asset($post->image)?>" src="<?=asset($post->image)?>"
                                                        class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange"><?=$post->category()->name?></a>
                                        </div>

                                        <div class="entry__body card__body">
                                            <div class="entry__header">

                                                <h2 class="entry__title">
                                                    <a href="<?=route('home.post',[$post->id])?>"><?=$post->title?></a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>نویسنده:</span>
                                                        <a href="#"><?=$post->user()->username?></a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                    <?= toPersianNum(formatDate($post->published_at, '%A, %d %B %Y')) ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p><?=str_limit($post->summary, 100)?></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <?php } ?>
                            </div>
                        </div> <!-- end pane 4 -->

                    </div> <!-- end tab content -->
                </section> <!-- end latest news -->

            </div> <!-- end posts -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Widget Popular Posts -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">محبوب ترین مقالات</h4>
                    <ul class="post-list-small">
                        <?php foreach ($mostPopularPost as $post) { ?>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="<?= route('home.post', [$post->id]) ?>">
                                            <img data-src="<?=asset($post->image)?>" src="<?=asset($post->image)?>" alt=""
                                                class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="<?= route('home.post', [$post->id]) ?>"><?=str_limit($post->title,60)?></a>
                                    </h3>
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
                            </article>
                        </li>
                        <?php } ?>
                    </ul>
                </aside> <!-- end widget popular posts -->

                <!-- Widget Newsletter -->
                <aside class="widget widget_mc4wp_form_widget">
                    <h4 class="widget-title">خبرنامه</h4>
                    <p class="newsletter__text">
                        <i class="ui-email newsletter__icon"></i>
                        برای اطلاع از آخرین خبرها مشترک شوید
                    </p>
                    <form class="mc4wp-form" action="<?=route('home.subscriber')?>" method="POST">
                        <div class="mc4wp-form-fields">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="ایمیل" required="">
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

        <!-- Ad Banner 728 -->
        <div class="text-center pb-48">
            <a href="#">
                <img src="img/content/cinema-banner.jpg" alt="">
            </a>
        </div>

        <!-- Carousel posts -->
        <section class="section mb-0">
            <div class="title-wrap title-wrap--line">
                <h3 class="section-title">پربازدیدترین مقالات</h3>
            </div>

            <!-- Slider -->
            <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                <?php foreach($mostPopularPost as $post){ ?> 
                <article class="entry thumb thumb--size-1">
                    <div class="entry__img-holder thumb__img-holder"
                        style="background-image: url('<?=asset($post->image)?>');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                            <h2 class="thumb-entry-title">
                                <a href="<?=route('home.post',[$post->id])?>"><?=str_limit($post->title,50)?></a>
                            </h2>
                        </div>
                        <a href="<?=route('home.post',[$post->id])?>" class="thumb-url"></a>
                    </div>
                </article>
                <?php } ?> 
            </div> <!-- end slider -->

        </section> <!-- end carousel posts -->


        <!-- Posts from categories -->
        <section class="section mb-0">
            <div class="row">

                <!-- Technology -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title"><?=$widget3[0]->category()->name?></h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder"
                                    style="background-image: url('<?=asset($w_3_1[0]->image)?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="<?= route('home.post', [$w_3_1[0]->id]) ?>"><?=$w_3_1[0]->title?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#"><?=$w_3_1[0]->user()->username?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                            <?= toPersianNum(formatDate($w_3_1[0]->published_at, '%A, %d %B %Y')) ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="<?= route('home.post', [$w_3_1[0]->id]) ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <?php 
                                unset($w_3_1[0]);
                                foreach($w_3_1 as $post){
                                ?>  
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="<?=route('home.post',[$post->id])?>"><?=str_limit($post->title,90)?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end technology -->

                <!-- Travel -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title"><?=$widget3[1]->category()->name?></h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder"
                                    style="background-image: url('<?=asset($w_3_2[0]->image)?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="<?= route('home.post', [$w_3_2[0]->id]) ?>"><?=$w_3_2[0]->title?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#"><?=$w_3_2[0]->user()->username?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                            <?= toPersianNum(formatDate($w_3_2[0]->published_at, '%A, %d %B %Y')) ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="<?= route('home.post', [$w_3_2[0]->id]) ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                            <?php 
                                unset($w_3_2[0]);
                                foreach($w_3_2 as $post){
                                ?>   
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="<?=route('home.post',[$post->id])?>"><?=str_limit($post->title,90)?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end travel -->

                <!-- Cryptocurrency -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title"><?=$widget3[2]->category()->name?></h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder"
                                    style="background-image: url('<?=asset($w_3_3[0]->image)?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="<?= route('home.post', [$w_3_3[0]->id]) ?>"><?=$w_3_3[0]->title?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#"><?=$w_3_3[0]->user()->username?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                            <?= toPersianNum(formatDate($w_3_3[0]->published_at, '%A, %d %B %Y')) ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="<?= route('home.post', [$w_3_3[0]->id]) ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                <?php 
                                unset($w_3_3[0]);
                                foreach($w_3_3 as $post){
                                ?>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="<?=route('home.post',[$post->id])?>"><?=str_limit($post->title,90)?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end cryptocurrency -->

                <!-- Investment -->
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title"><?=$widget3[3]->category()->name?></h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry thumb thumb--size-2">
                                <div class="entry__img-holder thumb__img-holder"
                                    style="background-image: url('<?=asset($w_3_4[0]->image)?>');">
                                    <div class="bottom-gradient"></div>
                                    <div class="thumb-text-holder thumb-text-holder--1">
                                        <h2 class="thumb-entry-title">
                                            <a href="<?= route('home.post', [$w_3_4[0]->id]) ?>">
                                                <?=$w_3_4[0]->title?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#"><?=$w_3_4[0]->user()->username?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                            <?= toPersianNum(formatDate($w_3_4[0]->published_at, '%A, %d %B %Y')) ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="<?= route('home.post', [$w_3_4[0]->id]) ?>" class="thumb-url"></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                <?php 
                                unset($w_3_4[0]);
                                foreach($w_3_4 as $post){
                                ?>
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="<?=route('home.post',[$post->id])?>"><?=$post->title?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end investment -->

            </div>
        </section> <!-- end posts from categories -->

        <!-- Content Secondary -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">

                <!-- Worldwide News -->
                <section class="section">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">اخبار تاپ کالا</h3>
                        <a href="#" class="all-posts-url">نمایش همه</a>
                    </div>
                    <?php foreach ($recentPosts as $post) {?>
                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder"
                            style="background-image: url('<?=asset($post->image)?>')">
                            <a href="<?=route('home.post', [$post->id])?>" class="thumb-url"></a>
                            <img src="<?=asset($post->image)?>" alt="" class="entry__img d-none">
                            <a href="categories.html"
                                class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">
                                <?=$post->category()->name?>
                            </a>
                        </div>

                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="<?=route('home.post', [$post->id])?>"><?=$post->title?></a>
                                </h2>
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#"><?=$post->user()->username?></a>
                                    </li>
                                    <li class="entry__meta-date">
                                        <?=toPersianNum(formatDate($post->published_at, '%A, %d %B %Y'))?>
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p style="text-align: justify"><?=str_limit($post->summary, 100)?></p>
                            </div>
                        </div>
                    </article>
                    <?php }?>
                </section> <!-- end worldwide news -->
            </div> <!-- end posts -->

            <!-- Sidebar 1 -->
            <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">

                <!-- Widget Categories -->
                <aside class="widget widget_categories">
                    <h4 class="widget-title">دسته بندی نوشته ها</h4>
                    <ul>
                        <?php foreach ($categories as $category) {?>
                        <li><a href="<?=route('home.category',[$category->id])?>"><?=$category->name?> <span class="categories-count">۱</span></a></li>
                        <?php }?>
                    </ul>
                </aside> <!-- end widget categories -->
                
            </aside> <!-- end sidebar 1 -->
        </div> <!-- content secondary -->


    </div> <!-- end main container -->



@endsection
