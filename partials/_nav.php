<?php
include '_dbconnect.php';
session_start();
 echo '
 <div class="main-head">
 <fieldset id="form_box">
        <div class="logo-menu-sec">
            <div class="container">
                <div class="logo">
                    <h1 itemprop="headline"><a href="/Isoeh_project" title="Home" itemprop="url"><img
                                src="restaurant/img/logo.png" alt="logo.png" itemprop="image" id="lg"></a></h1>
                </div>
                <nav>
                    <div class="menu-sec">
                        <ul>
                            <li class="menu-item-has-children"><a href="/Isoeh_project" title="HOME" itemprop="url"><span
                                        class="red-clr">FOOD ORDERING</span>HOME</a>

                            </li>
                            <li class="menu-item-has-children"><a href="about.php" title="About" itemprop="url"><span
                                        class="red-clr">REAL FOOD</span>ABOUT</a>

                            </li>
                            <li class="menu-item-has-children"><a href="reservation.php" title="Reservation" itemprop="url"><span
                                        class="red-clr">REAL FOOD</span>RESERVATION</a>
                            </li>
                            <li class="menu-item-has-children"><a href="dishes.php" title="Dishes" itemprop="url"><span
                                        class="red-clr">REAL FOOD</span>DISHES</a>
                            </li>
                            <li class="menu-item-has-children"><a href="contact.php" title="CONTACT US"
                                    itemprop="url"><span class="red-clr">CONTACT</span>CONTACT US</a></li>
                        </ul>';
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
                        {   

                            echo '<form class="form-inline mx-8 my-2  "><a href="partials/_logout.php" role="button" class="logout rounded-corners mx-8 my-8   " type="submit"><strong>Log Out</strong></a>
                            </form>';
                          
                        }
                        else{
                            echo '<div aria-label="breadcrumb" class="my-5">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" ><a data-toggle="modal" data-target="#loginmodal"><strong>Login</strong></a></li>
                                        <li class="breadcrumb-item active"><a data-toggle="modal" data-target="#registermodal"><strong>Register</strong></a></li>
                                    </ol>
                                  </div>';
                        }  
                   echo ' </div>
                </nav>
                </fieldset>
            </div>
        </div>
    </div>';
    include 'partials/_loginmodal.php';
    include 'partials/_registermodal.php';
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=='true'){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!!</strong> You can now log in.
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      //$showerror=$_GET['showerror'];
      if(isset($_GET['showerror']) ){
        
        $showerror=$_GET['showerror'];
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!!</strong>'.$showerror.'
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      
      if(isset($_GET['showalert']) ){
        $showalert=$_GET['showalert'];
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!!</strong>'.$showalert.'
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']==true)
      { 
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!!</strong> You are logged in.
      <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>