<?php 
/* Template Name: Contact */
get_header();?>




	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3189.630573738525!2d30.821442915293233!3d36.92309627992346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDU1JzIzLjIiTiAzMMKwNDknMjUuMSJF!5e0!3m2!1sen!2s!4v1602414307829!5m2!1sen!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

						

<div role="main" class="main pgl-bg-grey">
			<section class="">
			<div class="container">
				<div class="row">
					<div class="col-md-12 content">
					
						<div class="contact">
							<!-- <div id="contact-map" class="pgl-bg-light">

							</div> -->
							<!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->

						


							<div class="row">
								<div class="col-sm-6">
									<strong>Your address</strong>
									<address>129/6 tristique eu eleifend sit amet, tincid unt afringilla rhoncus lacus in condimentum.</address>
								</div>
								<div class="col-sm-6">
									<address>
										<strong>Türkçe Phone.</strong> +90 506 529 74 61<br>
										<strong>English Phone.</strong> +905383227138<br>
										<strong>German Phone.</strong> +90 532 132 78 07<br>
										<strong>Email.</strong>  miadirector@gmail.com



									</address>
								</div>
							</div>
							<hr>
							<div class="alert alert-success hidden" id="contactsuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contacterror">
								<strong>Error!</strong> There was an error sending your message.
							</div>
							<form id="contact-form" class="form-contact" action="http://pixelgeeklab.com/html/realestast/php/contact-form.php" method="POST">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="name">Your Name*</label>
											<input type="text" name="name" id="name" class="form-control" data-msg-required="Please enter your name." required>
										</div>
										<div class="col-sm-6">
											<label for="email">Your Email*</label>
											<input type="email" name="email" id="email" class="form-control" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="subject">Subject*</label>
											<input type="text" name="subject" id="subject" class="form-control" data-msg-required="Please enter the subject." required>
										</div>
										<div class="col-sm-6">
											<label for="website">Website</label>
											<input type="text" name="website" id="website" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="message">Your Message*</label>
									<textarea rows="9" name="message" id="message" class="form-control" data-msg-required="Please enter your message." required></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Submit" class="btn btn-primary min-wide" data-loading-text="Loading...">
								</div>
							</form>
						</div>
						
					</div>
				
				</div>	
			</div>
			</section>
		</div>


<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>



<?php get_footer();?>