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

		<div class="menu-container row g-4">

			<!-- RICE MEALS -->

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">1 cup rice</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱30</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Java Rice Platter</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱120</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Garlic Rice Platter</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱200</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">BBQ Pork Rib</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱250</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">SweetN' SOur Fish Fillet</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱250</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">BBQ Pork Belly</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱250</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Chicken Fillet</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱250</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Fish Fillet</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱250</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-rice">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Boneless Bangus</div>
					<div class="category">Rice Meal</div>
					<div class="price">₱250</div>
				</div>
			</div>

			<!-- APPETIZER -->

			<div class="col-md-3 menu-item filter-appetizer">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Chicken Wings</div>
					<div class="category">Appetizer</div>
					<div class="price">₱300</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-appetizer">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">French Fries</div>
					<div class="category">Appetizer</div>
					<div class="price">₱180</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-appetizer">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Calamari</div>
					<div class="category">Appetizer</div>
					<div class="price">₱300</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-appetizer">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Sweet Tempura</div>
					<div class="category">Appetizer</div>
					<div class="price">₱200</div>
				</div>
			</div>

			<!-- ALACARTE  -->

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Chicken Wings</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱250</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Beef Steak</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱410</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">BBQ Pork Belly</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱390</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Pork Cheesig</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱350</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Hashed Beef</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱410</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Pork Sisig w/ Egg</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱350</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Grilled Tangigue</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱410</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Pansit Bam-i</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱310</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Chili Shrimps</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱350</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Grilled Squid</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱380</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Spicy Gambas</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱350</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Green Salad w/ Caesar Dressing</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱390</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-alacarte">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Ala Carte Mixed Veggies</div>
					<div class="category">Ala Carte</div>
					<div class="price">₱250</div>
				</div>
			</div>
			<!-- SOUP -->

			<div class="col-md-3 menu-item filter-soup">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Bas-uy</div>
					<div class="category">Soup</div>
					<div class="price">₱380</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-soup">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Corn Soup</div>
					<div class="category">Soup</div>
					<div class="price">₱150</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-soup">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Mushroom Soup</div>
					<div class="category">Soup</div>
					<div class="price">₱150</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-soup">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Pork Sinigang</div>
					<div class="category">Soup</div>
					<div class="price">₱380</div>
				</div>
			</div>

			<div class="col-md-3 menu-item filter-soup">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Fish TInola</div>
					<div class="category">Soup</div>
					<div class="price">₱380</div>
				</div>
			</div>

			<!-- DRINKS -->

			<div class="col-md-3 menu-item filter-drinks">
				<div class="rectangle-parent">
					<div class="menu-content">
					</div>
					<img class="menu-img" alt="" src="images/menu/greek-salad.jpg">
					<div class="menu-name">Chicken Wings</div>
					<div class="category">Appetizer</div>
					<div class="price">₱200</div>
				</div>
			</div>


		</div>


	</div>
</section><!-- End Menu Section -->

<!-- Testimonials -->

<div class="testimonials">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
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