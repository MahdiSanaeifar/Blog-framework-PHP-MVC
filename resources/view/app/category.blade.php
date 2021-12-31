@extends('app.layouts.app')

@section('head-tag')
    <title>دسته بندی | <?=$category->name?></title>
@endsection

@section('content')

    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="<?=route('home.index')?>" class="breadcrumbs__url">خانه</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="<?=route('home.index')?>" class="breadcrumbs__url">اخبار</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                <?=$category->name?>
            </li>
        </ul>
    </div>


    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">
                <h1 class="page-title"><?=$category->name?></h1>

                <div class="row card-row">

                    <?php foreach ($posts as $post) {?>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="<?=route('home.post', [$post->id])?>">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="<?=asset($post->image)?>"
                                            src="<?=asset($post->image)?>" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                                <a href="#"
                                    class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">
                                    <?=$post->category()->name?>
                                </a>
                            </div>

                            <div class="entry__body card__body">
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
                                    <p style="text-align: justify"><?=str_limit($post->summary, 150)?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php }?>
                </div>

                <!-- Pagination -->
                <?=paginateView($postCount, 2)?>

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
                        <img src="<?=asset('img/content/mag-1.jpg')?>" alt="">
                    </a>
                </aside> <!-- end widget ad 300 -->

            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection
