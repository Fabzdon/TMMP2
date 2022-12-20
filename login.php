<?php $title = "User Login";
 require_once 'includes/header.php'; 
 require_once 'includes/session.php';?>
<?php require_once 'includes/links.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_password = md5($password.$username);

    $result = $user->getUserDetails($username,$new_password);
    if(!$result)
    {

        echo '<div class = "alert alert-danger">Username or Password is Incorrect! Please try again. </div>';

    }

    else 
    {
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $result['id'];
        //header("Location:viewrecords.php");
        echo '<script type="text/javascript"> window.location="viewrecords.php";</script>';
    }

}

 ?>

<h1 class="text-center"> <?php echo $title ?> </h1>

<br>
<br>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="post" class="row g-3">
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Username</label>
        <input type="text" name="username" class="form-control" id="inputPassword2" placeholder="Username"
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username'] ?>">
    </div>
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Password</label>
        <input name="password" type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary btn-block mb-3">Login</button>

    </div>
</form>



</form>

<html>