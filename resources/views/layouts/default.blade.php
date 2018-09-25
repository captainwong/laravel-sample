<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample') - 第二次学习 - 真机实战</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    
    <div class="container">
        @yield('content')
        @include('layouts._footer')
    </div>
</body>
</html>