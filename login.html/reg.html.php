<html lang="en">
    <?php 
    for ($i=0; $i < 10; $i++) { 
        echo " hello";
    }
    ?>
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        /* CSS for centering the heading */
        .center-text {
            text-align: center;
        }

        /* CSS to add space between heading and profile picture */
        .booking-heading {
            margin-bottom: 20px; /* Adjust the value to control the space */
        }
    </style>
    <link rel="stylesheet" href="./stylesreg.css" />
</head>
<body>
<h1>Registration Form</h1>
<p>Please register all the details</p>
<form method="post" action="https://register-demo.freecodecamp.org">
    <fieldset>
        <label for="first-name">
          Enter Your First Name: 
          <input id="first-name" name="first-name" type="text" required/>
        </label>
        <label>
          Enter Your Last Name: 
          <input id="last-name" name="last-name" type="text" required/>
        </label>
        <!-- New Phone Number Field -->
        <label>Enter Your Phone Number: <input id="phone" name="phone" type="tel" required/></label>
        <label for="email">Enter Your Email: <input id="email" name="email" type="email" required/></label>
        <label for="new-password">Create a New Password: <input id="new-password" name="new-password" type="password"
                                                                pattern="[a-z0-5]{8,}" required/></label>
        <!-- New Address Field -->
        <label for="address">Enter Your Address: <input id="address" name="address" type="text" required/></label>
    </fieldset>
    <fieldset>
        <div class="center-text"> <!-- Center-align the heading -->
            <h2 class="booking-heading">BOOKING INFORMATION</h2> <!-- New Heading with added class -->

        </div>
        <label for="age">Input your age (years): <input id="age" type="number" name="age" min="13" max="120"/></label>
        <label for="referrer">GENDER
            <select id="referrer" name="referrer">
                <option value="">(select one)</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Other</option>
            </select>
        </label>

        <!-- New Fields -->
        <label for="check-in-date">Check-In Date: <input id="check-in-date" type="date" name="check-in-date"
                                                        required/></label>
        <label for="check-out-date">Check-Out Date: <input id="check-out-date" type="date" name="check-out-date"
                                                           required/></label>
        <!-- Changed "Room Type" to a Select Field -->
        <label for="room-type">Room Type:
            <select id="room-type" name="room-type" required>
                <option value="standard">Standard</option>
                <option value="deluxe">Deluxe</option>
                <option value="suite">Suite</option>
            </select>
        </label>
        <!-- Changed "Smoking" to a Select Field -->
        <label for="smoking">Smoking:
            <select id="smoking" name="smoking" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </label>
        <label for="guests">Number of Guests: <input id="guests" type="number" name="guests" required/></label>
    </fieldset>
    <fieldset>
        <label for="terms-and-conditions">
            <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline"/> I
            accept the <a href="https://www.freecodecamp.org/news/terms-of-service/">terms and conditions</a>
        </label>
    </fieldset>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>
