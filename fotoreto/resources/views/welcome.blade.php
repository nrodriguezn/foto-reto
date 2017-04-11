

@include('layouts/nab')

<!-- start preloader-->
   <div id="loader-wrapper">
       <div class="logo"></div>
       <div id="loader">
       </div>
   </div>
<!--end preloader -->

<!-- Mostrando imagenes-->
@if(isset($photos))
  @foreach($photos as $n)
    $n->photo_name
    <img src="imgPhoto/{{ $n->urlImg }}" style="max-width: 200px;">
  @endforeach
@endif
<!-- fin mostrando imagenes-->





<!-- start about Section-->
<section id="abt_sec">
	<div class="container">
				<div class="title_sec">
					<h1>En Construccion</h1>
					<h2>Tareas por hacer</h2>
        </div>
				<div class="abt">
					<p>Programar controlador Usuarios</p>
          <p>Programar controlador FotoReto</p>
          <p>Mostrar por pantalla estos datos</p>
			</div>
	</div>
</section>

<!--End About Section -->

<!-- start Counting section
<section id="counting_sec">
<div class="container">
	<div class="row">

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="counting_sl">
			<i class="fa fa-user"></i>
			<h2 class="counter">43,753</h2>
			<h4>Happy Clients</h4>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="counting_sl">
			<i class="fa fa-desktop"></i>
			<h2 class="counter">20,210</h2>
			<h4>Complete Project</h4>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="counting_sl">
			<i class="fa fa-ticket"></i>
			<h2 class="counter">43,753</h2>
			<h4>Answered Tickets</h4>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="counting_sl">
			<i class="fa fa-clock-o"></i>
			<h2 class="counter">45,105</h2>
			<h4>Development Hours</h4>
			</div>
		</div>
	</div>
</div>
</section>
 end section-->

<!-- start progress bar Section
<section id="skill_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Skill diagram</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
		  <div class="skills progress-bar1">
				<ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
					  <li class="progress">
							<div class="progress-bar" data-width="85">
								  Wordpress 85%
							</div>
					  </li>
					  <li class="progress">
							<div class="progress-bar" data-width="65">
								  Graphic Design 65%
							</div>
					  </li>
					  <li class="progress">
							<div class="progress-bar" data-width="90">
								  HTML/CSS Design 90%
							</div>
					  </li>
					  <li class="progress">
							<div class="progress-bar" data-width="60">
								  SEO 60%
							</div>
					  </li>
				</ul>
				<ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
					  <li class="progress">
							<div class="progress-bar" data-width="75">
								  Agencying 75%
							</div>
					  </li>
					  <li class="progress">
							<div class="progress-bar" data-width="95">
								  App Development 95%
							</div>
					  </li>
					  <li class="progress">
							<div class="progress-bar" data-width="70">
								  IT Consultency 70%
							</div>
					  </li>
					  <li class="progress">
							<div class="progress-bar" data-width="90">
								  Theme Development 90%
							</div>
					  </li>
				</ul>
		  </div>


		</div>
	</div>
</section>
End progress bar Section -->



<!-- start portfolio Section
<section id="protfolio_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Portfolio</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="portfolio-filter text-uppercase text-center">
				<ul class="filter">
				<li class="active" data-filter="*">All</li>
				<li data-filter=".web-design">Web Design</li>
				<li data-filter=".graphic">Graphic</li>
				<li data-filter=".photography">Photography</li>
				<li data-filter=".motion-video">Motion video</li>
				</ul>
				</div>

				<div class="all-portfolios">
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_06.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_01.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_02.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio graphic">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_03.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_04.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio photography">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_05.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_07.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio photography">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_09.jpg" alt="">
					</div>
					</div>
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio photography">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>
					</div>
				</div>


			</div>
				<div class="post_btn">
					<div class="hover_effect_btn" id="hover_effect_btn">
						<a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
					</div>
				</div>
			</div>
		</div>
</section>
End Portfolio Section -->

<!-- start our team Section
<section id="tm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Team</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
				<div class="all_team">
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
					<div class="sngl_team">
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 End our team Section -->

<!-- start our teastimonial Section
<section id="tstm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="all_tstm">

				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>what people say?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>
					</div>
				</div>

				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Clien Design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- shura deo</h6>
					</div>
				</div>
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Awesome Support SIMA</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- kumara deo</h6>
					</div>
				</div>
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Theme Feature great</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- dhera deo</h6>
					</div>
				</div>
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Non conflict</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>
</section>
 End our teastimonial Section -->


<!-- start Latest post Section
<section id="lts_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Latest Blog</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img2.jpg?10828543012475550494" alt=""/>
					<h2>How to fix your bug</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img3.jpg?16122351990094232768" alt=""/>
					<h2>Pellentesque nibh libero</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img1.jpg?1960436319992241823" alt=""/>
					<h2>pharetra eu tempor vel</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="post_btn">
				<div class="hover_effect_btn" id="hover_effect_btn">
					<a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
				</div>
			</div>

		</div>
	</div>
</section>
 End Latest post Section -->

<!-- start pricing Section
<section id="pricing_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Pricing Plan</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="sngl_pricing">
					<h2 class="title_bg_1">Basic</h2>
					<h3><span class="currency">$</span>30<span class="monuth">/  mo</span></h3>
					<ul>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li><a href="" class="btn pricing_btn">Send</a></li>

					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="sngl_pricing">
					<h2 class="title_bg_2">Standerd</h2>
					<h3><span class="currency">$</span>50<span class="monuth">/  mo</span></h3>
					<ul>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li><a href="" class="btn pricing_btn">Send</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="sngl_pricing">
					<h2 class="title_bg_3">Extended</h2>
					<h3><span class="currency">$</span>90<span class="monuth">/  mo</span></h3>
					<ul>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li><a href="" class="btn pricing_btn">Send</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
End pricing Section -->


<!-- start Happy Client Section
<section id="clt_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Happy Clients</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
				<div class="al_clt">
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_04.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_05.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_01.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_04.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_05.png" alt=""/></a>
					</div>
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_01.png" alt=""/></a>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
 End Happy Client  Section -->

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


@include('layouts.footer')

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/structure/vendor/jquery-1.11.2.min.js"></script>

<script src="js/structure/isotope.pkgd.min.js"></script>
<script src="js/structure/bootstrap.min.js"></script>
<script src="js/structure/jquery-ui.js"></script>
<script src="js/structure/appear.js"></script>
<script src="js/structure/jquery.counterup.min.js"></script>
<script src="js/structure/waypoints.min.js"></script>
<script src="js/structure/owl.carousel.min.js"></script>
<script src="js/structure/showHide.js"></script>
<script src="js/structure/jquery.nicescroll.min.js"></script>
<script src="js/structure/jquery.easing.min.js"></script>
<script src="js/structure/scrolling-nav.js"></script>
<script src="js/structure/plugins.js"></script>
<!-- Google Map js -->

<script src="js/structure/main.js"></script>

<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){
   $('.show_hide').showHide({
		speed: 1000,  // speed you want the toggle to happen
		easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showText: 'View',// the button text to show when a div is closed
		hideText: 'Close' // the button text to show when a div is open

	});


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>

  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});

// Show Overflow of Body when Everything has Loaded
$(window).load(function(){
    $("body").css("overflow", "visible");
    var nice=$('html').niceScroll({
	cursorborder:"5",
	cursorcolor:"#00AFF0",
	cursorwidth:"3px",
	boxzoom:true,
	autohidemode:true
	});

});
</script>



    </body>
</html>
