<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('storage/css/edit.css')}}">
    <style>
        /* Apply Poppins font globally */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1,
        h3 {
            font-weight: 600;
        }

        button {
            font-family: 'Poppins', sans-serif;
        }

        /* Styling for the Personal Info section */
        .personal-info {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .personal-info-form {
            flex: 1;
            margin-right: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            font-size: 16px;
        }

        .form-group label {
            font-weight: 500;
        }

        /* Styling for Profile Picture Section */
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
            display: block;
            margin-top: 10px;
            text-align: center;
            cursor: pointer;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .personal-info {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .personal-info-form {
                margin-right: 0;
            }

            .profile-picture-wrapper {
                margin-bottom: 20px;
            }

            .profile-picture-wrapper img {
                width: 90px;
                height: 90px;
            }
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
        <h1>Edit User Profile</h1>

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
    <!-- Profile Picture Section -->

    <!-- Personal Information Section -->
    <form action="{{route('profile.update', $resume->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        @if ($resume->image)
        <div class="profile-picture-wrapper">
            <img src="{{asset('storage/'. $resume->image)}}" id="profile-picture-preview" alt="Profile Picture">
            <input type="file" id="profile-picture" name="profilepicture" accept="image/*" onchange="previewImage(event)">
        </div>
        @else
        <div class="profile-picture-wrapper">
            <img src="https://via.placeholder.com/100" id="profile-picture-preview" alt="Profile Picture">
            <input type="file" id="profile-picture" name="profilepicture" accept="image/*" onchange="previewImage(event)">
        </div>
        @endif
        <main>
            <!-- Personal Information Section -->
            <section class="personal-info">
                <div class="personal-info-form">
                    <h1>Personal Information</h1>

                    @if (session('success'))
                    <div class="success">{{session('success') }}</div>
                    @endif
                    @error ('failed')
                    <div class="failed">{{ $message }}</div>
                    @enderror
            </section>
            <div class="personal-info-form">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your Name" value="{{$resume->Name}}">
                    @error('name')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Objectives">Objective</label>
                    <textarea id="Ojectives" name="Objectives" placeholder="Enter your objectives">{{$resume->Objectives}}</textarea>
                    @error('Objectives')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date-of-birth">Date of Birth</label>
                    <input type="date" id="date-of-birth" name="date_of_birth" value="{{$resume->Dateofbirth}}">
                    @error('date_of_birth')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="place-of-birth">Place of Birth</label>
                    <input type="text" id="place-of-birth" name="place_of_birth" placeholder="Enter place of birth" value="{{$resume->Placeofbirth}}">
                    @error('place_of_birth')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option selected>{{ ucwords($resume->gender) }}</option>
                        @foreach (['male', 'female'] as $option)
                        @if ($option !== $resume->Gender)
                        <option value="{{ $option }}">{{ ucwords($option) }}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('gender')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="civil-status">Civil Status</label>
                    <input type="text" id="civil-status" name="civil_status" placeholder="Enter civil status" value="{{$resume->Civilstatus}}">
                    @error('civil_status')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="religion">Religion</label>
                    <input type="text" id="religion" name="religion" placeholder="Enter religion" value="{{$resume->Religion}}">
                    @error('religion')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="citizenship">Citizenship</label>
                    <input type="text" id="citizenship" name="citizenship" placeholder="Enter citizenship" value="{{$resume->Citizenship}}">
                    @error('citizenship')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                </section>

                <!-- Education Section -->
                <section class="education">
                    <h1>Education</h1>
            </div>
            <div class="form-group">
                <label for="institute">Institute</label>
                <input type="text" id="institute" name="institute" placeholder="Enter the institute name" value="{{$resume->institute}}">
                @error('institute')
                <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="education-item">
                <div class="form-group">
                    <label for="degree">Degree</label>
                    <input type="text" id="degree" name="degree" placeholder="Enter your degree" value="{{$resume->degree}}">
                    @error('degree')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <!-- Experience Section -->
                <section class="experience">
                    <h1>Experience</h1>
                    <div class="form-group">
                        <label for="job-title">Job Title</label>
                        <input type="text" id="job-title" name="jobtitle" placeholder="Enter your job title" value="{{$resume->jobTitle}}">
                        @error('jobtitle')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="organization">Organization</label>
                        <input type="text" id="organization" name="organization" placeholder="Enter the organization name" value="{{$resume->organization}}">
                        @error('organization')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="job-description">Job Description</label>
                        <textarea id="job-description" name="jobdescription" placeholder="Describe your job responsibilities">{{$resume->jobdescription}}</textarea>
                        @error('jobdescription')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="startdate">Start Date</label>
                        <input type="date" id="startdate" name="startdate" value="{{$resume->startdate}}">
                        @error('startdate')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="enddate">End Date</label>
                        <input type="date" id="enddate" name="enddate" value="{{$resume->enddate}}">
                        @error('enddate')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Contact Information Section -->
                    <section class="contact-info">
                        <h1>Contact Information</h1>
                        <div class="contact-info-form">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" value="{{$resume->email}}">
                                @error('email')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone-number">Phone Number</label>
                                <input type="tel" id="phone-number" name="phonenumber" placeholder="Enter your phone number" value="{{$resume->phoneNumber}}">
                                @error('phonenumber')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" id="website" name="website" placeholder="Enter your website URL" value="{{$resume->website}}">
                                @error('website')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                            </di>
                    </section>
                    <!-- Character reference Section -->
                    <section class="Characterreference">
                        <!-- <h1>Character Reference</h1> -->
                        <div class="form-group">
                            <label for="Characterreference">Character Reference</label>
                            <input type="text" id="job-title" name="Characterreference" placeholder="Enter your Reference" value="{{$resume->Characterreference}}">
                            @error('Characterreference')
                            <p class="error">{{$message}}</p>
                            @enderror
                        </div>
                        Skills Section
                        <section class="skills">
                            <h1>Skills</h1>
                            <div class="form-group">
                                <label for="skills">List your skills</label>
                                <textarea id="skills" name="skills" placeholder="Enter your skills (e.g., Adobe Photoshop, Logo Design)">{{$resume->skills}}</textarea>
                                @error('skills')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </section>


                        <section class="certifications">
                            <h1>Certifications</h1>
                            <div class="form-group">
                                <label for="certification-title">Certification Title</label>
                                <input type="text" id="certification-title" name="certification_title" placeholder="Enter certification title" value="{{$resume->certification_title}}">
                                @error('certification_title')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="certification-date">Certification Date</label>
                                <input type="date" id="certification-date" name="certification_date" value="{{$resume->certification_date}}">
                                @error('certification_date')
                                <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </section>

                        <!-- Confirmation Section -->
                        <!-- <div class="confirmation">
                            <input type="checkbox" id="confirm-profile">
                            <label for="confirm-profile">Are you sure you want to create a new profile?</label>
                        </div> -->
                        <br>

                        <button class="create-profile" type="submit">Save Changes </button>
    </form>
    </main>
    <script>
        function goHome() {
            window.location.href = "{{ route('home') }}"; // Change this to your home page's URL
        }
    </script>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profile-picture-preview');
                output.src = reader.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>