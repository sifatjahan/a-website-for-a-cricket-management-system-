<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style><style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style></style>

    <title>Player Registration Form</title>
  </head>
  <body>
      <h1 align="center">Bangladesh Cricket Club</h1>
    <div class="topnav" id="myTopnav">
      <a href="home.html" class="active">Home</a>

      
      <div class="dropdown">
        <button class="dropbtn">Form
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
         
          <a href="contract_view.php">Player Contract Form</a>
          <a href="club_view.php">Club Form</a>
          <a href="players_performance.php">Players Performance Form</a>
          <a href="matchinfo.php">Match Performance Form</a>
          <a href="teaminformation.php">Team Information Form</a>
        </div>
      </div>
     

      <a href="about.html">About</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <h1 align="center">Player Registration form</h1><hr>
    <div class="w3-container">
      <div class="w3-card-4">

<form action="player_form.php" method="post" class="w3-container">
<div class="w3-input">

  <label for="input">First name</label>
  <input type="text" name="first_name" id="input"  placeholder="Enter your First name"  class="w3-input">
  <label for="input">Last name</label>
  <input type="text" name="last_name" id="input" placeholder="Enter your Last name" class="w3-input">
  <label for="input">Father's Name</label>
  <input type="text" name="fathers_name" placeholder="Fathers Name" id="input" class="w3-input">
  <label for="input">Mother's name</label>
  <input type="text" name="mothers_name" id="input" placeholder="Enter your Mother's name" class="w3-input"><br>
  

  <h3>Present address</h3>
  <label for="input">House no</label>
  <input type="text" name="pre_houseno" id="input" placeholder="Enter your House no" class="w3-input">
  <label for="input">Location</label>
  <input type="text" name="pre_location" id="input" placeholder="Enter your Location name" class="w3-input">
  <label for="input">Village/Street</label>
    <input type="text" name="pre_village" id="input" placeholder="Enter your Village/street" class="w3-input">
  <label for="input">Thana</label>
    <input type="text" name="pre_thana" id="input" placeholder="Enter your Thana name" class="w3-input">
    <label for="input">District</label>
      <input type="text" name="pre_district" id="input" placeholder="Enter your District Name" class="w3-input">
    <label for="input">Post Code</label>
      <input type="text" name="pre_postcode" id="input" placeholder="Enter your Post Code" class="w3-input">

      <h3>Permanent address</h3>
      <label for="input">House no</label>
      <input type="text" name="per_houseno" id="input" placeholder="Enter your House no" class="w3-input">
      <label for="input">Location</label>
      <input type="text" name="per_location" id="input" placeholder="Enter your Location name" class="w3-input">
      <label for="input">Village/Street</label>
        <input type="text" name="per_village" id="input" placeholder="Enter your Village/street" class="w3-input">
      <label for="input">Thana</label>
        <input type="text" name="per_thana" id="input" placeholder="Enter your Thana name" class="w3-input">
        <label for="input">District</label>
          <input type="text" name="per_district" id="input" placeholder="Enter your District Name" class="w3-input"><br>
        <label for="input">Post Code</label>
          <input type="text" name="per_postcode" id="input" placeholder="Enter your Post Code" class="w3-input">
    <label for="date">Birth Of Date</label>
    <input type="date" name="date_of_birth" id="date" placeholder="Enter your Birth Of Date" class="w3-input" onblur="getAge()">

    <h3>Previous History</h3>
    <label for="input">Club Name</label>
    <input type="text" name="prev_club_name" placeholder="Previous club Name"  class="w3-input">
    <label for="input">Form</label>
    <input type="date" name="prev_from" id="input" placeholder="From date" class="w3-input">
    <label for="input">To</label>
    <input type="date" name="prev_to" id="input" placeholder="to date" class="w3-input">
    <label for="input">Total Runs</label>
      <input type="text" name="total_runs" id="input" placeholder="Enter your total runs" class="w3-input">
    <label for="input">Total Wickets</label>
      <input type="text" name="total_wickets" id="input" placeholder="Enter your total wickets" class="w3-input">
      <h3>Team Leader</h3>
        <input type="radio" name="team_leader" value="Yes" class="w3-input">YES <br>
      <input type="radio" name="team_leader" value="No" class="w3-input"> NO <br>


<h3>Best Performance</h3>
<label for="input">Club Name</label>
<input type="text" name="b_club_name" placeholder="club Name" id="input" class="w3-input">
<label for="input">Opponent Club Name</label>
<input type="text" name="b_opponent_club" id="input" placeholder="Opponent Club Name" class="w3-input">
<label for="input">Event Id</label>
<input type="text" name="b_event_id" id="input" placeholder="Event Id" class="w3-input">
<label for="input">Match Id</label>
  <input type="text" name="b_match_id" id="input" placeholder="Enter your Match Id" class="w3-input">
  <label for="input">Runs</label>
    <input type="text" name="b_runs" id="input" placeholder="Enter your Runs" class="w3-input"><br>
  <label for="input">Wickets</label>
    <input type="text" name="b_wickets" id="input" placeholder="Enter your Wicket" class="w3-input">

<h3>Educational Qualifications</h3>
<label for="input">Name Of Degree</label>
<input type="text" name="name_of_degree" placeholder="Name Of Degree" id="input" class="w3-input">
<label for="input">Institute/Department</label>
<input type="text" name="department" id="input" placeholder="Institute/Department" class="w3-input">
<label for="input">Board/University</label>
<input type="text" name="board" id="input" placeholder="Board/University" class="w3-input">
<label for="input">Year</label>
  <input type="text" name="year" id="input" placeholder="Enter Year" class="w3-input">
  <label for="input">Result</label>
    <input type="text" name="result" id="input" placeholder="Enter your Result" class="w3-input"><br>

    <label> Membership</label>
    <input type="text" name="membership" class="w3-input">
    <label> Signature of the player </label>
     <input type="text" name="signature" class="w3-input">
     <label>Date </label>
      <input type="date" name="date_of_player" class="w3-input">


    <br>
    <input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Reset" value="Reset">
    </div>
  </div>
</div>
  </form>


  <script>
function getAge() {
var dateString = document.getElementById("date").value;
if(dateString !="")
{
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    var da = today.getDate() - birthDate.getDate();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    if(m<0){
        m +=12;
    }
    if(da<0){
        da +=30;
    }
    
  if(age <= 35)
{
alert("Age "+age+" is allowed");

} else {

alert("Age "+age+" is restricted");
}
} 
}


</script>

  </body>
</html>
