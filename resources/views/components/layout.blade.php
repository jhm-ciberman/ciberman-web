@props(['title' => 'Ciberman'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-900">
    <div class="border-b-8 border-cyan-600 bg-stone-100 p-8">
        <div class="container mx-auto flex px-4">
            <div class="shrink-0">
                <div class="text-center font-display text-3xl text-stone-900 md:text-left">Ciberman</div>
                <span class="text-md text-stone-600">A guy making <span class="font-medium">games</span> & <span class="font-medium">stuff</span></span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-6">
        {{ $slot }}
    </div>
</body>
</html>
