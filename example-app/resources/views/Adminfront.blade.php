<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Cards</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
        }

        .logo {
            width: 150px;
        }

        .header-buttons {
            display: flex;
            align-items: center;
        }

        .header-buttons button {
            padding: 10px 20px;
            margin-left: 10px;
            background-color: #380c5f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .header-buttons button:hover {
            background-color: #274b74;
        }

        .resume-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .resume-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .resume-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .resume-card h2 {
            margin: 10px 0;
        }

        .resume-card p {
            margin: 5px 0;
            color: #666;
        }

        .card-details p {
            font-size: 14px;
            color: #333;
        }

        .action-buttons {
            margin-top: 15px;
        }

        .action-buttons button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-hire {
            background-color: #4caf50;
            color: white;
        }

        .btn-hire:hover {
            background-color: #45a049;
        }

        .btn-reject {
            background-color: #f44336;
            color: white;
        }

        .btn-reject:hover {
            background-color: #d32f2f;
        }

        .btn-keep {
            background-color: #ff9800;
            color: white;
        }

        .btn-keep:hover {
            background-color: #fb8c00;
        }

        .btn-view {
            background-color: #2196f3;
            color: white;
        }

        .btn-view:hover {
            background-color: #1e88e5;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo2.png" alt="Logo" class="logo">
        <h1>Hello Admin</h1>
        <div class="header-buttons">
            <!-- <button onclick="toggleHiredForm()">Add Hired Candidate</button> -->
            <!-- New Logout Button -->
            <button onclick="window.location.href='logout_page.html'">Logout</button>
        </div>
    </header>
    <br>

    <main>
        <!-- Resume Cards -->
        <section class="resume-cards">
            <!-- Card 1 -->
            <div class="resume-card">
                <img src="profile_image.jpg" alt="Profile Picture">
                <h2>Patricia Ann Castro</h2>
                <p>Email: pat@yahoo.com</p>
                <p>Phone: 09176954064</p>
                <div class="card-details">
                    <p><strong>Position:</strong> Graphic Designer</p>
                    <p><strong>Status:</strong> In Progress</p>
                    <p><strong>Last Updated:</strong> 2024-11-25</p>
                </div>
                <div class="action-buttons">
                    <button class="btn-view">View Resume</button>
                    <button class="btn-hire">Hire</button>
                    <button class="btn-reject">Reject</button>
                    <button class="btn-keep">Keep for Future</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="resume-card">
                <img src="profile_image.jpg" alt="Profile Picture">
                <h2>Ann Castro</h2>
                <p>Email: ann@yahoo.com</p>
                <p>Phone: 09176954064</p>
                <div class="card-details">
                    <p><strong>Position:</strong> UI/UX Designer</p>
                    <p><strong>Status:</strong> Interview Scheduled</p>
                    <p><strong>Last Updated:</strong> 2024-11-22</p>
                </div>
                <div class="action-buttons">
                    <button class="btn-view">View Resume</button>
                    <button class="btn-hire">Hire</button>
                    <button class="btn-reject">Reject</button>
                    <button class="btn-keep">Keep for Future</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="resume-card">
                <img src="profile_image.jpg" alt="Profile Picture">
                <h2>Anne Castro</h2>
                <p>Email: anne@yahoo.com</p>
                <p>Phone: 09176954064</p>
                <div class="card-details">
                    <p><strong>Position:</strong> Frontend Developer</p>
                    <p><strong>Status:</strong> Offer Extended</p>
                    <p><strong>Last Updated:</strong> 2024-11-20</p>
                </div>
                <div class="action-buttons">
                    <button class="btn-view">View Resume</button>
                    <button class="btn-hire">Hire</button>
                    <button class="btn-reject">Reject</button>
                    <button class="btn-keep">Keep for Future</button>
                </div>
            </div>
        </section>
        <br>
    </main>
</body>
</html>
