
<?php 
$title = "view records";
require_once "includes/header.php";

require_once 'includes/auth_check.php';

//require_once 'includes/auth_check.php';

$title = 'Index';



$results = $crud->getPlanMembers();

?>



<table id = "table1" class="table table-striped ">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Contact Number</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Plan Type</th>
        <th>Select</th>
        <th>Edit</th>
        <th>Delete</th>




    </tr>
    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) 
{ ?>


    <tr id = "table1">
        
        <td> <?php echo $r['id']; ?></td>
        <td> <?php echo $r['firstname']; ?></td>
        <td> <?php echo $r['lastname']; ?></td>
        <td> <?php echo $r['email']; ?></td>
        <td> <?php echo $r['contactnumber']; ?></td>
        <td> <?php echo $r['gender']; ?></td>
        <td> <?php echo $r['address']; ?></td>   
        <td><?php echo  $r["planname"]; ?></td>
      
                      
        <td> <a href="view.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">View </a></td>
        <td> <a href="edit.php?id=<?php echo $r['id']; ?>" class="btn btn-warning">Edit </a></td>
        <td> <a onclick="return confirm('Delete this record?')" href="deleterecord.php?id=<?php echo $r['id']?>"
                class="btn btn-danger">Delete </a></td>


    </tr>

    <?php } ?>
</table>


<br>
<br>
<br>

</html>

