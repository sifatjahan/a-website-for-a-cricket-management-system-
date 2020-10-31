<?php
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = "SELECT p.p_id, p.first_name, p.last_name, c.club_id, c.club_name FROM player_registration p, contract c WHERE p.p_id = c.p_id and p.p_id=3";

$result = mysqli_query($conn, $result);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title >View Players Information</title>
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
</head>
<body>
<h1>Players Information</h1>
<hr>
<table>
 <tr>
 <th> Player Id: </th>
 <th>First Name:</th>
 <th >Last name:</th>
  <th>Club id:</th>
 <th>Club Name:</th>
 
 </tr>
<?php
while($res = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $res['p_id']; ?></td>
<td><?php echo $res['first_name']; ?></td>
<td><?php echo $res['last_name'];?></td>
 
 <td><?php echo $res['club_id']; ?></td>
 <td><?php echo $res['club_name']; ?></td>
 
</tr>
<?php
}
?>
</table>
</body>
</html>