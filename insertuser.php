<?php 
require_once "includes/header.php";

if (isset($_POST['submit'])) 
{ 
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user = $user->insertUser($username, $password);
    ?>
<script>
window.location = "viewusers.php";
</script>
<?php
}
 else 
{

    include 'includes/errormessage.php';
   
    
}?>

</html>