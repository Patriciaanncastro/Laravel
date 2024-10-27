<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            flex-direction: row;
            max-width: 1000px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .left-sidebar {
            flex: 1;
            background: #d291bc;
            color: #000000;
            padding: 20px;
            margin-right: 20px;
            border-radius: 8px;
            box-shadow: 2px 0 5px rgba(112, 250, 250, 0.1);
        }
        .rounded-box {
            background: #fec8d8;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .rounded-box h2 {
            margin-top: 0;
        }
        .rounded-box p {
            margin: 5px 0;
            display: flex;
            align-items: center;
        }
        .rounded-box i {
            margin-right: 10px;
            color: #000;
        }
        .main-content {
            flex: 2;
        }
        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        .education ul, .experience ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .education li, .experience li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .date {
            background-color: #957dad;
            color: #fff;
            border-radius: 15px;
            padding: 5px 10px;
            margin-left: 10px;
            min-width: 100px;
            text-align: center;
        }
        .skills-box, .certification-box {
            background: #fec8d8;
            color: #000000;
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .skills-box h2, .certification-box h2 {
            border-bottom: 2px solid #fff;
            padding-bottom: 5px;
        }
        .contact-info img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .signature-container {
            text-align: center;
            margin-top: 20px;
        }
        .signature-container img {
            width: 200px;
            height: 200px;
            margin-bottom: -10px; /* Pulls the image closer to the line */
        }
        .signature-line {
            border: 1px solid #333;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }
        .signature-name {
            font-weight: bold;
            margin-top: 10px;
        }
</style>
</head>
<body>
<div class="container">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
        <p style="text-align:center;"> 
        <img src="patc.png" width="200" height="200" alt="Profile Picture">
        <!-- Rounded Box for Personal Information and Contact Information -->
        <div class="rounded-box">
            <h2>Contact Information</h2>
            <p><i class="fas fa-phone"></i>{{$data['Contact']}}</p>
            <p><i class="fas fa-envelope"></i>    {{$data['Email']}}</p>
            <p><i class="fas fa-map-marker-alt"></i>    {{$data['Address']}}</p>
        </div>
        <div class="skills-box">
            {{$data['skills']}}
            <h2>Skills</h2>
            <ul class="skills">
                <li>Photo Editing</li>
                <li>Logo Designer</li>
                <li>Microsoft PowerPoint/Excel/Word</li>
                <li>Vector Artist</li>
                <li>Digital Artist</li>
                <li>Adobe Photoshop</li>
                <li>Adobe Illustrator</li>
                <li>UI/UX Designer</li>
                <li>Programmer</li>
            </ul>
        </div>
        <br>
        <div class="certification-box">
            {{$data['certification']}} 
            <h2>Certification</h2>
            <ul class="certification">
                <li>Passer of National Certificate NC III Visual Graphic Design - August 24, 2019</li>
                <li>Udemy Training Adobe Photoshop CC Fundamentals and Essentials Training - September 16, 2021</li>
            </ul>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content">
        <div class="body">
            <div class="statement">
                <h1>   {{$data['Name']}}</h1>
                <p>To obtain a position that will enable me to use my skills, experience, and ability to work well with people.</p>
            {{$data['Objective']}}
            </div>
        </div>
        <div class="section">
            {{$data['Personal Information']}}
            <h2> PERSONAL INFORMATION</h2>
            <p>Date of Birth: January 25, 2000</p>
            <p>Place of Birth: Calawitan, San Ildefonso, Bulacan</p>
            <p>Gender: Female</p>
            <p>Civil Status: Single</p>
            <p>Religion: Jehovah Witness</p>
            <p>Citizenship: Filipino</p>
            
            <h2>EDUCATION</h2>
             {{$data['education']}} 
            <ul class="education">

                <li>
                    <span>Baliwag Polytechnic College (BTECH) <br> Bachelor of Science in Information
                        Technology</span>
                    <span class="date">2024</span>
                    
                </li>
                <li>
                    <span>Integrated College of Business and Technology <br>Information Technology</span>
                    <span class="date">2018-2020</span>
                </li>
                <li>
                    <span>Senior High: Carlos F. Gonzales High School, Maguinao, San Rafael, Bulacan<br>(TVL)Information Communication and Technology</span>
                    <span class="date">2015-2016</span>
                </li>
                <li>
                    <span>Secondary Education: Carlos F. Gonzales High School, Maguinao, San Rafael, Bulacan</span>
                    <span class="date">2012-2015</span>
                </li>
            </ul>
        </div>
        <div class="section">
            {{$data['experience']}} 
            <h2>EXPERIENCE</h2>
            <ul class="experience">
           
                <li>
                    <span>Call Center Agent Non-voice - Infinite Frontline Communication</span>
                    <span class="date">2023</span>
                </li>
                <li>
                    <span>Clerk - Garlang San Ildefonso Bulacan</span>
                    <span class="date">2018-2020</span>
                </li>
                <li>
                    <span>Secretary (Eurasia Pharma Corporation) San Leonardo Nueva Ecija</span>
                    <span class="date">2020</span>
                </li>
                </ul>
        </div>
        <div class="section">
            {{$data['character references']}} 
            <h2>CHARACTER REFERENCES</h2>
            <ul class="references">
                <li>Herminio M. Cruz </li>
                Barangay Garlang Captain <br>
                09551167017
                <br>

                <li>Rowena O. Caysido </li>
                Barangay Garlang Secretary
                <br>
                09159005989
                <li>Genny Baron </li>
                 Barangay Garlang BHW
                 <br>
                 09296862304
                 <br>
                 
                 <hr style="margin-top: 20px; border: 1px solid #333; width: 200px; margin-left: auto; margin-right: auto;"> <!-- Adds a line with a fixed width -->

                <p style="text-align: center; font-weight: bold; margin-top: 10px;">PATRICIA ANN CASTRO</p> <!-- Name centered below the line -->
                 
            </ul>
        </div>
    </div>
</div>

</body>
</html>