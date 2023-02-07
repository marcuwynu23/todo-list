<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Application - @yield('page-title')</title>
    @include('components.deps')
</head>

<body>
    @include('components.header')
    <main>
        <div class="d-flex justify-content-center m-4 ">
            <div class="container card mb-3 shadow-sm border-0">
                @yield('content')
            </div>
        </div>
    </main>
    @include('components.footer')
</body>

</html>
