<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <title>Làm quen với Blade</title>
</head>
<body>
    @include('Layout.header')
    <div id="content">
    <h4>Dang Tuan Huy</h4>
    @yield('Noidung')
    </div>
    @include('Layout.footer')
</body>
</html>