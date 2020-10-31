<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <title>Club Registration Form</title>
  </head>
  <body>
    <h1 align="center">Club Registration Form</h1><hr>
    <div class="w3-container">
      <div class="w3-card-4">

<form action="club_form.php" method="post" class="w3-container">
<div class="w3-input">
  <label for="input">Club Id</label>
  <input type="text" name="club_id" placeholder="Enter Club Id" id="input" class="w3-input">
  <label for="input">Name Of The Club</label>
  <input type="text" name="name_of_club" id="input"  placeholder="Enter your Name Of Club"  class="w3-input">
  <label for="input">Date Of Establishment</label>
  <input type="date" name="date_of_establishment" id="input" placeholder="Enter your Date Of Establishment" class="w3-input">

  <h3>Address</h3>
  <label for="input">House No </label>
  <input type="text" name="a_house_no" placeholder="House No" id="input" class="w3-input">
  <label for="input">Location</label>
  <input type="text" name="a_location" id="input" placeholder="Enter your Location" class="w3-input"><br>
  <label for="input">Village/Street</label>
  <input type="text" name="a_street" id="input" placeholder="Enter your Village/Street" class="w3-input">
  <label for="input">Thana</label>
  <input type="text" name="a_thana" placeholder="Enter Thana" id="input" class="w3-input">
  <label for="input">District</label>
  <input type="text" name="a_district" id="input"  placeholder="Enter your District"  class="w3-input">
  <label for="input">Post Code</label>
  <input type="text" name="a_post_code" placeholder="Enter Thana" id="input" class="w3-input">
  <label for="input">Name Of The President</label>
  <input type="text" name="name_of_president" id="input"  placeholder="Enter your Name Of President"  class="w3-input"><br>
  <input type="submit" name="Submit" value="Submit">
  <input type="reset" name="Reset" value="Reset">
  </div>
</div>
</div>
</form>

</body>
</html>
