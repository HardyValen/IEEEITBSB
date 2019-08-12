<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="IEEE ITB Student Branch Dashboard Page">
<meta name="author" content="IEEE ITB SB">

<title>@yield('title')</title>

<!-- Custom fonts for this template-->
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{URL::asset('css/sb-admin-2.css')}}" rel="stylesheet">
<link rel="stylesheet" href={{URL::asset('assets/css/dashboard.css')}}>
<link rel="icon" type="image/png" href={{URL::asset("assets/images/LogoIEEE-03.png")}}>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>