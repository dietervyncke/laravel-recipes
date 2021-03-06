<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css')  }}">
    @livewireStyles
</head>
<body>

    <div id="wrapper">
        <header>
            <h1 class="title">Recipe library</h1>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            &copy; {{ date('Y') }} - Dieter Vyncke
        </footer>
    </div>

    @livewireScripts
</body>
</html>