<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hired Candidate</title>
    <link rel="stylesheet" href="{{asset('storage/css/super.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <script>
        // JavaScript to toggle the form visibility
        function toggleHiredForm() {
            var form = document.getElementById("hired-form");
            form.style.display = (form.style.display === "none" || form.style.display === "") ? "block" : "none";
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .form-container label {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="tel"],
        .form-container input[type="date"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            width: 100%;
            box-sizing: border-box;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <!-- Add Hired Candidate Form -->
    <div class="form-container" id="hired-form" style="display:block;">
        <h2>Add Hired Candidate</h2>
        <form action="/submit-hired-candidate" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter candidate's full name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter candidate's email">

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required placeholder="Enter candidate's phone number">

            <label for="position">Position</label>
            <input type="text" id="position" name="position" required placeholder="Enter position hired for">

            <label for="hire-date">Hire Date</label>
            <input type="date" id="hire-date" name="hire-date" required>

            <input type="submit" value="Add Candidate">
        </form>
        <button onclick="toggleHiredForm()">Close Form</button>
    </div>
    <script>
        function toggleHiredForm() {
            window.location.href = "{{ route('super.home') }}";  // Change this to your home page's URL
        }
    </script>
</body>
</html>
