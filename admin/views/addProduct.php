<?php include('includes/header.php'); ?>

<div id="content" class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <form name="productForm" method="post" id="productForm">
                <label>Név:</label>
                <br>
                <input type="text" name="name" class="shortText">
                <br>
                <label>Ár:</label>
                <br>
                <input type="number" name="price">
                <br>
                <br>
                <input type="submit" name="productSubmit">
            </form>  
        </div>
        <div class="col-md-6">
            <?php
            $result = $db->query("SELECT * FROM `productlist`");
            //echo '<pre>';
            //print_r($result);
            $table = $result->fetch_all();
            foreach ($table as $row) {
                foreach ($row as $record) {
                    echo $record . ' ';
                }
                echo '<br>';
            }
            ?>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
