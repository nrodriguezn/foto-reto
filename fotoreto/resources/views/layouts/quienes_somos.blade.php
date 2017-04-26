@include('layouts/nab')


<!-- start contact us Section -->
<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title_sec">
					<h1>FotoReto</h1>
					<h2>Contactanos para compartir tus mejoras</h2>
				</div>
			</div>
			<div class="col-sm-6">
				<div id="cnt_form">
					<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
						<div class="form-group">
						<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Send</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cnt_info">
					<ul>
						<li></i><p>U Diego Portales</p></li>
						<li></i><p>contact@fotoreto.com</p></li>
						<li></i><p>+56 9 5108 6820</p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End contact us  Section -->

@include('layouts/footer')
