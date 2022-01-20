@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | منو
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
                        <h4 class="card-title">منو ها</h4>
                        <span><a href="<?= route('admin.menu.create') ?>" class="btn btn-success">ایجاد</a></span>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>منو والد</th>
                                        <th style="min-width: 6rem; text-align: left;">تنظیمات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($menus as $menu) { ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?= $menu->id ?></td>
                                            <td><?= $menu->title ?></td>
                                            <td><?= empty($menu->parent_id) ? '' : $menu->parent()->title ?></td>
                                            <td style="min-width: 6rem; text-align: left;">
                                                <a href="<?= route('admin.menu.edit', [$menu->id]) ?>" class="btn btn-info waves-effect waves-light">ویرایش</a>
                                                <form class="d-inline" action="<?= route('admin.menu.delete', [$menu->id]) ?>" method="post">
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