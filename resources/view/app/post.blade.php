@extends('app.layouts.app')

@section('head-tag')
    <title><?= $post->title ?></title>

    <link rel="stylesheet" href="<?=asset('swiper/swiper-bundle.min.css')?>"/>
    <script src="<?=asset('swiper/swiper-bundle.min.js')?>"></script>
@endsection

@section('content')

    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="<?= route('home.index') ?>" class="breadcrumbs__url">خانه</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="<?= route('home.category', [$post->category()->id]) ?>" class="breadcrumbs__url">اخبار</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                <?= $post->category()->name ?>
            </li>
        </ul>
    </div>

    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-8 blog__content mb-72">
                <div class="content-box">

                    <!-- flash message -->
                @include('app.layouts.message')

                <!-- standard post -->
                    <article class="entry mb-0">

                        <div class="single-post__entry-header entry__header">
                            <a href="<?= route('home.category', [$post->category()->id]) ?>"
                               class="entry__meta-category entry__meta-category--label entry__meta-category--green"><?= $post->category()->name ?></a>
                            <h1 class="single-post__entry-title">
                                <?= $post->title ?>
                            </h1>

                            <div class="entry__meta-holder">
                                <ul class="entry__meta">
                                    <li class="entry__meta-author">
                                        <span>نویسنده:</span>
                                        <a href="#"><?= $post->user()->username ?></a>
                                    </li>
                                    <li class="entry__meta-date">
                                        <?= toPersianNum(formatDate($post->published_at, '%A, %d %B %Y')) ?>
                                    </li>
                                </ul>

                                <ul class="entry__meta">
                                    <li class="entry__meta-views">
                                        <i class="ui-eye"></i>
                                        <span><?= toPersianNum($post->views) ?></span>
                                    </li>
                                    <li class="entry__meta-comments">
                                        <a href="#">
                                            <i class="ui-chat-empty"></i><?= toPersianNum(count($comments)) ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end entry header -->

                        <div class="entry__img-holder">
                            <img src="<?= asset($post->image) ?>" alt="" class="entry__img">
                        </div>

                        <div class="entry__article-wrap">

                            <!-- Share -->
                            <div class="entry__share">
                                <div class="sticky-col">
                                    <div class="socials socials--rounded socials--large">
                                        <a class="social social-facebook" href="<?= App\System::where('section','=','facebook')->get()[0]->content ?>" title="facebook" target="_blank"
                                           aria-label="facebook">
                                            <i class="ui-facebook"></i>
                                        </a>
                                        <a class="social social-twitter" href="<?= App\System::where('section','=','twitter')->get()[0]->content ?>" title="twitter" target="_blank"
                                           aria-label="twitter">
                                            <i class="ui-twitter"></i>
                                        </a>
                                        <a class="social social-google-plus" href="<?= App\System::where('section','=','googleplus')->get()[0]->content ?>" title="google" target="_blank"
                                           aria-label="google">
                                            <i class="ui-google"></i>
                                        </a>
                                        <a class="social social-pinterest" href="<?= App\System::where('section','=','pinterest')->get()[0]->content ?>" title="pinterest" target="_blank"
                                           aria-label="pinterest">
                                            <i class="ui-pinterest"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- share -->

                            <div class="entry__article">

                                <p><?= html_entity_decode($post->body) ?></p>

                                <?php $galleries = $post->galleries()->get();
                                if(!empty($galleries)){
                                ?>

                                <div class="swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <?php foreach($galleries as $gallery) { ?>
                                        <img src="<?= asset($gallery->image) ?>" alt="" class="entry__img swiper-slide">
                                        <?php } ?>
                                    </div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-pagination"></div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                                <!-- Slider main container -->
                            <?php } ?>

                            <!-- tags -->
                                <div class="entry__tags">
                                    <i class="ui-tags"></i>
                                    <span class="entry__tags-label">برچسب ها:</span>
                                    <?php foreach ($post->tags()->get() as $tag){ ?>
                                    <a href="<?=route('home.tag',[$tag->slug])?>" rel="tag"><?=$tag->title?></a>
                                    <?php } ?>
                                </div> <!-- end tags -->

                            </div> <!-- end entry article -->
                        </div> <!-- end entry article wrap -->

                        <!-- Author -->
                        <div class="entry-author clearfix">
                            <img alt="" data-src="<?= asset($post->user()->avatar) ?>" src="img/empty.png"
                                 class="avatar lazyload">
                            <div class="entry-author__info">
                                <h6 class="entry-author__name">
                                    <a href="#"><?= $post->user()->username ?></a>
                                </h6>
                                <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                    که
                                    لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                    ابزارهای
                                    کاربردی می باشد.</p>
                            </div>

                        </div>

                        <!-- Related Posts -->
                        <section class="section related-posts mt-40 mb-0">
                            <div class="title-wrap title-wrap--line">
                                <h3 class="section-title">مطالب مرتبط</h3>
                            </div>

                            <!-- Slider -->
                            <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                                <?php foreach ($posts as $relatedPost) {?>
                                <article class="entry thumb thumb--size-1">
                                    <div class="entry__img-holder thumb__img-holder"
                                         style="background-image: url('<?= asset($relatedPost->image) ?>');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder">
                                            <h2 class="thumb-entry-title">
                                                <a href="<?= route('home.post', [$relatedPost->id]) ?>"><?= $relatedPost->title ?></a>
                                            </h2>
                                        </div>
                                        <a href="<?= route('home.post', [$relatedPost->id]) ?>" class="thumb-url"></a>
                                    </div>
                                </article>
                                <?php }?>
                            </div> <!-- end slider -->

                        </section> <!-- end related posts -->

                    </article> <!-- end standard post -->

                    <!-- Comments -->
                    <div class="entry-comments">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title"><?= toPersianNum(count($comments)) ?> دیدگاه</h3>
                        </div>
                        <ul class="comment-list">
                            <?php foreach ($comments as $comment) {?>
                            <li class="comment">
                                <div class="comment-body">
                                    <div class="comment-avatar">
                                        <img alt="" src="<?= asset($comment->user()->avatar) ?>">
                                    </div>
                                    <div class="comment-text">
                                        <h6 class="comment-author"><?= $comment->user()->username ?></h6>
                                        <div class="comment-metadata">
                                            <a href="#"
                                               class="comment-date"><?= toPersianNum(formatDate($comment->created_at, '%A, %d %B %Y')) ?></a>
                                        </div>
                                        <p><?= $comment->comment ?></p>
                                        <!-- <a href="#" class="comment-reply">پاسخ</a> -->
                                    </div>
                                </div>
                                <?php
                                $childComments = $comment->child()->get();
                                if (!empty($childComments)) {
                                ?>
                                <ul class="children">
                                    <?php foreach ($childComments as $childComment) {?>
                                    <li class="comment">
                                        <div class="comment-body px-5">
                                            <div class="comment-avatar">
                                                <img alt="" src="<?= asset($childComment->user()->avatar) ?>">
                                            </div>
                                            <div class="comment-text">
                                                <h6 class="comment-author"><?= $childComment->user()->username ?></h6>
                                                <div class="comment-metadata">
                                                    <a href="#"
                                                       class="comment-date"><?= toPersianNum(formatDate($childComment->created_at, '%A, %d %B %Y')) ?></a>
                                                </div>
                                                <p><?= $childComment->comment ?></p>
                                            </div>
                                        </div>
                                    </li> <!-- end reply comment -->
                                    <?php }?>
                                </ul>
                                <?php }?>
                            </li> <!-- end 1-2 comment -->
                            <?php }?>

                        </ul>
                    </div> <!-- end comments -->

                    <!-- Comment Form -->
                    <?php if (\System\Auth\Auth::checkLogin()) {?>
                    <div id="respond" class="comment-respond">
                        <div class="title-wrap">
                            <h5 class="comment-respond__title section-title">دیدگاه شما</h5>
                        </div>
                        <form action="<?= route('home.post.comment', [$post->id]) ?>" method="POST">
                            <p class="comment-form-comment">
                                <label for="comment">دیدگاه</label>
                                <textarea name="comment" id="message" rows="5" required="required"></textarea>
                            </p>

                            <p class="comment-form-submit">
                                <input type="submit" class="btn btn-lg btn-color btn-button" value="ارسال دیدگاه"
                                       id="submit-message">
                            </p>

                        </form>
                    </div>
                    <?php } else {?>
                    <div class="title-wrap">
                        <h5 class="comment-respond__title section-title">برای درج دیدگاه وارد شوید</h5>
                    </div>
                <?php }?>
                <!-- end comment form -->

                </div> <!-- end content box -->
            </div> <!-- end post content -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Widget Popular Posts -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">محبوب ترین مقالات</h4>
                    <ul class="post-list-small">
                        <?php foreach ($mostPopularPost as $post) {?>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="<?= route('home.post', [$post->id]) ?>">
                                            <img data-src="<?= asset($post->image) ?>" src="<?= asset($post->image) ?>"
                                                 alt="" class="post-list-small__img--rounded lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a
                                                href="<?= route('home.post', [$post->id]) ?>"><?= str_limit($post->title, 60) ?></a>
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
                        <?php }?>
                    </ul>
                </aside> <!-- end widget popular posts -->

                <!-- Widget Newsletter -->
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
                </aside> <!-- end widget newsletter -->

                <!-- Widget Ad 300 -->
                <aside class="widget widget_media_image">
                    <a href="#">
                        <img src="<?= asset('img/content/mag-1.jpg') ?>" alt="">
                    </a>
                </aside> <!-- end widget ad 300 -->


            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection

@section('script')
    <script>
        var swiper = new Swiper(".swiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            pagination: {
                el: '.swiper-pagination',
            },


            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endsection
