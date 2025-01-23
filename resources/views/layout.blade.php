<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
</head>

<body class="bg-gray-100 dark:bg-boxdark-2 text-black dark:text-white h-full">
    <div class="flex flex-row h-full">
        <div class="w-1/12">
            <x-bars.side.bar />
        </div>
        <div class="w-11/12">
            <div>
                <x-bars.top.bar />
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>
