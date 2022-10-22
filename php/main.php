<?php
include("conn.php");

session_start();







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commodity Monopolist</title>
    <link rel="icon" href="../images/LOGO.ico" type="image/x-icon ">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../php/main.php">
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

        <!-- style="margin-left: 250px;margin-top: 5px;margin-bottom: 5px;" -->


        <div class="adds" style="text-align: center;font-size: 20px;">
            <img id="addimg" src="../images/add1.webp" alt="add1" width="900px" height="245px">
        </div>

        <div class="body">

            <div class="leftbody">
            
                <div class="last" style="width: 90%;">
                    <div class="lastnews">
                        <h3><a href="../html/news.html">Last News</a></h3>
                        <div style="display: flex; flex-direction: row;">

                        </div>
                    </div>
                    <div>
                        <ul class="mo">

                            <li>
                                <div class="n1">
                                    <div class="img1news">
                                        <div>

                                            <img src="../images/img1news.jpeg" alt="img1" width="300px" height="180px"
                                                id="imgn1">
                                        </div>
                                        <div class="blocktitle">
                                            <div class="bt1">
                                                <strong>
                                                    "02"
                                                    <span>march</span>
                                                </strong>
                                            </div>
                                            <div class="bt3">
                                                <a href="../html/news.html">Minister of Economy and Trade met the Indian
                                                    and
                                                    The
                                                    Turkish Ambassador</a>

                                            </div>
                                        </div>
                                        <div class="b1"> <button id="readmore" class="readmore"><a
                                                    href="../html/news.html">Read more</a> </button></div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="n2">
                                    <div class="img2news">
                                        <div>
                                            <img src="../images/img2news.jpg" alt="img2" width="300px" height="180px"
                                                id="imgn2">
                                        </div>
                                        <div class="blocktitle2">
                                            <div class="bt2">
                                                <strong>
                                                    "03"
                                                    <span>jan</span>
                                                </strong>
                                            </div>
                                            <div class="bt4">
                                                <a href="../html/news.html">Some Foods Are Out Of Stock</a>

                                            </div>

                                        </div>
                                        <div class="b2"> <button class="readmore"><a href="../html/news.html">Read
                                                    more</a></button></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="n3">
                                    <div class="img1news">
                                        <div>
                                            <img src="../images/new4.jpeg" alt="img3" width="300px" height="180px"
                                                id="imgn1">
                                        </div>
                                        <div class="blocktitle">
                                            <div class="bt1">
                                                <strong>
                                                    "22"
                                                    <span>june</span>
                                                </strong>
                                            </div>
                                            <div class="bt3">
                                                <a href="../html/news.html">Minister of Economy and Trade welcomed the
                                                    US Treasury delegation</a>

                                            </div>
                                        </div>
                                        <div class="b1"> <button id="readmore" class="readmore"><a
                                                    href="../html/news.html">Read more</a> </button></div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>



                <!-- <div class="Reports" >
                    <h3>Reports</h3>
                    <div class="">
                        <div class="">
                            <ul class="">
                                        <li>
                                            <a href="" class="">
                                                 <figure class=""><img src="../images/flag2.jpg" alt="" width="100px" height="50px" /></figure>
                                                <span>Reports</span> 
                                            </a>
                                        </li>
                                        This figure is for 
                                        <li>
                                            <a href="" class="">
                                                <figure class=""><img src="../images/flag.webp" alt="" width="100px" height="50px"/></figure>
                                                <span>b</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../html/news.html" class="">
                                                 <figure class=""><img src="../images/img1news.jpeg" alt="" width="100px" height="50px"/></figure>
                                                <span>c</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../html/news.html" class="">
                                                 <figure class=""><img src="../images/photo card.PNG" alt="" width="100px" height="50px"/></figure>
                                                <span>d</span> 
                                            </a>
                                        </li> 
                                        
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="reports" style="height:44vh;" >
                    <div class="llb">
                    
                <nav id="sideNav">
                    <ul>
                        <li style="margin-bottom:35px;"><a href="../php/pricelist.php" id="garden">Price List<i class="fa-solid fa-house"></i></a></li>
                        <li style="margin-top: 3px;"><a href="../php/marketss.php" id="garden"
                                style="font-size: 15px;padding-right: 5px">Markets<i
                                    class=""></i></a></li>
                        <li style="margin-bottom:35px;margin-top:35px;"><a href="../php/report.php" id="garden">Report Market<i class="fa-solid fa-house"></i></a></li>


                    </ul>
                </nav>
                </div>
                <div>
                    <h3><a href="../html/reports.html" style="margin-left: 90px;">Reports</a> </h3>
                    <div class="rep">
                        <div class="rep1">
                            <img src="../images/repimg.jpg" alt="Reports" style="margin-top: 15px;">
                            <div class="reporttitle"><a href="../html/news.html">Mini - Basket(Weekly)</a></div>
                        </div>
                        <div class="rep2">
                            <img src="../images/rep2.png" alt="" style="margin-top: 15px;">
                            <div class="reporttitle"><a href="../html/news.html">Foreign Companies Statistics</a></div>

                        </div>
                        <div class="rep3">
                            <img src="../images/rep3.jpeg" alt="" style="margin-top: 15px;">
                            <div class="reporttitle"><a href="../html/news.html">Intellectual Property Right Statistics</a></div>

                        </div>
                        <div class="rep4">
                            <img src="../images/ann33.jpg" alt="" style="margin-top: 15px;">
                            <div class="reporttitle"><a href="../html/news.html">Trade Mark </a></div>

                        </div>
                        <div class="rep5">
                            <img src="../images/news6.jpeg" alt="" style="margin-top: 15px;">
                            <div class="reporttitle"><a href="../html/news.html">Mini - Basket (weekly)</a></div>

                        </div>
                    </div>


                    <div class="li-box">
                        <div>
                            <ul>
                                <li class="li"><a class="aa" href=""></a></li>

                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li class="li1"><a class="aa" href=""></a></li>

                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li class="li2"><a class="aa" href=""></a></li>

                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li class="li3"><a class="aa" href=""></a></li>

                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li class="li4"> <a class="aa" href=""></a></li>

                            </ul>
                        </div>


                    </div>
                    </div>
                </div>
                <div class="rm" style=" width: 65%;height: auto;background: none repeat scroll 0 0 #FFFFFF;border: 5px solid #F0F0F0;border-radius: 0 5px 5px 5px;padding: 20px;
                margin-bottom: 25px;display: flex;flex-direction: column;">
                    <div class="titlebs">
                        <a href="../php/reportedm.php">
                            <h3>Reported Markets</h3>
                        </a>
                    </div>
                    <div id="ri">
                        <img id="im"  src="../images/sup1.jpg" alt="" width="300px" height="300px" style="margin-top:10px ;margin-right: 300px;margin-bottom:10px ;">
                    </div>
                </div>

                <div class="bestsupermarket">
                    <!-- This needs javascript to change every 4 sec -->
                    <div class="titlebs">
                        <a href="../html/bestmarkets.html">
                            <h3>Best Supermarkets</h3>
                        </a>
                    </div>
                    
                    <div class="imgbs">
                        <!-- This div needs React -->
                        <div class="img1bs"><img src="../images/amleya.png" alt="Amleya Logo"></div>
                        <div class="img2bs"> <img src="../images/rammalmarket.jpg" alt="Rammal Logo"></div>
                        <div class="img3bs"> <img src="../images/spinneys.png" alt="Spinneys Logo"
                                style="margin-left: 30px;"></div>
                        <div class="img4bs"><img src="../images/carrefour.png" alt="" style="margin-bottom: 20px;">
                        </div>

                    </div>
                    <div class="li-box2">
                        <div>
                            <ul>
                                <li><a href=""></a></li>

                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""></a></li>

                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="rightbody">
                <div class="allright">
                    <div class="announcements">
                        <div>
                            <div style="margin-bottom: 10px;"><a href="../html/announcements.html"
                                    style="text-decoration: none; color: black;"> ANNOUNCEMENTS</a></div>
                            <ul>

                                <li>
                                    <i class="fa fa-archive"></i>
                                    <a href="../html/announcements.html"><span class="dateann">(2/1/2022)</span>
                                        Minister of Economy and Trade
                                        held several meetings in order to
                                        strengthen the food security</a>
                                </li>
                                <li>
                                    <i class="fa fa-archive"></i>
                                    <a href=""> <span class="dateann">(15/1/2022)</span> The inspectors of the Consumer
                                        Protection Directorate at the Ministry of
                                        Economy and Trade undertook inspection patrols</a>
                                </li>
                                <li>
                                    <i class="fa fa-archive"></i>
                                    <a href=""> <span class="dateann">(15/1/2022)</span> The Consumer Protection
                                        Directorate pursued its inspections patrols in the markets</a>
                                </li>
                                <li>
                                    <i class="fa fa-archive"></i>
                                    <a href=""> <span class="dateann">(15/1/2022)</span> Director General of Economy and
                                        Trade made inspection patrols to supermarkets, bakeries and fuel stations</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sign">
                        <div>
                            <h4 style="font-size: 20px;">SIGN UP</h4>
                        </div>
                        <div class="arrsign">
                            <div class="arrow-1"></div>
                            <h3><a href="../html/signup.html">SIGN UP</a> </h3>
                        </div>
                    </div>
                    <div class="article">
                        <div>Articles</div>
                        <ul>

                            <li>
                                <i class="fa fa-archive"></i>
                                <a href="../html/article.html"> Avoiding scams material ( Ar version )</a>
                            </li>
                            <li>
                                <i class="fa fa-archive"></i>
                                <a href="../html/article.html">Consumer Protection from the internet web (Ar
                                    version)</a>
                            </li>
                            <li>
                                <i class="fa fa-archive"></i>
                                <a href="../html/article.html"> Pesticides residue in plant products (Ar Version)</a>
                            </li>
                            <li>
                                <i class="fa fa-archive"></i>
                                <a href="../html/article.html">Tips to be followed for the safety of toys </a>
                            </li>
                        </ul>
                    </div>
                    <div class="annimg">
                        <h4 style="text-align: center;">Lebanon For The Better</h4>
                        <img src="../images/annflag.jpg" width="250px" height="71px" style="margin-top: 20px;">

                    </div>
                    <div class="downloadann">
                        <h3>Download APP :</h3>
                        <div class="dicon">
                            <div><a href="https://play.google.com/store/apps" title="Google Play" target="_blank">
                                    <h1 style="font-size: 50px;"><i class="fa fa-android"></i></h1>
                                </a></div>
                            <div><a href="https://itunes.apple.com/lb/app" title="App Store" target="_blank">
                                    <h1 style="font-size: 50px;"><i class="fa fa-apple"></i></h1>
                                </a></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <div class="no">
        .
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