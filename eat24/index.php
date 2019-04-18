<?php
  $burgers = array("Normal-burger", "Cheese-burger", "Tuna-burger");
  $drinks = array("Cola", "Beer", "Wine");
  $ice_cream= array("Vanilla", "Chocolate", "Lime");
  $choice = "Choose";

  function display_items($item) {
    foreach($item as $value){
      echo "<div class=\"menu\">
              <div id=\"items\">
                <div id=\"item-img\">
                  <img src=\"./images/".$value.".jpg\" id=\"item-logo\" alt=\"item\">
                </div>
                <div id=\"item-text\">
                  <h1>$value</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </div>";
    }

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
      <h1 id="title"><a href="index.php">Eat24</a></h1>
    </header>
    <main>
      <hr/>
      <section>
        <!-- Nav bar -->
        <ul class="nav">
          <li><a href="?show_burgers">Burgers</a></li>
          <li><a href="?show_ice_cream">Ice Cream</a></li>
          <li><a href="?show_drinks">Drinks</a></li>
        </ul>
      </section>

      <hr/>


    <br/>
    <section>
      <form action="index.php" method="get">
        Search: <input type="text" name="search">
        <input type="submit" value="Search">
      </form>
    </section>

    <br/>
    <section class=" menu-bg">
      <div class="content-wrap">
        <?php
          if(isset($_GET['show_burgers'])) {
            display_items($burgers);
          }
          elseif (isset($_GET['show_ice_cream'])) {
            display_items($ice_cream);
          }elseif(isset($_GET['show_drinks'])){
            display_items($drinks);
          }else{
            //echo "Nothing to show";
          }
        ?>
      </div>

    </section>
    <section>
      <div class="filler-wrap">
        <div id="filler">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </section>
    </main>
    <footer>
      <div class="content-wrap">
        <p>Copyright 2019 by Apostolos Lalos</p>
      </div>
    </footer>
  </body>
</html>
