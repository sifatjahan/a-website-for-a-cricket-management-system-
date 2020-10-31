<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    body {margin:0;font-family:Arial}

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .active {
      background-color: #4CAF50;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .topnav a:hover, .dropdown:hover .dropbtn {
      background-color: #555;
      color: white;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child), .dropdown .dropbtn {
        display: none;
      }
      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
      .topnav.responsive .dropdown {float: none;}
      .topnav.responsive .dropdown-content {position: relative;}
      .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
      }
    }
    </style>

    <title>Contract Form</title>
  </head>
  <body>
    <h1 align="center">Contract Form</h1>
    
    <hr>
    <div class="w3-container">
      <div class="w3-card-4">

<form action="contact_form.php" method="post" class="w3-container">
<div class="w3-input">
  <label for="input">Contract Id</label>
  <input type="text" name="contract_id" placeholder="Contract Id" id="input" class="w3-input">
  <label for="input">Club Id</label>
  <input type="text" name="club_id" id="input"  placeholder="Enter your Club Id"  class="w3-input">
  <label for="input">Club Name</label>
  <input type="text" name="club_name" id="input" placeholder="Enter your Club name" class="w3-input">

  <h3>First Party</h3>
  <h4>Name Of The Player</h4>
  <label for="input">First Name</label>
  <input type="text" name="f_first_name" placeholder="First Name" id="input" class="w3-input">
  <label for="input">Last Name</label>
  <input type="text" name="f_last_name" id="input" placeholder="Enter your Last name" class="w3-input"><br>
  <label for="input">Player Id</label>
  <input type="text" name="p_id" id="input" placeholder="Enter your Player Id" class="w3-input">

  <h3>Second Party</h3>
  <h4>Authorized Person</h4>
  <label for="input">First Name</label>
  <input type="text" name="a_first_name" placeholder="First Name" id="input" class="w3-input">
  <label for="input">Last Name</label>
  <input type="text" name="a_last_name" id="input" placeholder="Enter your Last name" class="w3-input"><br>
  <label for="input">Designation</label>
  <input type="text" name="a_designation" id="input" placeholder="Enter your Designation" class="w3-input">

  <h3>Contract Period</h3>
  <label for="input">Start Date</label>
  <input type="date" name="c_start_date" placeholder="Start Date" id="input" class="w3-input">
  <label for="input">End Date</label>
  <input type="date" name="c_end_date" id="input" placeholder="Enter End Date" class="w3-input"><br>
  <label for="input">Contract Amount</label>
  <input type="text" name="c_amount" id="input" placeholder="Enter your Contract Amount" class="w3-input">

  <h3>Payment Schedule</h3>

  <label for="input">Serial Number</label>
  <input type="text" name="serial_num" placeholder="Serial Number" id="input" class="w3-input">
  <label for="input">Due Date</label>
  <input type="date" name="due_date" id="input" placeholder="Enter your Due Date" class="w3-input"><br>
  <label for="input">Payment Date</label>
  <input type="date" name="payment_date" id="input" placeholder="Enter your Payment Date" class="w3-input">
  <label for="input">Amount</label>
  <input type="text" name="amount" id="input" placeholder="Enter your Amount" class="w3-input">

  <label for="input">Contract Witness 1</label>
  <input type="text" name="contract_w1" id="input" placeholder="Enter your Contract Witness 1" class="w3-input">
  <label for="input">Contract Witness 2</label>
  <input type="text" name="contract_w2" id="input" placeholder="Enter your Contract Witness 2" class="w3-input"><br>

  <input type="submit" name="Submit" value="Submit">
  <input type="reset" name="Reset" value="Reset">
  </div>
</div>
</div>
</form>

</body>
</html>
