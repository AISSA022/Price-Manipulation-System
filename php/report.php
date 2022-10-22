<?php
include('conn.php');

session_start();

$mname= isset($_POST['mname']) ? $_POST['mname'] : "";
$location= isset($_POST['location']) ? $_POST['location'] : "";
$uname= isset($_POST['uname']) ? $_POST['uname'] : "";
$email= isset($_POST['email']) ? $_POST['email'] : "";
$subject= isset($_POST['subject']) ? $_POST['subject'] : "";
$message= isset($_POST['message']) ? $_POST['message'] : "";


if(isset($_POST['submit'])){
if($mname!="" && $location!="" &&$uname!="" && $email!="" && $subject!="" && $message!="" ){

    $mname = filter_var( $mname, FILTER_SANITIZE_STRING);
    $location = filter_var( $location, FILTER_SANITIZE_STRING);
    $uname = filter_var( $uname, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    
    $id= $_SESSION['uid'];




    $sql="INSERT INTO report (reportID, date,userID,mname,location,uname,email,subject,message) VALUES('',NOW(),'$id','$mname','$location','$uname','$email','$subject','$message');";
    mysqli_query($conn,$sql);
    header("Location: ./main.php");
}
else{
    echo "<script>alert('Please check your information.')</script>";
}
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report |Commodity monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="../css/Report.css">
    <link rel="stylesheet" href="../php/report.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="all">

        <div class="head">
            <div class="logo" style="margin-right: 800px;"><img src="../images/LOGO.ico" alt="LOGO" width="50px" height="40px">
                <div class="bar"   ><button id="bar" onclick="show()"><i class="fa fa-bars" ></i></button></div>
            </div>
            
            
                <div class="menue2">                   
                        <div><a href="../html/p1.html"><i class="fa fa-home"></i> Home</a></div>
                        <div class="m"><a href="../html/aboutus.html">About Us</a></div>             
                        <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                        <div class="m"><a href="../html/signin.html">SIGN IN</a></div>
                   
                </div>
            
            <div class="menue">
                <div class="h1" style="display: flex;flex-direction: row;">
                    <div><a href="../html/p1.html"><i class="fa fa-home"></i> Home</a></div>
                    <div><a href="../html/aboutus.html">About Us</a></div>
                </div>
                <div class="h2" style="display: flex;flex-direction: row;">
                    <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                    <div class="m"><a href="../html/signin.html">SIGN IN</a></div>
                </div></div>
        </div>
        <form action="./report.php" method="POST">
        <div class="center">
            <div class="signup" style="height:165vh;">
                <div class="sign">
                    <div class="title">Report</div>
                    <div class="input">
                        <div style="display: block;">     
                            <div >Market Name<input type="MarketName" name="mname" placeholder="Please Enter Market Name"></div>  
                            <div >Location<input type="location" name="location" placeholder="Please Enter Location Of the Market"></div>                                    
                            <div >Name<input type="Name" name="uname" placeholder="Please Enter Your Name"></div>
                            <div>E-mail<input type="Email" name="email" placeholder="Please Enter Your Email"></div>
                            <div>Subject<input type="subject" name="subject" placeholder="Subject"></div>
                            <div class="message">Message<input name="message" class="message" style="height: 30vh;" type="message" placeholder="Your message"></div>
                            <div class="createb"><input type="submit" name=submit style="background:#006938"></div>
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>
        </form>



    </div>
    
<div class="footer">
    <div class="upfooter">
        <div class="contactus">
            <div>
                <h1>Contact Us</h1>
                <span><i class="fa fa-mobile"></i><b>Hotline:</b> 1739</span>
                <span><i class="fa fa-phone"></i>000961-1-98938742</span>
                <span><i class="fa fa-envelope"></i>Commoditymonopolist@economy.lb</span>

            </div>
        </div>


        <div class="rightfooter">
            <ul class="lifooter">
                <div style="display: flex;flex-direction: row;">
                    <div>
                        <li><a href="../html/aboutus.html">About us</a></li>
                    </div>
                    <div>
                        <li><a href="../html/feedbakc.html">Feedback</a></li>
                    </div>
                </div>
                <div style="display: flex;flex-direction: row;">
                    <div>
                        <li style="margin-right: 30px;text-decoration: none;color: whitesmoke;" >Privacy</li>
                    </div>
                   
                </div>
                <div>
                    <li style="color: whitesmoke;">&COPY; 2022 Commodity Monopolist</li>
                </div>

            </ul>
        </div>
    </div>

    <div class="downfooter">

        <div class="icons">

            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>

        </div>
    </div>

</div>
<script src="../javascript/jquery-3.6.0.min.js"></script>
<script src="../javascript/all.js"></script>
</body>
</html>