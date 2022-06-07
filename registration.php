<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form | Imperial College of Kolkata</title>
  <link rel="stylesheet" href="css/registration.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <ick-header 
    logo-path="./img/logo.png" 
    style-path="./components/ick-header/index.css" 
    active="#"
  >
  </ick-header>
  <script src="./components/ick-header/index.js"></script>
  <div class="regform">
    <h1>Registration Form</h1>
  </div>
  <div class="main">
    <form action="connect.php" method="post">
      <div id="name">
        <h2 class="name">Name</h2>
        <input type="text" class="firstname" name="firstname"><br>
        <label class="firstlabel">first name</label>
        <input type="text" class="lastname" name="lastname">
        <label class="lastlabel">last name</label>
      </div>
      <h2 class="name">Gender</h2>
      <div class="radio">
        <input type="radio" id="Male" name="gender" value="Male" checked>
        <label for="Male">Male</label>
        <input type="radio" id="Female" name="gender" value="Female">
        <label for="Female">Female</label>
        <input type="radio" id="Other" name="gender" value="Other">
        <label for="Other">Other</label>
      </div>

      <h2 class="name">College Name</h2>
      <input type="text" class="college" name="college">

      <h2 class="name">Date of Birth</h2>
      <input type="date" id="dob" class="date_of_birth" name="dob" value="2018-07-22" min="1994-01-01"
        max="2020-12-31">



      <h2 class="name">Email</h2>
      <input type="text" class="email" name="email" type="email" pattern=".+@gmail\.com" size="30" required>

      <h2 class="name">Phone</h2>
      <input type="tel" maxlength="2" class="code" name="areacode" pattern="[0-9]{2}">
      <label class="area-code">Area Code</label>
      <input type="tel" maxlength="10" class="number" name="phone" pattern="[0-9]{10}">
      <label class="phone-number">Phone Number</label>

      <h2 class="name">Department</h2>
      <select name="department" class="option">
        <option disabled="disabled" selected="selected">--Choose Option--</option>
        <option>Bachelor of Computer Application</option>
        <option>Bachelor of Business Administration</option>
        <option>Bachelor of Business Administration in Hospital Management</option>
        <option>Bachelor of Science</option>
        <option>Bachelor of Arts</option>
        <option>Master of Science</option>
        <option>Master of Computer Application</option>
        <option>Master of Business Administration</option>
      </select>

      <h2 class="name">Semester</h2>
      <select name="semester" class="option">
        <option disabled="disabled" selected="selected">--Choose Option--</option>
        <option>1st Semester</option>
        <option>2nd Semester</option>
        <option>3rd Semester</option>
        <option>4th Semester</option>
        <option>5th Semester</option>
        <option>6th Semester</option>
      </select>

      <h2 class="name">Outdoor Events</h2>
      <label class="events">
        <input type="checkbox" name="outdoors[]" value="Cricket">&nbsp CRICKET
      </label>
      <label class="events">
        <input type="checkbox" name="outdoors[]" value="Basketball">&nbsp BASKETBALL
      </label>
      <label class="events">
        <input type="checkbox" name="outdoors[]" value="Football">&nbsp FOOTBALL
      </label>
      <br />
      <label class="events">
        <input type="checkbox" name="outdoors[]" value="100M race">&nbsp 100m RACE
      </label>
      <label class="events">
        <input type="checkbox" name="outdoors[]" value="400M race">&nbsp 400m RACE
      </label>
      <label class="events">
        <input type="checkbox" name="outdoors[]" value="Relay Race">&nbsp RELAY RACE
      </label>
      <br />
      <label class="events">
        <input type="checkbox" name="outdoors[]" value="Kabadi">&nbsp KABADI
      </label>

      <h2 class="name">Indoor Events</h2>
      <label class="events">
        <input type="checkbox" name="indoors[]" value="Chess">&nbsp CHESS
      </label>
      <label class="events">
        <input type="checkbox" name="indoors[]" value="TableTennis">&nbsp TABLE TENNIS
      </label>
      <label class="events">
        <input type="checkbox" name="indoors[]" value="Carrom">&nbsp CARROM
      </label>
      <br />
      <label class="events">
        <input type="checkbox" name="indoors[]" value="Badminton">&nbsp BADMINTON
      </label>
      <button class="register-button" type="submit" name="submit">Register</button>
    </form>
  </div>

  <ick-footer 
    style-path="./components/ick-footer/index.css"
  >
  </ick-footer>
  <script src="./components/ick-footer/index.js"></script>
</body>

</html>


</body>

</html>