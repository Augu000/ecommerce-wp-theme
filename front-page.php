<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Woocomerce
 */

get_header();
?>

	<main id="primary" class="site-main" >






		<section class="container pb-5 pt-4">
					<div id="carouselExampleInterval" class="carousel slide overflow-hidden rounded" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active" data-interval="10000">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item" data-interval="2000">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg" class="d-block w-100" alt="...">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							
						</a>
						<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</a>
					</div>
		</section>



		<section class="container align-center">

				<h1 class="text-center pt-5">Popular products</h1>
				<p class="text-center">We offer a high quality toys to help keep <br>your pets healthy and spoiled.</p>

				<div class="pt-5 pb-5">
					<div class="woocommerce">
						<?php echo do_shortcode( '[products columns=4 limit=4]' ); ?>
					</div>
				</div>
		</section>
		<section class="container align-center w-100" style="background-color: red;">

		</section>

		<section class="container pt-5 w-100" style="display:flex; flex-direction: column;">
			<h1 class="text-center pt-5">Special Offers</h1>
			<p class="text-center">We offer a variaty of products</p>

			<div class="pt-5 pb-5 ">
				<div class="woocommerce">
					<?php echo do_shortcode('[sale_products columns=4 limit=4]'); ?>
				</div>
			</div>
		</section>




	</main>

<?php
get_footer();
