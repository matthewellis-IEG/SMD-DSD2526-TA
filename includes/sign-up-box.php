<main class="login-box-position">
    <!-- Reuses the exact same centered wireframe layout boxes -->
    <div class="login-outer-box">
        <div class="login-middle-box">
            
            <form class="signup-form-container" onsubmit="return false;">
                
                <!-- Email Field -->
                <div class="input-group">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <input type="email" placeholder="Please enter email" required>
                </div>
                
                <!-- Username Field -->
                <div class="input-group">
                    <span class="glyphicon glyphicon-user"></span>
                    <input type="text" placeholder="Choose a username" required>
                </div>

                <!-- Address Field -->
                <div class="input-group">
                    <span class="glyphicon glyphicon-home"></span>
                    <input type="text" placeholder="Enter your address" required>
                </div>
                
                <!-- Password Field -->
                <div class="input-group">
                    <span class="glyphicon glyphicon-lock"></span>
                    <input type="password" placeholder="Create a password" required>
                </div>

                <!-- Confirm Password Field -->
                <div class="input-group">
                    <span class="glyphicon glyphicon-ok"></span>
                    <input type="password" placeholder="Confirm your password" required>
                </div>
                
                <!-- Register Button -->
                <button type="submit" class="signup-btn">Sign Up</button>
                
                <!-- Red Password Length or Password Match Alert Box -->
                <div class="error-msg">
                    Passwords do not match. Please try again.
                </div>
                
                <!-- Link back to Login page -->
                <p class="login-prompt">Already have an account? <a href="login.php">Login here</a></p>
                
            </form>
            
        </div>
    </div>
</main>
