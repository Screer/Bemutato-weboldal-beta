<?php include('includes/header.php'); ?>

<div id="content" class="col-md-12">
    <h2>Terméklista</h2>
  <?php
    $result = $db->query("SELECT * FROM `productlist`");
    //echo '<pre>';
    //print_r($result);
    $table = $result->fetch_all();
    foreach($table as $row){
        foreach($row as $record){
            echo $record.' ';
        }
        echo '<br>';
    }
  ?>
</div>

<?php
include('includes/footer.php');