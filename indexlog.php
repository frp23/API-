    <?php
     session_start();  

         include 'database.php';
           
    ?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
	html, body {
    height: 100%;
    margin: 0;
}
        body {
            background: linear-gradient(to bottom, #0000ff, #000000);
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
        }


        .login-form {
            display: none;
            margin-top: 20px;
            position: relative;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .login-form .form-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .login-form .form-buttons button {
            margin-left: 10px;
        }
    </style>
    <title>Nasa's Mars photos</title>
</head>
<body><p align="center">
	<img src="img/img1.png" align="center" width="200" />
	</p>
    <div class="header">
        <h1 style="font-family:'American Typewriter';" align="center">Explore Nasa's API MARS ROVER PHOTOS 2023</h1>
    </div>

    <h1>Welcome to Mars Rover Photos main page!</h1>
	<img src="img/img3.jpg" align="center" width="200"/>
    <h1>Nasa's API</h1>
    <p>Each rover has its own set of photos stored in the database, which can be queried separately. There are several possible queries that can be made against the API. Photos are organized by the sol (Martian rotation or day) on which they were taken, counting up from the rover's landing date. A photo taken on Curiosity's 1000th Martian sol exploring Mars, for example, will have a sol attribute of 1000. If instead you prefer to search by the Earth date on which a photo was taken, you can do that, too.
    Along with querying by date, results can also be filtered by the camera with which it was taken and responses will be limited to 25 photos per call. Queries that should return more than 25 photos will be split onto several pages, which can be accessed by adding a 'page' param to the query.</p>
    <img src="img/img4.jpg" align="center" width="200"/>
	<h1>Discover more about Mars, the rovers, and NASA's Mars missions:</h1>

    <p>Mars, often referred to as the "Red Planet," has captivated the curiosity of scientists and space enthusiasts for centuries. As the fourth planet from the Sun, Mars has long been a subject of interest due to its potential for harboring life and its similarities to Earth.</p>

    <p>In recent decades, NASA (National Aeronautics and Space Administration) has been at the forefront of exploring Mars through a series of successful missions and rovers.</p>

    <p>One of the most significant achievements in Mars exploration is the deployment of robotic rovers on its surface. NASA has successfully landed several rovers on Mars, including the Pathfinder mission's Sojourner rover, the Mars Exploration Rovers (Spirit and Opportunity), and the Mars Science Laboratory mission's Curiosity rover. These rovers have provided invaluable insights into the planet's geology, climate, and potential for sustaining life.</p>

    <p>The Mars rovers are equipped with advanced scientific instruments, cameras, and robotic arms, allowing them to traverse the Martian terrain and collect data. They have made groundbreaking discoveries, such as evidence of past water activity, the presence of organic compounds, and geological formations indicative of Mars' dynamic history.</p>

    <p>NASA's Mars missions have expanded our understanding of the planet's past and present conditions, bringing us closer to answering the fundamental question: Could Mars have supported life, or could it potentially support life in the future? These missions have paved the way for future human exploration, as NASA aims to send astronauts to Mars in the coming decades.</p>

    <p>Apart from NASA, other space agencies and organizations worldwide have also contributed to Mars exploration. The European Space Agency (ESA), for instance, has successfully sent the Mars Express orbiter and the ExoMars rover mission in collaboration with Roscosmos, the Russian space agency.</p>

    <p>The study of Mars continues to be a top priority for scientific research and exploration. New missions, such as the Mars 2020 mission featuring the Perseverance rover, are underway, aiming to gather more data, search for signs of ancient life, and prepare for future human missions.</p>

    <p>The quest to uncover the mysteries of Mars and unlock its secrets holds tremendous potential for advancing our understanding of planetary formation, habitability, and the possibilities of life beyond Earth. Through the ongoing efforts of space agencies and international collaborations, we are one step closer to unraveling the enigmatic nature of the Red Planet.</p>
	
<button onclick="toggleLoginForm('login')">Login</button>

<button onclick="toggleLoginForm('signin')">Sign In</button>

<form id="loginForm" class="login-form" style="display: none;" action="login.php" method="POST">
    <div class="form-buttons">
        <button onclick="toggleLoginForm()">Back</button>
        <button type="submit">Submit</button>
    </div>
    <input type="text" placeholder="Username" name="loginUsername" required>
    <input type="password" placeholder="Password" name="loginPassword" required>
</form>

<form id="signInForm" class="login-form" style="display: none;" action="register.php" method="POST">
    <div class="form-buttons">
        <button onclick="toggleLoginForm()">Back</button>
        <button type="submit">Submit</button>
    </div>
    <input type="text" placeholder="Username" name="registerUsername" required>
    <input type="password" placeholder="Password" name="registerPassword" required>
</form>


    <script>

        function toggleLoginForm(formType) {
            var loginForm = document.getElementById('loginForm');
            var signInForm = document.getElementById('signInForm');
            
            if (formType === 'login') {
                loginForm.style.display = 'block';
                signInForm.style.display = 'none';
            } else if (formType === 'signin') {
                loginForm.style.display = 'none';
                signInForm.style.display = 'block';
            } else {
                loginForm.style.display = 'none';
                signInForm.style.display = 'none';
            }
        }
    </script>
</body>
</html>
