<?php

$title = "Success!!!";
require_once "includes/header.php";
require_once "database/connection.php";
require_once "database/crud.php";

require_once 'sendemail.php';

?>



<?php 

    if(isset($_POST['submit']))
    {
      
      $fname = $_POST["firstname"];
      $lname = $_POST["lastname"];
      $email = $_POST["email"];
      $contact = $_POST["contactnum"];
      $gender = $_POST["gender"];
      $address = $_POST["address"];
      $plantype = $_POST["planname"];
      if(!$_FILES["avatar"]["size"] == 0){
      $orig_file = $_FILES["avatar"]["tmp_name"];
      $ext  = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      $target_dir = 'uploads/';
      $destination = "$target_dir$contact.$ext";
      move_uploaded_file($orig_file,$destination);
      }
      else 
      {
        $destination = "uploads/avatar.png";
      }
      $check = 0;
    }

    $emailcheck = $crud->getPlanMembers();
    while ($r = $emailcheck->fetch(PDO::FETCH_ASSOC))
    {
     

      if($r['email'] == $email)
      {
        $check = 1;
        echo '<script>alert("This email address already exists! please use a next one")</script>';
        if ($plantype == 1) { 
   
          echo '<script type="text/javascript"> window.location="daily1month.php";</script>';
        }
         if ($plantype == 2) 
         { 
          echo '<script type="text/javascript"> window.location="daily100days.php";</script>';
          
        }
         if ($plantype == 3) 
         { 
          echo '<script type="text/javascript"> window.location="weekly.php";</script>';
           
        }
         if ($plantype == 4) 
         { 
          
          echo '<script type="text/javascript"> window.location="monthly.php";</script>';
        
        }
        
      }
   
    }

    
    if($check == 0)
    {
      $isSuccess = $crud->insert($fname, $lname, $email, $contact, $gender, $address, $destination, $plantype);
      if($isSuccess){
        include 'includes/successmessage.php';
        SendEmail::SendMail($email,'Partner Registration Successful','You have successfully registered for 
        a partner plan. Someone will contact you soon. We look forward to earning with YOU!!!');
       ?>
         
<img src="<?php echo $destination?>" class="rounded-circle" style="width : 15%; height : 15%" />
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST["firstname"] . ' ' . $_POST["lastname"];  ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_POST["email"]; ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_POST["contactnum"] ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_POST["gender"] ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"> <?php echo $_POST["address"] ?></h6>
        <?php
      }
      else 
      {

        include 'includes/errormessage.php';

      }

    }
    ?>
    
</html>