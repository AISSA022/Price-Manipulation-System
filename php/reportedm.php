<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reported Markets |Commodity Monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="../css/reportedm.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/slick.css">
</head>


<body>
    <div class="p1.all">


        <div class="head">

            <div class="logo" style="margin-right: 800px;"><img src="../images/LOGO.ico" alt="LOGO" width="50px"
                    height="40px">
                <div class="bar"><button id="bar" onclick="show()"><i class="fa fa-bars"></i></button></div>
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
                </div>
                <!-- <div class="mainserach">
                    <button class="search">serach<i class="fa fa-caret-down" style="margin-left: 7px;"></i></button>
                     <a href="" class="search">lla<i class="fa fa-caret-down" style="margin-left: 7px;"></i></a> 
                    <div class="ss">
                        <a href=""></a>
                        <a href=""></a>
                    </div> -->


            </div>
           

        </div>
        <div class="center" style="height: 111vh;">
                <div class="cc">
                    <div style="margin-left: 35px;color: #006938;padding-top: 30px;">
                        <h1 style="font-size: -webkit-xxx-large;">Reported Markets :</h1>
                    </div>
                    <!-- <div class="table">
                        <table>
                            <tr>
                                <td><b>January</b></td>
                                <td>
                                    <ol>
                                            <li>Urban Market</li>
                                            <li>LMarket</li>
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>February</b></td>
                                <td>
                                    <ol>
                                                <li>PM Market</li>
                                                <li>Moussa Market</li>
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>March</b></td>
                                <td>
                                    <ol>
                                                <li>Al-Mona Mini-market</li>
                                                
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>April</b></td>
                                <td>
                                    <ol>
                                                <li style="color:red;">NO REPORTED MARKETS</li>
                                                
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>May</b></td>
                                <td>
                                    <ol>
                                                
                                                <li style="color:red;">NO REPORTED MARKETS</li>
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>June</b></td>
                                <td>
                                    <ol>
                                                <li>Abo Amir Market</li>
                                                
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>July</b></td>
                                <td>
                                    <ol>
                                                <li>Al Taj</li>
                                                <li>M-Market</li>
                                                <li>King Market</li>
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>August</b></td>
                                <td>
                                    <ol>
                                                <li>Altamwin Market</li>
                                                <li>Karam Market</li>
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>September</b></td>
                                <td>
                                    <ol>
                                                <li>24 Hour Market</li>
                                                
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>October</b></td>
                                <td>
                                    <ol>
                                    <li style="color:red;">NO REPORTED MARKETS</li> 
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>November</b></td>
                                <td>
                                    <ol>
                                                <li>Mango Market</li>
                                                <li>Az Minimarket</li>
                                    </ol>

                                </td>
                            </tr>
                            <tr>
                                <td><b>December</b></td>
                                <td>
                                    <ol>
                                                <li> Kombo Market</li>

                                    </ol>

                                </td>
                            </tr>
                        </table>
                    </div> -->
                    <div class="markets">
                    <?php
                    
                        $fetch_query="SELECT mname FROM report WHERE 1";
                           // select p.name as product_name ,price ,m.name as market_name from market m,productmarket p where m.marketID =p.marketID 
                           $stmt=$conn->prepare($fetch_query);
                           $stmt->execute();
        
                           $row=$stmt->get_result();
                    
                           while($result_data=$row->fetch_assoc()){
                               echo '<div class="prod" >  
                               <img src="../images/LOGO.ico">
                               <div class="product-body">
                               <h4 class="product-title">'.$result_data["mname"].'</h4>
                               
                               </div></div>';
                                 } 
                        ?>
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

        </div>


    </div>
    </div>
    <script src="../javascript/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../javascript/all.js"></script>


</body>

</html>