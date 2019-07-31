
<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="<?php echo URLROOT; ?>/images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Property</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Agents</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="7f101919161c1a3f1a071e120f131a511c1012">[email&#160;protected]</span></a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- <?php echo URLROOT; ?>/Scripts
================================================== -->
<!-- GOOGLE PLACES AND AUTOCOMPLETE  -->
<script>
      

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec&libraries=places&callback=initAutocomplete"
        async defer></script>

      <script src="<?php echo URLROOT; ?>/scripts/jquery.min.js"></script>   

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/dropzone.js"></script>
 <script src='<?php echo URLROOT; ?>/scripts/jquery-3.2.1.min.js'></script>
<script src="<?php echo URLROOT; ?>/scripts/dropzone.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/js.js"></script> 
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/pass.js"></script>     
<script data-cfasync="false" src="../../cdn-cgi/<?php echo URLROOT; ?>/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/chosen.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/rangeSlider.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/masonry.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/custom.js"></script>

<script src='<?php echo URLROOT; ?>/scripts/jquery-3.2.1.min.js'></script>
<script src="<?php echo URLROOT; ?>/scripts/dropzone.js" type="text/javascript"></script>



<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/infobox.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/markerclusterer.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/scripts/maps.js"></script>




</div>
<!-- Wrapper / End -->


</body>
</html>