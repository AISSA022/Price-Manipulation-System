<?php
include('conn.php');

session_start();


$uid= $_SESSION['uid'];
$pn=isset($_POST['product-title']) ? $_POST['product-title'] : "";
$price=isset($_POST['price']) ? $_POST['price'] :"";
$des = isset($_POST['des']) ? $_POST['des'] : "";
$deletepname=isset($_POST['pd']) ? $_POST['pd'] : "";
$icon =isset($_FILES["pro-img"]["name"]) ? $_FILES["pro-img"]["name"] : "";

$fetch_query="SELECT marketID FROM market WHERE userID=$uid";
$stmt=$conn->prepare($fetch_query);
$stmt->execute();
$row=$stmt->get_result();

while($result_data=$row->fetch_assoc()){
    $id=$result_data['marketID'];
}


if(isset($_POST['addp'])){
if($pn!="" && $price !="" && $des !="" && $icon != "" ){
    $pn = filter_var( $pn, FILTER_SANITIZE_STRING);
    $des = filter_var( $des, FILTER_SANITIZE_STRING);
    $icon = filter_var($icon, FILTER_SANITIZE_STRING);

    $sql_query = "SELECT * FROM productmarket WHERE name='$pn' AND marketID='$id' ";
    $result = mysqli_query($conn ,$sql_query);
    $num= mysqli_num_rows($result);
   
    
    $sql_query = "INSERT INTO products ( name,description) VALUES ( ?,?)";
    

    $stmt = $conn->prepare($sql_query);

    $stmt->bind_param('ss',$pn,$des);

    $stmt->execute();
    //
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["pro-img"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // if (isset($_POST["addp"]))
    // {
    //     $check = getimagesize($_FILES["plant-img"]["tmp_name"]);
    //     if ($check !== false)
    //     {
    //         echo '<script>alert("File is an image - " . $check["mime"] . ".")</script>';
    //         $uploadOk = 1;
    //     }
    //     else
    //     {
    //         echo '<script>alert("File is not an image.")</script>';
    //         $uploadOk = 0;
    //     }
    // }
    //
    $sql_query = "INSERT INTO productmarket ( marketID,name,price,icon) VALUES ( ?,?,?,?)";
    

    $stmt = $conn->prepare($sql_query);

    $stmt->bind_param('ssss', $id,$pn,$price,$icon);

    $stmt->execute();


}
}

//Delete Product
if(isset($_POST['deletep'])){

    if($deletepname !=""){
    $id= $_SESSION['mid'];
    $sql=" DELETE FROM productmarket WHERE  name='$deletepname' AND marketID=$id ";
    mysqli_query($conn, $sql);
    
    }
 }


    


?>

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
    <link rel="stylesheet" href="../css/market.css">
    
    
</head>

<body>
    <div class="all">
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
                <div class="m"><a href="../php/signup.php">LOG OUT</a></div>
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
            </div>


        </div>

        <div class="center" style="background-repeat: repeat;">
            <div class="topmen">
                <div class="marketname">
                    <p><?php 
                    $fetch_query="SELECT name FROM market WHERE userID=$uid";
                    $stmt=$conn->prepare($fetch_query);
                    $stmt->execute();
                    $row=$stmt->get_result();
                    while($result_data=$row->fetch_assoc()){
                        echo $result_data["name"];
                    }
                    ?></p>
                </div>
            </div>
            <div class="cen">
                <nav id="sideNav">
                    <ul>
                        <li><a href="../php/pricelist.php" id="">Price List<i class="fa-solid fa-hand-holding-dollar"></i></a></li>
                        <li style="margin-top: 3px;"><a href="../php/Reportproblem.php" id="garden"
                                style="font-size: 15px;padding-right: 5px">Report a Problem<i
                                    class="fa-solid fa-hand-holding-dollar"></i></a></li>

                    </ul>
                </nav>

                <div class="products">
                    <div class="titl">
                        <div class="myp"> My Products</div>
                        <div class="search-box">
                            <button class="btn-search"><i class="fa fa-search"></i></button>
                            <input type="search" id="search1" class="input-search" placeholder="Type to Search...">
                        </div>
                    </div>
                    <div class="product-list" id="product-list">
                        
                        
                       
                       <?php
                        // $mmid=intval($_SESSION['mid']);
                        // echo $mmid;
                        $fetch_query="SELECT marketID FROM market WHERE userID=$uid";
                        $stmt=$conn->prepare($fetch_query);
                        $stmt->execute();
                        $row=$stmt->get_result();
                        while($result_data=$row->fetch_assoc()){
                            $mmid=$result_data['marketID'];
                        }
                        // $id= $_SESSION['mid'];
                        $fetch_query="select p.name, price ,icon from products p, productmarket pm where $mmid=pm.marketID and pm.name=p.name";
                           // select p.name as product_name ,price ,m.name as market_name from market m,productmarket p where m.marketID =p.marketID 
                           $stmt=$conn->prepare($fetch_query);
                           $stmt->execute();
        
                           $row=$stmt->get_result();
                        // uploads/'.$result_data["icon"].'" style="width:200px; height:300px;
                           while($result_data=$row->fetch_assoc()){
                               echo '<div class="prod" style="display:block">  
                               <img src="../images/LOGO.ico">
                               <div class="product-body">
                               <h4 class="product-title">'.$result_data["name"].'</h4>
                               <h5 style="color: grey;">'.$result_data["price"].' L.L</h5>
                               </div></div>';
                                 } 
                        ?>
                        </div>
                    </div>

                </div>
            </div>





            <div id="prod-dis">
                <div class="product-dis">
                    <form action="market.php" method="POST">
                    <span class="closebtn9">&times;</span>
                    <h1 id="expanded-product-title" style="text-align: center;">Product Name</h2>
                        <h3 id="expanded-product-dis"><?php echo $des;  ?></h5>
                            <h4><?php echo $price;  ?></h5>
                                <div>
                                    <button id="edit">Edit <i class="fa-solid fa-pencil"></i></button>
                                </div>
                                </form>
                </div>
            </div>
            <button class="addproduct">Add Product</button>
            <form action="market.php" method="POST" enctype="multipart/form-data">
            <div id="modal" class="hide-modal" >
                <div class="modal-content" style="height:98vh ;top:50%">
                    <span class="close-btn">&times;</span>
                    <h3 style="margin-bottom: 15px;">New Product </h3>

                    <label for="product-title" style="margin-bottom: 15px;">Product
                        Name</label>
                    <input type="text" name="product-title" id="product-t"
                        style="margin-bottom: 15px;border: 1px solid #006938; border-radius: 5px;text-align: center; width: 100%; padding: 5px;"
                        placeholder="Enter The Name Of The Product" required>

                    <label for="product-img"  style="margin-bottom: 15px;" >Choose Product Icon</label>
                    <input type="file"  accept="image/png" name="pro-img" id="pro-img" required
                        style="margin-bottom: 15px;border: 1px solid #006938; border-radius: 5px;text-align: center; width: 100%; padding: 5px;">

                    <label style="margin-bottom: 15px;">Product Price</label>
                    <input id="proprice"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                        type="text"
                        name="price"
                        style="margin-bottom: 15px;border: 1px solid #006938; border-radius: 5px;text-align: center; width: 100%; padding: 5px;"
                        placeholder="Enter The Price Of The Product" required>

                    <label style="margin-bottom: 15px;">Product Description</label>
                    <input type="text"
                        style="margin-bottom: 15px;height: 200px;border: 1px solid #006938; border-radius: 5px;text-align: center; width: 100%; padding: 5px;"
                        placeholder="..." name="des" required>

                    <input id="add-product" type="submit" name="addp" 
                        style="margin: 10px;background-color: #006938;padding: 5px;color: white;text-align: center; border: none;border-radius: 5px; cursor: pointer;">
                </div>
            </div>
            </form>
            <button class="deleteproduct">Delete Product</button>
            <div id="modal2">
                <div class="modal-content2">
                    <span class="close-btn2">&times;</span>
                    <h1 style="margin-bottom: 15px;">Delete Product </h3>
                    <form action="market.php" method="POST">
                        <label for="product-title" style="margin-bottom: 15px;">Product
                            Name</label>
                        <input type="text" name="pd" id="productd"
                            style="margin-bottom: 15px;border: 1px solid #006938; border-radius: 5px;text-align: center; width: 100%; padding: 5px;"
                            placeholder="Enter The Name Of The Product" required>
                        <input type="submit" id="delete" name="deletep" placeholder="DELETE">
                        </form>
                </div>
            </div>
            <div id="alert1">
                <div class="alert-dis">
                    <span class="collapse-btn3">&times;</span>
                    <h1 style="text-align: center;margin-top: 100px; color: black;"> You Have Enter This Product
                        Before</h1>

                    <button id="close">OK</button>
                </div>
            </div>
            <div id="alert">
                <div class="alert-dis">
                    <span class="collapse-btn6">&times;</span>
                    <h1 style="text-align: center;margin-top: 100px; color: black;"> Please check the name of the
                        product</h1>

                    <button id="close">OK</button>
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
            <!-- <script>
        // $("#delete").click(function () {
        //     window.alert("hiii");

            
        // });
        $("#delete").click(function () {
        const input = document.getElementById('productd').value.toLowerCase();
        const productslist = document.getElementById('product-list');
        const pro = productslist.getElementsByClassName('prod');
        for (let i = 0; i < pro.length; i++) {
            let name = pro[i].querySelector(".product-body h4.product-title");
            if (name.innerText.toLowerCase().indexOf(input) > -1) {
            pro[i].remove();
            }
            else{
            $("#alert").css("display", "block");
            }
        }
        });
    </script> -->
</body>

</html>