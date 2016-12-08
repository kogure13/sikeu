<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User {
    
}

class Main {
    function getMenu() {
        include 'model/menu.php';
        return;
    }
    
    function getPage() {
        if (!isset($_GET['page'])) {
            include_once 'view/dashboard.php';
        } else {
            $page = htmlentities($_GET['page']);
            $pageRoot = "view/" . $page . ".php";

            if (file_exists($pageRoot)) {
                include_once $pageRoot;
            } elseif ($page == "crud") {
                $halaman = $_GET['act'];
                if (file_exists("model/" . $halaman . ".php")) {
                    include_once "model/" . $halaman . ".php";
                }
            } elseif ($page == "logout") {
                $user = new User();
                $user->logout();
            } else {
                include_once 'view/dashboard.php';
            }
        }
    }
}

class Transaksi {
    
}