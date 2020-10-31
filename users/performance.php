<?php

  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, "");
  // Check connection
  if ($conn==false) {
      die("Connection failed: " . $conn->connect_error);
  }
  $db = mysqli_select_db($conn, "project1");
            if(isset($_POST['Submit'])){
            $match_id = $_POST['match_id'];
            $venue_id = $_POST['venue_id'];
            $date_of_match = $_POST['date_of_match'];
			$wickets = $_POST['wickets'];
			$runs = $_POST['runs'];
			$per_formance = $_POST['per_formance'];
           


        $r1 = "INSERT INTO performance(match_id,venue_id,date_of_match,wickets,runs,per_formance)
         VALUES ('$match_id','$venue_id','$date_of_match','$wickets','$runs','$per_formance')";

      if ($conn->query($r1) === TRUE) {
        echo "New record created successfully";
          } else {
          echo " Error:";
           }



          }
       ?>
       <hr>
       <button type="button" class="btn"><a href="home.html">Home</a></button>
