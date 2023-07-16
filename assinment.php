<?php
include('connection.php');
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$email = $_POST['email'];

$query = "INSERT INTO healthdetail(name,age,weight,email) VALUES('$name','$age','$weight','$email')";
 
 $res = mysqli_query($conn,$query);
 if ($res) {
   header('location:list.php');
 }else{
  echo "Something Wrong";
 }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Health Form</title>
  <style>
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="number"],
    .form-container input[type="file"],
    .form-container input[type="submit"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    .form-container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
  </style>
</head>
<form method="POST" action="assinment.php">
          
<body>
  <div class="form-container">
    <h2>Health Form</h2>
    <form id="healthForm" method="POST" >
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>

      <label for="weight">Weight:</label>
      <input type="number" id="weight" name="weight" required>

      <label for="email">Email Id:</label>
      <input type="email" id="email" name="email" required>

      <!-- <label for="healthReport">Upload Health Report:</label>
      <input type="file" id="healthReport" name="healthreport" accept=".pdf">
 -->
      <input type="submit" name="submit" value="Submit">

    </form>
       

  </div>

  <script>
    document.getElementById("healthForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission

      // Fetch the form values
      var name = document.getElementById("name").value;
      var age = document.getElementById("age").value;
      var weight = document.getElementById("weight").value;
      var email = document.getElementById("email").value;
      // var healthReport = document.getElementById("healthReport").value;

      // Do something with the form values (e.g., send them to a server)
      console.log("Name:", name);
      console.log("Age:", age);
      console.log("Weight:", weight);
      console.log("Email:", email);
      // console.log("Health Report:", healthReport);

      // Clear the form after submission
       document.getElementById("healthForm").reset();
    });
  </script>
</body>
</html>