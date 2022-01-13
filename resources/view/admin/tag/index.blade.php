@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | تگ ها
</title>
@endsection

@section('content')
<div class="content-header row">
</div>

<div class="content-body">

    @include('admin.layouts.message')

    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">تگ ها</h4>
                        <span><a href="<?= route('admin.tag.create') ?>" class="btn btn-success">ایجاد</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th style="min-width: 6rem; text-align: left;">تنظیمات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php /** @var array $tags : sent in controller*/
                                    foreach($tags as $tag) { ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?= $tag->id ?></td>
                                            <td><?= $tag->title ?></td>
                                            <td style="min-width: 6rem; text-align: left;">
                                                <a href="<?= route('admin.tag.edit', [$tag->id]) ?>" class="btn btn-info waves-effect waves-light">ویرایش</a>
                                                <form class="d-inline" action="<?= route('admin.tag.delete', [$tag->id]) ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
</div>
@endsection