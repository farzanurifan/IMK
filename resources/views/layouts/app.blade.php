<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.head')
</head>

<body class="theme-{{ Auth::user()->warna }}">
    @include('inc.pageloader')

    @include('inc.topbar')

    <section>
        @include('inc.sidebar')
    </section>

    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>

    <!-- @include('inc.modal') -->
    
    @include('inc.script')
    
    @include('inc.messages')
</body>
</html>
