<?php
include('conn.php');
session_start();

$name = isset($_POST['name']) ? $_POST['name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$subject = isset($_POST['subject']) ? $_POST['subject'] : "";
$message = isset($_POST['message']) ? $_POST['message'] : "";
$mid= $_SESSION['mid'];
$fetch_query="SELECT userID FROM market WHERE marketID=$mid";
$stmt=$conn->prepare($fetch_query);
$stmt->execute();
$row=$stmt->get_result();
while($result_data=$row->fetch_assoc()){
    $id= $result_data["userID"];
}
if(isset($_POST['submit'])){

 if($name !="" && $email!="" && $subject !="" && $message !=""){

    $name = filter_var( $name, FILTER_SANITIZE_STRING);
    $email = filter_var( $email, FILTER_SANITIZE_STRING);
    $subject = filter_var( $subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    

    

    $sql_query = "INSERT INTO feedback (feedbackID, name, email, subject, message,type,userID) VALUES ('',?,?,?,?,'PROBLEM',?)";
    

    $stmt = $conn->prepare($sql_query);

    $stmt->bind_param('sssss',$name,$email,$subject,$message, $id);

    $stmt->execute();
    header("location:./market.php");
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
    <title>Feedback |Commodity monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="../css/feedback.css">
    <link rel="stylesheet" href="../php/feedback.php">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
        <form action="./reportproblem.php" method="POST">
        <div class="center">
            <div class="signup">
                <div class="sign">
                    <div class="title">Report A Problem</div>
                    <div class="input">
                        <div style="display: block;">                        
                            <div >Name<input type="Name" placeholder="Please Enter Your Name" name="name"></div>
                            <div>E-mail<input type="Email" placeholder="Please Enter Your Email" name="email"></div>
                            <div>Subject<input type="subject" placeholder="Subject" name="subject"></div>
                            <div class="message">Message<input class="message" style="height: 30vh;" name="message" type="message" placeholder="Your message"></div>
                            <div class="createb"><input type="submit" name=submit></div>
                            <!-- <button name="submit">Submit</button> -->
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