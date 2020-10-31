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
            $name_of_club = $_POST['name_of_club'];
            $date_of_establishment = $_POST['date_of_establishment'];
            $a_house_no = $_POST['a_house_no'];
            $a_location = $_POST ['a_location'];
            $a_street = $_POST['a_street'];
            $a_thana = $_POST['a_thana'];
            $a_district  = $_POST['a_district'];
            $a_post_code  = $_POST['a_post_code'];
            $name_of_president  = $_POST['name_of_president'];


        $r1 = "INSERT INTO club(club_id,name_of_club,date_of_establishment,a_house_no,a_location,a_street,a_thana,a_district,a_post_code,name_of_president)
         VALUES ('$club_id','$name_of_club','$date_of_establishment','$a_house_no','$a_location','$a_street','$a_thana','$a_district',
      '$a_post_code','$name_of_president')";

      if ($conn->query($r1) === TRUE) {
        echo "New record created successfully";
          } else {
          echo " Error:";
           }



          }
       ?>
       <hr>
       <button type="button" class="btn"><a href="home.html">Home</a></button>
