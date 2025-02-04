<header class="header" id="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="{{ url('/') }}" class="nav__logo">

                <img src="{{ asset('import/images/Referral_Logo.png') }}" width="200px;">

            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="{{ route('job.search') }}" class="nav__link">Job Search</a></li>
                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        User's Guide<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-user-line"></i> Job&nbsp;Seekers
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-briefcase-line"></i> Employers
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="nav__link">About</a></li>

                <li><a href="{{ route('login') }}" ><button class="nav__button">LOGIN</button></a>
                </li>

                <li class="dropdown__item">
                    <a target="_blank"><button class="nav__button">REGISTER</button></a>
                    <ul class="dropdown__menu">
                        <li>
                            <a href="{{ route('jobseeker.register') }}" class="dropdown__link">
                                <i class="ri-user-line"></i> Job&nbsp;Seekers
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employer.registration') }}" class="dropdown__link">
                                <i class="ri-briefcase-line"></i> Employers
                            </a>
                        </li>
                    </ul>
            </ul>
        </div>
    </nav>
</header>
