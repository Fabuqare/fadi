<?php

include 'init.php';

include 'includes/templates/header.php';
?>


<?php

ob_start();

session_start();



if ($_SERVER['REQUEST_METHOD']=='POST') {


	$email= $_POST['email'];
	$password= $_POST['password'];
	$hashpass=sha1($password);

	$stmt = $con -> prepare('SELECT email , password FROM users WHERE email=? AND password=?');
	$stmt->execute(array($email, $hashpass)) ;

	$row = $stmt->fetch();
    $count = $stmt->rowCount();
            

	echo $count;

	echo '</br>';
	
	echo $count;


	if($count > 0){
               $_SESSION['email']=$email;
               $_SESSION['password']=$password;
               header('Location: dashboard.php');
               exit();
                   
           }


}




?>

<!--Login Form-->

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
 
 <!--End Login Form-->       



	<?php

		include 'includes/templates/footer.php';

	?>