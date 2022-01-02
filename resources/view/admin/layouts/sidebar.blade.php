
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">املاک</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" navigation-header"><span>لینک ها</span></li>

                <li class=" nav-item <?= isActive(route('admin.index'), false) ?>"><a href="<?= route('admin.index') ?>"><i class="fa fa-home"></i>خانه</a></li>

                <li class=" nav-item <?= isActive(route('admin.category.index')) ?>"><a href="<?= route('admin.category.index') ?>"><i class="fa fa-list"></i>دسته بندی</a></li>

                <li class=" nav-item <?= isActive(route('admin.post.index')) ?>"><a href="<?= route('admin.post.index') ?>"><i class="fa fa-newspaper-o"></i>اخبار</a></li>

                <li class=" nav-item <?= isActive(route("admin.comment.index")) ?>"><a href="<?= route("admin.comment.index") ?>"><i class="fa fa-commenting"></i>نظرات</a></li>
                
                <li class=" nav-item <?= isActive(route("admin.user.index")) ?>"><a href="<?= route("admin.user.index") ?>"><i class="fa fa-user-times"></i>کاربران</a></li>

                <li class=" nav-item <?= isActive(route("admin.subscriber.index")) ?>"><a href="<?= route("admin.subscriber.index") ?>"><i class="fa fa-user-plus"></i>دنبال کنندگان</a></li>

                <li class=" nav-item <?= isActive(route("admin.widget.index")) ?>"><a href="<?= route("admin.widget.index") ?>"><i class="fa fa-list-alt"></i>ویجت ها</a></li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->