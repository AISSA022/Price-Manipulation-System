<?php

include("conn.php");

session_start();

$mname = isset($_POST['mname']) ? $_POST['mname'] : "";
$address = isset($_POST['address']) ? $_POST['address'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$username = isset($_POST['username']) ? $_POST['username'] : "";
$pwd = isset($_POST['passw']) ? $_POST['passw'] : "";

$id= $_SESSION['uid'];

if($mname != "" && $address != ""  && $phone != "" && $username !="" && $pwd !="" ){

    if(strlen($pwd)>8){

    $mname = filter_var( $mname, FILTER_SANITIZE_STRING);
    $address = filter_var( $address, FILTER_SANITIZE_STRING);
    $phone = filter_var( $phone, FILTER_VALIDATE_INT);
    $username = filter_var( $username, FILTER_SANITIZE_STRING);
    $pwd = filter_var($pwd, FILTER_SANITIZE_STRING);
    
    $sql_query = "select * from market where username='$username' ";

    $result = mysqli_query($conn ,$sql_query);
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $num= mysqli_num_rows($result);
   
    if($num == 1 ){
        echo "<script>alert('Username already exist.')</script>";
    }

    else{
    $sql_query = "INSERT INTO market (marketID, name, address, phone,userID,username,pass) VALUES ( '',?,?,?,?,?,?)";
    
    $_SESSION['mname']=$mname;

    $stmt = $conn->prepare($sql_query);

    $stmt->bind_param('ssiiss',$mname,$address,$phone,$id,$username,$pwd);

    $stmt->execute();

    $query="SELECT  marketID FROM market WHERE username= ?";
    
    $stmt= $conn->prepare($query);
    $stmt->bind_param('s' , $username);
    $stmt->execute();
    $row =$stmt->get_result();
    $user=$row->fetch_assoc();
    if($user){
        $_SESSION['mid']=$user['marketID'];
    }
    header('Location: ./market.php');
    
    exit();
    }
    }
    else{
        echo "<script>alert('week password.')</script>";
    }
    }


    



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Sign up | Commodity Monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="../css/msignup.css">
</head>

<body>
    <div class="all">
        <div class="head">
            <div class="logo" style="margin-right: 800px;"><img src="../images/LOGO.ico" alt="LOGO" width="50px"
                    height="40px">
                <div class="bar"><button id="bar" onclick="show()"><i class="fa fa-bars"></i></button></div>
            </div>


            <div class="menue2">
                <div><a href="../html/p1.html"><i class="fa fa-home"></i> Home</a></div>
                <div class="m"><a href="../html/aboutus.html">About Us</a></div>
                <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                <div class="m"><a href="../php/signin.php">SIGN IN</a></div>

            </div>

            <div class="menue">
                <div class="h1" style="display: flex;flex-direction: row;">
                    <div><a href="../html/p1.html"><i class="fa fa-home"></i> Home</a></div>
                    <div><a href="../html/aboutus.html">About Us</a></div>
                </div>
                <div class="h2" style="display: flex;flex-direction: row;">
                    <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                    <div class="m"><a href="../php/signin.php">SIGN IN</a></div>
                </div>
            </div>
        </div>

        <div class="signup">
            <div class="sign" style="height:133vh;">
                <div class="title">
                    <div>Sign Up</div>
                    <div>
                        <h3 style="color: gray;padding-top: 20px;">Market </h3>
                    </div>
                </div>
                <form action="./msignup.php" method="POST">
                <div class="input">
                    <div style="display: block;">
                        <div class="t2">Market Name</div>
                        <div class="in1"><input type="Name" name="mname" id="marketname" placeholder="Please Enter Market Name"></div>
                        <div class="t2">Address</div>
                        <div><input type="address" id="address" name="address" placeholder="Please Enter Market Address"></div>
                        <div class="t2">Phone</div>
                        <div><input type="Phone Number" id="phone" name="phone" placeholder="Please Enter Market Phone-number"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>
                        <div class="t2">Username</div>
                        <div><input type="text" id="username" name="username"  placeholder="Please Enter  username"></div>
                        <div class="t2">Password</div>
                        <div><input type="password" id="password" name="passw" placeholder="Please Enter Your Password" required></div>
                        <div class="createb"><button id="addacc">Create Account</button></div>
                    </div>


                </div>
                </form>
            </div>
            <div id="wrong">
                <div class="wrong1">
                    <span class="closebtn5">&times;</span>
                    <h1 id="h1">PLEASE CHECK YOUR INFORMATION</h1>
                </div>
            </div>
        </div>
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
                            <li style="margin-right: 30px;text-decoration: none;color: whitesmoke;">Privacy</li>
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
        <script src="../javascript/jquery-3.6.0.min.js"></script>
        <script src="../javascript/all.js"></script>
</body>

</html>