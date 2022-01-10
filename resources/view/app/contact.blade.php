@extends('app.layouts.app')
@section('head-tag')
    <title>تماس با ما</title>
@endsection
@section('content')

    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="index.html" class="breadcrumbs__url">خانه</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                تماس با ما
            </li>
        </ul>
    </div>

    <div class="main-container container" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <h1 class="page-title">تماس با ما</h1>

            <!-- Google Map -->
            <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h4>با ما تماس بگیرید</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <ul class="contact-items">
                        <li class="contact-item">
                            <address>خراسان شمالی - بجنورد</address>
                        </li>
                        <li class="contact-item"><a href="#">۰۵۸-۳۲۲۲۲۲۲۲</a></li>
                        <li class="contact-item"><a href="mailto:topkala@gmail.com">topkalasupport@gmail.com</a></li>
                    </ul>

                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-30 mb-30 row" method="POST" action="<?=route('home.contact.message')?>">
                        <div class="contact-name col-4">
                            <label for="name">نام <abbr title="required" class="required">*</abbr></label>
                            <input name="name" id="name" type="text" value="<?= old('name') ?>">
                            <?= errorText('name') ?>
                        </div>
                        <div class="contact-email col-4">
                            <label for="email">ایمیل <abbr title="required" class="required">*</abbr></label>
                            <input name="email" id="email" type="email" value="<?= old('email') ?>">
                            <?= errorText('email') ?>
                        </div>
                        <div class="contact-subject col-4">
                            <label for="subject">موضوع</label>
                            <input name="subject" id="subject" type="text" value="<?= old('subject') ?>">
                            <?= errorText('subject') ?>
                        </div>
                        <div class="contact-message col-12">
                            <label for="message">پیام <abbr title="required" class="required">*</abbr></label>
                            <textarea id="message" name="message" rows="7" required="required"><?= old('message') ?></textarea>
                            <?= errorText('message') ?>
                        </div>

                        <button type="submit" class="btn btn-lg btn-color btn-button">فرستادن</button>
                    </form>

                </div>
            </div>
        </div> <!-- end post content -->
    </div> <!-- end main container -->

@endsection
