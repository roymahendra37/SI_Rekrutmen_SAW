<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rekrutmen | {{ $title }}</title>
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/plugins/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('style/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <x-navbar></x-navbar>
        <div id="page-wrapper">
            <div class="container-fluid" style="height: 100vh">
                <x-header>{{ $title }}</x-header>
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="{{ asset('style/js/jquery.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/morris/morris-data.js') }}"></script>
</body>
</html>
