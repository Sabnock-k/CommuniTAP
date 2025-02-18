<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage-css.css">
    <title>CommuniTAP - Task Dashboard</title>
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
            <a href="homepage.php" class="nav-item">My Tasks</a>
            <a href="availtask.php" class="nav-item">Available Tasks</a>
            <a href="createtask.php" class="nav-item">Create Task</a>
            <a href="logout.php" class="nav-item">Log-out</a>
        </div>
        
        <div class="points-display">
            Points: 1800
        </div>
    </header>
    
    <div class="task-tabs">
        <div class="tab active-tab">On Going Tasks</div>
        <div class="tab">Completed Tasks</div>
    </div>
    
    <div class="tasks-container">
        <div class="ongoing-tasks">
            <div class="task-card">
                <div class="task-header">
                    <div class="task-points">Points: 100pts</div>
                    <div class="task-creator">Task made by: Rafael</div>
                </div>
                
                <h2 class="task-title">Senior Support Squad</h2>
                
                <div class="task-objective">
                    <div class="objective-label">Objective:</div>
                    <div class="objective-description">
                        Assist elderly neighbors with everyday tasks to make their lives easier.
                    </div>
                </div>
                
                <div class="task-items">
                    <div class="task-item">
                        <input type="checkbox" class="task-checkbox" checked>
                        <div class="task-label">Grocery shopping and medicine pickup.</div>
                    </div>
                    
                    <div class="task-item">
                        <input type="checkbox" class="task-checkbox" checked>
                        <div class="task-label">Help with simple home repairs (changing light bulbs, fixing furniture).</div>
                    </div>
                    
                    <div class="task-item">
                        <input type="checkbox" class="task-checkbox" checked>
                        <div class="task-label">Spend time chatting or playing board games to reduce loneliness.</div>
                    </div>
                </div>
                
                <div class="task-actions">
                    <div class="file-upload">Insert File</div>
                    <button class="complete-task-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="completed-tasks">
            <div class="completed-task-card">
                <div class="completed-task-header">
                    <h3 class="completed-task-title">Book & Toy Swap Station</h3>
                    <div class="completed-by">Task made by: Alonzo</div>
                </div>
                
                <div class="task-description">
                    Trade books and toys with the neighborhood!
                </div>
                
                <div class="completed-items">
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Set up a small shelf or box in a shared space (park, community center).</div>
                    </div>
                    
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Collect gently used books/toys that kids may no longer use.</div>
                    </div>
                    
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Promote a "take one, leave one" system to keep it sustainable.</div>
                    </div>
                </div>
                
                <div class="task-completion">Task Completed: 100pts</div>
            </div>
            
            <div class="completed-task-card">
                <div class="completed-task-header">
                    <h3 class="completed-task-title">Community Garden Project</h3>
                    <div class="completed-by">Task made by: Rafael</div>
                </div>
                
                <div class="task-description">
                    Create a community garden for sharing fresh produce!
                </div>
                
                <div class="completed-items">
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Assign small plots for your different kind of plants.</div>
                    </div>
                    
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Show your plants to the neighborhood.</div>
                    </div>
                    
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Distribute fruits, vegetables, or herbs to neighbors in need.</div>
                    </div>
                </div>
                
                <div class="task-completion">Task Completed: 100pts</div>
            </div>
            
            <div class="completed-task-card">
                <div class="completed-task-header">
                    <h3 class="completed-task-title">Tech Help for All</h3>
                    <div class="completed-by">Task made by: Vince</div>
                </div>
                
                <div class="task-description">
                    Provide assistance to neighbors who struggle with technology.
                </div>
                
                <div class="completed-items">
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Help seniors or less tech-savvy individuals set up their phones, emails, or social media.</div>
                    </div>
                    
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Assist with online forms, payments, or government services.</div>
                    </div>
                    
                    <div class="completed-item">
                        <span class="completed-checkbox">✅</span>
                        <div class="completed-label">Teach basic skills like video calling, online safety, or using smart home devices.</div>
                    </div>
                </div>
                
                <div class="task-completion">Task Completed: 100pts</div>
            </div>
        </div>
    </div>
</body>
</html>