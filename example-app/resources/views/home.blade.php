<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home User</title>
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
    <!-- Link to Google Fonts for Poppins and Lora -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS to center the image and move it up */
        .hero {
            display: flex;
            justify-content: center; /* Center the image horizontally */
            align-items: flex-start; /* Align the image to the top */
            margin-bottom: 30px; /* Ensure there's space below the image */
        }

        .hero-image {
            width: 45%; /* Adjust this value to your preference */
            height: auto; /* Maintain the aspect ratio */
        }

        /* Apply Poppins to the navigation links */
        nav a {
            font-family: 'Poppins', sans-serif;
            margin-right: 20px;
        }

        /* Apply Lora to the body text */
        body {
            font-family: 'Lora', serif;
        }

        /* Full-width intro-text with black border */
        .intro-text {
            padding: 50px; /* Add padding inside the box */
            background-color: rgba(0, 0, 0, 0.2); /* Semi-transparent black background */
            width: 100vw; /* Full width of the viewport */
            margin-left: 0; /* Remove any margin on the left */
            margin-right: 0; /* Remove any margin on the right */
            box-sizing: border-box; /* Ensures padding doesn't affect the width */
            color: #fff; /* Text color inside the section */
            text-align: center; /* Center the text horizontally */
        }

        /* Ensure no body margin/padding */
        body {
            margin: 0;
            padding: 0;
        }

        /* Dropdown styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #380c5f;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: 'Poppins', sans-serif;
        }

        .dropdown-content a:hover {
            background-color: #274b74;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-button {
            background-color: #380c5f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .dropdown-button:hover {
            background-color: #274b74;
        }

    </style>
</head>
<body>
    <header>
        <img src="{{asset('storage/image/logo1.png')}}" alt="Company Image" class="hero-image">
        <nav>
            <a href="#" class="active">Home</a>
            <a href="{{ route('create') }}">Profiles</a>
            <a href="{{ route('profile.show', $user_id) }}">Resume</a>
            <!-- Dropdown button for settings -->
            <div class="dropdown">
                <button class="dropdown-button">Settings</button>
                <div class="dropdown-content">
                    <a href="{{ route('profile.edit', $user_id) }}">Edit Profile</a>
                    <form action="{{route('logout')}}" method="get">
                        @csrf 
                        <button>Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>    
    <!-- Added Section with Image and Text Below Header -->
    <section class="hero">
        <!-- Add your image here -->
        <img src="{{asset('storage/image/logo5.png')}}" alt="Company Image" class="hero-image">
    </section>

    <section class="intro-text">
        <p>
            We are always on the lookout for passionate and driven individuals to join our dynamic team. Whether you're starting your career or looking to take the next step, we offer exciting opportunities that allow you to grow, learn, and make an impact.
        </p>
        <p>
            Explore our job listings to find the perfect role that aligns with your skills and aspirations. We believe in fostering a collaborative and inclusive environment where every team member's contribution is valued.
        </p>
        <p>
            Take the first step toward a rewarding career with us. We look forward to hearing from you!
        </p>
        <p>
            Feel free to adjust it with specific company details or tone if needed!
        </p>
    </section>

</body>
</html>
