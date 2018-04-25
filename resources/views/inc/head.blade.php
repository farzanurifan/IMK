<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Favicon-->
<link rel="icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
{!! Html::style('/plugins/bootstrap/css/bootstrap.css') !!}

<!-- Waves Effect Css -->
{!! Html::style('/plugins/node-waves/waves.css') !!}

<!-- Animation Css -->
{!! Html::style('/plugins/animate-css/animate.css') !!}

<!-- Custom Css -->
{!! Html::style('/css/style.css') !!}

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
{!! Html::style('/css/themes/all-themes.css') !!}

<!-- JQuery DataTable Css -->
{!! Html::style('/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

<!-- Sweet Alert Css -->
{!! Html::style('/plugins/sweetalert/sweetalert.css') !!}

<!-- Bootstrap Select Css -->
{!! Html::style('/plugins/bootstrap-select/css/bootstrap-select.css') !!}
