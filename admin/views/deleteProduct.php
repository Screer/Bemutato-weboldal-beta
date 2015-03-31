<?php include('includes/header.php'); ?>

<div id="content" class="col-md-12">
    <?php if (isset($_SESSION['msg'])) : ?>
        <h2>Termék törlése</h2>
        <p><?php
            print($_SESSION['msg']);
            unset($_SESSION['msg']);
            ?></p>
        <br>
        <ul id="navigation" class="nav nav-pills">
            <li role="presentation"><a href="?q=deleteProduct">Tovább</a></li>
        </ul>
    <?php else : ?>
        <div class="row">
            <div class="col-md-4">
                <h2>Termék törlése</h2>
                <form name="deleteForm" method="post">
                    <label>Adja meg a törölni kívánt termék id-jét:</label> 
                    <input type="number" name="id">
                    <input type="submit" name="deleteSubmit" value="Törlés">   
                </form>
                <br>
                <p>(Az id-t a termékkód előtti oszlopban láthatja.)</p>
            </div>
            <div class="col-md-8">
                <h3>Az oldalon megjelenő termékek listája:</h3>
                <?php
                if ($result = $db->query("SELECT `code`,`name`,`price`,`size`,`consumption` FROM `productlist`")) {
                    if ($result->num_rows) {
                        $table = $result->fetch_all();
                        echo '<table border="2" id="table02">';
                        foreach ($table as $row) {
                            echo '<tr>';
                            foreach ($row as $record) {
                                echo '<td>' . $record . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table>';
                    } else {
                        echo '<p>Nincs megjeleníthető adat.</p>';
                    }
                }
                ?>
            </div>

        </div>
    <?php endif; ?>
</div>

<?php
include('includes/footer.php');
