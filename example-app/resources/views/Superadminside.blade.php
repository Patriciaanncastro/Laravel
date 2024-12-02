<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Cards</title>
    <link rel="stylesheet" href="{{asset('storage/css/super.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <script>
        // JavaScript function to toggle the dropdown menu
        function toggleDropdown() {
            var dropdown = document.getElementById("records-dropdown");
            dropdown.style.display = (dropdown.style.display === "none" || dropdown.style.display === "") ? "block" : "none";
        }

        // Close the dropdown if clicked outside
        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-button')) {
                var dropdown = document.getElementById("records-dropdown");
                if (dropdown && dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                }
            }
        };

        // JavaScript function to toggle the settings dropdown
        function toggleSettingsDropdown() {
            var settingsDropdown = document.getElementById("settings-dropdown");
            settingsDropdown.style.display = (settingsDropdown.style.display === "none" || settingsDropdown.style.display === "") ? "block" : "none";
        }

        // Close the settings dropdown if clicked outside
        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-button')) {
                var settingsDropdown = document.getElementById("settings-dropdown");
                if (settingsDropdown && settingsDropdown.style.display === "block") {
                    settingsDropdown.style.display = "none";
                }
            }
        };
    </script>
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

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 150px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            font-size: 14px;
            color: black;
        }

        .dropdown-content a:hover {
            background-color: #f3f4f6;
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
            /* Rounded corners */
            box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
            /* Light shadow without a top effect */
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .resume-card img {
            width: 70px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
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
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .action-buttons button {
            /* display: flex; */
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .action-buttons a {
            text-decoration: none;
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

        .no-record {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <img src="{{asset('storage/image/logo5.png')}}" alt="Logo" class="logo"> <!-- Replace 'logo1.png' with your logo file -->
        
        @if ($user->userLevel !== 'superadmin')
        <h1>Hello Admin</h1>
        <div class="header-buttons">
        <form action="{{route('logout')}}" method="get">
            @csrf
            <button>Logout</button>
            </div>
        </form>
        @else
        <h1>Hello SuperAdmin</h1>
        <div class="header-buttons">
            <!-- <button onclick="toggleHiredForm()">Add Hired Candidate</button> -->
            <!-- Records Dropdown Button -->
            <div class="dropdown">
                <button class="dropdown-button" onclick="toggleDropdown()">Records</button>
                <div class="dropdown-content" id="records-dropdown">
                    <a href="{{ route('super.hired') }}">Hire Records</a>
                    <a href="{{ route('super.reject') }}">Reject Records</a>
                    <a href="{{ route('super.keep') }}">Keep for Future Records</a>
                </div>
            </div>
            <!-- Settings Dropdown Button -->
            <div class="dropdown">
                <button class="dropdown-button" onclick="toggleSettingsDropdown()">Settings</button>
                <div class="dropdown-content" id="settings-dropdown">
                    <a href="{{ route('super.archive') }}">Archive</a>
                    <form action="{{route('logout')}}" method="get">
                        @csrf
                        <button>Logout</button>
                    </form>
                </div>
            </div>
        </div>
        
        @endif
        
    </header>
    <br>
    <main>
        <!-- Resume Cards -->
        @if ($profiles->isNotEmpty())
        <section class="resume-cards">
            @if (session('success'))
            <div class="success">{{session('success') }}</div>
            @endif
            <!-- Card 1 -->
            @foreach ($profiles as $profile)
            <div class="resume-card">
                <img src="{{asset('storage/' . $profile->image)}}" alt="Profile Picture">
                <h2 style="color: #000"> {{$profile->Name}} </h2>
                <p>{{$profile->email}}</p>
                <p>{{$profile->phoneNumber}}</p>
                <div class="card-details">
                    <p><strong>Position:</strong> Graphic Designer</p>
                    <p><strong>Status:</strong> {{ucwords($profile->status)}}</p>
                    <p><strong>Last Updated:</strong> {{ date('Y-m-d', strtotime($profile->updated_at))}}</p>
                </div>
                <div class="action-buttons">
                    <a href="{{route('profile.show', $profile->id)}}" class="btn-view">View Resume</a>
                    <form action="{{route('profile.update', $profile->id)}}" method="post">
                        @csrf

                        @method('PUT')
                        <input type="hidden" name="hire" value="hire">
                        <button class="btn-hire">Hire</button>
                    </form>
                    <form action="{{route('profile.update', $profile->id)}}" method="post">
                        @csrf

                        @method('PUT')
                        <input type="hidden" name="reject" value="reject">
                        <button class="btn-reject">Reject</button>
                    </form>
                    <form action="{{route('profile.update', $profile->id)}}" method="post">
                        @csrf

                        @method('PUT')
                        <input type="hidden" name="keep" value="keep">
                        <button class="btn-keep">Keep for Future</button>
                    </form>
                </div>
            </div>
            @endforeach
        </section>
        @else
        <h2 class="no-record">No records Available</h2>
        @endif

        <br>
    </main>
    <script>
        function toggleHiredForm() {
            window.location.href = "{{ route('super.add') }}"; // Change this to your home page's URL
        }

        function hiredRecord() {
            window.location.href = "{{ route('super.hired') }}"; // Change this to your home page's URL
        }

        function rejectRecord() {
            window.location.href = "{{ route('super.reject') }}"; // Change this to your home page's URL
        }

        function keepRecord() {
            window.location.href = "{{ route('super.keep') }}"; // Change this to your home page's URL
        }
    </script>
</body>

</html>