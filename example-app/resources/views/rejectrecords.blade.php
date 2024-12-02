<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reject Records</title>
    <style>
        /* Gradient background for the body */
        body {
            background: linear-gradient(135deg, #274b74, #380c5f, #060007);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
            min-height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: white;
        }

        /* Gradient animation */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Container styling */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            /* Semi-transparent background for contrast */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        /* Table Styles */
        .employee-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .employee-table th,
        .employee-table td {
            padding: 12px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* Semi-transparent border */
            text-align: left;
            color: white;
        }

        .employee-table th {
            background-color: rgba(56, 12, 95, 0.8);
            /* Darker semi-transparent background for headers */
        }

        .employee-table tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
            /* Slightly lighter for alternating rows */
        }

        .employee-table tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
            /* Highlight row on hover */
        }

        .actions{
            display: flex;
        }

        .actions a{
            text-decoration: none;
            font-size: 14px;
            padding: 5px 10px;
            margin: 0 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .actions button {
            padding: 5px 10px;
            margin: 0 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .actions .view-btn {
            background-color: #3498db;
            color: white;
        }

        .actions .delete-btn {
            background-color: #e74c3c;
            color: white;
        }

        .actions button:hover {
            opacity: 0.9;
        }

        .home-btn{
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            margin: 0 5px;
            border: none;
            border-radius: 5px;
            background: #380c5f;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
    <a href="{{route('sa.home')}}" class="home-btn">Home</a>
        <h1>Reject Records</h1>

        <!-- Employee Table -->
        <table class="employee-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Rejection Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="employee-records">
                @foreach ($rejecteds as $rejected)
                <tr>
                    <td>{{$rejected->id}}</td>
                    <td>{{$rejected->Name}}</td>
                    <td>{{$rejected->jobTitle}}</td>
                    <td>{{$rejected->organization}}</td>
                    <td>{{$rejected->updated_at}}</td>
                    <td class="actions">
                        <a href="{{route('profile.show', $rejected->id)}}" class="view-btn">View</a>
                        <button class="edit-btn">Edit</button>
                        <form action="{{route('profile.destroy', $rejected->id)}}" method="post">
                            @csrf

                            @method('DELETE')
                            <button class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>