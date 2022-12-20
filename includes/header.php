<?php

function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location:'.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
require_once "database/connection.php";
require_once "database/crud.php";

include_once "includes/session.php";
 require_once 'includes/links.php';?>


<!doctype html>
<html lang="en">

<head>
    <div>

</head>

<body>
    </div>

    <body>
        </div>

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="Pictures/image5.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link js-scroll-trigger" href="Index.php#top">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="Index.php#About">About Us</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link js-scroll-trigger" href="Index.php#price">Partner Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="Index.php#contact">Contact</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown">
                                    Additional Info
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Index.php#payment">Payments</a></li>
                                    <li><a class="dropdown-item" href="Index.php#late">Late fees</a></li>
                                    <li><a class="dropdown-item" href="Index.php#about-content">Draw/Payout</a></li>
                                    <li><a class="dropdown-item" href="daily1month.php">Daily Registration</a></li>
                                    <li><a class="dropdown-item" href="daily100days.php#form1">100 Days Registration</a>
                                    </li>
                                    <li><a class="dropdown-item" href="monthly.php#form1">Monthly Registration</a></li>
                                    <li><a class="dropdown-item" href="weekly.php#form1">Weekly Registration</a></li>
                                    <li><a class="dropdown-item" href="vtdiabout.php">Thee Tertiary Institution</a></li>

                                </ul>

                            </li>
                            <?php
          

          if (!isset($_SESSION['userid'])) 
          {


          ?>
                            <li class="nav-link active">
                                <a class="nav-link" href="login.php">Login <span class="sr-only"></span></a>

                                <?php } else { ?>
                                <a class="nav-link" href="#"><span>Welcome
                                        <?php echo $_SESSION['username'] ?>!</span></a>
                            <li class="nav-item ">
                                <a class="nav-link js-scroll-trigger" href="viewusers.php">Manage Users</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link js-scroll-trigger" href="viewrecords.php">View Members</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link js-scroll-trigger" href="searchrecords.php">Search Members</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
                            </li>




                            <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                </li>



                </div>
                </div>
            </nav>
        </section>
        </section>