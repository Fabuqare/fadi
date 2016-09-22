
    
   <?php
    
    include 'init.php';


    ob_start(); 
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['password'])){
       
    include'includes/templates/header.php';
        echo'<br>';
    include'includes/templates/navbar.php';
        echo'<br>';
        echo 'The content of the document......';
        echo'<br>';
    include'includes/templates/footer.php';
        echo'<br>';
    
    } 



    



    ?>
    