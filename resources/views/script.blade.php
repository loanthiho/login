<!-- include js files -->
<script src="{{URL::to('source/assets/dest/js/jquery.js')}}"></script>
<script src="{{URL::to('source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{URL::to('source/assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{URL::to('source/assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{URL::to('source/assets/dest/vendors/animo/Animo.js')}}"></script>
<script src="{{URL::to('source/assets/dest/vendors/dug/dug.js')}}"></script>
<script src="{{URL::to('source/assets/dest/js/scripts.min.js')}}"></script>
<script src="{{URL::to('source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{URL::to('source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::to('source/assets/dest/js/waypoints.min.js')}}"></script>
<script src="{{URL::to('source/assets/dest/js/wow.min.js')}}"></script>

<!--customjs-->
<script src="{{URL::to('source/assets/dest/js/custom2.js')}}"></script>
<script>
	$(document).ready(function($) {
		$(window).scroll(function() {
			if ($(this).scrollTop() > 150) {
				$(".header-bottom").addClass('fixNav')
			} else {
				$(".header-bottom").removeClass('fixNav')
			}
		});
	});
    document.addEventListener("DOMContentLoaded", function () {
        var wishlistDropdown = document.querySelector(".wishlist .beta-select");
        var wishlistBody = document.querySelector(".wishlist .wishlist-body");

        wishlistDropdown.addEventListener("click", function () {
            if (wishlistBody.style.display === "none") {
                wishlistBody.style.display = "block";
            } else {
                wishlistBody.style.display = "none";
            }
        });
    });

	
</script>
