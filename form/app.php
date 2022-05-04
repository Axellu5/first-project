<?php 
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);
    
        if(!empty($name) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                include 'db.php';
                $from = "$email";
                $to = "stankusovidijus@gmail.com";
                $subject = "$subject";
                $author = 'From: ' . $name . ', ' . $email;
                $message = htmlspecialchars($message);
                //mail($to, $subject, $author, $message, $from);
                //echo "<script>alert('Your message has been sent.');</script>";
            }
        }
    }

    
    
?>