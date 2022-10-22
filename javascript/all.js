
//    search button for best supermarkets
$(document).ready(function () {

  $(".fa-search").hover(function () {
    $("#search-in").show();
    $(".fa-search").hide();
  });

});

//     Read More of Best markets

$(document).ready(function () {

  $("#morebs").click(function () {
    $(".market2").show();
    $("#morebs").hide();
  });
});

//  Report Type

function check(nameSelect) {
  if (nameSelect) {
    admOptionValue = document.getElementById("three").value;
    adm2 = document.getElementById("two").value;
    adm3 = document.getElementById("one").value;
    if (admOptionValue == nameSelect.value || adm2 == nameSelect.value || adm3 == nameSelect.value) {
      document.getElementById("proof").style.display = "block";
      document.getElementById("proofs").style.display = "block";
    }
    else {
      document.getElementById("proof").style.display = "none";
      document.getElementById("proofs").style.display = "none";
    }

  }

};

// Rating
$(document).ready(function () {

  //  star1
  $("#star1").click(function () {
    $("#star1").css("color", "orange")
  });

});
//star2
$(document).ready(function () {

  $("#star2").click(function () {
    $("#star2").css("color", "orange")
  });

});
//star3
$(document).ready(function () {

  $("#star3").click(function () {
    $("#star3").css("color", "orange")
  });

});
//star4
$(document).ready(function () {

  $("#star4").click(function () {
    $("#star4").css("color", "orange")
  });

});
//star5
$(document).ready(function () {

  $("#star5").click(function () {
    $("#star5").css("color", "orange")
  });

});

//.............



//    menue bar

$(document).ready(function () {

  $("#bar").click(function () {
    $('.menue2').toggle('slow', function () { });
    $('#bar').toggle('slow', function () { });
  });

});
$(document).mouseup(function (e) {
  var menu = $(".menue2");
  var bar = $("#bar");
  if (!menu.is(e.target) && menu.has(e.target).length === 0) {
    menu.hide();
    bar.show();
  }
});



//  adds

// $(document).ready(function () {
//   var aa = ["https://vid.alarabiya.net/images/2021/03/17/882a4cda-0c90-400c-ae00-a0ad63d2673d/882a4cda-0c90-400c-ae00-a0ad63d2673d_16x9_1200x676.jpg?width=1138"
//     , "https://insidearabia.com/wp-content/uploads/2020/07/An-anti-government-protester-during-ongoing-protests-in-front-of-the-Ministry-of-Economy-in-downtown-Beirut-Lebanon-May-18-2020.-AP-Photo-Hassan-Ammar-scaled.jpg"
//     , "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjGmrLKxNpxuzrSwFc3lfRqXF1U1biZhtklw&usqp=CAU",
//     "https://www.the961.com/wp-content/uploads/2021/03/Lebanon-Bread-770x404.jpg"];
//   var index = 0;
//   //setinterval --> method calls a function at specified intervals
//   setInterval(function () {
//     if (index === aa.length) {
//       index = 0;
//     }
//     document.getElementById("addimg").src = aa[index];
//     index++;
//   }, 3000);

// });

// last news

$(document).ready(function () {
  // slick a fresh new jQuery plugin for creating fully customizable, responsive and mobile friendly carousels/sliders that work with any html elements
  if (screen.width > 400) {
    $(".mo").slick({
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      prevArrow: '<span class="priv-arrow" style="margin-left:20px"><i class="fa fa-angle-left" style="color: white;width: 30px;height:20px;background-color:  #262626; border-radius: 5px;text-align: center;display: inline-block;cursor: pointer;"></i></span>',
      nextArrow: '<span class="next-arrow"style="margin-right:20px"><i class="fa fa-angle-right" style="color: white;width: 30px;height:20px; background-color: #262626 ;border-radius: 5px;text-align: center;display: inline-block;cursor: pointer;"></i></span>',
    });
  }
});

//sign in pass


$(document).ready(function () {

  $(".signinb").click(function () {
    if ($("#password").val().length <= 8) {
      $(".me").css("display", "flex");
      $(".par").text("Password length must be atleast 8 characters");
      $(".me").show();

    }

    if ($("#password").val() == "") {
      // window.alert("Fill the password please!");
      $(".me").css("display", "flex");
      $(".par").text("Please Fill The password");
      $(".me").show();
    }
  });
});

// search for bestmarkets

