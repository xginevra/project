<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesdraft.css">
    <title>New Patient Form</title>
</head>
<body>
<header>
    <a href="index.html">
        <object data="Logo.svg" height="20vh" style="margin-top: 5vh; margin-left: 6vh;"> </object>
    </a>
    <!--pages are yet to be created-->
    <nav>
        <a href="loggedin.php" class="navbtn">My Profile</a>
        <a href="contact.html" class="navbtn">My Patients</a>

        <a href="logout.php">
            <button type="button" class="custombutton">LOG OUT</button>
        </a>
    </nav>
</header>

<h2 class="h2">New Patient Form</h2>

<form class="form" action="submit_form.php" method="post">

    <label for="name">Name:</label>
    <input class="input1" type="text" id="name" name="name" required><br>

    <p>Gender:</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>

    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>

    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br>

    <br>
    <br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br>

    <label for="zipcode">Zipcode:</label>
    <input type="text" id="zipcode" name="zipcode" required><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" required><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br>

    <br>

    <label for="prevDiseases">Known Previous Diseases:</label>
    <textarea id="prevDiseases" name="prevDiseases"></textarea><br>

    <br>

    <label>Known Allergies:</label><br>
    <input type="checkbox" id="allergy1" name="allergies[]" value="Peanuts">
    <label for="allergy1">Peanuts</label><br>

    <input type="checkbox" id="allergy2" name="allergies[]" value="Shellfish">
    <label for="allergy2">Shellfish</label><br>

    <input type="checkbox" id="allergy3" name="allergies[]" value="Pollen">
    <label for="allergy3">Pollen</label><br>

    <input type="checkbox" id="allergy4" name="allergies[]" value="No known allergy">
    <label for="allergy4">No known allergy</label><br>
    <!-- Add more checkboxes as needed -->

    <br>

    <input type="submit" name="submit_it" value="Submit">
</form>

</body>
</html>
