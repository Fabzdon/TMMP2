<?php
$title = "Edit User";
require_once 'includes/header.php';

require_once 'includes/auth_check.php';




if (!isset($_GET['id'])) 
{
    require_once "includes/header.php";
    require_once "database/connection.php";
    
    require_once "database/crud.php";
    include 'includes/errormessage.php';
    echo '<script type="text/javascript"> window.location="viewusers.php";</script>';
} else {
    $id = $_GET['id'];
    $user = $crud->getUserDetails($id);
    



?>
<div class="container">
    <h1 class="text-center">Edit User</h1>

    <form method="post" action="edituser.php">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />

        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" style="border:2px solid" class="form-control" value="<?php echo $user['username'] ?>"
                id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" style="border:2px solid" class="form-control" value="" id="password" name="password"
                placeholder="Administrator's cannot view users passwords, only update them.">
        </div>



        <a href="viewusers.php" type="submit" name="submit" class="btn btn-success btn">Back to List</a>


        <button type="submit" name="submit" class="btn btn-success btn">Save Changes</button>

</div>
<?php } ?>
</form>

</html>