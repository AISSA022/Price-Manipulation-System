<?php
include("conn.php");
// $fetch_query="select p.name as product_name ,price ,m.name as market_name from market m,productmarket p where m.marketID =p.marketID";

// $stmt=$conn->prepare($fetch_query);
// $stmt->execute();

// $row=$stmt->get_result();

// while($result_data=$row->fetch_assoc()){
//     echo '<div class="prod">  
//     <div><img src="../images/LOGO.ico"></div>
//     <div class="product-body">
    
//     <h4 class="product-title">'.$result_data["product_name"].'</h4>
//     <h5 style="color: grey;">'.$result_data["market_name"].'</h5>
//     <h5 style="color: grey;">'.$result_data["price"].'</h5>

//     </div>';
//       }
//       ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markets|Commodity Monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/marketsss.css">
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
        <!-- ////////////////////////////////////////////////////////// -->
        <div class=center style="background-repeat: repeat;">
            <div class="c" style="margin-bottom:20px; display:flex">
                <div> <h1>Markets</h1></div>
                <div class="search-box" style="margin-left:200px">
                            <button class="btn-search"><i class="fa fa-search"></i></button>
                            <input type="search" id="search2" class="input-search" placeholder="Type to Search...">
                        </div>
            </div>

            <div class="markets" id="markets">
                <?php
            $fetch_query="select p.name as product_name ,price ,m.name as market_name from market m,productmarket p where m.marketID =p.marketID";

                $stmt=$conn->prepare($fetch_query);
                $stmt->execute();

                $row=$stmt->get_result();

                while($result_data=$row->fetch_assoc()){
                    echo '<div class="prod">  
                    <img src="../images/LOGO.ico">
                    <div class="product-body">
                    
                    <h4 class="product-title">'.$result_data["product_name"].'</h4>
                    <h5 style="color: grey;">'.$result_data["market_name"].'</h5>
                    <h5 style="color: grey;">'.$result_data["price"].' L.L</h5>
                    </div>
                    </div>';
                    }
?>
        </div>
        </div>


        <!-- ///////////////////////////////////////////////////////////////////// -->
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
                                <li style="margin-right: 30px;text-decoration: none;color: whitesmoke;">Privacy
                                </li>
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
        <script>$("#search2").keyup(function () {
  const input = document.getElementById('search2').value.toLowerCase();
  const productslist = document.getElementById('markets');
  const pro = productslist.getElementsByClassName('prod');
  for (let i = 0; i < pro.length; i++) {
      let name = pro[i].querySelector(".product-body h4.product-title");
      if (name.innerText.toLowerCase().indexOf(input) > -1) {
      pro[i].style.display = "";
      } else {
      pro[i].style.display = "none";
      }
  }
  });</script>
</body>

</html>