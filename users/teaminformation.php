<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <title>Team Information Form</title>
  </head>
  <body>
    <h1 align="center">Team Information Form</h1><hr>
    <div class="w3-container">
      <div class="w3-card-4">

<form action="team.php" method="post" class="w3-container">
<div class="w3-input">
  <label for="input">Club Id</label>
  <input type="text" name="club_id" placeholder="Enter Club Id" id="input" class="w3-input">
  <label for="input">Player Id</label>
  <input type="text" name="p_id" id="input"  placeholder="Enter Player Id"  class="w3-input">
  <label for="input">Team Formation Date</label>
  <input type="date" name="team_formation" id="input" placeholder="Enter the date" class="w3-input">
  <label for="input">Event id</label>
  <input type="text" name="event_id" placeholder="Enter Event id" id="input" class="w3-input">
  <label for="input">Team Leader</label>
  <input type="text" name="leader_id" placeholder="Enter Team Leader Id" id="input" class="w3-input">
  <label for="input">Player Name</label>
  <input type="text" name="name" placeholder="Name of Player" id="input" class="w3-input">
  <label for="input">Coach Id</label>
  <input type="text" name="coach_id" placeholder="Enter Coach id" id="input" class="w3-input">
  <label for="input">Coach Name</label>
  <input type="text" name="coach_name" placeholder="Name of Coach" id="input" class="w3-input">
  
  <input type="submit" name="Submit" value="Submit">
  <input type="reset" name="Reset" value="Reset">
  </div>
</div>
</div>
</form>

</body>
</html>
