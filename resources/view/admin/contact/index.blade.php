@extends('admin.layouts.app')



@section('head-tag')
<title>ادمین / پیام ها
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
                            <h4 class="card-title">پیام های دریافت شده</h4>
                            <span><a href="<?= route("admin.index") ?>" class="btn btn-success disabled">ایجاد</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام</th>
                                            <th>ایمیل</th>
                                            <th>موضوع</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($messages as $message) { ?>
                                        <tr>
                                            <td><?= $message->id ?></td>
                                            <td><?= $message->name ?></td>
                                            <td><?= $message->email ?></td>
                                            <td><?= $message->subject ?></td>
                                            <td>
                                                <a href="<?= route('admin.contact.edit', [$message->id]) ?>" class="btn btn-info waves-effect waves-light">مشاهده</a>
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