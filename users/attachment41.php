<?php
include_once("config.php");

$result = " SELECT 	* from performance";

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
    <th>Player Id</th>
    <th> Match Id</th>
    <th>Venue Id</th>
    <th>Date of the Match</th>
    <th>Total Wickets</th>
    <th>Total Runs</th>
    <th>Performance</th>
    
  </tr></div>

	<?php
  if(mysqli_num_rows($result) > 0)
                          {
	while($res = mysqli_fetch_array($result)) {
	?>
		<tr>
		<td><?php echo $res['p_id']; ?></td>

		<td><?php echo $res['match_id'];?></td>
        <td><?php echo $res['venue_id'];?></td>
        <td><?php echo $res['date_of_match']; ?></td>

    		<td><?php echo $res['wickets'];?></td>
            <td><?php echo $res['runs'];?></td>
            <td><?php echo $res['per_formance'];?></td>
           

        		


	<?php
		}
  }
		?>

	</table>
	<hr/>

	<button type="button" class="btn" align="center"><a href="home.html">Home</a></button>






</body>
</html>
