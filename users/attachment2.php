<?php
include_once("config.php");

$result = " SELECT 	contract_id,club_id,club_name,	f_first_name,f_last_name,p_id,a_first_name,a_last_name,a_designation,c_start_date,c_end_date,
c_amount,contract_w1,contract_w2 from contract";
$result1  = "SELECT 	payment_id,serial_num,	due_date,payment_date,	amount from payment";
$result = mysqli_query($conn,$result);
$result1 = mysqli_query($conn,$result1);
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

	<h1 align= "center">Contract Form Information</h1>
	<hr>

<div>	<table align = "center" cellpadding="1" border="1">

       <tr>
    <th>Contract Id</th>
    <th> Club Id</th>
    <th>Club Name</th>
    <th>F.First Name</th>
    <th>F.Last name</th>
    <th>F.Player Id</th>
    <th>A.First Name</th>
    <th>A.Last Name</th>
    <th>Designation</th>
    <th>C.Start Date</th>
    <th>C.Last Date</th>
    <th>Contract Amount</th>
    <th>Contract Witness 1</th>
    <th>Contract Witness 2</th>

  </tr></div>

	<?php
  if(mysqli_num_rows($result) > 0)
                          {
	while($res = mysqli_fetch_array($result)) {
	?>
		<tr>
		<td><?php echo $res['contract_id']; ?></td>

		<td><?php echo $res['club_id'];?></td>
        <td><?php echo $res['club_name'];?></td>
        <td><?php echo $res['f_first_name']; ?></td>

    		<td><?php echo $res['f_last_name'];?></td>
            <td><?php echo $res['p_id'];?></td>
            <td><?php echo $res['a_first_name'];?></td>
            <td><?php echo $res['a_last_name']; ?></td>

        		<td><?php echo $res['a_designation'];?></td>
                <td><?php echo $res['c_start_date'];?></td>
                <td><?php echo $res['c_end_date']; ?></td>
                <td><?php echo $res['c_amount'];?></td>
                    <td><?php echo $res['contract_w1'];?></td>
                    <td><?php echo $res['contract_w2']; ?></td>
		</tr>

	<?php
		}
  }
		?>

	</table>
	<hr/>
  <h2 align="center">Payment Schedule</h2>
  <div>	<table align = "center" cellpadding="1" border="1">

         <tr>
      <th>Payment Id</th>
      <th>Serial Number</th>
      <th> Due Date</th>
      <th>Payment Date</th>
      <th>Amount</th>


    </tr></div>

  	<?php
    if(mysqli_num_rows($result) > 0)
                            {
  	while($res = mysqli_fetch_array($result1)) {
  	?>
  		<tr>
  		<td ><?php echo $res['payment_id']; ?></td>

  		<td><?php echo $res['serial_num'];?></td>
          <td><?php echo $res['due_date'];?></td>
          <td><?php echo $res['payment_date']; ?></td>
          <td><?php echo $res['amount']; ?></td>


  		</tr>

  	<?php
  		}
    }
  		?>

  	</table>
		<hr>
		<button type="button" class="btn"><a href="home.html">Home</a></button>





</body>
</html>
