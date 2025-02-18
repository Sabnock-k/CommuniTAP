<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-css.css">
    <title>CommuniTAP - Sign In</title>
</head>
<body>
    <div class="container">
        <h1>Sign In</h1>
        
        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">Sign in with</span>
            <div class="divider-line"></div>
        </div>
        
        <div class="social-login">
            <button class="social-btn">
                <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" alt="Google logo">
                <span>Continue with Google</span>
            </button>
            <button class="social-btn">
                <img src="https://cdn.cdnlogo.com/logos/f/83/facebook.svg" alt="Facebook logo">
                <span>Continue with Facebook</span>
            </button>
        </div>
        
        <div class="or-divider">or</div>
        
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="John" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="abc@gmail.com" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="submit-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </form>
        
        <p class="signup-link">
            Don't have an account? <a href="register.php">Sign up</a>
        </p>
    </div>
</body>
</html>