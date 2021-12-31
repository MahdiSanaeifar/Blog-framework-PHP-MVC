@extends('admin.layouts.app')
@section('head-tag')
    <title>ادمین | ساخت خبر جدید</title>
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
                            <h4 class="card-title">پست</h4>
                            <span><a href="<?= route('admin.post.index') ?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <form class="row" action="<?= route('admin.post.store') ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="title">عنوان</label>
                                            <input value="<?= old('title') ?>" name="title" type="text" id="title"
                                                class="form-control <?= errorClass('title') ?>" placeholder="نام ...">
                                            <?= errorText('title') ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="published_at">تاریخ انتشار</label>
                                            <input value="<?= empty(old('published_at')) ? '' : old('published_at') ?>"
                                                name="published_at" type="date" id="published_at"
                                                class="form-control <?= errorClass('published_at') ?>">
                                            <?= errorText('published_at') ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="cat_id">دسته</label>
                                                <select name="cat_id"
                                                    class="select2 form-control <?= errorClass('cat_id') ?>">
                                                    <?php foreach($categories as $categorySelect) {?>
                                                    <option value="<?= $categorySelect->id ?>"
                                                        <?= !empty(old('cat_id')) && $categorySelect->id === old('cat_id') ? 'selected' : '' ?>>
                                                        <?= $categorySelect->name ?>
                                                    </option>
                                                    <?php  } ?>
                                                </select>
                                                <?= errorText('cat_id') ?>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="summary">توضیحات</label>
                                            <input value="<?= empty(old('summary')) ? '' : old('summary') ?>" name="summary"
                                                type="text" id="summary" class="form-control <?= errorClass('summary') ?>">
                                            <?= errorText('summary') ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="image">تصویر</label>
                                            <input name="image" type="file" id="image"
                                                class="form-control-file <?= errorClass('image') ?>">
                                            <?= errorText('image') ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <section class="form-group">
                                            <label for="body">متن</label>
                                            <textarea class="form-control <?= errorClass('body') ?>" id="body" rows="5"
                                                name="body" placeholder="متن ...">
                                     <?= old('body') ?>
                                  </textarea>
                                            <?= errorText('body') ?>
                                        </section>
                                    </div>
                                    <div class="col-md-6">
                                        <section class="form-group">
                                            <button type="submit" class="btn btn-primary">ایجاد</button>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="<?= asset('ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= asset('js/select2.min.js') ?>"></script>

    <script type="text/javascript">
        CKEDITOR.replace('body');
        $('.select2').select2();
    </script>
@endsection
