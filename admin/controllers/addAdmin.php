<?php

$pageTitle = "Admin hozzáadása";


if (isset($_POST['adminSubmit'])) {
    if (isset($_POST['user'], $_POST['password'], $_POST['name'], $_POST['email'], $_POST['rights']) && !empty($_POST['user']) && !empty($_POST['password'])) {
        $adminUser = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['user']))));
        $adminPass = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['password']))));
        $adminName = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['name']))));
        $adminEmail = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['email']))));
        $adminRights = htmlentities(htmlspecialchars($db->real_escape_string(trim($_POST['rights']))));

        $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $query = "INSERT INTO `users` (`id`,`uname`,`upass`,`name`,`email`,`rights`,`active`) VALUES (null, '$adminUser', '$hashed_password', '$adminName', '$adminEmail', '$adminRights', 1);";
        $result = $db->query($query);
        if ($db->errno) {
            die($db->error);
        }

        $_SESSION['msg'] = 'Admin hozzáadva.';

        header("Location: $HOST/admin/?q=addAdmin");
        exit;
    }
}
?>