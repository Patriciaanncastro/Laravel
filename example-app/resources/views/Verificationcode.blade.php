<!DOCTYPE html>
<html>
<head>
    <title>Verification Page</title>
    <style>
        body {
            background: linear-gradient(135deg, #274b74, #380c5f, #060007); /* Gradient background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff; /* Text color for readability */
        }
        .verification-container {
            background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Subtle shadow for better visibility */
            text-align: center;
            width: 100%;
            max-width: 400px; /* Limits the width for better design */
        }
        h2 {
            margin-bottom: 20px; /* Adds spacing below the heading */
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }
        button {
            background: #4caf50;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #45a049;
        }
    </style>
    <script>
        function verifyCode(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            const code = document.getElementById('verification-code').value;

            // Simulate the verification process
            if (code === "123456") { // This should match the code sent to the user (in real implementation, this would be dynamic)
                alert("Verification successful!");
                window.location.href = "dashboard.html"; // Redirect to the dashboard after successful verification
            } else {
                alert("Invalid verification code!");
            }
        }
    </script>
</head>
<body>
    <div class="verification-container">
        <h2>Enter Verification Code</h2>
        <form onsubmit="verifyCode(event)">
            <input type="text" id="verification-code" name="verification-code" placeholder="Enter code" required>
            <button type="submit">Verify</button>
        </form>
    </div>
</body>
</html>
