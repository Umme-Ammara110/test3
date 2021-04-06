
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  padding-left: 200px;
}

.navbar a {
   
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: grey;
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

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<div class="navbar">
  <a href="index.php">School</a>
  <a href="class.php">Class</a>
  <a href="student.php">Student</a>
  <a href="parent.php">Guardian</a>

  <div class="dropdown">
    <button class="dropbtn">Teachers 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="teachers.php">Teachers list</a>
      <a href="teachers.php">Add Teachers</a>
      <a href="designation.php"> Add Designation</a>
    </div>
  </div> 
</div>
            <h2 style="text-align:center"> Welcome to School </h2>
            <span style="background-color: #FFFF00; margin-left: 570px;" >Umme Ammara is here for you </span>
            <hr>
            <img src="../school/images/UET.jpg" height=480px; width=100%>
</html>
    
<!--
<h1>Welcome to the School</h1>
<p>click on class button to view the grades</p>
<p>click on students to view thier name</p>
<a  href="class.php">
    <button class="button button1">class</button>
  
</a>

  
<a  href="student.php">
    <button class="button button2">student</button>
  
</a>-->

