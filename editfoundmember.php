<?php
require_once "includes/links.php";
require_once 'includes/auth_check.php';
require_once 'database/connection.php';
require_once 'database/crud.php';

if(isset($_POST['submit']))
    //{

      $id = $_POST["id"];
      $fname = $_POST["firstname"];
      $lname = $_POST["lastname"];
      $contact = $_POST["contactnum"];
      $gender = $_POST["gender"];
      $address = $_POST["address"];
      $plantype = $_POST["plantype"];

      echo "$plantype";

    $result = $crud->editMember($id, $fname, $lname, $contact, $gender, $address,$plantype);
    if($result)
    {
        echo '<script type="text/javascript"> window.location="searchrecords.php";</script>';

    }
    else
    {
        include 'includes/errormessage.php';
    }




?>