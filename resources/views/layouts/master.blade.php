<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <style>body { padding-top: 40px; }</style>
</head>
<body>
    <title>Carousel</title>
    <div id="app" >

        @yield('content')
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
