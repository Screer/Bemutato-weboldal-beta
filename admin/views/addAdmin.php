<?php include('includes/header.php'); ?>


<?php if ($_SESSION['rights'] == 1) : ?>
    <div id="content" class="col-md-12">
        <?php if (isset($_SESSION['msg'])) : ?>
            <h2>Admin jogú felhasználó hozzáadása</h2>
            <p><?php
                print($_SESSION['msg']);
                unset($_SESSION['msg']);
                ?></p>
            <br>
            <ul id="navigation" class="nav nav-pills">
                <li role="presentation"><a href="?q=addAdmin">Új admin</a></li>
            </ul>
        <?php else : ?>
            <div id="row">
                <div class="col-md-6">
                    <h2>Admin jogú felhasználó hozzáadása</h2>

                    <form name="addAdmin" method="post">
                        <table id="table03">
                            <tr>
                                <td><label>*Felhasználónév:</label> </td>
                                <td><input type="text" name="user"></td>
                            </tr>
                            <tr>
                                <td><label>*Jelszó:</label></td>
                                <td><input type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td><label>Név:</label>
                                <td><input type="text" name="name">
                            </tr>
                            <tr>
                                <td><label>Email:</label>
                                <td><input type="email" name="email">
                            </tr>
                            <tr>
                                <td><label>Felhasználói jog:</label></td>
                                <td>
                                    <select name="rights">
                                        <option value='' disabled selected style='display:none;'>Válassz jogosultsági kört!</option>
                                        <option value="1">Főadminisztrátor</option>
                                        <option value="2">Adminisztrátor</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" name="adminSubmit" value="Regisztrálás" id="adminSubmit"> 
                        <br>
                    </form>
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
