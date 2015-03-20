<?php include('includes/header.php'); ?>

<div id="content" class="col-md-12">
    <h2><?php echo $page['title']; ?></h2>

    <?php echo $page['text']; ?>
    <div class="row">
        <div class="col-md-4">
            <h3 id="cím">Cím: </h3><p>Aparhant 7186, Petőfi Sándor u. 15.</p>
            <h3 id="telszam">Telefonszám: </h3><p>06/20-1234567</p>
            <h3 id="emailadress">E-mail: </h3><p>minta@email.com</p>
        </div>
        <div class="col-md-8">
            <h2>Üzenetküldés</h2>
            <form role="form" name="contactForm" method="post">
                <div class="form-group">
                    <label for="name" >Név:</label>
                    <input type="text" class="form-control" id="name" name="contactName" placeholder="Írja be a nevét!">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="contactEmail" placeholder="Írja be az email címét">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment" name="contactMessage"></textarea>
                </div>
                <button type="submit" class="btn btn-default" name="contactSubmit" id="sendButton">Küldés</button>
            </form>
        </div>

        <div class="col-md-12" id ="googlemap">
            <h3 id="googlemaph3">Google Térkép</h3>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11019.95232087733!2d18.449702200302767!3d46.32993087623955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1shu!2shu!4v1426838460659" width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>

    </div>
</div>
</div>

<?php
include('includes/footer.php');
