<?php include('includes/header.php'); ?>

<div id="content" class="col-md-12">
    <h2><?php echo $page['title']; ?></h2>

    <?php echo $page['text']; ?>
    <div class="row">
        <div class="col-md-4">
            <h2 id="contactH2">Adataink</h2>
            <h3 id="cím">Cím: </h3>
            <span id="" class="glyphicon glyphicon-home"></span>
            <p>Aparhant 7186, Petőfi Sándor u. 15.</p>
            <h3 id="telszam">Telefonszám: </h3>
            <span id="" class="glyphicon glyphicon-phone"></span>
            <p>06/20-1234567</p>
            <h3 id="emailadress">E-mail: </h3>
            <span id="" class="glyphicon glyphicon-envelope"></span>
            <p>minta@email.com</p>
        </div>
        <div class="col-md-8">
            <h2 id="contactFormHeader">Üzenetküldés</h2>
            <form role="form" name="contactForm" method="post">
                <div class="form-group">
                    <label for="name" >Név:</label>
                    <input type="text" class="form-control" id="name" name="contactName" placeholder="Írja be a nevét!">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="contactEmail" placeholder="Írja be az email címét!">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment" name="contactMessage"></textarea>
                </div>
                <input type="submit" class="btn btn-lg" name="contactSubmit" id="contactSubmit" value="Küldés">
            </form>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
