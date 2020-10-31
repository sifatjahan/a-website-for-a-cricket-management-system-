<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <title>Match Information Form</title>
  </head>
  <body>
    <h1 align="center">Match Information Form</h1><hr>
    <div class="w3-container">
      <div class="w3-card-4">

<form action="match.php" method="post" class="w3-container">
<div class="w3-input">
  <label for="input">Event Id</label>
  <input type="text" name="event_id" placeholder="Enter Event Id" id="input" class="w3-input">
  <label for="input">Venue Id</label>
  <input type="text" name="venue_id" id="input"  placeholder="Enter Venue Id"  class="w3-input">
  <label for="input">Date Of Match</label>
  <input type="date" name="date_of_match" id="input" placeholder="Enter the date of match" class="w3-input">
  <label for="input">Match id</label>
  <input type="text" name="match_id" placeholder="Enter match id" id="input" class="w3-input">
  <label for="input">Man Of the Match</label>
  <input type="text" name="man_of_match" placeholder="Enter man of the match" id="input" class="w3-input">
  <label for="input">Umpires</label>
  <input type="text" name="umpires" placeholder="Name of Umpires" id="input" class="w3-input">
  
  <input type="submit" name="Submit" value="Submit">
  <input type="reset" name="Reset" value="Reset">
  </div>
</div>
</div>
</form>

</body>
</html>
