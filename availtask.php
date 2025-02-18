<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CommuniTAP - Available Tasks</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f3f4f6;
        }
        
        /* Header styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-bottom: 2px solid #3b82f6;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
        }
        
        .profile-pic {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #60a5fa;
            overflow: hidden;
        }
        
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .navigation {
            display: flex;
            gap: 25px;
        }
        
        .nav-item {
            color: #4b5563;
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .points-display {
            font-weight: 600;
            color: #111827;
        }
        
        /* Page title */
        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
            margin: 25px 30px;
        }
        
        /* Tasks container */
        .tasks-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 0 30px 30px;
        }
        
        /* Task card styles */
        .task-card {
            flex: 1;
            min-width: 300px;
            max-width: calc(50% - 15px);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color: white;
            border: 2px solid;
            display: flex;
            flex-direction: column;
        }
        
        .community-cleanup {
            border-color: #fbbf24;
        }
        
        .kids-pets {
            border-color: #fbbf24;
        }
        
        .task-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            background-color: #fef3c7;
        }
        
        .task-points {
            font-weight: 600;
            font-size: 0.9rem;
            color: #92400e;
        }
        
        .task-creator {
            font-size: 0.8rem;
            color: #6b7280;
        }
        
        .task-content {
            padding: 20px;
            flex: 1;
        }
        
        .task-title {
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #111827;
        }
        
        .task-emoji {
            margin-left: 8px;
            font-size: 1.2rem;
        }
        
        .task-objective {
            margin-bottom: 15px;
        }
        
        .objective-label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #4b5563;
            margin-bottom: 5px;
        }
        
        .objective-description {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #4b5563;
        }
        
        .task-items {
            margin-bottom: 20px;
        }
        
        .task-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        
        .task-checkbox {
            margin-right: 10px;
            margin-top: 3px;
            color: #4ade80;
            font-size: 1.1rem;
        }
        
        .task-label {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #4b5563;
        }
        
        .task-actions {
            background-color: #f9fafb;
            padding: 15px;
            display: flex;
            justify-content: center;
        }
        
        .accept-task-btn {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .btn-circle {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #111827;
            color: white;
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 8px;
        }
        
        .btn-circle:hover {
            background-color: #1f2937;
        }
        
        .btn-circle svg {
            width: 18px;
            height: 18px;
        }
        
        .btn-text {
            font-size: 0.8rem;
            color: #4b5563;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .tasks-container {
                flex-direction: column;
                padding: 0 15px 30px;
            }
            
            .task-card {
                max-width: 100%;
            }
            
            header {
                flex-wrap: wrap;
                padding: 10px 15px;
            }
            
            .navigation {
                order: 2;
                margin-top: 10px;
                width: 100%;
                justify-content: space-between;
                gap: 10px;
            }
            
            .user-profile, .points-display {
                order: 1;
            }
            
            .page-title {
                margin: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="user-profile">
            <div class="profile-pic">
                <img src="images/profile-logo.png" alt="Profile picture">
            </div>
        </div>
        
        <div class="navigation">
            <a href="#" class="nav-item">Spend points</a>
            <a href="#" class="nav-item">My Tasks</a>
            <a href="#" class="nav-item">Available Tasks</a>
            <a href="createtask.php" class="nav-item">Create Task</a>
            <a href="logout.php" class="nav-item">Log-out</a>
        </div>
        
        <div class="points-display">
            Points: 1800
        </div>
    </header>
    
    <h1 class="page-title">Available Task</h1>
    
    <div class="tasks-container">
        <div class="task-card community-cleanup">
            <div class="task-header">
                <div class="task-points">Points: 100pts</div>
                <div class="task-creator">Task made by: Rafael</div>
            </div>
            
            <div class="task-content">
                <h2 class="task-title">
                    Community Cleanup Crew
                    <span class="task-emoji">🧹</span>
                </h2>
                
                <div class="task-objective">
                    <div class="objective-label">Objective:</div>
                    <div class="objective-description">
                        Keep the neighborhood clean by picking up litter, sweeping sidewalks, and maintaining public areas.
                    </div>
                </div>
                
                <div class="task-items">
                    <div class="task-item">
                        <div class="task-checkbox">⭐</div>
                        <div class="task-label">Assign small groups to different streets or parks.</div>
                    </div>
                    
                    <div class="task-item">
                        <div class="task-checkbox">⭐</div>
                        <div class="task-label">Provide gloves, trash bags, and recycling bins.</div>
                    </div>
                    
                    <div class="task-item">
                        <div class="task-checkbox">⭐</div>
                        <div class="task-label">Reward volunteers with a small neighborhood celebration.</div>
                    </div>
                </div>
            </div>
            
            <div class="task-actions">
                <div class="accept-task-btn">
                    <button class="btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                    <div class="btn-text">Accept Task</div>
                </div>
            </div>
        </div>
        
        <div class="task-card kids-pets">
            <div class="task-header">
                <div class="task-points">Points: 100pts</div>
                <div class="task-creator">Task made by: Alonzo</div>
            </div>
            
            <div class="task-content">
                <h2 class="task-title">
                    Kids & Pets Playdate
                    <span class="task-emoji">🐶</span>
                </h2>
                
                <div class="task-objective">
                    <div class="objective-label">Objective:</div>
                    <div class="objective-description">
                        Organize fun, supervised activities for children and pets.
                    </div>
                </div>
                
                <div class="task-items">
                    <div class="task-item">
                        <div class="task-checkbox">⭐</div>
                        <div class="task-label">Organize a neighborhood playdate or pet walking group.</div>
                    </div>
                    
                    <div class="task-item">
                        <div class="task-checkbox">⭐</div>
                        <div class="task-label">Host small games or sports events for kids.</div>
                    </div>
                    
                    <div class="task-item">
                        <div class="task-checkbox">⭐</div>
                        <div class="task-label">Create a buddy system for pets with busy or elderly neighbors.</div>
                    </div>
                </div>
            </div>
            
            <div class="task-actions">
                <div class="accept-task-btn">
                    <button class="btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                    <div class="btn-text">Accept Task</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>