
<?php include('process.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   <title>Symptom Checker</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
      <a class="navbar-brand" href="index.php">e86 Medicsys</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
         aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">Patients <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="add_patients.php">Add Patient</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="all_diagnosis.php">View Diagnosis</a>
            </li>

         </ul>
      </div>
   </div>
   </nav>



      <?php
      // to fetch a particular patient from database
         if (isset($_GET['patient'])) {
            $id = $_GET['patient'];
            $query = "SELECT * FROM patients WHERE id=$id";
            $result = mysqli_query($db_connect, $query);
            if (count($result)==1) {
               $row = $result->fetch_array();
            }
         };
      ?>

        <div class="container">

            <nav class="navbar navbar-light bg-light">
            <h3> Patient's Detail </h3>
            </nav> <br>

         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">Patient Number</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['patient_no'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">First Name</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['first_name'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">Last Name</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['last_name'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">Gender</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['gender'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">Age</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['age'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">Phone Number</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['phone'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">Address</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['address'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">Next of Kin</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['next_of_kin'];  ?></h5>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-2">
            <label for="">NOK Number</label>
            </div>
            <div class="col-sm-12 col-md-10">
            <h5><?php echo $row['nok_phone'];  ?></h5>
            </div>
         </div>
      </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
      </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
      </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
      </script>
</body>
</html>