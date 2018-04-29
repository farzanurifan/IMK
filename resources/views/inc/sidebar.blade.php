<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{{ asset('images/user.png') }}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            {{-- <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div> --}}
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @include('inc.listsidebar.home')

            @include('inc.listsidebar.staf')

            @include('inc.listsidebar.rekanan')

            @include('inc.listsidebar.barang')

            @include('inc.listsidebar.laporan')

            @include('inc.listsidebar.utilitas')

            @include('inc.listsidebar.admin')
        </ul>
    </div>
    <!-- #Menu -->

</aside>
<!-- #END# Left Sidebar -->
