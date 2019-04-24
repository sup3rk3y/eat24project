<?php
  // Populate some variables, could be done pulling data from database
  $burgers = array("Normal-burger", "Cheese-burger", "Tuna-burger");
  $drinks = array("Cola", "Beer", "Wine");
  $ice_cream= array("Vanilla", "Chocolate", "Lime");
  $choice = "Choose";

  // Displays all the items based on a given category [burgers/drinks/ice cream]
  // produce some html code
  function display_items($item) {
    foreach($item as $value){
      echo "<div class=\"menu\">
              <div id=\"items\">
                <div id=\"item-img\">
                  <img src=\"./images/".$value.".jpg\" id=\"item-logo\" alt=\"item\">
                </div>
                <div id=\"item-text\">
                  <h1>$value</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <b>PRICE: 10,000 Kr.</b></p>
                </div>
              </div>
            </div>";
    }

  }

  // Displays the current user logged in on the SESSION
  // The type hidden with UID "1234" is just a temporary silly flag used for POST
  function display_user(){
    echo "<div>
              <div class=\"top-lane\">Welcome ".$_SESSION["user"]."</div>
              <form class=\"top-lane\" action=\"index.php\" method=\"POST\">
                <input type=\"hidden\" name=\"UID\" value=\"1234\">
                <input type=\"submit\" value=\"logout\">
              </form>
          </div>";
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
        <?php
            session_start();

            // destroySESSION if flag is passed as POST
            if(isset($_POST["UID"])){
              session_destroy();
              $_POST["UID"] = null;
              header("Refresh:0");
            }

            // display user if SESSION is open
            if(isset($_SESSION["user"] )){
              display_user();
            }
            elseif(isset($_POST["username"])){
                // get the username and put in SESSION
                $_SESSION["user"] = $_POST["username"];
                display_user();
            }
            else {
              //just display an HTML form waiting for user credenctials
        ?>
        <form class="" action="index.php" method="post">
          Username: <input type="text" name="username">
          Password: <input type="password" name="password">
          <input type="submit" value="Login">
        </form>
        <?php }?>
      </div>


      <!-- banner -->
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
    <!-- Search Form -->
    <section>
      <form action="index.php" method="get">
        Search: <input type="text" name="search">
        <input type="submit" value="Search">
      </form>
    </section>

    <!-- Menu Display -->
    <br/>
    <section class=" menu-bg">
      <div class="content-wrap">
        <?php
          // if the user used the Search Form then display categories
          if(isset($_GET['search'])){
            switch($_GET['search']){
              case "burgers":
                display_items($burgers);
                break;
                case "ice cream":
                  display_items($ice_cream);
                  break;
                  case "drinks":
                    display_items($drinks);
                    break;
                  default:
                    echo "<p class=\"default-search\">Seach for a valid category burgers/drinks/ice cream</p>";
            }
          }

          // The user used the navigation bar, then dipslays the products based on the category
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
          <p><b>Eat24</b> is a completely <b>MADE UP</b> business located in the middle of Copenhagen, ready to create the structure and the systems needed to allow our customers access to the majority of their away-from-home daily meal requirements on a one-stop-shop basis. All our products shall be of the highest quality and value, be healthy, nutritious and provided with outstanding personal services at the lowest possible prices consistent with a fair return on investment for our shareholders, job enhancement/security for our employees and a level of community involvement by everyone connected with our business.</p>
        </div>
      </div>
    </section>
    </main>
    <footer>
      <div class="content-wrap">
        <p>Created in 2019 by <a id="creator" href="https://github.com/sup3rk3y" target="_blank">Apostolos Lalos</a></p>
      </div>
    </footer>
  </body>
</html>
