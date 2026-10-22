<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Home Page</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="container">
        <!-- HEADER -->
        <header class="header">
            <div class="logo">LOGO</div>
            <div class="title-header">
                <h1>Title Header</h1>
            </div>
            <div class="header-icons">
                <div class="icon" aria-label="Account">
                    <img src="images/account.jpg" alt="account">
                </div>
                <div class="icon" aria-label="Settings">
                    <img src="images/settings.jpg" alt="settings">
                </div>
            </div>
        </header>

        <!-- SIDEBAR NAVIGATION -->
        <nav class="navigation">
            <h2>Navigation</h2>
        </nav>

        <!-- MAIN CONTENT CARDS -->
        <main class="main-content">
            <!-- Air Quality Card (Example: Level 1-3 Green) -->
            <div class="card aq-low">
                <h2>Summary of Air Quality</h2>
            </div>
            
            <!-- Temperature Card (Example: >= 20°C Red) -->
            <div class="card temp-high">
                <h2>Summary of Temperature</h2>
            </div>
            
            <!-- Extreme Weather Card (Example: Safe Green) -->
            <div class="card weather-safe">
                <h2>Summary of Extreme Weather</h2>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="footer">
            <p>Footer: contains contact information</p>
        </footer>
    </div>

</body>
</html>