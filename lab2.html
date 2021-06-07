<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color:#F0F8FF"> 

<?php

$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr = $bloodgroupErr = "";
$name = $email = $gender = $dob = $degree = $bloodgroup = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
}

 if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Bloodgroup is required";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);

    }
  }




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Creating a form with the help of PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Degree:
  <input type="radio" name="degree" value="ssc">ssc
  <input type="radio" name="degree" value="hsc">hsc
  <input type="radio" name="degree" value="bsc">bsc
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Date of birth:
  <select name="day">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
  </select>
  <select name="month">
    <option value="january">january</option>
     <option value="february">february</option>
      <option value="march">march</option>
    </select>
    <select name="year">
    <option value="2000">2000</option>
     <option value="1999">1999</option>
      <option value="1998">1998</option>
    </select>
    <br><br>  

  Blood group:   
  </select>
  <select name="bloodgroup">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="O+">O+</option>
  
  </select>
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
?>
</body>
</html>