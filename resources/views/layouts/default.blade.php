<!doctype html>
<html>

<head>
    <title>
        @yield('page_title') | Education
    </title>
    @include('includes.head')
</head>

<body>
    <div class="app-container">
        @include('includes.header')

        <main id="main">
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
</body>

</html>
