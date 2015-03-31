<?php

session_start();

require_once '../config.default.php';
$db = new mysqli('localhost', 'root', '', 'bt-portal');
$db->set_charset('utf8');

// Aktuális lap kiválasztása:
$page = 'login';
if (isset($_GET['q'])) {
    if (isset($_SESSION['logged']))
        $page = $_GET['q'];
}

// Aktuális lap betöltése:
switch ($page) {
    case 'login':
        include('controllers/loginPage.php');
        include('views/loginPage.php');
        break;
    case 'news':
        include('controllers/newsPage.php');
        include('views/newsPage.php');
        break;
    case 'addProduct':
        include('controllers/addProduct.php');
        include('views/addProduct.php');
        break;
    case 'deleteProduct':
        include('controllers/deleteProduct.php');
        include('views/deleteProduct.php');
        break;
    case 'users':
        include('controllers/usersPage.php');
        include('views/usersPage.php');
        break;
    case 'addAdmin':
        include('controllers/addAdmin.php');
        include('views/addAdmin.php');
        break;
    case 'deleteAdmin':
        include('controllers/deleteAdmin.php');
        include('views/deleteAdmin.php');
        break;
    case 'kijelentkezes':
        unset($_SESSION['logged']);
        include('controllers/loginPage.php');
        include('views/loginPage.php');
        break;
    default:
        include('controllers/loginPage.php');
        include('views/loginPage.php');
}

$db->close();
