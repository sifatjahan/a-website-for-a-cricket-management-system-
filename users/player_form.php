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

              $first_name = $_POST['first_name'];
              $last_name = $_POST['last_name'];
              $fathers_name = $_POST['fathers_name'];
              $mothers_name = $_POST ['mothers_name'];
             
              $pre_houseno = $_POST['pre_houseno'];
              $pre_location  = $_POST['pre_location'];
              $pre_village  =$_POST['pre_village'];
              $pre_thana  = $_POST['pre_thana'];
              $pre_district  = $_POST['pre_district'];
              $pre_postcode = $_POST['pre_postcode'];
              $per_houseno  = $_POST['per_houseno'];
              $per_location  = $_POST['per_location'];
              $per_village = $_POST['per_village'];
              $per_thana = $_POST['per_thana'];
              $per_district = $_POST['per_district'];
              $per_postcode = $_POST['per_postcode'];
              $date_of_birth = $_POST['date_of_birth'];


              $prev_club_name = $_POST['prev_club_name'];
              $prev_from = $_POST['prev_from'];
              $prev_to = $_POST['prev_to'];
              $total_runs = $_POST['total_runs'];
              $total_wickets = $_POST['total_wickets'];
              $team_leader = $_POST['team_leader'];

              $b_club_name = $_POST['b_club_name'];
              $b_opponent_club = $_POST['b_opponent_club'];
              $b_event_id = $_POST['b_event_id'];
              $b_match_id = $_POST['b_match_id'];
              $b_runs = $_POST['b_runs'];
              $b_wickets = $_POST['b_wickets'];

              $name_of_degree = $_POST['name_of_degree'];
              $department = $_POST['department'];
              $board = $_POST['board'];
              $year = $_POST['year'];
              $result = $_POST['result'];

              $membership = $_POST['membership'];
              $signature = $_POST['signature'];
              $date_of_player = $_POST['date_of_player'];


              $r1 = "INSERT INTO educational_qua(name_of_degree,department,board,year,result) VALUES('$name_of_degree','$department','$board','$year','$result')";
              if ($conn->query($r1) === TRUE) {
                echo "New record created successfully";
                  } else {
                  echo " Error:";
                   }
                   $r2 = "INSERT INTO player_registration(first_name,last_name,fathers_name,mothers_name,pre_houseno,pre_location,pre_village,pre_thana,pre_district,
                   pre_postcode,per_houseno,per_location,per_village,per_thana,per_district,per_postcode,date_of_birth,b_club_name,b_opponent_club,b_event_id,b_match_id,b_runs,b_wickets,membership,
                   signature,date_of_player) VALUES('$first_name','$last_name','$fathers_name','$mothers_name','$pre_houseno','$pre_location','$pre_village',
                   '$pre_thana','$pre_district','$pre_postcode','$per_houseno','$per_location','$per_village','$per_thana','$per_district','$per_postcode','$date_of_birth',
                 '$b_club_name','$b_opponent_club','$b_event_id','$b_match_id','$b_runs','$b_wickets','$membership','$signature','$date_of_player')";
                 if ($conn->query($r2) === TRUE) {
                   echo "New record created successfully";
                     } else {
                     echo " Error:";
                      }
                      $r3 = "INSERT INTO previous_his(prev_club_name,prev_from,prev_to,total_runs,total_wickets,team_leader) VALUES ('$prev_club_name','$prev_from',
                      '$prev_to','$total_runs','$total_wickets','$team_leader')";
                      if ($conn->query($r3) === TRUE) {
                        echo "New record created successfully";
                          } else {
                          echo " Error:";
                           }
                 }
    					?>
              <hr>
              <button type="button" class="btn"><a href="users/home.html">Home</a></button>
