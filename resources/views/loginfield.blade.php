<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Public Employment Service Office | Login & Signup</title>
    <link rel="icon" href="images/pesologo.png">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/login.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @include('sweetalert::alert')
    <header>
        <img src="{{ asset('images/pesologo.png') }}" width="70px;">
        <h3>PESO JobPortal</h3>
        {{-- <p><pre>{{ print_r($data, true) }}</pre></p> just comment this after --}}
    </header>

    @if ($errors->has('message'))
        <div class="alert alert-danger">
            {{ $errors->first('message') }}
        </div>
    @endif

    <div class="space"></div>
    <div class="wrapper">
        <div class="title-text">

        </div>
        <div class="form-container">
            <div class="form-inner">
                <form class="login" id="loginForm" method="POST" action="{{ url('/init_login') }}">
                    @csrf
                    @method('POST')
                    <div>
                        <h2>Account Log In</h2>
                        <p>Fill out the information below in order to access your account.</p>
                    </div><br>

                    @if (session('error'))
                        <div class="alert alert-danger">
                            <strong> {{ session('error') }}</strong>

                        </div>
                    @endif
                    <div class="field">
                        <input type="email" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="field password-field">
                        <input type="password" placeholder="Password" name="password" required>
                        <span id="showPassword1" class="toggle-password"
                            onclick="togglePasswordVisibility('password', 'showPassword1')">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>

                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Log In">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="space"></div>

    <footer class="footer">
        <div class="row">
            <div class="column">
                <h4>Job Seekers</h4>
                <p><a href="#">Job Search</a></p>
                <p><a href="#">Profile</a></p>
                <p><a href="#">Recommended jobs</a></p>
                <p><a href="#">Job Applications</a></p>
            </div>
            <div class="column">
                <h4>Employers</h4>
                <p><a href="#">Register for free</a></p>
                <p><a href="#">Post a Job ad</a></p>
                <p><a href="#">Customer Service</a></p>
            </div>
            <div class="column">
                <h4>About PESO Gensan</h4>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Partner Services</a></p>
            </div>
            <div class="column">
                <h4>Contact</h4>
                <p><a href="#">Help Centre</a></p>
                <p><a href="#">Contact Us</a></p>
            </div>
        </div>
        <div class="line"></div>
        <div class="row">
            <!-- Footer links and copyright text -->
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Safe Job Search Guide</a>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2024 PESO JobPortal</p>
            </div>
        </div>
    </footer>



</body>

</html>
