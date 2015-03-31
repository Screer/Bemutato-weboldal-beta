<?php include('includes/header.php'); ?>
<div id="content" class="col-md-12">
    <?php if (isset($_SESSION['msg'])) : ?>
        <h2>Termék hozzáadása</h2>
        <p><?php
            print($_SESSION['msg']);
            unset($_SESSION['msg']);
            ?></p>
        <br>
        <ul id="navigation" class="nav nav-pills">
            <li role="presentation"><a href="?q=addProduct">Új termék</a></li>
        </ul>
    <?php else : ?>
        <div class="row">
            <div class="col-md-4">
                <h2>Termék hozzáadása</h2>
                <form name="productForm" method="post" id="productForm">
                    <label>Termék kódszáma:</label>
                    <br>
                    <input type="number" name="code" placeholder="0">
                    <br>
                    <br>
                    <label>Név:</label>
                    <br>
                    <input type="text" name="name" class="shortText">
                    <br>
                    <br>
                    <label>Ár:</label>
                    <br>
                    <input type="text" name="price">
                    <br>
                    <p>______ FT</p>
                    <br>
                    <label>Méret:</label>
                    <br>
                    <select name="size">
                        <option value='' disabled selected style='display:none;'>Válassz méretet!</option>
                        <option value="5x12x24 cm">5x12x24 cm</option>
                        <option value="6x12x24 cm">6x12x24 cm</option>
                        <option value="8x12x24 cm">8x12x24 cm</option>
                        <option value="19,2x22,6x6cm">19,2x22,6x6cm</option>
                    </select>
                    <br>
                    <br>
                    <label>Anyaghasználat:</label>
                    <br>
                    <input type="text" name="consumption">
                    <br>
                    <p>  (X DB / m2) </p>
                    <br>
                    <input type="submit" name="productSubmit">
                </form>
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
