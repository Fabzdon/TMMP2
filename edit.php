<?php
$title = "Edit Record";
require_once 'includes/header.php';
require_once 'database/connection.php';

require_once 'database/crud.php';

require_once 'includes/auth_check.php';


$results = $crud->getPlanTypes();

if (!isset($_GET['id'])) 
{

    include 'includes/errormessage.php';
    echo '<script type="text/javascript"> window.location="viewrecords.php";</script>';
} else {
    $id = $_GET['id'];
    $member = $crud->getMemberDetails($id);
    



?>
<div class="container">
    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="editrecord.php">
        <input type="hidden" name="id" value="<?php echo $member['id'] ?>" />



        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" style="border:2px solid" class="form-control" value="<?php echo $member['firstname'] ?>"
                id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" style="border:2px solid" class="form-control" value="<?php echo $member['lastname'] ?>"
                id="lastname" name="lastname">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Email Address</label>
            <input type="text" style="border:2px solid" value="<?php echo $member['email'] ?>" class="form-control"
                id="datepicker" name="email" readonly>
        </div>
        <div class="mb-3">
            <label for="contactnum" class="form-label">Contact Number</label>
            <input style="border:2px solid" type="contactnum" value="<?php echo $member['contactnumber'] ?>"
                class="form-control" for="contactnum" id="email" name="contactnum" aria-describedby="contactnum">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label name="gender" for="specialty"> Gender </label>
            <select style="border:2px solid" class="form-control" id="specialty" name="gender">
                <option name="gender"><?php echo $member['gender'] ?></option>
                <?php if ($member['gender'] == 'Male') { ?>
                <option name="gender" value="Female"><?php echo "Female" ?></option>
                <?php }  else {?>
                <option name="gender" value="Male"><?php echo "Male" ?></option>
                <?php }?>
            </select>
        </div>

        <div class="mb-3">
            <label for="address" id="address" name="address" class="form-label">Address</label>
            <input style="border:2px solid" name="address" value="<?php echo $member['address'] ?>" class="form-control"
                for="address" id="address" aria-describedby="address">
            <div id="address" class="form-text"></div>
        </div>


        <div class="mb-3">
            <label name="plantype" for="plantype"> Plan Type </label>
            <select style="border:2px solid" class="form-control" id="specialty" name="plantype">
                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['plantype_id'] ?>"
                    <?php if ($r['plantype_id'] == $member['plantype_id']) echo 'selected' ?>>
                    <?php echo $r['planname']; ?>
                </option>

                <?php } ?>

            </select>
        </div>
        <div class="d-grid gap-3 col-4 mx-auto">
            <br>

            <a href="viewrecords.php" type="submit" name="submit" class="btn btn-success btn">Back to List</a>


            <button type="submit" name="submit" class="btn btn-success btn">Save Changes</button>

        </div>
        <?php } ?>

    </form>

    
</html>