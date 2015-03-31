<?php include('includes/header.php'); ?>
<?php if ($_SESSION['rights'] == 1) : ?>
    <div id="content" class="col-md-12">
        <?php if (isset($_SESSION['msg'])) : ?>
            <h2>Admin törlése</h2>
            <p><?php
                print($_SESSION['msg']);
                unset($_SESSION['msg']);
                ?></p>
            <br>
            <ul id="navigation" class="nav nav-pills">
                <li role="presentation"><a href="?q=deleteAdmin">Admin törölve.</a></li>
            </ul>
        <?php else : ?>
            <div class="row">
                <div class="col-md-6">
                    <h2>Admin törlése</h2>
                    <form name="deleteForm" method="post">
                        <label>Adja meg a törölni kívánt Admin id-jét:</label> 
                        <input type="number" name="id">
                        <input type="submit" name="deleteSubmit" value="Törlés">   
                    </form>
                    <br>
                    <p>(Az id-t a felhasználónév előtti oszlopban láthatja.)</p>
                </div>
                <div class="col-md-6">
                    <h3>Az oldalon lévő Adminok listája:</h3>
                    <?php
                    if ($result = $db->query("SELECT `id`,`uname`,`name`,`email`,`rights` FROM `users`")) {
                        if ($result->num_rows) {
                            $table = $result->fetch_all();
                            echo '<table border="2" id="table01">';
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
<?php endif; ?>

<?php if ($_SESSION['rights'] == 2) : ?>
    <div id="content" class="col-md-12">
        <h3>Nincs megfelelő jogosultságod az oldal megtekintéséhez!</h3>
    </div>
<?php endif; ?>

<?php
include('includes/footer.php');
