<!-- js-scripts -->         
<!-- js-files -->
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->

<!-- Map-JavaScript -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
            <script type="text/javascript">
                google.maps.event.addDomListener(window, 'load', init);
                function init() {
                    var mapOptions = {
                        zoom: 11,
                        center: new google.maps.LatLng(40.6700, -73.9400),
                        styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                    };
                    var mapElement = document.getElementById('map');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(40.6700, -73.9400),
                        map: map,
                    });
                }
            </script>
        <!-- //Map-JavaScript -->

<!-- smooth scrolling -->
<script src="{{asset('assets/js/SmoothScroll.min.js')}}"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="{{asset('assets/js/numscroller-1.0.js')}}"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */                              
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <a href="{{url('tel:+919864268229')}}" id="call" style="display: block;"> <span id="toTopHover" style="opacity: 1;"></span></a>
    <a href="https://web.whatsapp.com/send?phone=919864268229" target="_blank" id="whatsapp" style="display: block;"> <span id="toTopHover" style="opacity: 1;"></span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="{{asset('assets/js/jquery.swipebox.min.js')}}"></script> 
<script type="text/javascript">
jQuery(function($) {
    $(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
</body>
</html>