<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="testform.php" method= "post">
   <!--  <form action="testform.php" method= "get">
      <form action="testform.php" method= "post"> -->
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "post">
  <!-- we have to use PHP_SELF key to redirect form data or information on same page 
in action we have to open and close php tags and echo $_SERVER
   -->
   Name <input type="text" name="Name">
   Age <input type="text" name="age">
   <input type="submit" name="submit">
</form>
<?php 
if (isset($_POST['submit'])){ // meaning of this line is the data or information lloads only when user submit the info not on page load //
  echo $_POST['Name']."<br>";
  echo $_POST['age'];
}

  ?>
</body>
</html>
