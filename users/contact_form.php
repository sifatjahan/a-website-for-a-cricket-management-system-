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
            $contract_id = $_POST['contract_id'];
            $club_id = $_POST['club_id'];
            $club_name = $_POST['club_name'];
            $f_first_name = $_POST['f_first_name'];
            $f_last_name = $_POST ['f_last_name'];
            $p_id = $_POST['p_id'];
            $a_first_name = $_POST['a_first_name'];
            $a_last_name  = $_POST['a_last_name'];
            $a_designation  =$_POST['a_designation'];
            $c_start_date  = $_POST['c_start_date'];
            $c_end_date  = $_POST['c_end_date'];
            $c_amount = $_POST['c_amount'];


            $serial_num  = $_POST['serial_num'];
            $due_date = $_POST['due_date'];
            $payment_date = $_POST['payment_date'];
            $amount = $_POST['amount'];

            $contract_w1 = $_POST['contract_w1'];
            $contract_w2 = $_POST['contract_w2'];

        $r1 = "INSERT INTO contract(contract_id,club_id,club_name,f_first_name,f_last_name,p_id,a_first_name,a_last_name,a_designation,c_start_date,c_end_date,c_amount,
      contract_w1,contract_w2) VALUES ('$contract_id','$club_id','$club_name','$f_first_name','$f_last_name','$p_id','$a_first_name','$a_last_name','$a_designation',
      '$c_start_date','$c_end_date','$c_amount','$contract_w1','$contract_w2')";
      if ($conn->query($r1) === TRUE) {
        echo "New record created successfully";
          } else {
          echo " Error:";
           }

           $r2 = "INSERT INTO payment(serial_num,due_date,payment_date,amount) VALUES ('$serial_num','$due_date','$payment_date','$amount')";
           if ($conn->query($r2) === TRUE) {
             echo "New record created successfully";
               } else {
               echo " Error:";
                }

          }
       ?>
       <hr>
       <button type="button" class="btn"><a href="home.html">Home</a></button>
