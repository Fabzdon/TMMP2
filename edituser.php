
<?php 
require_once 'includes/header.php';
require_once "includes/links.php";
require_once 'includes/auth_check.php';





if(isset($_POST['submit']))
    //{

    
    
      $id = $_POST["id"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $new_password = md5($password.$username);

      

    $result = $crud->editUser($id, $username,$new_password);
    if($result)
    {
        echo '<script type="text/javascript"> window.location="viewusers.php";</script>';
      

    }
    else
    {
        include 'includes/errormessage.php';
    }


?>


</html>
