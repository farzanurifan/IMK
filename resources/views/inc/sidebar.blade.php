<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{{ asset('images/user.png') }}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if($indicator == 'student')
                <li class="active">
            @else
                <li>
            @endif
                <a href="/student">
                    <i class="material-icons">home</i>
                    <span>Student Masterlist</span>
                </a>
            </li>
            @if($indicator == 'classes')
                <li class="active">
            @else
                <li>
            @endif
                <a href="/classes">
                    <i class="material-icons">home</i>
                    <span>All Classes</span>
                </a>
            </li>
            @if($indicator == 'enroll')
                <li class="active">
            @else
                <li>
            @endif
                <a href="/enroll">
                    <i class="material-icons">home</i>
                    <span>Enroll Student</span>
                </a>
            </li>
            @if($indicator == 'grades')
                <li class="active">
            @else
                <li>
            @endif
                <a href="/grades">
                    <i class="material-icons">home</i>
                    <span>Grades</span>
                </a>
            </li>
            @if($indicator == 'registrar')
                <li class="active">
            @else
                <li>
            @endif
                <a href="/registrar">
                    <i class="material-icons">home</i>
                    <span>Registrar Setings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->

</aside>
<!-- #END# Left Sidebar -->
