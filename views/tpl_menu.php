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
					<li data-filter=".filter-soup">Drinks</li>
				</ul>
			</div>
		</div>

		<div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

			<!-- RICE MEALS -->

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">1 cup Rice</a><span>₱30.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Java Rice Platter</a><span>₱120.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Garlic Rice Platter</a><span>₱30.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">BBQ Pork Rib</a><span>₱250.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Sweet N' Sour Fish Fillet</a><span>₱250.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">BBQ Pork Belly</a><span>₱250.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Chicken Fillet</a><span>₱250.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Fish Fillet</a><span>₱250.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-rice">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Boneless Bangus</a><span>₱250.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<!-- APPETIZER -->

			<div class="col-lg-6 menu-item filter-appetizer">
				<img src="images/menu/lobster-bisque.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Chicken Wings</a><span>₱300.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerad
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-appetizer">
				<img src="images/menu/cake.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Frech Fries</a><span>₱180.00</span>
				</div>
				<div class="menu-ingredients">
					A delicate crab cake served on a toasted roll with lettuce and tartar sauce
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-appetizer">
				<img src="images/menu/mozzarella.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Calamari</a><span>₱300.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerada
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-appetizer">
				<img src="images/menu/mozzarella.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Sweet Tempura</a><span>₱200.00</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerada
				</div>
			</div>

			<!-- ALA CARTE -->

			<div class="col-lg-6 menu-item filter-alacarte">
				<img src="images/menu/bread-barrel.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Bread Barrel</a><span>₱6.95</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerada
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-alacarte">
				<img src="images/menu/tuscan-grilled.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Tuscan Grilled</a><span>₱9.95</span>
				</div>
				<div class="menu-ingredients">
					Grilled chicken with provolone, artichoke hearts, and roasted red pesto
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-alacarte">
				<img src="images/menu/tuscan-grilled.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Tuscan Grilled</a><span>₱9.95</span>
				</div>
				<div class="menu-ingredients">
					Grilled chicken with provolone, artichoke hearts, and roasted red pesto
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-alacarte">
				<img src="images/menu/lobster-roll.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Lobster Roll</a><span>₱12.95</span>
				</div>
				<div class="menu-ingredients">
					Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
				</div>
			</div>

			<!-- SOUP -->

			<div class="col-lg-6 menu-item filter-soup">
				<img src="images/menu/caesar.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Caesar Selections</a><span>₱8.95</span>
				</div>
				<div class="menu-ingredients">
					Lorem, deren, trataro, filede, nerada
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-soup">
				<img src="images/menu/greek-salad.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Greek Salad</a><span>₱9.95</span>
				</div>
				<div class="menu-ingredients">
					Fresh spinach, crisp romaine, tomatoes, and Greek olives
				</div>
			</div>

			<div class="col-lg-6 menu-item filter-soup">
				<img src="images/menu/spinach-salad.jpg" class="menu-img" alt="">
				<div class="menu-content">
					<a href="#">Spinach Salad</a><span>₱9.95</span>
				</div>
				<div class="menu-ingredients">
					Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
				</div>
			</div>

		</div>

	</div>
</section><!-- End Menu Section -->

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