<section id="hero">
	<div class="home">
		<div class="background_image" style="background-image: url(images/about.png)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Food Menu</div>
							<div class="booking_form_container">
								<div class="btns">
									<a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
									<a class="btn-book animated fadeInUp scrollto <?php if ($_GET['m'] == 'reservation') : ?> active <?php endif; ?>" aria-current="page" href="index.php?m=reservation">Book a Table</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">

	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Menu</h2>
			<p>Check Our Tasty Menu</p>
		</div>

		<div class="row" data-aos="fade-up" data-aos-delay="100">
			<div class="col-lg-12 d-flex justify-content-center">
				<ul id="menu-flters">
					<li data-filter=".filter-rice">Rice Meal</li>
					<li data-filter=".filter-appetizer">Appetizer</li>
					<li data-filter=".filter-alacarte">Ala Carte</li>
					<li data-filter=".filter-soup">Soup</li>
					<li data-filter=".filter-drinks">Drinks</li>
				</ul>
			</div>
		</div>

		<div class="menu-continer row g-4">

			<!-- RICE MEALS -->

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="group-child">
					</div>
					<img class="group-item" alt="" src="images/menu/greek-salad.jpg">
					<div class="chicken-wings">Chicken Wings</div>
					<div class="appetizer">Appetizer</div>
					<div class="div">₱200</div>
				</div>
			</div>

			<!-- APPETIZER -->

			<div class="col-md-3 menu-item filter-appetizer">
				<div class="rectangle-parent">
					<div class="group-child">
					</div>
					<img class="group-item" alt="" src="images/menu/greek-salad.jpg">
					<div class="chicken-wings">Chicken Wings</div>
					<div class="appetizer">Appetizer</div>
					<div class="div">₱200</div>
				</div>
			</div>

			<!-- ALACARTE  -->

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="group-child">
					</div>
					<img class="group-item" alt="" src="images/menu/greek-salad.jpg">
					<div class="chicken-wings">Chicken Wings</div>
					<div class="appetizer">Appetizer</div>
					<div class="div">₱200</div>
				</div>
			</div>

			<!-- SOUP -->

			<div class="col-md-3 menu-item filter-soup">
				<div class="rectangle-parent">
					<div class="group-child">
					</div>
					<img class="group-item" alt="" src="images/menu/greek-salad.jpg">
					<div class="chicken-wings">Chicken Wings</div>
					<div class="appetizer">Appetizer</div>
					<div class="div">₱200</div>
				</div>
			</div>

			<!-- DRINKS -->

			<div class="col-md-3 menu-item filter-drinks">
				<div class="rectangle-parent">
					<div class="group-child">
					</div>
					<img class="group-item" alt="" src="images/menu/greek-salad.jpg">
					<div class="chicken-wings">Chicken Wings</div>
					<div class="appetizer">Appetizer</div>
					<div class="div">₱200</div>
				</div>
			</div>


		</div>


	</div>
</section><!-- End Menu Section -->

<!-- <div class="row row-cols-1 row-cols-md-3 g-4">
	<div class="col">
		<div class="card h-100">
			<img src="images/menu/lobster-roll.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card h-100">
			<img src="..." class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a short card.</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card h-100">
			<img src="..." class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card h-100">
			<img src="..." class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		</div>
	</div>
</div> -->

<div>

	<div class="rectangle-parent">
		<div class="group-child">
		</div>
		<img class="group-item" alt="" src="images/menu/greek-salad.jpg">
		<div class="chicken-wings">Chicken Wings</div>
		<div class="appetizer">Appetizer</div>
		<div class="div">₱200</div>
	</div>

	<div class="rectangle-parent">
		<div class="group-child">
		</div>
		<img class="group-item" alt="" src="images/menu/greek-salad.jpg">
		<div class="chicken-wings">Chicken Wings</div>
		<div class="appetizer">Appetizer</div>
		<div class="div">₱200</div>
	</div>

</div>

<!-- Testimonials -->

<div class="testimonials">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
	<div class="testimonials_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="testimonials_slider_container">
					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider">
						<!-- Slide -->
						<div class="test_slider_item text-center">
							<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
								<i></i><i></i><i></i><i></i><i></i>
							</div>
							<div class="testimonial_title">
								<a href="#">Perfect Stay</a>
							</div>
							<div class="testimonial_text">
								<p>
									Etiam nec odio vestibulum est mattis effic iturut magna.
									Pellentesque sit amet tellus blandit. Etiam nec odio
									vestibulum est mattis effic.
								</p>
							</div>
							<div class="testimonial_image">
								<img src="images/user_1.jpg" alt="" />
							</div>
							<div class="testimonial_author">
								<a href="#">Samantha Smith</a>, Greece
							</div>
						</div>

						<!-- Slide -->
						<div class="test_slider_item text-center">
							<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
								<i></i><i></i><i></i><i></i><i></i>
							</div>
							<div class="testimonial_title">
								<a href="#">Nice place</a>
							</div>
							<div class="testimonial_text">
								<p>
									Etiam nec odio vestibulum est mattis effic iturut magna.
									Pellentesque sit amet tellus blandit. Etiam nec odio
									vestibulum est mattis effic.
								</p>
							</div>
							<div class="testimonial_image">
								<img src="images/user_2.jpg" alt="" />
							</div>
							<div class="testimonial_author">
								<a href="#">Michael Doe</a>, Italy
							</div>
						</div>

						<!-- Slide -->
						<div class="test_slider_item text-center">
							<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
								<i></i><i></i><i></i><i></i><i></i>
							</div>
							<div class="testimonial_title">
								<a href="#">We loved it</a>
							</div>
							<div class="testimonial_text">
								<p>
									Etiam nec odio vestibulum est mattis effic iturut magna.
									Pellentesque sit amet tellus blandit. Etiam nec odio
									vestibulum est mattis effic.
								</p>
							</div>
							<div class="testimonial_image">
								<img src="images/user_3.jpg" alt="" />
							</div>
							<div class="testimonial_author">
								<a href="#">Luis Garcia</a>, Spain
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>