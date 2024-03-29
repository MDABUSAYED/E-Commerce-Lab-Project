<?php
    require_once 'SessionHandler.php';
    SecureSessionStart();

 /**
 * ©copyright 2016 Ashif & Sayed
 */

    require_once '../BussinessLogic/User.php';
    $user = new User();
    
    if(!$user->IsLoggedIn()){
        header('Location: LogIn.php');
    }
    
    if(isset($_GET['product_id'])){
        $user_email = $_SESSION['email'];
        $xml = '<cart>';
        $xml = $xml.'<product_id>'.$_GET['product_id'].'</product_id>';
        $xml = $xml.'<user_email>'.$user_email.'</user_email>';
        $xml = $xml.'</cart>';
        
        $user->AddToCart($xml);
        
        if(isset($_SESSION['previous_page'])){
            header('Location: '.$_SESSION['previous_page']);
        } else{
            header('Location: Home.php');
        }
    }
    else{
        header('Location: Home.php');
    }

