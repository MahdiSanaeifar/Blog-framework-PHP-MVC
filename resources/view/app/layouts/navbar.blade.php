<div id="wrapper" class="wrapper">
    <!-- Header Area Start Here -->
    <header>
        <div id="header-layout1" class="header-style1">
            <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="logo-area">
                                <a href="">
                                    <img src="<?=asset('img/logo.png')?>" alt="logo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 position-static min-height-none">
                            <div class="ne-main-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="<?= isActive(route('home.index'), false) ?>">
                                            <a href="<?= route('home.index') ?>">خانه</a>
                                        </li>
                                        <li>
                                            <a href="#">صفحات</a>
                                            <ul class="ne-dropdown-menu">
                                                <li>
                                                    <a href="author-post.html">صفحه مطالب نویسنده</a>
                                                </li>
                                                <li>
                                                    <a href="archive.html">صفحه بایگانی</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="<?= isActive(route('home.about')) ?>">
                                            <a href="<?= route('home.about') ?>">درباره ما</a>
                                        </li>
                                        <?php if(\System\Auth\Auth::checkLogin()) { ?>
                                        <?php if(\System\Auth\Auth::user()->user_type == 'admin') { ?>
                                        <li>
                                            <a href="<?= route('admin.index') ?>">پنل ادمین</a>
                                        </li>
                                        <?php }else { ?>
                                        <li>
                                            <a href=""><?= \System\Auth\Auth::user()->username ?></a>
                                        </li>
                                        <?php } ?>
                                        <li>
                                            <a href="<?= route('auth.logout') ?>">خروج</a>
                                        </li>
                                        <?php } else {?>
                                        <li>
                                            <a href="<?= route('auth.login') ?>">ورود</a>
                                        </li>
                                        <li>
                                            <a href="<?= route('auth.register') ?>">عضویت</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-12 text-right position-static">
                            <div class="header-action-item">
                                <ul>
                                    <li>
                                        <form id="top-search-form" class="header-search-light">
                                            <input type="text" class="search-input" placeholder="جستجو ..."
                                                required="" style="display: none;">
                                            <button class="search-button">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->
