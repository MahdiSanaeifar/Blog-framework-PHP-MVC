<main class="main oh" id="main">

    <!-- Sidenav -->
    <header class="sidenav" id="sidenav">

        <!-- close -->
        <div class="sidenav__close">
            <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
                <i class="ui-close sidenav__close-icon"></i>
            </button>
        </div>

        <!-- Nav -->
        <nav class="sidenav__menu-container">
            <ul class="sidenav__menu" role="menubar">
                <li>
                    <a href="<?=route('home.index')?>" class="sidenav__menu-url">صفحه اصلی</a>
                </li>
                <li>
                    <a href="<?=route('home.all.post')?>" class="sidenav__menu-url">تمامی اخبار</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">دسته ها</a>
                    <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i
                                class="ui-arrow-down"></i></button>
                    <ul class="sidenav__menu-dropdown">
                        <li><a href="<?=route('home.category', [2])?>" class="sidenav__menu-url">بین الملل</a></li>
                        <li><a href="<?=route('home.category', [3])?>" class="sidenav__menu-url">ورزشی</a></li>
                        <li><a href="<?=route('home.category', [4])?>" class="sidenav__menu-url">سیاسی</a></li>
                        <li><a href="<?=route('home.category', [6])?>" class="sidenav__menu-url">فناوری</a></li>
                        <li><a href="<?=route('home.category', [7])?>" class="sidenav__menu-url">خودرو</a></li>
                    </ul>
                </li>

                <!-- Categories -->
                <li>
                    <a href="<?=route('home.about')?>" class="sidenav__menu-url">درباره ما</a>
                </li>
                <li>
                    <a href="<?=route('home.contact')?>" class="sidenav__menu-url">تماس با ما</a>
                </li>

                <?php if (\System\Auth\Auth::checkLogin()) {?>
                <?php if (\System\Auth\Auth::user()->user_type == 'admin') {?>
                <li><a href="<?=route('admin.index')?>" class="sidenav__menu-url">پنل ادمین</a></li>
                <?php }?>
                <li><a href="<?=route('home.index')?>"
                       class="sidenav__menu-url"><?=\System\Auth\Auth::user()->username?></a></li>
                <li><a href="<?=route('auth.logout')?>" class="sidenav__menu-url">خروج</a></li>
                <?php } else {?>
                <li><a href="<?=route('auth.login.view')?>" class="sidenav__menu-url">ورود</a></li>
                <li><a href="<?=route('auth.register.view')?>" class="sidenav__menu-url">ثبت نام</a></li>
                <?php }?>

            </ul>
        </nav>

        <div class="socials sidenav__socials">
            <a class="social social-facebook"
               href="<?= App\System::where('section', '=', 'facebook')->get()[0]->content ?>" target="_blank"
               aria-label="facebook">
                <i class="ui-facebook"></i>
            </a>
            <a class="social social-twitter"
               href="<?= App\System::where('section', '=', 'twitter')->get()[0]->content ?>" target="_blank"
               aria-label="twitter">
                <i class="ui-twitter"></i>
            </a>
            <a class="social social-google-plus"
               href="<?= App\System::where('section', '=', 'googleplus')->get()[0]->content ?>" target="_blank"
               aria-label="google">
                <i class="ui-google"></i>
            </a>
            <a class="social social-instagram"
               href="<?= App\System::where('section', '=', 'instagram')->get()[0]->content ?>" target="_blank"
               aria-label="instagram">
                <i class="ui-instagram"></i>
            </a>
        </div>
    </header> <!-- end sidenav -->

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row">

                <!-- Top menu -->
                <div class="col-lg-6">
                    <ul class="top-menu">
                        <li><a href="<?=route('home.about')?>">درباره ما</a></li>
                        <li><a href="<?=route('home.contact')?>">تماس با ما</a></li>

                        <?php if (\System\Auth\Auth::checkLogin()) {?>
                        <?php if (\System\Auth\Auth::user()->user_type == 'admin') {?>
                        <li><a href="<?=route('admin.index')?>">پنل ادمین</a></li>
                        <?php }?>
                        <li><a href="<?=route('home.index')?>"><?=\System\Auth\Auth::user()->username?></a></li>
                        <li><a href="<?=route('auth.logout')?>">خروج</a></li>
                        <?php } else {?>
                        <li><a href="<?=route('auth.login.view')?>">ورود</a></li>
                        <li><a href="<?=route('auth.register.view')?>">ثبت نام</a></li>
                        <?php }?>

                    </ul>
                </div>

                <!-- Socials -->
                <div class="col-lg-6">
                    <div class="socials nav__socials socials--nobase socials--white justify-content-start">
                        <a class="social social-facebook"
                           href="<?= App\System::where('section', '=', 'facebook')->get()[0]->content ?>"
                           target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter"
                           href="<?= App\System::where('section', '=', 'twitter')->get()[0]->content ?>" target="_blank"
                           aria-label="twitter">
                            <i class="ui-twitter"></i>
                        </a>
                        <a class="social social-google-plus"
                           href="<?= App\System::where('section', '=', 'googleplus')->get()[0]->content ?>"
                           target="_blank" aria-label="google">
                            <i class="ui-google"></i>
                        </a>
                        <a class="social social-instagram"
                           href="<?= App\System::where('section', '=', 'instagram')->get()[0]->content ?>"
                           target="_blank" aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end top bar -->

    <!-- Navigation -->
    <header class="nav">

        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">

                    <!-- Side Menu Button -->
                    <button class="nav-icon-toggle d-xl-none d-lg-none" id="nav-icon-toggle"
                            aria-label="Open side menu">
                        <span class="nav-icon-toggle__box">
                            <span class="nav-icon-toggle__inner"></span>
                        </span>
                    </button>

                    <!-- Logo -->
                    <a href="<?=route('home.index')?>" class="logo">
                        <img class="logo__img" src="<?=asset('images/logo.png')?>" alt="logo">
                    </a>

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">

                            <li class="<?=isActive(route('home.index'), false)?>">
                                <a href="<?=route('home.index')?>">صفحه اصلی</a>
                            </li>

                            <li class="<?=isActive(route('home.all.post'), true)?>">
                                <a href="<?=route('home.all.post')?>">تمامی اخبار</a>
                            </li>

                            <li class="<?=isActive(route('home.category', [2]), true)?>">
                                <a href="<?=route('home.category', [2])?>">بین الملل</a>
                            </li>

                            <li class="<?=isActive(route('home.category', [3]), true)?>">
                                <a href="<?=route('home.category', [3])?>">ورزشی</a>
                            </li>

                            <li class="<?=isActive(route('home.category', [4]), true)?>">
                                <a href="<?=route('home.category', [4])?>">سیاسی</a>
                            </li>

                            <li class="<?=isActive(route('home.category', [6]), true)?>">
                                <a href="<?=route('home.category', [6])?>">فناوری</a>
                            </li>

                            <li class="<?=isActive(route('home.category', [7]), true)?>">
                                <a href="<?=route('home.category', [7])?>">خودرو</a>
                            </li>


                        </ul> <!-- end menu -->
                    </nav> <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right">

                        <!-- Search -->
                        <div class="nav__right-item nav__search">
                            <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                <i class="ui-search nav__search-trigger-icon"></i>
                            </a>
                            <div class="nav__search-box" id="nav__search-box">
                                <form class="nav__search-form" action="<?=route('home.search')?>" method="GET">
                                    <input type="text" placeholder="جستجو مقالات" class="nav__search-input"
                                           name="search">
                                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                        <i class="ui-search nav__search-icon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div> <!-- end nav right -->

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->
