<div class="row">
	<div class="col-lg-12">
		 <div id="belajargooglemap"  style="width: 500; height: 400px"></div>
	</div>
</div>
<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('belajargooglemap'), {
          center: {lat: -6.273300, lng: 106.823925},
          scrollwheel: false,
          zoom: 3
        });
      }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVfpPuuh3VHFvtoas3ZuNTt2Kp9KIkTU&callback=initMap"
async defer></script>