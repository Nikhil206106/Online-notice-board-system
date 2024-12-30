<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board_1");
  $fname = "";
  $lname = "";
  $email = "";
  $password = "";
  $year = "";
  $query = "select * from users where email = '$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $password = $row['password'];
    $year = $row['year'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body background="img/main-qimg-5815c0def408b996ec78819eaa7c066a.webp">
    <form action="" method="post">
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
      </div>
      <div class="form-group">
        <label>Last Name:</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
      </div>
      <div class="form-group">
        <label>Select Year:</label>
        <select type="text" class="form-control" name="year" required>
          <option>First Year</option>
          <option>Second Year</option>
          <option>Third Year</option>
          
        </select>
      </div>
      <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
    </form>
  </body>
</html>
