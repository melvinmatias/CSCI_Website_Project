<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    </head>
    
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--Navigation Bar Code--------------------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="projectIndex.php">Base<img src = 'logo.png' width="25" height="25">Pro</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!--Nav Items-->
              <li class="nav-item">
                <a class="nav-link" href="projectIndex.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.php">Shopping Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--Title------------------>
        <div align = center><h1 class="display-1" style= "font-family:'News GothicMT'">Base<img src = 'logo.png' width="100" height="100">Pro</h1></div>


        <?php

        session_start();
        $message = "Login";
        $success = false;
        $result = '';
        if(!isset($_SESSION["count"]) && !isset($_SESSION["loggedin"]))
        {
          $_SESSION["count"] = 5;
          $_SESSION["loggedin"] = 0;
          $message = "Login";
        }
        else{


          if($_SESSION["count"] == 0){
            $message = "You have reached the maximum number of login attempts.";
          }

          else if(isset($_POST['logoutbtn'])){
            $_SESSION["loggedin"] = 0;
          }



          else if(isset($_POST['mybutton'])){
            if(isset($_POST['Username']) && isset($_POST['Password'])){
              $uname = $_POST['Username'];
              $pword = $_POST['Password'];
              if($uname == 'admin'){
                if($pword == 'admin'){
                  $success = true;
                }
              }
              if($success == true){
                $_SESSION["loggedin"] = 1;
                $_SESSION["count"] = 5;
              }
              else {
                $message = "Wrong Password, Try Again";
                --$_SESSION["count"];
              }
          }
        }

        }

        if($_SESSION["loggedin"] == 0)
        {
         ?>

        <?php //header("Location: http://localhost:8888/login.php "); ?>

        <div align = 'center'>
            <div class="shadow-lg w-50 p-5 mb-5 bg-body rounded" style="background-color: #eee;">
                <div class="container-sm">
                    <h1 class="display-3">Log In</h1><br><br>

                    You have <?php echo strval($_SESSION["count"])?> attempts left

                    <form action = 'login.php' method = 'post'>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name = 'Username' required/><br>
                        </div>
                        
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Password" name = 'Password' required/> <br><br>
                        </div>
                        <input type="submit" class="btn btn-outline-dark w-50" name = 'mybutton' value = 'Log In'/>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }else{
        ?>


<div align = 'center'>
            <div class="shadow-lg w-50 p-5 mb-5 bg-body rounded" style="background-color: #eee;">
                <div class="container-sm">
                    <h1 class="display-3">Welcome Admin Account</h1><br><br>

                    <form action = 'login.php' method = 'post'>
                        <input type="submit" class="btn btn-outline-dark w-50" name = 'logoutbtn' value = 'Log Out'/>
                    </form>
                </div>
            </div>
        </div>

        <?php
        }
        ?>

    <!--Footer---------------------------------------------------------------------------------------------->
    <footer class="text-center text-white bg-primary">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5>Base Pro Cares</h5>

            <p>
              Here at Base Pro, we are passionate about baseball and <br> hope to share our passion with the world. We are flexible
              <br>with returns to ensure our customers get the best service!
            </p>
          </div>
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5>Contact Us!</h5>
              862-435-1344<br>
              901-274-1109<br>
              BasePros@baseball.com<br>
              customersupport@baseball.com
          </div>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        @ 2022 Copyright: Melvin Matias & Justin Pernell
      </div>
    </footer>

  </body>
</html>