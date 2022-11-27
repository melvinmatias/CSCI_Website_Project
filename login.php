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



<html>
    <body>

<form action = 'login.php' method = 'post'>
  <h1> Welcome to Our Card Shop! </h1>
  <h2> Please Login to Access our Website </h2>
  <label> <?php echo $message ?> </label> <br>
  <label> <?php echo $_SESSION["count"] ?> </label>
  <br> <input type = text name = num> <br>
  <input type = submit name =mybutton> <br>
</form>
</body>
</html>