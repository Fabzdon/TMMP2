<?php
require_once "includes/header.php";
require_once "database/connection.php";
require_once "database/crud.php";
require_once 'includes/auth_check.php';
?>

<?php
$results = $user->getUsers();
?>
<div class = "container">
 <table class="table table-striped ">
 <tr>
     <th>#</th>
     <th>Username</th>
     <th>Password</th>
     <th>Edit</th>
     <th>Delete</th>
     <th>Add User</th>
 </tr>
 






    </tr>
    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) 
{ ?>


    <tr>
        
        <td> <?php echo $r['id']; ?></td>
        <td> <?php echo $r['username']; ?></td>
        <td> <?php echo $r['password']; ?></td>
      
                      
        
        <td> <a href="editusercreds.php?id=<?php echo $r['id']; ?>" class="btn btn-warning">Edit </a></td>
        <td> <a onclick="return confirm('Delete this record?')" href="deleteuser.php?id=<?php echo $r['id']?>"
                class="btn btn-danger">Delete </a></td>
                <td> <a href="adduser.php?id=<?php echo $r['id']; ?>" class="btn btn-success">Add New User </a></td>


    </tr>

    <?php } ?>
</table>
</div>

</html>