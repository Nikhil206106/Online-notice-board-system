<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board_1");

  if(isset($_POST['register'])){
    $query = "insert into admins values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successfully...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stare - A Notice Board</title>
    <style type="text/css">
      body {
        background-image: url(../img/main-qimg-5815c0def408b996ec78819eaa7c066a.webp);
        background-repeat: no-repeat; 
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <!-- Header section code start here  -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Stare - A Notice Board</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
         <font color="red"> <center><h2>Registration form</h2></center>
          <form action="" method="post">
            <h4><div class="form-group">
              <lable>First Name:</label>
                <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
             <lable>Last Name:</label>
                <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
            </div>
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div></h4></font>
            
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click here to login</a>
        </div>
      </div>
    </section>
  </body>
</html>
