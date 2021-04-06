<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!--styles-->

    <!--Fonts-->
</head>
<body class="app sidebar-mini rtl">

    <main class="app-content" id="app">
        @yield('content')
    </main>
    
</body>
</html>
