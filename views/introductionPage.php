<?php include('includes/header.php'); ?>

<div id="content">
    <h2><?php echo $page['title']; ?></h2>
    <div class="row">
        <div class="col-md-12">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="imgs/slideshow/img1.jpg" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/slideshow/img2.jpg" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/slideshow/img3.jpg" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <br>
            <br>
            <?php echo $page['text']; ?>
            <br>
            <br>
        </div>
        <div class="row">
            <div class="col-md-12" id="introdutionGallery">
                <div class="col-md-4" >
                    <a href="imgs/introdution/img_1.jpg" data-lightbox="roadtrip"><img src="imgs/introdution/img_1_mini.jpg" class="img-thumbnail" align="left"></a>
                </div>
                <div class="col-md-4">
                    <a href="imgs/introdution/img_2.jpg" data-lightbox="roadtrip"><img src="imgs/introdution/img_2_mini.jpg" class="img-thumbnail" align="left"></a>
                </div>
                <div class="col-md-4">
                    <a href="imgs/introdution/img_3.jpg" data-lightbox="roadtrip"><img src="imgs/introdution/img_3.jpg" class="img-thumbnail" align="left"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
