# Aw-Meng

#Homepage
The Homepage is a Classic set up with a navbar and some filler content. This is a good shell to work off when it comes to the other pages we want to design so please keep the nav bar and footer code from this page and use it on all pages

#About the nav bar real quick
Again please copy paste it on all pages you work on. In the code you'll see I commented "Nav Items" in that sections you will see:
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shopping Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              
As you can see the first one has class="nav-link active" aria-current="page" href="#". For the homepage the home option is the current page, just copy that part over to the other sections when you are on them. for example if youre on the Account page you would have:
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shopping Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
The Hrefs we can leave with the "#" placeholder for now

#Shop Page
Shows all the items people can buy. If we can add a searching function that would be sick but we don't NEED it

#Account Page
If customer isn't logged this is a log in page. If they are, when on this page it'll just display their info like name, email, etc and a log out button. (I have no clue how to code a "log out" so we can scrap logging out if we can't figure it out)

#Shopping Cart Page
Just shows whats in our cart. 

#About Us Page
Easy page about the business. Nothing serious just a way to make it look like we did extra stuff 