$(document).ready(function () {
  $("#search-in").keyup(function () {
    $(".market2").show();
    $("#morebs").hide();
    const input = document.getElementById('search-in').value.toLowerCase();
    const marketList = document.getElementById('ma');
    const mar = marketList.getElementsByClassName('market');
    for (let i = 0; i < mar.length; i++) {
      let name = mar[i].querySelector(".name h4.nm ");
      if (name.innerText.toLowerCase().indexOf(input) > -1) {
        mar[i].style.display = "";
      } else {
        mar[i].style.display = "none";
      }
    }
  });
});

$(document).ready(function () {


  $(".li").click(function (e) {
    $(".aa1").css("background-color", "#006938");
    if ($(".rep2").is(":visible")) {
      $(".rep2").hide();
    }
    if ($(".rep3").is(":visible")) {
      $(".rep3").hide();
    }
    if ($(".rep4").is(":visible")) {
      $(".rep4").hide();
    }
    if ($(".rep5").is(":visible")) {
      $(".rep5").hide();
    }
    e.preventDefault();
    $(".rep1").show('slide', { direction: 'left' }, 1000);

  
  // 2-li
  $(".li1").click(function (e) {
    $(".aa2").css("background-color", "#006938");
    if ($(".rep1").is(":visible")) {
      $(".rep1").hide();
    }
    if ($(".rep3").is(":visible")) {
      $(".rep3").hide();
    }
    if ($(".rep4").is(":visible")) {
      $(".rep4").hide();
    }
    if ($(".rep5").is(":visible")) {
      $(".rep5").hide();
    }
    e.preventDefault();
    $(".rep2").show('slide', { direction: 'right' }, 1000);
  });
  //3-li
  $(".li2").click(function (e) {
    $(".aa3").css("background-color", "#006938");
    if ($(".rep1").is(":visible")) {
      $(".rep1").hide();
    }
    if ($(".rep2").is(":visible")) {
      $(".rep2").hide();
    }
    if ($(".rep4").is(":visible")) {
      $(".rep4").hide();
    }
    if ($(".rep5").is(":visible")) {
      $(".rep5").hide();
    }
    e.preventDefault();
    $(".rep3").show('slide', { direction: 'right' }, 1000);
  });
  //4-li
  $(".li3").click(function (e) {
    $(".aa4").css("background-color", "#006938");
    if ($(".rep1").is(":visible")) {
      $(".rep1").hide();
    }
    if ($(".rep2").is(":visible")) {
      $(".rep2").hide();
    }
    if ($(".rep3").is(":visible")) {
      $(".rep3").hide();
    }
    if ($(".rep5").is(":visible")) {
      $(".rep5").hide();
    }
    e.preventDefault();
    $(".rep4").show('slide', { direction: 'right' }, 1000);
  });
  //5-li
  $(".li4").click(function (e) {
    $(".aa5").css("background-color", "#006938");
    if ($(".rep1").is(":visible")) {
      $(".rep1").hide();
    }
    if ($(".rep2").is(":visible")) {
      $(".rep2").hide();
    }
    if ($(".rep3").is(":visible")) {
      $(".rep3").hide();
    }
    if ($(".rep4").is(":visible")) {
      $(".rep4").hide();
    }
    e.preventDefault();
    $(".rep5").show('slide', { direction: 'right' }, 1000);
  });

});

//   expand-product discription
$(document).ready(function () {

  $('#product-list').on('click', '.prod', function () {
    $("#expanded-product-title").text($(this).find(".product-title").text());
    $("#prod-dis").css("display", "block");
    $(".product-dis").animate({ 'top': '17%' }, 600);
  });

});

//collapse product discription
$(".collapse-btn").click(function () {
  $(".product-dist").animate({ 'top': '200%' }, 600);
  $("#prod-dis").css("display", "none");
});

//close add product 
$(".close-btn").click(function () {
  $(".modal").animate({ 'top': '200%' }, 600);
  $("#modal").css("display", "none");
});

//display model of adding product
$(".addproduct").click(function () {
  $(".modal").animate({ 'top': '200%' }, 600);
  $("#modal").css("display", "block");

});


//display model of deleting product
$('.deleteproduct').click(function () {
  $(".modal").animate({ 'top': '200%' }, 600);
  $("#modal2").css("display", "block");
});

//close add product 
$(".close-btn2").click(function () {
  $(".modal").animate({ 'top': '200%' }, 600);
  $("#modal2").css("display", "none");
});

//delete
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

// ///Enter only numbers for product price
// function isNumberKey(evt) {
//   var charCode = (evt.which) ? evt.which : event.keyCode
//   if (charCode > 31 && (charCode < 48 || charCode > 57))
//     return false;

//   return true;
// }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//add product
// $('#add-product').click(function () {
//   const input = document.getElementById('product-t').value.toLowerCase();
//   const productslist = document.getElementById('product-list');
//   const pro = productslist.getElementsByClassName('prod');
//   for (let i = 0; i < pro.length; i++) {
//     const a=document.getElementById('product-t').value
//     let name = pro[i].querySelector(".product-body h4.product-title");
//     if (name.innerText.toLowerCase().indexOf(input) > -1) {
//        $("#alert1").css("display", "block");
      
//     }
//     else {
//       // append() method inserts a set of Node objects or string objects after the last child of the Element
//       $("#product-list").append('<div class="prod"><img src="../images/LOGO.ico" alt="productimage"><div class="product-body"><h4 class="product-title">'+ $("input[name=product-title]").val() +'</h4><h5  style="color: grey;">'+ $("input[name=price]").val() +'</h5></div></div>');
//       $("#product-list").css("height", "auto");
//     }
//     return false;
//   }
// })

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

// //url for image not done yet
// function readURL(input) {
//   if (input.files && input.files[0]) {
//     var reader = new FileReader();
//     reader.onload = function (e) {
//       $('#url')
//         .attr('src', e.target.result)
//         .width(150)
//         .height(200);
//     };
//     reader.readAsDataURL(input.files[0]);
//   }
// }
// //close alert div 
$(".collapse-btn3").click(function () {
  $("#alert1").css("display", "none");
});
$("#close").click(function () {
  $("#alert1").css("display", "none");
});

// //Search for Product

$("#search1").keyup(function () {
  const input = document.getElementById('search1').value.toLowerCase();
  const productslist = document.getElementById('product-list');
  const pro = productslist.getElementsByClassName('prod');
  for (let i = 0; i < pro.length; i++) {
    let name = pro[i].querySelector(".product-body h4.product-title");
    if (name.innerText.toLowerCase().indexOf(input) > -1) {
      pro[i].style.display = "";
    } else {
      pro[i].style.display = "none";
    }
  }
});


$("#search2").keyup(function () {
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
  });
// //edit button
// $("#edit").click(function () {
//   $("#prod-dis").css("display", "none");
//   $("#modal").css("display", "block");
// });
// //delete alert
// $(".collapse-btn6").click(function () {
//   $("#alert").css("display", "none");
//   // $("#alert").css("display", "block");
// });
// //add acc
// $("#addacc").click('#select', function () {
//   var n = $("#name").val();
//   var l = $("#lastname").val();
//   var p = $("#phone").val();
//   var e = $("#user").val();
//   var b = $("#password").val();
//   var t = $("#db").val();
//   var a = p.toString().length;

//   if (n != '' && l != '' && p != '' && e != '' && b != '' && t != '') {
//     if (a > 7) {
//       var val = $('#select option:selected').text();
//       if (val == "Supermarket") {
//         var url = "../html/msignup.html";
//         window.location = url;

//       }
//       if (val == "user") {
//         var url = "../html/usignup.html";
//         window.location = url;
//       }
//     }
//     else {
//       document.getElementById("h1").innerHTML = "Password should be more than 8";
//       $("#wrong").css("display", "block");

//     }
//   }
//   else {
//     $("#wrong").css("display", "block");
//   }
// });

//close sign up alert
$(".closebtn9").click(function () {
  // $(".product-dis").animate({ 'top': '200%' }, 600);
  $("#prod-dis").css("display", "none");
});

//close sign up market alert
$(".closebtn5").click(function () {
  $(".wrong1").animate({ 'top': '200%' }, 600);
  $("#wrong").css("display", "none");
});

// //add market acc
// $("#addacc").click(function () {
//   var n = $("#marketname").val();
//   var p = $("#phone").val();
//   var b = $("#password").val();
//   var a = p.toString().length;

//   if (n != '' && p != '' && b != '') {
//     if (a < 7) {
//       document.getElementById("h1").innerHTML = "Phone number should be more than 8";
//       $("#wrong").css("display", "block");

//     }
//     else {
//       url = "../html/market.html";
//       window.location = url;
//     }
//   }
//   else if (n == '' && p == '' && e == '' && b == '' && t == '') {
//     $("#wrong").css("display", "block");
//   }
// });

//close alert signup
$(".closebtn4").click(function () {
  $(".wrong").animate({ 'top': '200%' }, 600);
  $("#wrong").css("display", "none");
});

