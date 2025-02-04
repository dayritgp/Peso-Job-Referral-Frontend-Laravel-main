<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Public Employment Service Office | Login & Signup</title>
  <link rel="icon" href="../../images/admin/PESO LOGO NEW.png">
  <link rel="stylesheet" href="../../assets/css/admin/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
    <img src="../../images/admin/PESO LOGO NEW.png" width="70px;"><h3>PESO JobPortal</h3>
  </header>
  <div class="space"></div>
  
  <div class="wrapper">
    <div class="title-text"></div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="#" class="login">
          <div>
            <h2>Administrator Log In</h2>
            <p>Fill out the information below in order to access your account.</p>
          </div><br>
        
          <div class="field">
            <input type="text" placeholder="Email" required>
          </div>
         
          <div class="field password-field">
            <input type="password" id="passwordField1" placeholder="Password" required>
            <span id="showPassword1" class="toggle-password" onclick="togglePasswordVisibility('passwordField1', 'showPassword1')">
                <i class="fa fa-eye"></i>
            </span>
          </div>
            
          <div class="pass-link"><a href="#">Forgot password?</a></div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
        </form>
        <form action="#" class="signup">
          <div>
            <h2>Create Administrator Account</h2>
            <p>Let's get started by filling out the form below.</p>
          </div><br>

          <div class="field">
            <input type="text" placeholder="First Name" required>
          </div>
          <div class="field">
            <input type="text" placeholder="Last Name" required>
          </div>
        
          <div class="field">
            <input type="text" placeholder="Email Address" required>
          </div>
          <div class="field password-field">
            <input type="password" id="passwordField2" placeholder="Password" required>
            <span id="showPassword2" class="toggle-password" onclick="togglePasswordVisibility('passwordField2', 'showPassword2')">
                <i class="fa fa-eye"></i>
            </span>
          </div>
            
          <div class="checkbox-container">
            <input type="checkbox" id="myCheckbox">
            <label for="myCheckbox" style="font-size: 14px;">Yes, I understand and agree to the <a href="#"> PESO-Gensan Terms of Service,  including the User Agreement and Privacy Policy .</a></label>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup">
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

  <script src="../../controller/js/admin/admin_login.js"></script>

</body>
</html>
