<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>REGISTRATION PAGE</title>
  </head>
  <style>
     body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  color:black;
  background-color: black;
}

.topnav {
  overflow: hidden;
  background-color:#1687a7;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25;
}

.topnav a:hover {
  background-color:#62959c;
  color: white;
}

.topnav a.active {
  color: white;
  font-size:40;
}
.topnav a.f3 {
  color: white;
  font-size:25;
  float:right;
}
.f5{
  margin:5px;
  text-align:center;
  font-family:simpson;
  font-size:25;
}
  </style>

  <body>
    <body>
      <div class="topnav">
        <a class="active" href="login.html">PROJECT MANAGEMENT TOOL</a>
        <a class="f3"  href="login.html">LOGIN</a>
        <a class="f3"  href="register.html">REGISTER</a>
      </div>



      
<div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded roundedrounded-right"> 
<div class="row">
<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$number=$_POST['number'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$conn=mysqli_connect("localhost","root","","inter") or die("failed:" . mysqli_connect_error());
$sql=mysqli_query($conn,"insert into register (fname,lname,number,email,password) values ('$fname','$lname','$number','$email','$pwd')") or die("failed:" . mysqli_error($conn));

if($sql)
echo "<h1>Registered successfully</h1><a href='login.html'>Log in</a>";
else
echo "<h1>you have not registerd</h1><a href='register.html'>Register</a>";


$conn->close();
?>
    
    </div>

</div>

  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>