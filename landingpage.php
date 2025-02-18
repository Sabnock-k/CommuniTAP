<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/landingpage-css.css">
    <title>CommuniTAP - Helping the neighborhood with fun tasks</title>
</head>
<body>
    <div class="container">
        <div class="text-section">
            <h1>CommuniTAP</h1>
            <p class="subtitle">Helping the neighborhood with fun tasks</p>
            
            <button id="task-button" class="task-button" onclick="window.location.href='register.php'">
                <span class="icon">🎯</span>
                Take a task now!
            </button>
            
            <ul class="features-list">
                <li class="feature-item">
                    <div class="checkbox">✓</div>
                    Help to level UP
                </li>
                <li class="feature-item">
                    <div class="checkbox">✓</div>
                    Tap and pass the completed task
                </li>
                <li class="feature-item">
                    <div class="checkbox">✓</div>
                    Earn rewards!
                </li>
            </ul>
        </div>
        
        <div class="image-section">
            <div class="illustration">
                <img src="images/Human-logo.png" alt="Person with an idea" class="person-image">
            </div>
        </div>
    </div>
    
    <script>
        // Simple script to show email form when button is clicked
        document.getElementById('task-button').addEventListener('click', function() {
            document.getElementById('email-form').style.display = 'block';
            this.style.display = 'none';
        });
    </script>
</body>
</html>