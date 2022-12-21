
<?php 
require_once 'includes/header.php';
require_once "includes/links.php";
require_once 'includes/auth_check.php';





if(isset($_POST['submit']))
    //{

    
    
      $id = $_POST["id"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $check = 0;
      

      if($password == null){
      echo '<script>alert("No password entered default is : password1")</script>';
      $password = "password1";
      }
      if($username == null){
        echo '<script>alert("A username is required!")</script>';
       
        $check = 1;
        echo '<script type="text/javascript"> window.location="viewusers.php";</script>';

      }
      if($check == 0){

      $new_password = md5($password.$username);

    $result = $user->editUser($id, $username,$new_password);
    if($result)
    {
        echo '<script type="text/javascript"> window.location="viewusers.php";</script>';
      

    }
    else
    {
        include 'includes/errormessage.php';
    }
      }

?>


</html>
