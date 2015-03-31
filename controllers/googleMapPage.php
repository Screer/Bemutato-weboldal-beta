<?php

$pageTitle = "Google Térkép";

$query = "SELECT * FROM `pages` WHERE `id`='googlemap'";
$result = $db->query($query);
if ($db->errno) {
  die($db->error);
}

// kiszedem az eredményből az 1db sort:
$page = $result->fetch_array();
