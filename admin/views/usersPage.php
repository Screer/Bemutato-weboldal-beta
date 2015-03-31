<?php include('includes/header.php'); ?>

<div id="content">
    <h2>Keresés a felhasználók között</h2>

    <?php if (isset($_SESSION['sresult'])) : ?>

        <?php
        if (!empty($_SESSION['sresult'])) {
            foreach ($_SESSION['sresult'] as $item) {
                $rID = $item['rights'];
                echo '<div class="news">';
                echo '<div class="tag">' . $rights[$rID] . '</div>';
                echo '<div class="title">' . $item['name'] . ' (' . $item['uname'] . ')</div>';
                echo '<div class="text">' . $item['email'] . '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>Nincs találat.</p>';
        }
        unset($_SESSION['sresult']);
        ?>
        <br>
        <ul id="navigation" class="nav nav-pills">
            <li role="presentation"><a href="?q=users">Új keresés</a></li>
        </ul>

    <?php else : ?>

        <form name="searchForm" method="post" id="searchForm">
            <label>Névben:</label>
            <br>
            <input type="text" name="name" class="shortText">
            <br>
            <label>Felhasználónévben:</label>
            <br>
            <input type="text" name="uname" class="shortText">
            <br>
            <label>Email címben:</label>
            <br>
            <input type="text" name="email" class="shortText">
            <br>
            <br>
            <input type="submit" name="searchSubmit" value="Keresés">
        </form>

    <?php endif; ?>
    <hr>	
</div>

<?php
include('includes/footer.php');
