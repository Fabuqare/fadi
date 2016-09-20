<!DOCTYPE html>
<html>
<head>
<title>DashBoard</title>
    
</head>
    <?php
    
    include 'init.php';
    
    ?>

    
<body>
    
   <?php
    
    
    ob_start(); 
    session_start();
    if(isset($_SESSION['email'])&&isset($_SESSION['password'])){
       
    include'includes/templates/navbar.php';
        echo'<br>';
    include'includes/templates/header.php';
        echo'<br>';
        echo 'The content of the document......';
        echo'<br>';
    include'includes/templates/footer.php';
        echo'<br>';
    
    } 
    
    ?>
    


    
    
    
    
    
    
</body>

</html>