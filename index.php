<?php
session_start('session_bsc');

include 'inc/config.php';
include 'inc/class.php';
include 'inc/function.php';
//
//if(!isset($_SESSION['user_login'])){
//    if(isset($_POST['inputUser'])){
//        $userUI = new User;
//        $username = $_POST['inputUser'];
//        $password = $userUI->hashPassword($_POST['password']);
//        
//        $validasi = $userUI->loginUser($username, $password);
//        if($validasi){
//            $userUI->login_success();
//        }else{
//            $userUI->login_failure();
//        }
//    }
//    
//    include 'views/login.php';
//}else{
    $main = new Main;
    include 'model/main.php';
//}
?>