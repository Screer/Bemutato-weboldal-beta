<?php

$pageTitle = "Terméklista";
// Termékek kiolvasása adatbázisból:

$query = "SELECT * FROM `productlist`";
$productlist = $db->query($query);
if ($db->errno) {
  die($db->error);
}
