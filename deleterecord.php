<?php
$title = 'deleterecord';
require_once "includes/links.php";
require_once "database/crud.php";
require_once "database/connection.php";
require_once 'includes/auth_check.php';

//require_once 'includes/auth_check.php';
if(!$_GET['id'])
{

    include 'includes/errormessage.php';
    header("Location: viewrecords.php");

}
else
{
    $id = $_GET['id'];


    $result = $crud->deleteMember($id);
    echo $result;
    if($result)
    {
        echo '<script type="text/javascript"> window.location="viewrecords.php";</script>';
    } 
    else
    {
        include 'includes/errormessage.php';
    }
}
?>