<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.head')
</head>

<body class="theme-blue">
    @include('inc.pageloader')

    @include('inc.topbar')

    <section>
        @include('inc.sidebar')
    </section>

    <section class="content">
        <div id="app">
            <div class="col-md-12">
                @include('inc.messages')
            </div>
            @yield('content')
        </div>
    </section>

    @include('inc.script')
</body>
</html>
