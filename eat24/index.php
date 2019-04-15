<?php
  $burgers = array("Normal-burger", "Cheese-burger", "Tuna-burger");
  $drinks = array("Cola", "Beer", "Wine");
  $ice_cream= array("Vanilla", "Chocolate", "Lime");
  $choice = "Choose";

  function show_burgers() {
    echo "showing Burger list";
  }

  function show_drinks() {
    echo "showing Drinks list";
  }

  function show_ice_cream() {
    echo "showing Ice cream list";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Eat24</title>
  </head>
  <body>
    <header>
      <div class="login">
        <form class="" action="index.php" method="post">
          Username: <input type="text" name="username">
          Password: <input type="text" name="password">
          <!-- <input type="submit" value="login"> -->
        </form>
      </div>
      <div class="banner">
        <img src="images/banner.png" alt="bnr" class="banner-img">
      </div>
      <h1 id="title">Eat24</h1>
    </header>
    <main>
      <hr/>
      <!-- Nav bar -->
      <ul class="nav">
        <li><a href="?show_burgers">Burgers</a></li>
        <li><a href="?show_ice_cream">Ice Cream</a></li>
        <li><a href="?show_drinks">Drinks</a></li>
      </ul>
      <hr/>
    </main>

    <br/>
    <form action="index.php" method="get">
      Search: <input type="text" name="search">
      <input type="submit" value="Search">
    </form>
    <br/>
    <div class="menu">
      <?php
        if(isset($_GET['show_burgers'])) {
          show_burgers();
        }
        elseif (isset($_GET['show_ice_cream'])) {
          show_ice_cream();
        }elseif(isset($_GET['show_drinks'])){
          show_drinks();
        }else{
          echo "Nothing to show";
        }

      ?>
    </div>
    <div id="filler">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <footer>
      <p>Copyright 2019 by Apostolos Lalos</p>
    </footer>
  </body>
</html>
