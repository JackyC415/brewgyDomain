<!DOCTYPE html>
<html>
<head>
<title>News</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn { 
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: auto;
  margin-top: auto;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn { 
    width: 100%;
    padding: 0;
  }
}
</style>
</head>

<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">Brewgy</a>
  </div>
</div>

<div class="header">
  <h2>BREWS</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Brewgy X prototype expected launch date end of 2019</h2>
      <h5>By Julia Limitone | Published March 5th, 2019 | Brew News</h5>
      <div> <img src="images/dronePrototype.jpg"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="card">
      <h2>Competitor DJI is ahead of the game</h2>
      <h5>By John Smith | Published March 3rd, 2019 | Brew News</h5>
      <div> <img src="images/dji.jpg"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="card">
      <h2>Google X just launched Project Wing</h2>
      <h5>By Jane Doe | Published March 1st, 2019 | Brew News</h5>
      <div> <img src="images/googlex.jpg"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>The Story of Brewgy</h2>
      <div> <img src="images/droneProduct.jpg"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

   <div class="card">
      <h2>Popular Post</h2>
      <p></p><h4>Unknown Drone Start Up</h4><p></p>
      <div> <img src="images/post1.jpg"></div>
      <p></p><h4>Amazon Prime Air</h4><p></p>
      <div> <img src="images/post2.jpg"></div>
      <p></p><h4>Google X</h4><p></p>
      <div> <img src="images/post3.jpg"></div>
      <p></p><h4>Airbus</h4><p></p>
      <div> <img src="images/airbus.jpg"></div>
      <p></p><h4>Drone Prototype</h4><p></p>
      <div> <img src="images/dronePrototype.jpg"></div>
    </div>

    <p></p>
     <div class="card">
      <h3>Follow Me</h3>
      <li><a href="https://github.com/JackyC415" target="_blank" class="social github">Github</a></li>
     <li><a href="https://www.linkedin.com/in/jackyc415/" target="_blank" class="social linkedin">LinkedIn</a></li>
     <li><a href="https://www.facebook.com/jackyzchen415" target="_blank" class="social facebook">Facebook</a></li>
    </div>
  </div>
</div>

</body>
</html>