<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Login')</title>
</head>

<body class="bg-gray-100 dark:bg-boxdark-2 text-black dark:text-white h-screen" id="container">
    <div class="h-full w-full flex items-center justify-center" id="content">
        @yield('content')
    </div>
</body>

</html>
