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
			$club_id = $_POST['club_id'];	
            $p_id = $_POST['p_id'];
            $team_formation = $_POST['team_formation'];
			$event_id = $_POST['event_id'];
			$leader_id = $_POST['leader_id'];
			$name = $_POST['name'];
            $coach_id = $_POST['coach_id'];
            $coach_name = $_POST['coach_name'];

        $r1 = "INSERT INTO teaminfo(club_id,p_id,team_formation,event_id,leader_id,name,coach_id,coach_name)
         VALUES ('$club_id','$p_id','$team_formation','$event_id','$leader_id','$name','$coach_id','$coach_name')";

      if ($conn->query($r1) === TRUE) {
        echo "New record created successfully";
          } else {
          echo " Error:";
           }



          }
       ?>
       <hr>
       <button type="button" class="btn"><a href="home.html">Home</a></button>
