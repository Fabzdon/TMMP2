
<?php
$title = "Add User";
require_once 'includes/header.php';
require_once 'database/connection.php';
require_once 'database/crud.php';
require_once 'database/user.php';

require_once 'includes/auth_check.php';

?>


<div class="container">
    <h1 class="text-center">Edit User</h1>

    <form method="post" action="insertuser.php">

        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input style="border:2px solid" type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input style="border:2px solid" type="text" class="form-control" id="password" name="password">
        </div>



        <a href="viewrecords.php" type="submit" name="submit" class="btn btn-success btn">Back to List</a>


        <button type="submit" name="submit" class="btn btn-success btn">Save Changes</button>

</div>

</form>

</html>
