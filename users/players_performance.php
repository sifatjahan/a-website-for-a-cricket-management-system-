<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <title>Players Performance Form</title>
  </head>
  <body>
    <h1 align="center">Players Performance Form</h1><hr>
    <div class="w3-container">
      <div class="w3-card-4">

<form action="performance.php" method="post" class="w3-container">
<div class="w3-input">
  <label for="input">Match Id</label>
  <input type="text" name="match_id" placeholder="Enter Match Id" id="input" class="w3-input">
  <label for="input">Venue Id</label>
  <input type="text" name="venue_id" id="input"  placeholder="Enter Venue Id"  class="w3-input">
  <label for="input">Date Of Match</label>
  <input type="date" name="date_of_match" id="input" placeholder="Enter the date of match" class="w3-input">
  <label for="input">Total Wickets</label>
  <input type="text" name="wickets" placeholder="Total Wickets" id="input" class="w3-input">
  <label for="input">Total Runs</label>
  <input type="text" name="runs" placeholder="Total Runs" id="input" class="w3-input">
  <label for="input">Outstanding Performance</label>
  <input type="text" name="per_formance" placeholder="About Performance" id="input" class="w3-input">
  
  <input type="submit" name="Submit" value="Submit">
  <input type="reset" name="Reset" value="Reset">
  </div>
</div>
</div>
</form>

</body>
</html>
