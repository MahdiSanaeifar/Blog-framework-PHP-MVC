@extends('admin.layouts.app')

@section('head-tag')
    <title>ادمین / ویجت ها
    </title>
    <link href="<?= asset('css/select2.min.css') ?>" rel="stylesheet" />
@endsection

@section('content')

    <div class="content-header row">
    </div>

    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ویجت های صفحه اصلی</h4>
                            <span><a href="<?= route('admin.index') ?>" class="btn btn-success disabled">ایجاد</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div>
                                    <div class="row">
                                        <h4 class="card-title col-2">ویجت ۱</h4>
                                        <button class="btn btn-primary col-2 h-25 btn-sm p-1 my-1" id="btn1">نمایش تصویر
                                            ویجت</button>
                                        <img src="<?= asset('images/widget/widget1.png') ?>" alt="" class="w-100 col-7"
                                            id="widget1" style="display: none;">
                                    </div>

                                    <form class="row" action="<?= route('admin.widget.update') ?>" method="post"
                                        enctype="multipart/form-data" id="widget1Form">
                                        <input type="hidden" name="_method" value="put">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۱</label>
                                                <select name="w-1-1"
                                                    class="select2 form-control <?= errorClass('w-1-1') ?>">
                                                    <option value="">موردی انتخاب نشده</option>
                                                    <?php foreach ($posts as $post) {?>
                                                    <option value="<?= $post->id ?>"
                                                        <?= oldOrValue('w-1-1', $widget1[0]->post_id) == $post->id ? 'selected' : '' ?>>
                                                        <?= $post->title ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-1-1') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۲</label>
                                                <select name="w-1-2"
                                                    class="select2 form-control <?= errorClass('w-1-2') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($posts as $post) {?>
                                                    <option value="<?= $post->id ?>"
                                                        <?= oldOrValue('w-1-2', $widget1[1]->post_id) == $post->id ? 'selected' : '' ?>>
                                                        <?= $post->title ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-1-2') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۳</label>
                                                <select name="w-1-3"
                                                    class="select2 form-control <?= errorClass('w-1-3') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($posts as $post) {?>
                                                    <option value="<?= $post->id ?>"
                                                        <?= oldOrValue('w-1-3', $widget1[2]->post_id) == $post->id ? 'selected' : '' ?>>
                                                        <?= $post->title ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-1-3') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۴</label>
                                                <select name="w-1-4"
                                                    class="select2 form-control <?= errorClass('w-1-4') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($posts as $post) {?>
                                                    <option value="<?= $post->id ?>"
                                                        <?= oldOrValue('w-1-4', $widget1[3]->post_id) == $post->id ? 'selected' : '' ?>>
                                                        <?= $post->title ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-1-4') ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div>
                                    <div class="row">
                                        <h4 class="card-title col-2">ویجت ۲</h4>
                                        <button class="btn btn-primary col-2 h-25 btn-sm p-1 my-1" id="btn2">نمایش تصویر
                                            ویجت</button>
                                        <img src="<?= asset('images/widget/widget2.png') ?>" alt="" class="w-100 col-7"
                                            id="widget2" style="display: none;">
                                    </div>
                                    <form class="row" action="<?= route('admin.widget.update') ?>" method="post"
                                        enctype="multipart/form-data" id="widget2Form">
                                        <input type="hidden" name="_method" value="put">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۱</label>
                                                <select name="w-2-1"
                                                    class="select2 form-control <?= errorClass('w-2-1') ?>">
                                                    <option value="">موردی انتخاب نشده</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-2-1', $widget2[0]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-2-1') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۲</label>
                                                <select name="w-2-2"
                                                    class="select2 form-control <?= errorClass('w-2-2') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-2-2', $widget2[1]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-2-2') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۳</label>
                                                <select name="w-2-3"
                                                    class="select2 form-control <?= errorClass('w-2-3') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-2-3', $widget2[2]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-2-3') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۴</label>
                                                <select name="w-2-4"
                                                    class="select2 form-control <?= errorClass('w-2-4') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-2-4', $widget2[3]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-2-4') ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div class="row">
                                    <h4 class="card-title col-2">ویجت ۳</h4>
                                    <button class="btn btn-primary col-2 h-25 btn-sm p-1 my-1" id="btn3">نمایش تصویر
                                        ویجت</button>
                                    <img src="<?= asset('images/widget/widget3.png') ?>" alt="" class="w-100 col-7"
                                        id="widget3" style="display: none;">
                                    <form class="row" action="<?= route('admin.widget.update') ?>" method="post"
                                        enctype="multipart/form-data" id="widget3Form">
                                        <input type="hidden" name="_method" value="put">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۱</label>
                                                <select name="w-3-1"
                                                    class="select2 form-control <?= errorClass('w-3-1') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-3-1', $widget3[0]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-3-1') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۲</label>
                                                <select name="w-3-2"
                                                    class="select2 form-control <?= errorClass('w-3-2') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-3-2', $widget3[1]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-3-2') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۳</label>
                                                <select name="w-3-3"
                                                    class="select2 form-control <?= errorClass('w-3-3') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-3-3', $widget3[2]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-3-3') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="helperText">شماره ۴</label>
                                                <select name="w-3-4"
                                                    class="select2 form-control <?= errorClass('w-3-4') ?>">
                                                    <option value="">درصورت وجود والد انتخاب شود</option>
                                                    <?php foreach ($categories as $category) {?>
                                                    <option value="<?= $category->id ?>"
                                                        <?= oldOrValue('w-3-4', $widget3[3]->cat_id) == $category->id ? 'selected' : '' ?>>
                                                        <?= $category->name ?></option>
                                                    <?php }?>
                                                </select>
                                                <?= errorText('w-3-4') ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')

    <script src="<?= asset('js/select2.min.js') ?>"></script>

    <script>
        $("#btn1").click(function() {
            $('#widget1').toggle("slide");
        });
        $("#btn2").click(function() {
            $('#widget2').toggle("slide");
        });
        $("#btn3").click(function() {
            $('#widget3').toggle("slide");
        });

        $(document).ready(function() {
            $('.select2').select2();
        });

        $("#widget1Form select").change(function() {
            $('#widget1Form').submit();
        });
        $("#widget2Form select").change(function() {
            $('#widget2Form').submit();
        });
        $("#widget3Form select").change(function() {
            $('#widget3Form').submit();
        });
    </script>
@endsection
