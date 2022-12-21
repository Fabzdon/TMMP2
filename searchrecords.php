<?php require_once "includes/header.php";
 require_once "database/connection.php";
require_once 'includes/auth_check.php';

require_once "database/crud.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="input-group mb-3">
    <form method="GET">
        <div class="col-auto">
            <div class="input-group">
                <div class="input-group">
                    <input type="search" name="search" class="form-control rounded" placeholder="keyword search"
                        required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </div>

        </div>

</div>
</form>
</div>
<div class="col-md-12">
    <div class="card mt-4">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
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
                </thead>
                <tbody>
                    <?php 
                                    $con = mysqli_connect("applied-web.mysql.database.azure.com","appliedweb_user@applied-web","P@ssword1","tmpp_fabian");
                                    

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM planmembers a inner join plan_type p on a.plantype_id = p.plantype_id WHERE  CONCAT(firstname,lastname,email,planname) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                    <tr>
                        <td><?= $items['id']; ?></td>
                        <td><?= $items['firstname']; ?></td>
                        <td><?= $items['lastname']; ?></td>
                        <td><?= $items['email']; ?></td>
                        <td><?= $items['contactnumber']; ?></td>
                        <td><?= $items['gender']; ?></td>
                        <td><?= $items['address']; ?></td>
                        <td><?= $items['planname']; ?></td>

                        <td> <a href="view.php?id=<?php echo $items['id']; ?>" class="btn btn-primary">View </a></td>
                        <td> <a href="editselected.php?id=<?php echo $items['id']; ?>" class="btn btn-warning">Edit </a>
                        </td>
                        <td> <a onclick="return confirm('Delete this record?')"
                                href="deletefoundrecord.php?id=<?php echo $items['id']?>" class="btn btn-danger">Delete
                            </a></td>

                    </tr>
                    <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                    <tr>
                        <td colspan="7">No Record(s) Found</td>
                    </tr>
                    <?php
                                        }
                                    }
                                ?>


                    <?php
                 
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<html>