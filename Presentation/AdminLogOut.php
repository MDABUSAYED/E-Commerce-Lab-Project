<?php
    require_once 'SessionHandler.php';
    SecureSessionStart();
/**
 * ©copyright 2016 Ashif & Sayed
 */
    
    require_once '../BussinessLogic/Admin.php';
    $admin = new Admin();
    
    if(!$admin->AdminIsLoggedIn()){
        header('Location: AdminLogIn.php');
    } else{
        $admin->LogOut();
        header('Location: AdminLogIn.php');
    }