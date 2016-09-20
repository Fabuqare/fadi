
<html>
    <head>
         <title>Dynamic Website</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="layout/css/front.css">
    
    </head>

    <body>
        

        
    <?php
            include'includes/config.php';

    ?>       
        
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hashpass=sha1($password);
            
            $stmt= $con ->prepare('SELECT email , password FROM users WHERE email=? AND password=?');
            $stmt ->execute(array($email,$hashpass));
        
            
            $count = $stmt->rowCount();
            
           echo $count;
            
            
        }
        
    ?>
        
        
        
  <div class="container">
      
      <div class="login">
      
  <div class="wrapper">
      
    <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
    
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
    </div>
</div>      
        
        

        
        
        
        
        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>