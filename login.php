<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>BasePro Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <!--Navigation Bar Code--------------------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Base<img src = 'logo.png' width="25" height="25">Pro</a>
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
          </ul>
        </div>
      </div>
    </nav>
    <!--Title------------------>
        <div align = center><h1 class="display-1" style= "font-family:'News GothicMT'">Base<img src = 'logo.png' width="100" height="100">Pro</h1></div>


        <?php

        session_start();
        $result = '';
        if(!isset($_SESSION["count"]))
        {
          $_SESSION["count"] = 5;
          $message = "Login";
        }
        else{


          if($_SESSION["count"] == 0){
            $message = "You have reached the maximum number of login attempts.";
          }



          else if(isset($_POST['mybutton'])){
            if(isset($_POST['num'])){
              $result = $_POST['num'];
              if($result == 'cards4you*') {
                $message = "Correct Password";
              }
              else {
                $message = "Wrong Password, Try Again";
                --$_SESSION["count"];
              }
          }
        }

        }
         ?>

        <?php //header("Location: http://localhost:8888/login.php "); ?>


        <center>
        <form action = 'projectIndex.html' method = 'post'>
          <h1> Welcome! </h1>
          <h2> Please Login to Access the Rest of Base Pro </h2>
          <label> <?php echo $message ?> </label> <br>
          <label> <?php echo $_SESSION["count"] ?> </label>
          <br> <input type = text name = num> <br>
          <input type = submit name =mybutton> <br>
        </center>

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
