<?php

include_once "includes/session.php";

?>

<?php session_destroy();

echo '<script type="text/javascript"> window.location="index.php";</script>';

 ?>