<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Log-in</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/style.css">

     <script type="text/javascript">
    function validate()
    {
    var a=document.forms["login2"]["username"].value;
    var b=document.forms["login2"]["password"].value;
    if ((a==null || a=="") && (b==null || b=="") )
      {
      alert("All Field must be filled out");
      return false;
      }
    if (a==null || a=="")
      {
      alert("Email must be filled out");
      return false;
      }
    if (b==null || b=="")
      {
      alert("Password must be filled out");
      return false;
      }
    
    }
  </script> 
    
    
  </head>

  <body>

    <div class="login-card">
    <h1>Log-in</h1><br>
  <form name="login2" action="logincompany.php" method="post" onsubmit="return validate()">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
   <?php 
             if(isset($_GET['feedback']))
         
                {
                  $message= $_GET['feedback'];
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }

                  
        ?>
    
  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    
    
    
    
  </body>
</html>
