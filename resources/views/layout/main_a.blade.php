<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Halaman Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon-32x32.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('global/admin/assets/vendor/bootstrap/css') }}/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('global/admin/assets/vendor/bootstrap-icons') }}/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('global/admin/assets/vendor/boxicons/css') }}/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('global/admin/assets/vendor/quill') }}/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('global/admin/assets/vendor/quill') }}/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('global/admin/assets/vendor/remixicon') }}/remixicon.css" rel="stylesheet">
    <link href="{{ asset('global/admin/assets/vendor/simple-datatables') }}/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('global/admin/assets/css') }}/style.css" rel="stylesheet">
</head>
<body>
    @include('layout.header_a')

    @include('layout.sidebar')

    @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ asset('global/admin/assets/vendor/apexcharts') }}/apexcharts.min.js"></script>
    <script src="{{ asset('global/admin/assets/vendor/bootstrap/js') }}/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('global/admin/assets/vendor/chart.js') }}/chart.min.js"></script>
    <script src="{{ asset('global/admin/assets/vendor/echarts') }}/echarts.min.js"></script>
    <script src="{{ asset('global/admin/assets/vendor/quill') }}/quill.min.js"></script>
    <script src="{{ asset('global/admin/assets/vendor/simple-datatables') }}/simple-datatables.js"></script>
    <script src="{{ asset('global/admin/assets/vendor/tinymce') }}/tinymce.min.js"></script>
    <script src="{{ asset('global/admin/assets/vendor/php-email-form') }}/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('global/admin/assets/js') }}/main.js"></script>
</body>
</html>
