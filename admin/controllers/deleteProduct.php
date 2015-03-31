<?php

$pageTitle = "Termék törlése";

if (isset($_POST['deleteSubmit'])) {
    if (isset($_POST['id']) && !empty($_POST['id'])){
        $id = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['id']))));


        $query = "DELETE FROM `productlist` WHERE `id`='$id' AND '$id' != 0";
        $result = $db->query($query);
        if ($db->errno) {
            die($db->error);
        }
        $_SESSION['msg'] = 'Termék törölve.';

        header("Location: $HOST/admin/?q=deleteProduct");
        exit;
    }
}
?>