<?php include('includes/header.php'); ?>

<div id="content">
    <div class="row">
        <div id="googlemap"  class="col-md-12">
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wordpress-themes.org" id="get-map-data">theme download</a></div><script type="text/javascript"> function init_map() {
                    var myOptions = {zoom: 15, center: new google.maps.LatLng(46.3278521887077, 18.449901897900418), mapTypeId: google.maps.MapTypeId.ROADMAP};
                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                    marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(46.3278521887077, 18.449901897900418)});
                    infowindow = new google.maps.InfoWindow({content: "<b>Kolozsi Gr&aacute;nit</b><br/>Pet&#337;fi u. 15<br/>7186 Aparhant"});
                    google.maps.event.addListener(marker, "click", function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>

    </div>
</div>

<?php
include('includes/footer.php');
