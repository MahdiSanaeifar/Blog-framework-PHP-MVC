@extends('admin.layouts.app')

@section('head-tag')
<title>Admin / Post</title>
<link href="<?=asset('css/select2.min.css')?>" rel="stylesheet" />
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
                            <h4 class="card-title">پست <?=error('image')?></h4>
                            <span><a href="<?=route("admin.contact.index")?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="" method="post" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <section class="form-group">
                                            <label for="body">پیام</label>
                                            <textarea class="form-control <?=errorClass('message')?>" id="message" rows="5" name="message" disabled><?=oldOrValue('message', $message->message)?></textarea>
                                            <?=errorText('message')?>
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
