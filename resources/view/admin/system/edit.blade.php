@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | ویرایش تنظیمات</title>
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
                        <h4 class="card-title">ویرایش تنظیمات</h4>
                        <span><a href="<?= route('admin.system.index') ?>" class="btn btn-success">بازگشت</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <form class="row" action="<?= route("admin.system.update") ?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="_method" value="put">

                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <label for="logo">لوگو</label>
                                        <input name="logo" type="file" id="logo" class="form-control-file <?= errorClass('logo') ?>">
                                        <img src="<?= asset('images/logo.png') ?>" alt="" width="100" class="mt-1">
                                        <?= errorText('logo') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <label for="sidebar-image">بنر سایدبار</label>
                                        <input name="sidebar-image" type="file" id="sidebar-image" class="form-control-file <?= errorClass('sidebar-image') ?>">
                                        <img src="<?= asset('images/sidebar-image.png') ?>" alt="" width="200" class="mt-4">
                                        <?= errorText('sidebar-image') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <label for="center-page-image">بنر وسط صفحه</label>
                                        <input name="center-page-image" type="file" id="center-page-image" class="form-control-file <?= errorClass('center-page-image') ?>">
                                        <img src="<?= asset('images/center-page-image.png') ?>" alt="" width="300" class="mt-4">
                                        <?= errorText('center-page-image') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="facebook">فیسبوک</label>
                                        <input value="<?= oldOrValue('facebook', $section[0]->content) ?>" name="facebook" type="text" id="facebook" class="form-control <?= errorClass('facebook') ?>" placeholder="facebook ...">
                                        <?= errorText('facebook') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="instagram">اینستاگرام</label>
                                        <input value="<?= oldOrValue('instagram', $section[1]->content) ?>" name="instagram" type="text" id="instagram" class="form-control <?= errorClass('instagram') ?>" placeholder="instagram ...">
                                        <?= errorText('instagram') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="pinterest">پینترست</label>
                                        <input value="<?= oldOrValue('pinterest', $section[2]->content) ?>" name="pinterest" type="text" id="pinterest" class="form-control <?= errorClass('pinterest') ?>" placeholder="pinterest ...">
                                        <?= errorText('pinterest') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="twitter">توییتر</label>
                                        <input value="<?= oldOrValue('twitter',$section[3]->content) ?>" name="twitter" type="text" id="twitter" class="form-control <?= errorClass('twitter') ?>" placeholder="twitter ...">
                                        <?= errorText('twitter') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="googleplus">گوگل پلاس</label>
                                        <input value="<?= oldOrValue('googleplus', $section[4]->content) ?>" name="googleplus" type="text" id="googleplus" class="form-control <?= errorClass('googleplus') ?>" placeholder="googleplus ...">
                                        <?= errorText('googleplus') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <button type="submit" class="btn btn-primary">ویرایش</button>
                                    </fieldset>
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
