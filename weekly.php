<?php include 'includes/header.php' ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


 <div class="container">
    <h2>Register for Weekly Pay 4 Month Span Plan</h2>
    <br>
 <form method="post" enctype="multipart/form-data" action="success.php">

 <input type="hidden" name="planname" value = "3">

    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input required type="text" class="form-control" id="lastname" placeholder = "Last Name" name="lastname">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input required type="email" class="form-control" for="email" id="email" placeholder = "Email Address " name="email"
            aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Address</label>
        <input required type="address" name = "address" class="form-control" for="address" placeholder = "Address " 
            aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
    <label for="gender" name = "gender" class="form-label">Gender</label>
    <select class="form-select" name = "gender"id = "gender" aria-label="Default select example">
    <option name = "gender" for = "gender" value="Male">Male</option>
    <option value="Female">Female</option>
</select>
</div>
    <div class="mb-3">
        <label name="contactnum" for="contactnum" class="form-label">Contact Number</label>
        <input type="text" name="contactnum" class="form-control" id="contactnum" placeholder = "Contact Number" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
  <label for="formFile"  class="form-label">Select Profile Picture</label>
  <input class="form-control" name = "avatar" type="file" id="formFile">
</div>

    <div class="d-grid gap-2 col-4 mx-auto">
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
        <button type="back" href="viewrecords.php" name="back" class="btn btn-primary btn-lg">Back to View</button>
    </div>
    <div>
        

       
</form>

</html>