<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','aprendible')</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Custom Login</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class= "container" >
    <hr>
    @if (session()->has('flash'))
        <div class="alert alert-info">{{ session('flash') }}</div>

    @endif
        @yield ('content')
    </div>
    
</body>
</html>