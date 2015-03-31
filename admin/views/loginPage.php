<?php include('includes/header.php'); ?>

<div id="content">

    <?php if (isset($_SESSION['logged'])) : ?>

        <div class="alert alert-success" role="alert">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
            <span class="sr-only">Succes login:</span>
            Sikeres bejelentkezés. Üdv az Admin oldalon.
        </div>

    <?php else : ?>


        <h2>Bejelentkezés</h2>
        <form name="loginForm" method="post">
            <label>Felhasználónév:</label>
            <br>
            <input type="text" name="uName">
            <br>
            <label>Jelszó:</label>
            <br>
            <input type="password" name="uPass">
            <br>
            <br>
            <input type="submit" name="loginSubmit" value="Bejelentkezés">
        </form>
    <?php endif; ?>
</div>

<?php
include('includes/footer.php');
