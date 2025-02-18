<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #e2e8f0;
        }

        .navbar {
            background-color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-pic {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #3b82f6;
        }

        .nav-links {
            display: flex;
            gap: 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: #4b5563;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .points {
            color: #374151;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 0 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #111827;
        }

        .task-card {
            background-color: white;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .points-value {
            color: #10b981;
        }

        .task-by {
            color: #6b7280;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
        }

        input, textarea {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .publish-btn {
            width: 100%;
            padding: 12px;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .publish-btn:hover {
            background-color: #1f2937;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <div class="profile-pic"></div>
            <div class="nav-links">
                <a href="#" class="nav-item">Spend points</a>
                <a href="homepage.php" class="nav-item">My Tasks</a>
                <a href="availtask.php" class="nav-item">Available Tasks</a>
                <a href="createtask.php" class="nav-item">Create Task</a>
                <a href="logout.php" class="nav-item">Log-out</a>
            </div>
        </div>
        <div class="nav-right">
            <span class="points">Points: 1800</span>
        </div>
    </nav>

    <div class="container">
        <h1>Create Task</h1>
        
        <div class="task-card">
            <div class="card-header">
                <div>
                    <span>Points: </span>
                    <span class="points-value">100pts</span>
                </div>
                <span class="task-by">Task made by: Vince</span>
            </div>

            <form action="process.php" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="objective">Objective</label>
                    <input type="text" id="objective" name="objective" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <button type="submit" class="publish-btn">Publish Task</button>
            </form>
        </div>
    </div>
</body>
</html>