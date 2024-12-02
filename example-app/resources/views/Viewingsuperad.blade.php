<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hired Candidates</title>
    <style>
        /* Import Poppins Font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* Gradient Background Animation */
        body {
            background: linear-gradient(135deg, #274b74, #380c5f, #060007);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
            min-height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            max-width: 800px;
            width: 90%;
            background: rgba(255, 255, 255, 0.1); /* Semi-transparent white */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #fff;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .candidate-card {
            background: rgba(0, 0, 0, 0.6); /* Dark semi-transparent card */
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            text-align: left;
        }

        .candidate-card h3 {
            margin: 0 0 10px;
            color: #e0e0e0;
            font-weight: 600; /* Bold for emphasis */
        }

        .candidate-card p {
            margin: 5px 0;
            color: #ddd;
            font-weight: 300; /* Lighter for descriptive text */
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #380c5f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: 600; /* Bold for the button */
        }

        .back-button:hover {
            background-color: #f881d0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hired Candidates</h1>
        
        <!-- Candidate Information -->
        <div class="candidate-card">
            <h3>John Doe</h3>
            <p><strong>Position:</strong> Web Developer</p>
            <p><strong>Field of Work:</strong> IT</p>
            <p><strong>Company:</strong> ABC Corp</p>
            <p><strong>Hired Date:</strong> 11/25/2024</p>
        </div>

        <div class="candidate-card">
            <h3>Jane Smith</h3>
            <p><strong>Position:</strong> Graphic Designer</p>
            <p><strong>Field of Work:</strong> Design</p>
            <p><strong>Company:</strong> XYZ Studios</p>
            <p><strong>Hired Date:</strong> 11/20/2024</p>
        </div>

        <!-- Add more candidate cards as needed -->

        <!-- Back Button -->
        <a href="form-page.html" class="back-button">Back to Form</a>
    </div>
</body>
</html>
