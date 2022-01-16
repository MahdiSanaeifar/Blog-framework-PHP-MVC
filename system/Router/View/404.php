<!DOCTYPE html>
<html lang="en">

<head>
    <title>topkalamag | 404</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="<?=asset('css/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=asset('css/font-icons.css')?>" />
    <link rel="stylesheet" href="<?=asset('css/style.css')?>" />


    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="<?=asset('js/lazysizes.min.js')?>"></script>

</head>

<body class="style-default style-rounded error404">

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>


    <main class="main oh" id="main">
        <div class="main-container container pt-80 pb-80" id="main-container">
            <!-- post content -->
            <div class="blog__content mb-72">
                <div class="container text-center">
                    <h1 class="page-404-number">404</h1>
                    <h2>صفحه یافت نشد</h2>
                    <p>نگران نباشید.جستجو کنید...</p>

                    <div class="row justify-content-center mt-40">

                        <div class="col-md-6">
                            <!-- Search form -->
                            <form role="search" action="<?= route('home.search') ?>" method="GET" class="search-form relative">
                                <input type="search" class="widget-search-input mb-0" placeholder="جستجو مقاله" name="search">
                                <button type="submit" class="widget-search-button btn btn-color"><i class="ui-search widget-search-icon"></i></button>
                            </form>
                            <a href="<?=route('home.index')?>" class="btn btn-color m-5 p-2">صفحه اصلی</a>
                        </div>

                    </div> <!-- end row -->

                </div> <!-- end container -->
            </div> <!-- end post content -->
        </div> <!-- end main container -->


        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main> <!-- end main-wrapper -->

</body>

</html>
