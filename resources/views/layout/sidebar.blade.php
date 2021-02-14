<div class="side-content ">
    <!-- BEGIN .user-profile -->
    <div class="user-profile">
        <img src="img/user.png" class="profile-thumb" alt="User Thumb">
        <h6 class="profile-name">{{ Auth::user()->name }}</h6>
        <ul class="profile-actions">
            <li>
                <a href="#">
                    <i class="icon-social-skype"></i>
                    <span class="count-label red"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li>
                <a href="login.html">
                    <i class="icon-export"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- END .user-profile -->
    <!-- BEGIN .side-nav -->
    <nav class="side-nav">
        <!-- BEGIN: side-nav-content -->
        <ul class="unifyMenu" id="unifyMenu">
            <li class="active selected">
                <a href="href='{{ route('home') }}" class="has-arrow" aria-expanded="false">
                    <span class="has-icon">
                        <i class="icon-laptop_windows"></i>
                    </span>
                    <span class="nav-title">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse in">
                    <li>
                        <a href='{{ route('home') }}' >Dashboard</a>
                    </li>
                    <li>
                        <a href='{{ route('users.index') }}'>Users</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="{{ route('archives.index') }}">
                    <span class="has-icon">
                        <i class="icon-flash-outline"></i>
                    </span>
                    <span class="nav-title">Archives</span>
                </a>
            </li>

        </ul>
        <!-- END: side-nav-content -->
    </nav>
    <!-- END: .side-nav -->
</div>
