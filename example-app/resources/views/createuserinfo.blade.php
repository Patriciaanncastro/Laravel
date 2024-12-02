<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('storage/css/create.css')}}">
    <style>
        /* Apply Poppins font globally */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: #f4f4f9;
            /* Light background for the entire page */
        }

        h1,
        h3 {
            font-weight: 600;
        }

        button {
            font-family: 'Poppins', sans-serif;
        }

        /* Header styling */
        header {
            padding: 20px;
            background-color: #ffffff;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-buttons button {
            background-color: #8f009c;
            color: rgb(253, 253, 253);
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .header-buttons button:hover {
            background-color: #bb0077;
        }

        /* Form styling for proper alignment */
        .personal-info,
        .contact-info,
        .education,
        .experience,
        .projects,
        .skills {
            background-color: rgb(255, 255, 255);
            /* White background for form sections */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            /* Stack label and input vertically */
            margin-bottom: 10px;
        }

        .form-group label {
            font-weight: 500;
            margin-bottom: 3px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .form-group textarea {
            height: 100px;
            /* Adjust height for textarea */
        }

        /* Profile Picture Section */
        .profile-picture-wrapper {
            width: 120px;
            height: 120px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #ccc;
            margin-bottom: 20px;
        }

        .profile-picture-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-picture-wrapper input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .profile-picture-wrapper label {
            font-weight: 500;
            text-align: center;
            cursor: pointer;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .personal-info {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-picture-wrapper {
                margin-bottom: 20px;
            }

            .profile-picture-wrapper img {
                width: 90px;
                height: 90px;
            }

            .form-group input,
            .form-group textarea {
                font-size: 14px;
            }
        }

        /* Button styling */
        button {
            padding: 10px 20px;
            background-color: #8f009c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #bb0077;
        }

        .success {
            color: green;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .failed {
            color: red;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .error {
            font-size: 10px;
            color: red;
            text-align: left;
            margin: 0;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header class="header">
        <h1>Create User Profile</h1>
        <div class="header-buttons">
            <!-- <button class="save-button">Save</button> -->
            <button class="home-button" onclick="goHome()">Home</button>

        </div>
    </header>

    <script>
        function goHome() {
            window.location.href = "{{ route('home') }}"; // Change this to your home page's URL
        }
    </script>

    <!-- Profile picure -->
    <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="profile-picture-wrapper">
            <label for="profile-picture" class="add-picture-label">Add Picture</label>
                <img src="https://via.placeholder.com/100" id="profile-picture-preview" alt="Profile Picture">
                <input type="file" id="profile-picture" name="profilepicture" accept="image/*" onchange="previewImage(event)">
            
            @error('profilepicture')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <main><!-- Personal Information Section -->
            <section class="personal-info">
                <h1 class="centered-heading">Personal Information</h1> <!-- Centered class added here -->
                <!-- Your form fields go here -->
                @if (session('success'))
                <div class="success">{{session('success') }}</div>
                @endif
                @error ('failed')
                <div class="failed">{{ $message }}</div>
                @enderror
            </section>

            </section>
            <section class="personal-info">
                <h1 class="centered-heading"></h1>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">
                    @error('name')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="Objectives">Objective</label>
                    <input type="text" id="Ojectives" name="Objectives" placeholder="Enter your objectives">
                    @error('Objectives')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="date-of-birth">Date of Birth</label>
                    <input type="date" id="date-of-birth" name="date_of_birth">
                    @error('date_of_birth')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="place-of-birth">Place of Birth</label>
                    <input type="text" id="place-of-birth" name="place_of_birth" placeholder="Enter place of birth">
                    @error('place_of_birth')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="">Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="civil-status">Civil Status</label>
                    <input type="text" id="civil-status" name="civil_status" placeholder="Enter civil status">
                    @error('civil_status')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="religion">Religion</label>
                    <input type="text" id="religion" name="religion" placeholder="Enter religion">
                    @error('religion')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="citizenship">Citizenship</label>
                    <input type="text" id="citizenship" name="citizenship" placeholder="Enter citizenship">
                    @error('citizenship')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </section>

            <section class="education">
                <h1>Education</h1>
                </div>
                <div class="form-group">
                    <label for="institute">Institute</label>
                    <input type="text" id="institute" name="institute" placeholder="Enter the institute name">
                    @error('institute')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="degree">Degree</label>
                    <input type="text" id="degree" name="degree" placeholder="Enter your degree">
                    @error('degree')
                    <p class="error">{{$message}}</p>
                    @enderror

                    <!-- Experience Section -->
                    <section class="experience">
                        <h1>Experience</h1>
                        <div class="form-group">
                            <label for="job-title">Job Title</label>
                            <input type="text" id="job-title" name="jobtitle" placeholder="Enter your job title">
                            @error('jobtitle')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="organization">Organization</label>
                            <input type="text" id="organization" name="organization" placeholder="Enter the organization name">
                            @error('organization')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job-description">Job Description</label>
                            <textarea id="job-description" name="jobdescription" placeholder="Describe your job responsibilities"></textarea>
                            @error('jobdescription')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="startdate">Start Date</label>
                            <input type="date" id="startdate" name="startdate">
                            @error('startdate')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="enddate">End Date</label>
                            <input type="date" id="enddate" name="enddate">
                            @error('enddate')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>

                        <section class="contact-info">
                            <h1>Contact Information</h1>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email">
                                @error('email')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone-number">Phone Number</label>
                                <input type="text" id="phone-number" name="phonenumber" placeholder="Enter your phone number">
                                @error('phonenumber')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" id="website" name="website" placeholder="Enter your website URL">
                                @error('website')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                        </section>


                        <!-- Character reference Section -->
                        <section class="Characterreference">

                            <div class="form-group">
                                <label for="Characterreference">Character Reference</label>
                                <input type="text" id="job-title" name="Characterreference" placeholder="Enter your Reference">
                                @error('Characterreference')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>




                            Skills Section
                            <section class="skills">
                                <h1>Skills</h1>
                                <div class="form-group">
                                    <label for="skills">List your skills</label>
                                    <textarea id="skills" name="skills" placeholder="Enter your skills (e.g., Adobe Photoshop, Logo Design)"></textarea>
                                    @error('skills')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </section>


                            <section class="certifications">
                                <h1>Certifications</h1>
                                <div class="form-group">
                                    <label for="certification-title">Certification Title</label>
                                    <input type="text" id="certification-title" name="certification_title" placeholder="Enter certification title">
                                    @error('certification_title')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="certification-date">Certification Date</label>
                                    <input type="date" id="certification-date" name="certification_date">
                                    @error('certification_date')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </section>

                            <button class="submit-profile" type="submit">Submit Profile</button>
    </form>
    </main>
</body>

</html>