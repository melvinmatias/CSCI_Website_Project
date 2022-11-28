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
            <!--Nav Items-->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="projectIndex.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shopping Cart</a>
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


        <center>
        <h1><strong> Welcome to Base Pro's Online Store! </strong></h1>
        <h2> We offer a selection of sports cards that cater to your sports cards needs </h2>
        <h3> Our store is owned and opperated by Melvin Mattias and Justin Pernell. We are based
          in a small shop off of Main Street in Madison, NJ. Our mission is to be the
          online hub for card collectors. We have an online database of cards in our
          collection and you can purchase these cards throught our site. We started off
          collecting and selling a variety of cards at local card shows. Our inventory
          contains Baseball, Football, Hockey, Basketball, Pokemon, and plenty of other types
          of cards. </h3>
        <h3> <strong>Enjoy our selection of cards! </strong></h3>
        </center>


        <!--Image Slider Code--------------------------------------------------------------------->
        <div align = center>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="melvin.png" class="d-block w-80" height = 500 width = 95%>
                  </div>
                  <div class="carousel-item">
                    <img src="justin.png" class="d-block w-80" height = 500 width = 95%>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div><br>

        <div align = center><h2> New Releases </h2></div>

        <div class="grid text-center" style="--bs-columns: 3;">
            <div><img src = "1.jpg"><br>Keven Magnussen Card<br><small class="text-muted">$14.99</small></div>
            <div><img src = "2.jpg"><br>Bowman Chrome Baseball<br><small class="text-muted">$24.99</small></div>
            <div><img src = "3.jpg"><br>2022 World Series Jose Altuve Card<br><small class="text-muted">$19.99</small></div>
          </div>
          <br>

        <img src = "banner4.jpg" alt ="WS" height = 450 width = 100%>



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
