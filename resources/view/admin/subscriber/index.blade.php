@extends('admin.layouts.app')



@section('head-tag')
<title>ادمین / دنبال کنندگان
</title>
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
                            <h4 class="card-title">دنبال کنندگان</h4>
                            <span><a href="<?= route("admin.index") ?>" class="btn btn-success disabled">ایجاد</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ایمیل</th>
                                            <th>کاربر</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($subscribers as $subscriber) { ?>
                                        <tr>
                                            <td><?= $subscriber->id ?></td>
                                            <td><?= $subscriber->email ?></td>
                                            <td><?= $subscriber->user()->username ?></td>
                                            <td>
                                                <form class="d-inline" action="<?= route('admin.subscriber.delete', [$subscriber->id]) ?>" method="post">
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