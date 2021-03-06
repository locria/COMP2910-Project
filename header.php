<!DOCTYPE html>
<html>
<head>
  <title>Use-It-Up</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <link href="styles/bootstrap.min.css" rel="stylesheet" media="screen" />
  <link href="styles/social-share-kit.css" rel="stylesheet" media="screen">
  <link href="styles/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/social-share-kit.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Patua+One');
  </style>
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
  <script type="text/javascript" src="js/scripts.js"></script>
  <!--The bottom two script tags are for the firebase database to function on our app-->
  <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase-database.js"></script>
  <script>
  //Configurations for the firebase initialization
  var config = {
    apiKey: "AIzaSyCS3TPF_o_6n52S9wevo7sz6k3h3V4FMS8",
    authDomain: "comp2910-b5e23.firebaseapp.com",
    databaseURL: "https://comp2910-b5e23.firebaseio.com",
    projectId: "comp2910-b5e23",
    storageBucket: "comp2910-b5e23.appspot.com",
    messagingSenderId: "230859715437"
  };
  //Initialize firebase application
  firebase.initializeApp(config);

  //Getting an instance of the database
  var database = firebase.database();
  //Enable logging
  firebase.database.enableLogging(true);

  //Set to rootRef to the food node
  var rootRef = database.ref("food");
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("body").fadeIn(500);
  });
  </script>
  <script>
  window.onpopstate = function(event) {
    var pageToLoad = event.state.page;
    var type;
    var searchOrNot;
    if (event.state.type != null) {
      type = event.state.type;
    }
    if (event.state.live != null) {
      searchOrNot = event.state.live;
    }
    if (pageToLoad === "home" || pageToLoad === "allFruits" || pageToLoad === "allVeggies" || pageToLoad === "allGrains") {
      loadHistory(pageToLoad);
    } else if (searchOrNot) {
      foodLoadHistory(pageToLoad,type);
    } else {
      pageLoadHistory(pageToLoad,type);
    }
  };
  </script>
</head>
<body class="bg-primary" id="main">
  <div class="container">
    <div class="text-center center-block">
      <a href='javascript:load("home")'>
        <img src="Images/UseItUpBanner v2.0.png"/>
      </a>
    </div>
    <div>
      <div class="hamburger">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </div>

    </div>
    <div>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="text-black" href="index.php">Home</a>
        <a class="text-black" href="about.php">About Us</a>
        <a class="text-black" href="info.php">Info</a>
        <a class="text-black" href="fridge.php">About Your Fridge</a>
        <a class="text-black" href="affiliates.php">Partners</a>
        <a class="text-black" href="contactus.php">Contact Us</a>
      </div>
    </div>
    <div>
    </div>
