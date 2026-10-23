<main class="login-box-position">
            <!-- This class creates the main outer border box -->
            <div class="login-outer-box">
                <!-- This class creates the nested middle box -->
                <div class="login-middle-box">
                    
                    <form class="login-form-container" onsubmit="return false;">
                        
                        <!-- Username Field -->
                        <div class="input-group">
                            <span class="glyphicon glyphicon-user"></span>
                            <input type="text" placeholder="Please enter username" required>
                        </div>
                        
                        <!-- Password Field -->
                        <div class="input-group">
                            <span class="glyphicon glyphicon-lock"></span>
                            <input type="password" placeholder="Enter password" required>
                        </div>
                        
                        <!-- Centered Small Login Button -->
                        <button type="submit" class="login-btn">Login</button>
                        
                        <!-- Red Error Alert Box -->
                        <div class="error-msg">
                            Your login information is incorrect. Please try again. <a href="#">Forgot your password?</a>
                        </div>
                        
                        <!-- Sign Up Prompt Footer -->
                        <p class="signup-prompt">Don't have an account. <a href="#">Sign up?</a></p>
                        
                    </form>
                    
                </div>
            </div>
        </main>