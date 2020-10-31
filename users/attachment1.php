<?php
include_once("config.php");

$result = " SELECT 	* from player_registration";
$result1= "SELECT pre_houseno,pre_location,pre_village,pre_thana,pre_district,pre_postcode,	per_houseno,per_location,
per_village,per_thana,per_district,per_postcode from player_registration ";
$result2= "SELECT b_club_name,b_opponent_club,b_event_id,b_match_id,b_runs,b_wickets from player_registration";
$result3 = "SELECT prev_club_name,prev_from,prev_to,total_runs,total_wickets,team_leader from previous_his";
$result4 = "SELECT name_of_degree,department,board,year,result From educational_qua";
$result = mysqli_query($conn,$result);
$result1  = mysqli_query($conn,$result1);
$result2  = mysqli_query($conn,$result2);
$result3  = mysqli_query($conn,$result3);
$result4 = mysqli_query($conn,$result4);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title >View Student Information</title>
<style media="screen">
  	body{
  		font-family: sans-serif;
  		background: url(picture/picture2.jpg);
  		background-repeat: no-repeat;
  		background-size: cover;
  		background-position: center center;
  		background-attachment: fixed;
}
  	table,th,td{
  		border: 1px solid black;
  		border-collapse: collapse;
  		opacity: 1;
}
  	th,td {
  		padding: 3px;
  		text-align: center;
  		border-color: #rgb(45, 129, 106);
  		color: white;
  	}
  	tr:nth-child(even){
  		background-color:	#99ccff;
  	}
  tr:nth-child(odd){
  background-color: #1a8cff;
  }
  table{
  	width: 90%;
  }
  a:link, a:visited {
      background-color: #f44336;
      color: white;
    //  padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
  }

  h1{
  	color: #6666ff;
  	font-family: sans-serif;
  	background-color:#000000;
  	padding: 50px 30px;
  	page-break-inside: auto;
  border-radius: 6px;
  margin: 0px 0px;
  }
  h2{
  	color: black;
  	font-family: sans-serif;
  	font-size:30px;
  }

  div{
  	font-size: 17px;
  }
  hr{
  	margin: 0px 0px;
  }
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

</style>
</head>
<body>


	<h1 align= "center">Club Registration Information</h1>
							<!--Navigation Bar -->
	<div class="topnav" id="myTopnav">
	  <a href="home.html" class="active">Home</a>

	 

	  <a href="about.html">About</a>
	  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>

	<hr>
								<!--View -->
<h2 align="center">Player Information</h2>

<div>	<table align="center" cellpadding="1" border="1">

       <tr>
         <th>Player Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Father's Name</th>
    <th>Mother's Name</th>
    <th>Date Of Birth</th>
   
    <th>Membership</th>
    <th>Signature of the player</th>
    <th>Date</th>

  </tr></div>

	<?php
  if(mysqli_num_rows($result) > 0)
                          {
	while($res = mysqli_fetch_array($result)) {
	?>
		<tr>
		<td><?php echo $res['p_id']; ?></td>

		<td><?php echo $res['first_name'];?></td>
        <td><?php echo $res['last_name'];?></td>
        <td><?php echo $res['fathers_name']; ?></td>

    		<td><?php echo $res['mothers_name'];?></td>
            
            <td><?php echo $res['date_of_birth'];?></td>
            <td><?php echo $res['membership']; ?></td>

        		<td><?php echo $res['signature'];?></td>
                <td><?php echo $res['date_of_player'];?></td>
<?php
		}
  }
		?>

	</table>
	<hr/>
  <h2 align="center">Player Address</h2>
  <div>	<table align="center" cellpadding="1" border="1">

         <tr>
      <th>Pre.House No</th>
      <th>Pre.Location</th>
      <th>Pre.Village/Street</th>
      <th>Pre.Thana</th>
      <th>Pre.District</th>
      <th>Pre.Post Code</th>
      <th>Per.House No</th>
      <th>Per.Location</th>
      <th>Per.Village/Street</th>
      <th>Per.Thana</th>
      <th>Per.District</th>
      <th>Per.Post Code</th>
    </tr></div>

  	<?php
    if(mysqli_num_rows($result) > 0)
                            {
  	while($res = mysqli_fetch_array($result1)) {
  	?>
  		<tr>
  		<td><?php echo $res['pre_houseno']; ?></td>

  		<td><?php echo $res['pre_location'];?></td>
          <td><?php echo $res['pre_village'];?></td>
          <td><?php echo $res['pre_thana']; ?></td>

      		<td><?php echo $res['pre_district'];?></td>
              <td><?php echo $res['pre_postcode'];?></td>
              <td><?php echo $res['per_houseno'];?></td>
              <td><?php echo $res['per_location']; ?></td>

          		<td><?php echo $res['per_village'];?></td>
                  <td><?php echo $res['per_thana'];?></td>
                  <td><?php echo $res['per_district']; ?></td>

                  <td><?php echo $res['per_postcode'];?></td>
<?php
  		}
    }
  		?>
    </table><hr>
    <h2 align="center">Player Best Perfomance</h2>
    <div>	<table align="center" cellpadding="1" border="1">

           <tr>

        <th>Club Name</th>
        <th>Opponent Club Name</th>
        <th>Event Id</th>
        <th>Match Id</th>
        <th>Runs</th>
        <th>Wickets</th>

      </tr></div>

    	<?php
      if(mysqli_num_rows($result) > 0)
                              {
    	while($res = mysqli_fetch_array($result2)) {
    	?>
    		<tr>
    		<td><?php echo $res['b_club_name']; ?></td>

    		<td><?php echo $res['b_opponent_club'];?></td>
            <td><?php echo $res['b_event_id'];?></td>
            <td><?php echo $res['b_match_id']; ?></td>

        		<td><?php echo $res['b_runs'];?></td>
                <td><?php echo $res['b_wickets'];?></td>
<?php
    		}
      }
    		?>
      </table><hr>
      <h2 align="center">Player Previous History</h2>
      <div>	<table align="center" cellpadding="1" border="1">

         <tr>

          <th>Club Name</th>
          <th>From</th>
          <th>To</th>
          <th>Total Runs</th>
            <th>Total Wickets</th>
          <th>Team Leader</th>
		  

        </tr></div>

        <?php
        if(mysqli_num_rows($result) > 0)
                                {
        while($res = mysqli_fetch_array($result3)) {
        ?>
          <tr>
          <td><?php echo $res['prev_club_name']; ?></td>

          <td><?php echo $res['prev_from'];?></td>
              <td><?php echo $res['prev_to'];?></td>
              <td><?php echo $res['total_runs']; ?></td>
              <td><?php echo $res['total_wickets']; ?></td>

              <td><?php echo $res['team_leader'];?></td>
			  
<?php
          }
        }
          ?>
        </table><hr>
        <h2 align="center">Player Educational Qualifications</h2>
        <div>	<table align="center" cellpadding="1" border="1">

           <tr>

            <th>Name Of Degree</th>
            <th>Institute/Department</th>
            <th>Board/University</th>
            <th>Year</th>
              <th>Result</th>


          </tr></div>

          <?php
          if(mysqli_num_rows($result) > 0)
                                  {
          while($res = mysqli_fetch_array($result4)) {
          ?>
            <tr>
            <td><?php echo $res['name_of_degree']; ?></td>

            <td><?php echo $res['department'];?></td>
                <td><?php echo $res['board'];?></td>
                <td><?php echo $res['year']; ?></td>
                <td><?php echo $res['result']; ?></td>
<?php
            }
          }
            ?>
          </table><hr>







</body>
</html>
