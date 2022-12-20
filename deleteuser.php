<?php
$title = 'deleteuser';
require_once "includes/links.php";
require_once "database/crud.php";
require_once "database/connection.php";

require_once "database/user.php";
require_once 'includes/auth_check.php';


//require_once 'includes/auth_check.php';
if(!$_GET['id'])
{

    include 'includes/errormessage.php';
   

}
else
{
    $id = $_GET['id'];


    $result = $user->deleteUser($id);
    echo $result;
    if($result)
    {

        echo '<script type="text/javascript"> window.location="viewusers.php";</script>';
    

?>
<?php
    } 
    else
    {
        include 'includes/errormessage.php';
    }
}
?>