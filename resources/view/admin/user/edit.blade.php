@extends('admin.layouts.app')



@section('head-tag')
    <title>کاربران / ویرایش</title>
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
                            <span><a href="<?= route("admin.user.index") ?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="<?= route("admin.user.update", ['id' => $user->id]) ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="put">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="username">نام</label>
                                            <input name="username" type="text" id="username"  value="<?= oldOrValue('username', $user->username) ?>" class="form-control <?= errorClass('username') ?>">
                                            <?= errorText('username') ?>
                                        </fieldset>
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="avatar">تصویر</label>
                                            <input name="avatar" type="file" id="avatar" class="form-control-file <?= errorClass('avatar') ?>">
                                            <?= errorText('avatar') ?>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <section class="form-group">
                                            <button type="submit" class="btn btn-primary">ویرایش</button>
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
