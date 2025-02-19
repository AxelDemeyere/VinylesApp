<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <header>
        <img src="/images/vinyle.png" alt="Logo"/>
        <div class="title">
            <h1>Blog Vinyle de Collection</h1>
        </div>
    </header>
    <nav>
        <a href="/vinyles">Vinyles</a>
        <a href="/about">A propos</a>
    </nav>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</header>
</body>
</html>
