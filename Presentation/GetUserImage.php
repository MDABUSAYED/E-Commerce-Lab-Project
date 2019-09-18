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
    
    if(isset($_GET['id'])){
        
        $image = $user->GetUserImage($_GET['id']);
        $img_type = $image['img_type'];
        if($image['user_img']!=NULL){
            header('Content-type: '.$img_type);
            echo $image['user_img'];
        } else{
            $user_img = file_get_contents("images/user_male2-512.png");
            header("Content-Type: image/png");
            echo $user_img; 
        }
    } else{
        $user_img = file_get_contents("images/user_male2-512.png");
        header("Content-Type: image/png");
        echo $user_img; 
    }
    
    
    
