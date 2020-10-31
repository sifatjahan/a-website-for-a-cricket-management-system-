<?php
include_once("config.php");

$result = " SELECT 	* from teaminfo LIMIT 15";

$result = mysqli_query($conn,$result);

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
  		border: 2px solid black;
  		border-collapse: collapse;
  		opacity: 1.5;

  	}
  	th,td {
  		padding: 10px;
  		text-align: center;
  		border-color: #000066;
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
      padding: 20px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
  }


  a:hover, a:active {
      background-color: #000066;
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
  	color: #66ff66;
  	font-family: sans-serif;
  	font-size:30px;
  }

  div{
  	font-size: 17px;
  }
  hr{
  	margin: 0px 0px;
  }

  </style>
</head>
<body>

	<h1 align= "center">Players Performance In Match</h1>
	<hr>

<div>	<table align = "center" cellpadding="1" border="1">

       <tr>
    <th>Club Id</th>
    <th>Player Id</th>
    <th>Team Formation Date</th>
    <th>Event Id</th>
    <th>Leader Id</th>
    <th>Name</th>
    <th>Coach Id</th>
	<th>Coach Name</th>
    
  </tr></div>

	<?php
  if(mysqli_num_rows($result) > 0)
                          {
	while($res = mysqli_fetch_array($result)) {
	?>
		<tr>
		<td><?php echo $res['club_id']; ?></td>

		<td><?php echo $res['p_id'];?></td>
        <td><?php echo $res['team_formation'];?></td>
        <td><?php echo $res['event_id']; ?></td>

    		<td><?php echo $res['leader_id'];?></td>
            <td><?php echo $res['name'];?></td>
            <td><?php echo $res['coach_id'];?></td>
            <td><?php echo $res['coach_name'];?></td>

        		


	<?php
		}
  }
		?>

	</table>
	<hr/>

	<button type="button" class="btn" align="center"><a href="home.html">Home</a></button>






</body>
</html>
