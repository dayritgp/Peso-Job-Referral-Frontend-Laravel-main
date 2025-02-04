<header class="header" id="header" >
    <nav class="nav container">
        <div class="nav__data">
            <a href="{{ url('/') }}" class="nav__logo">
                <img src="{{ asset('import/images/pesologo.png') }}" width="50px;">
                <h3>PESO JobPortal</h3>

            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="{{ url('/') }}" class="nav__link">Home</a></li>

                <li class="dropdown__item">
                    <div class="nav__link">
                        Find <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li><a href="{{ route('job.search') }}" class="dropdown__link">
                            <i class="ri-briefcase-line"></i>Job Search</a></li>

                        <li>
                            <a href="{{ url('js-company') }}" class="dropdown__link">
                                <i class="ri-building-4-fill"></i> Company
                            </a>
                        </li>
                    </ul>
                </li>

                <li><a href="{{ route('staff.dashboard') }}" class="nav__link">Dashboard</a></li>
                <li><a href="#" class="nav__link">User's Guide</a></li>

                <li><a href="#" class="nav__link">About</a></li>

                <li class="dropdown__item">
                    <div class="nav__link">
                        <div class="profile-info">
                            <img src="images/profile.png" alt="Profile Image" class="profile-image">
                            {{ session('user') }} <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="{{ url('js-view-profile') }}" class="dropdown__link">
                                <i class="ri-account-circle-line"></i> View Profile
                            </a>
                        </li>

                        <li>
                            <a href="jobseeker_requirements.html" class="dropdown__link">
                                <i class="ri-survey-line"></i> NSRP&nbsp;Form&nbsp;1
                            </a>
                        </li>
                        <li>
                            <a href="jobseeker_account.html" class="dropdown__link">
                                <i class="ri-lock-2-line"></i> Manage&nbsp;Account
                            </a>
                        </li>
                        <li>
                            @include('extensions.global_logout')
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
</nav>
</header>
