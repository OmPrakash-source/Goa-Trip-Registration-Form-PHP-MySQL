<?php
    $insert = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "goa";

        // Create connection
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed due to " . mysqli_connect_error());
        }

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO trip (name, age, gender, email, phone, other, dt) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
        // echo $sql;

        if ($conn->query($sql) === TRUE) {
            // echo "Successfully inserted";
            $insert = true; // if sql is true
        } else {
            echo "ERROR: $sql <br> $conn->error";
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" />
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h2>Welcome to Goa Trip Form</h2>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <?php
      if($insert == true){
      echo "<p id='submitmsg'>
        Thanks for submitting your form. We are happy to see you!
      </p>";
      }
    ?>
      <form action="index.php" method="post">
        <input
          type="text"
          placeholder="Enter your name"
          name="name"
          id="name"
        />
        <input type="text" placeholder="Enter your age" name="age" id="age" />
        <input
          type="text"
          placeholder="Enter your gender"
          name="gender"
          id="gender"
          require
        />
        <input
          type="email"
          placeholder="Enter your email"
          name="email"
          id="email"
        />
        <input
          type="phone"
          placeholder="Enter your phone"
          name="phone"
          id="phone"
        />
        <textarea
          name="desc"
          id="desc"
          rows="10"
          cols="10"
          placeholder="Enter description here"
        ></textarea>
        <div class="btn">
          <button type="submit" class="submitbtn">Submit</button>
          <button type="reset" class="resetbtn">Reset</button>
        </div>
      </form>
    </div>
    <script src="index.js"></script>
  </body>
</html>
