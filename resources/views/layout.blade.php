<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/layout.js'])
    <title>@yield('title', 'Dashboard')</title>
</head>

<body class="bg-gray-100 dark:bg-boxdark-2 text-black dark:text-white h-full" id="container">
    <div class="flex">
        <div class="w-1/12">
            <x-bars.side.bar />
        </div>
        <div class="w-11/12">
            <x-bars.top.bar />
            <div class="flex" id="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
