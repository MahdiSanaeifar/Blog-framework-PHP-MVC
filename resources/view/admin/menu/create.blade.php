@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | ساخت منو</title>
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
                        <h4 class="card-title">منو ها</h4>
                        <span><a href="<?= route('admin.menu.index') ?>" class="btn btn-success">بازگشت</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <form class="row" action="<?= route('admin.menu.store') ?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="helperText">نام منو</label>
                                        <input value="<?= old('title') ?>" name="title" type="text" id="helperText" class="form-control <?= errorClass('title') ?>" placeholder="نام ...">
                                        <?= errorText('title') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="url">لینک منو</label>
                                        <input value="<?= old('url') ?>" name="url" type="text" id="url" class="form-control <?= errorClass('url') ?>" placeholder="url ...">
                                        <?= errorText('url') ?>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <div class="form-group">
                                            <label for="helperText">منو والد</label>
                                            <select name="parent_id" class="select2 form-control <?= errorClass('parent_id') ?>">
                                                <option value="">درصورت وجود والد انتخاب شود</option>
                                                <?php foreach($menus as $menu){ ?>
                                                <option value="<?= $menu->id ?>" <?= old('parent_id') == $menu->id ? 'selected' : '' ?>><?= $menu->title ?></option>
                                                    <?php } ?>
                                            </select>
                                            <?= errorText('parent_id') ?>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <button type="submit" class="btn btn-primary">ایجاد</button>
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