<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>Notices for you</h3></center><br>
    <?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board_1");
    $query = "select * from notice";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title'];?></h5>
          <p class="card-text"><?php echo $row['message'];?></p>
          <h5 class="card-date"><?php echo $row['post_date'];?></h5>

        </div>
      </div>
      <?php
    }
    ?>
  </body>
</html>
