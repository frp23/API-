<?php
session_start(); 

$apiKey = 'D598RScwSMIMCgYnVB8EXj4IjEaFsnBKRayE1s89';

$sol = isset($_GET['sol']) ? $_GET['sol'] : '';
$camera = isset($_GET['camera']) ? $_GET['camera'] : '';
$rover = "spirit";

if (empty($sol) || empty($camera) || empty($rover)) {
    echo 'Please provide values for sol, camera, and rover.';
} else {
    $url = 'https://api.nasa.gov/mars-photos/api/v1/rovers/' . $rover . '/photos?sol=' . $sol . '&camera=' . $camera . '&api_key=' . $apiKey;

    $response = file_get_contents($url);

    $data = json_decode($response, true);

    if (!empty($data['photos'])) {
        $_SESSION['photos'] = $data['photos']; 
        header("Location: sol.php"); 
        exit;
    } else {
        echo 'No photos found for the selected sol, camera, and rover.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body {
            background-color: #000000; /* Black background */
            color: #ffffff; /* White text */
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

        a {
            color: #ffffff; 
            border: 1px solid #ffffff; 
            padding: 5px 10px; 
            text-decoration: none; 
            position: absolute;
            top: 10px;
            left: 10px;
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
</head>
<body>
    <a href="index.php">Back</a>

    <img src="img/img2.jpg" />

    <form method="GET" action="">
        <label for="sol">Sol:</label>
        <input type="text" name="sol" id="sol" required value="<?php echo $sol; ?>">

        <label for="camera">Camera:</label>
        <input type="text" name="camera" id="camera" required value="<?php echo $camera; ?>">

        <button type="submit">Submit</button>
		<p> sol should be a number beetween 1 and 1000</p>
	<p> Camera should be written in abbrevetion and lowercase</p>
    </form>
	<img src="img/spirit.jfif" height="200"/>
    <h1>SPIRIT ROVER</h1>
    <p>
        The Spirit rover was one of NASA's Mars Exploration Rovers that landed on Mars in 2004. It operated until 2010 and played a crucial role in our understanding of the Martian surface. Spirit was designed to search for signs of past water activity on Mars and study the planet's geology.

        The rover was equipped with various scientific instruments, including cameras, spectrometers, and a rock abrasion tool. It explored the Gusev Crater and made important discoveries, such as evidence of ancient hot springs and the presence of minerals indicating a wet environment in Mars' past.

        Spirit faced challenges during its mission, including getting stuck in soft soil and losing mobility in one of its wheels. Despite these difficulties, it continued to contribute valuable data and operated as a stationary science platform until 2010.

        The Spirit rover's mission significantly advanced our knowledge of Mars and paved the way for future missions to the Red Planet.
    </p>
</body>
</html>

