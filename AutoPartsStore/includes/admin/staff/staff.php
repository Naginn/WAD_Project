

<!-- suppliers-->
    <div style="width: 75%; float: left; border: black solid thin; margin: 2%; padding-bottom: 0px;">
        <div style="width: 100%; margin: 0px; background-color: #f0f0f0; ">
            <h4 style="margin: 0px;">Staff</h4></label>
        </div>

<?php
session_start();
if(isset($_GET['update'])){
    $update = $_GET['update'];
}

// connect to database
//define('DB_NAME', 'blue_team_bmw');
//define('DB_USER', 'root');
//define('DB_PASSWORD', 'password');
//define('DB_HOST', 'localhost');

define('DB_NAME', 'u517581632_dtbmw');
define('DB_USER', 'u517581632_root');
define('DB_PASSWORD', 'learn4Host');
define('DB_HOST', 'mysql.hostinger.ro');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}

$db_selected = mysqli_select_db($link, DB_NAME);

if (!$db_selected) {
    die('Can\'t use ' . DB_NAME . ': ' . mysqli_error($link));
}

//echo 'Connected successfully';

      $query = 'select * from staff;';
      $result = mysqli_query($link,$query);
      
      if(!empty($result))
      while($row = mysqli_fetch_assoc($result)){
          $staff_id = $row['staff_id'];
          $first_name = $row['first_name'];
          $last_name = $row['last_name'];
          $address = $row['address'];
          $city = $row['city'];
          $state = $row['state'];
          $zip = $row['zip'];
          $country = $row['country'];
          $email = $row['email'];
          $pw = $row['pw'];
      
?>



        <!-- Get Started content-->
        <div style="padding: 10px;">
            <a href="admin_page.php?menu=staff&sub_menu=staff_selected&staff_id=<?php echo $staff_id ; ?>"><?php echo $first_name . " " . $last_name; ?></a><br>
        </div>
       

      <?php } ?>

        
        </div>  