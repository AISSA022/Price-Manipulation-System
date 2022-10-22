
<?php

include("conn.php");

session_start();



$fname = isset($_POST['fn']) ? $_POST['fn'] : "";
$lname = isset($_POST['ln']) ? $_POST['ln'] : "";
$phone = isset($_POST['phone-nb']) ? $_POST['phone-nb'] : "";
$dateob = isset($_POST['dob']) ? $_POST['dob'] : "";

$selector = isset($_POST['selector']) ? $_POST['selector'] : "";





 if(isset($_POST['ca'])){
   if($fname != "" && $lname != "" && $dateob != "" && $phone != ""  && $selector!=""){
    
    $fname = filter_var( $fname, FILTER_SANITIZE_STRING);
    $lname = filter_var( $lname, FILTER_SANITIZE_STRING);
    $phone = filter_var( $phone, FILTER_VALIDATE_INT);
    // $dateob = checkdate(int $year, int $month, int $day);
    
    
    // $sql = "select * from user  where username ='$username'";

    // $result = mysqli_query($conn ,$sql);
    // $num= mysqli_num_rows($result);
    
    
    
    // if($num == 1 ){
    //     echo "<script>alert('username already exist.')</script>";
    // }

    // else{
    $sql_query = "INSERT INTO user (userID, fname, lastname, phone, Bdate) VALUES ( '',?, ?, ?, ?)";

    
    $stmt = $conn->prepare($sql_query);

    

    $stmt->bind_param('ssis',$fname,$lname,$phone,$dateob);

    $stmt->execute();


    $query="SELECT  userID FROM user WHERE phone= ?";
    
    $stmt= $conn->prepare($query);
    $stmt->bind_param('i' , $phone);
    $stmt->execute();
    $row =$stmt->get_result();
    $user=$row->fetch_assoc();
    if($user){
        $_SESSION['uid']=$user['userID'];
    }


    if(isset($_POST['selector']) && $_POST['selector'] == 'user'){
    header('Location: ./user.php');
        exit();
    }
    if(isset($_POST['selector']) && $_POST['selector'] == 'Supermarket'){
        header('Location: ./msignup.php');
            exit();
    }
    
    }

    }
//    }
  

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | Commodity Monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/signup.css"> 
</head>

<body>
    <div class="all">
        <div class="head">
            <div class="logo" style="margin-right: 800px;"><img src="../images/LOGO.ico" alt="LOGO" width="50px" height="40px">
                <div class="bar"   ><button id="bar" onclick="show()"><i class="fa fa-bars" ></i></button></div>
            </div>
            
            
                <div class="menue2">                   
                        <div><a href="../php/main.php"><i class="fa fa-home"></i> Home</a></div>
                        <div class="m"><a href="../html/aboutus.html">About Us</a></div>             
                        <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                        <div class="m"><a href="../php/signin.php">SIGN IN</a></div>
                   
                </div>
            
            <div class="menue">
                <div class="h1" style="display: flex;flex-direction: row;">
                    <div><a href="../php/main.php"><i class="fa fa-home"></i> Home</a></div>
                    <div><a href="../html/aboutus.html">About Us</a></div>
                </div>
                <div class="h2" style="display: flex;flex-direction: row;">
                    <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                    <div class="m"><a href="../php/signin.php">SIGN IN</a></div>
                </div></div>
        </div>

        <div class="signup" style="height: 140vh;">
            <div class="sign" style="display:block;height:125vh;;">
                <div class="title">Sign Up</div>
                <form action="./signup.php" method="POST">
                <div class="input">
                    <div style="display: block;">
                        <div class="t">Name</div>
                        <div class="in1"><input type="Name" id="name" name="fn" placeholder="Please Enter Your Name"></div>
                        <div class="t2">Last Name</div>
                        <div><input type="Last Name" id="lastname" name="ln" placeholder="Please Enter Your Last Name"></div>
                        <div class="t2">Phone</div>
                        <div><input type="Phone Number" name="phone-nb"  id="phone" placeholder="Please Enter Your Phone number"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"></div>
                        <div class="t2">Date of Birth</div>
                        <div><input type="date" id="db" name="dob"  placeholder="Please Enter Your Date of Birth"></div>
                        <div class="t2">Sign Up as....</div>
                        <div class="box">
                        <select name="selector" id="select" >
                            <option name=""></option>
                            <option name="supermarket">Supermarket</option>
                            <option name="user">user</option>
                        </select>
                        <p class="result"></p>
                        </div>
                        <div class="createb" ><button name="ca"id="addacc">Create Account</button></div>
                    </div>
                    </form>

                </div>
                
            </div>
            <div id="wrong">
                <div class="wrong1">
                    <span class="closebtn4">&times;</span>
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
        <script src="../javascript/jquery-3.6.0.min.js"></script>
        <script src="../javascript/all.js"></script>
</body>

</html>