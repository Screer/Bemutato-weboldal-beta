<?php include('includes/header.php'); ?>

<div id="content" class="col-md-12">
    <h2>Terméklista</h2>
    <?php
    if ($result = $db->query("SELECT `1`,`2`,`3`,`4`,`5`,`6` FROM `table_headers`")) {
        if ($result->num_rows) {
            $table = $result->fetch_all();
            echo '<table id = "table_header">';
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
    <?php
    if ($result = $db->query("SELECT `code`,`name`,`price`,`size`,`consumption`, `img` FROM `productlist`")) {
        if ($result->num_rows) {
            $table = $result->fetch_all();
            echo '<table border="2" id=productTable>';
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

<?php
include('includes/footer.php');
