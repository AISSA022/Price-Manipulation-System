<?php

include('conn.php');
session_start();
$username = isset($_POST['username']) ? $_POST['username'] : "";
$pwd = isset($_POST['pas']) ? $_POST['pas'] : "";

if(isset($_POST['login'])){
if($username != "" && $pwd  != ""){

    $query = 'SELECT pass FROM market WHERE username=?';

    $stmt = $conn->prepare($query);
 

    $stmt->bind_param('s', $username);

    $stmt->execute();

    $row = $stmt->get_result();
    $user = $row->fetch_assoc();
    

    if($user){
        
        if(password_verify($pwd, $user['pass'])){
            $query="SELECT  userID FROM market WHERE username= ?";
    
            $stmt= $conn->prepare($query);
            $stmt->bind_param('s' , $username);
            $stmt->execute();
            $row =$stmt->get_result();
            $user=$row->fetch_assoc();
            if($user){
                $_SESSION['uid']=$user['userID'];
                header("location:./market.php");
            }
        }
        else{
            // $_SESSION['username'] = $username['username'];
            // header('Location: ./signup.php');
            // exit();
            echo "false";
        }   
    }
    $query = 'SELECT pass FROM registered WHERE username=?';

    $stmt = $conn->prepare($query);
 

    $stmt->bind_param('s', $username);

    $stmt->execute();

    $row = $stmt->get_result();
    $user = $row->fetch_assoc();
    

    if($user){
        
        if(password_verify($pwd, $user['pass'])){
    
            $query="SELECT  userID FROM registered WHERE username= ?";
    
            $stmt= $conn->prepare($query);
            $stmt->bind_param('s' , $username);
            $stmt->execute();
            $row =$stmt->get_result();
            $user=$row->fetch_assoc();
            if($user){
                $_SESSION['uid']=$user['userID'];
                header("location:./main.php");
            }
        }
        else{
            // $_SESSION['username'] = $username['username'];
            // header('Location: ./signup.php');
            // exit();
            echo "Please Check Your Information";
        }   
    }

    else{
        echo "USER NOT FOUND";
    }
    
    
}
}
// include('conn.php');
// $username = isset($_POST['username']) ? $_POST['username'] : "";
// $password = isset($_POST['pas']) ? $_POST['pas'] : "";


// if($username != "" && $password  != ""){

//     $query = 'SELECT * FROM user WHERE username=?';

//     $stmt = $conn->prepare($query);

//     $stmt->bind_param('s', $username);

//     $stmt->execute();


//     $row = $stmt->get_result();

//     $user = $row->fetch_assoc();

//     if($user){

//         if(password_verify($password, $user["pas"])){
//             // $_SESSION['username'] = $user['username'];
//             // $_SESSION['username'] = $user['username'];
//             // header('Location: ./signup.php');
//             // exit();
//             echo"aaadad";
//         }
//         else{
//            echo "hiii";

//         }
        
//     }
//     else{
//         echo "USER NOT FOUND";
//     }
    
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Commodity monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/92d1c57801.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="all">
        <div class="head">
            <div class="logo" style="margin-right: 800px;"><img src="../images/LOGO.ico" alt="LOGO" width="50px"
                    height="40px">
                <div class="bar"><button id="bar" onclick="show()"><i class="fa fa-bars"></i></button></div>
            </div>


            <div class="menue2">
                <div><a href="../php/mainpage.php"><i class="fa fa-home"></i> Home</a></div>
                <div class="m"><a href="../html/aboutus.html">About Us</a></div>
                <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                <div class="m"><a href="../php/signin.php">SIGN IN</a></div>

            </div>

            <div class="menue">
                <div class="h1" style="display: flex;flex-direction: row;">
                    <div><a href="../php/mainpage.php"><i class="fa fa-home"></i> Home</a></div>
                    <div><a href="../html/aboutus.html">About Us</a></div>
                </div>
                <div class="h2" style="display: flex;flex-direction: row;">
                    <div class="m"><a href="../html/contact.html">Contact Us</a></div>
                    <div class="m"><a href="../php/signin.php">SIGN IN</a></div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="center">
                <h2> Sign In</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input id="username" type="username" placeholder="username" name="username" />
                <div class="pass">
                    <input id="password" type="password" placeholder="password" name="pas"  />
                    <div class="me">
                        <div class="triangle"></div>
                        <div class="box">
                            <div style="margin-top: 10px;margin-left: 5px;"><i class="fa-solid fa-triangle-exclamation" style="color: red;"></i> </div>
                            <div>
                                <p class="par">
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                <div class="readmore"><input type="submit" name="login" placeholder="SIGN IN"  class="signinb"/> </div>
               
                <div class="forgot" style="display: flex;justify-content: end;">
                    <div class="fw">Forgot</div>
                    <a href="" style="text-decoration: none; color: green;"> Username / Password?</a>
                </div>
                <div class="signup">
                    <div style="color: white;">Don’t have an account?</div>
                    <a href="../php/signup.php" style="margin-left: 20px;">SIGN UP NOW</a>
                </div>
                
            </div>
            </form>
        </div>

    </div>
    <div style="height: 5vh;background-color: #6a6a6a;">

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

    </div>
    <script src="../javascript/jquery-3.6.0.min.js"></script>
    <script src="../javascript/all.js"></script>
</body>

</html>