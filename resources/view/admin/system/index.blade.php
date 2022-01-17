@extends('admin.layouts.app')

@section('head-tag')
<title>ادمین | تنظیمات وبسایت
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
                        <h4 class="card-title">تنظیمات</h4>
                        <a href="<?= route('admin.system.edit', [$section->id]) ?>" class="btn btn-info waves-effect waves-light">ویرایش</a>

                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>بخش</th>
                                        <th>مقدار</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php /** @var array $sections : sent in controller*/
                                    foreach($sections as $section) { ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?= $section->id ?></td>
                                            <td><?= $section->section ?></td>
                                            <td><?= $section->content ?></td>
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