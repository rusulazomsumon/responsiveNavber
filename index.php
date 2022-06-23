<?php 
    $conn = mysqli_connect("localhost","root"," ","pvds" or die("connection Failed"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Dropdown Menu - RASumon</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <!-- Navber Start -->
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">RASumon</a></div>
        <ul class="links">  
          <li><a href="#">Home</a></li>
          <li><a href="#">About Me</a></li>
          <li>
            <a href="#" class="desktop-link">Skills</a>
            <input type="checkbox" id="show-skills">
            <label for="show-skills">Skills</label>
            <ul>
              <li><a href="#">Laravel</a></li>
              <li><a href="#">Wordpress</a></li>
              <li><a href="#">.Net</a></li>
              <li><a href="#">Android Studio</a></li>
              <li><a href="#">Graphics Design</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Services</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="#">Web Application</a></li>
              <li><a href="#">Android App</a></li>
              <li><a href="#">All Kinds Website</a></li>
              <li>
                <a href="#" class="desktop-link">Software</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">Software</label>
                <ul>
                  <li><a href="#">eCommerce</a></li>
                  <li><a href="#">ERP</a></li>
                  <li><a href="#">Micro Finance</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Contact Me</a></li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="You are Looking for..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  <!-- Navber End -->
  <!-- Main Body Content Start -->

  <!-- Main Body Content End -->
</body>
</html>
