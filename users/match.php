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
			$event_id = $_POST['event_id'];	
            $venue_id = $_POST['venue_id'];
            $date_of_match = $_POST['date_of_match'];
			$match_id = $_POST['match_id'];
			$man_of_match = $_POST['man_of_match'];
			$umpires = $_POST['umpires'];
           


        $r1 = "INSERT INTO matchinfo(event_id,venue_id,date_of_match,match_id,man_of_match,umpires)
         VALUES ('$event_id','$venue_id','$date_of_match','$match_id','$man_of_match','$umpires')";

      if ($conn->query($r1) === TRUE) {
        echo "New record created successfully";
          } else {
          echo " Error:";
           }



          }
       ?>
       <hr>
       <button type="button" class="btn"><a href="users/home.html">Home</a></button>
