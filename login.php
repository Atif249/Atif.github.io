<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    
    
    <form method="POST">

        <form action="action_page.php" method="post">
            <div class="imgcontainer">
              <img src="Logo.jpg" alt="Avatar" class="avatar">
            </div>
          
            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>



  </form>

  <?php
    if(isset($_POST["uname"])){
      $uname=$_POST["uname"];
      
      $psw=$_POST["psw"];

      if($uname=="Atif" && $psw=="janu"){


    

  header("location:Atif.php");

        
    }
    else{
      echo "<center><h2> Sorry wrong Username and Password </h2></center>";
    }}
  
    ?>


</body>
</html>