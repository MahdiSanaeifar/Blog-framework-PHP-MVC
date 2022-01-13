@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | ویرایش تگ</title>
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
                        <h4 class="card-title">تگ</h4>
                        <span><a href="<?= route('admin.tag.index') ?>" class="btn btn-success">بازگشت</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <form class="row" action="<?= route('admin.tag.update', [$tag->id]) ?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="_method" value="put">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="helperText">نام تگ</label>
                                        <input value="<?= oldOrValue('title', $tag->title) ?>" name="title" type="text" id="helperText" class="form-control <?= errorClass('title') ?>" placeholder="نام ...">
                                        <?= errorText('title') ?>
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
