<?php 
    if(isset($_POST['sub'])){
        $email = trim($_POST['subscribe']);
    
        if(!empty($email)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                include 'db.php';
                $from = "$email";
                $to = "stankusovidijus@gmail.com";
                $author = 'From: ' . $email;
               
                //mail($to, $author, $from);
                //echo "<script>alert('You have successfully subscribed our newsletter.');</script>";
            }
        }
    } 
?>
