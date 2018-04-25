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
            <li class="active">
                <a href="/student">
                    <i class="material-icons">home</i>
                    <span>Student Masterlist</span>
                </a>
            </li>
            <li class="inactive">
                <a href="/home">
                    <i class="material-icons">home</i>
                    <span>All Classes</span>
                </a>
            </li>
            <li class="inactive">
                <a href="/home">
                    <i class="material-icons">home</i>
                    <span>Enroll Student</span>
                </a>
            </li>
            <li class="inactive">
                <a href="/home">
                    <i class="material-icons">home</i>
                    <span>Grades</span>
                </a>
            </li>
            <li class="inactive">
                <a href="/home">
                    <i class="material-icons">home</i>
                    <span>Registrar Setings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->

</aside>
<!-- #END# Left Sidebar -->
