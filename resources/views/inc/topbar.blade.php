<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="/">SILAP</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">                
            <ul class="nav navbar-nav navbar-right">
                {{-- <li><a id="date"></a></li> --}}
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">account_circle</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="#">
                                <i class="material-icons">settings_applications</i>
                                Pegaturan
                            </a>
                        </li>
                        <!-- Authentication Links -->
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="material-icons">call_made</i>
                                Keluar
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- #Top Bar -->
