<?php

$pageTitle = "Termék hozzáadása";

if (isset($_POST['productSubmit'])) {
    if (isset($_POST['name'], $_POST['price'], $_POST['consumption'], $_POST['code']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['consumption']) && !empty($_POST['code'])) {
        $productCode = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['code']))));
        $productName = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['name']))));
        $productPrice = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['price']))));
        $productSize = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['size']))));
        $productConsumption = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['consumption']))));



        // db-be írás:
        $query = "INSERT INTO productlist (`id`,`code`,`name`,`price`,`size`,`consumption`) VALUES (null,'$productCode','$productName', '$productPrice', '$productSize', '$productConsumption');";
        $result = $db->query($query);
        if ($db->errno) {
            die($db->error);
        }

        $_SESSION['msg'] = 'Termék rögzítve.';

        header("Location: $HOST/admin/?q=addProduct");
        exit;
    }
}
?>