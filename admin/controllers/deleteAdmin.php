<?php

$pageTitle = "Admin törlése";

if (isset($_POST['deleteSubmit'])) {
    if (isset($_POST['id']) && !empty($_POST['id'])){
        $id = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['id']))));


        $query = "DELETE FROM `users` WHERE `id`='$id' AND '$id' != 1";
        $result = $db->query($query);
        if ($db->errno) {
            die($db->error);
        }
        $_SESSION['msg'] = 'Admin törölve.';

        header("Location: $HOST/admin/?q=deleteAdmin");
        exit;
    }
}
?>