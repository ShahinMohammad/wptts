<?php get_header();?>
	
		<!-- START SlIDER -->	
		<?php require_once('template_parts/slider.php');?>
		<!-- END SlIDER -->

		<!-- START ABOUT US -->	
		<?php require_once('template_parts/about.php');?>
		<!-- END ABOUT US -->

		<!-- START WHY CHOOSE US -->
	<?php require_once('template_parts/whymonalisa.php');?>
		<!-- END WHY CHOOSE US -->
		
		<!-- START COUNT DOWN DESIGN --> 
	<?php require_once('template_parts/countdown.php');?>
		<!-- END COUNT DOWN DESIGN --> 

		<!-- START PORTFOLIO -->
	<?php require_once('template_parts/gallery.php');?>
		<!-- END PORTFOLIO -->

		<!-- START SPECIAL OFFER -->
	<?php require_once('template_parts/offer.php');?>
		<!-- END SPECIAL OFFER -->
		
		<!-- START FEATURE -->
		<?php require_once('template_parts/feature.php');?>
		<!-- END FEATURE -->

		<!-- START TEAM -->
		<?php require_once('template_parts/team.php');?>
		<!-- END TEAM -->	
		
		<!-- START HOW IT WORKS -->
		<section data-stellar-background-ratio="0.3" id="how_it_works" class="about_video" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/bg/how-it-work.jpg); background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="video-container">                  
							<h3>How it works</h3>
							<a data-toggle="modal" data-target="#video-modal" data-backdrop="true">
							<span class="play-video"><span class="fa fa-play"></span></span></a>
						</div>
						<!-- VIDEO POPUP -->
						<div class="modal fade video-modal" id="video-modal" role="dialog">
							<div class="modal-content">
								<iframe width="712" height="400" src="https://www.youtube.com/embed/EWan2YcodSM"></iframe>
							</div>
						</div>
						<!-- END VIDEO POPUP -->	
					</div><!--- END COL -->					
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END HOW IT WORKS -->

		<!-- START PRICING -->
			<?php require_once('template_parts/pricing.php');?>

		<!-- END PRICING -->
   
		<!--- START TESTIMONIAL -->		
		<?php require_once('template_parts/testmonial.php');?>
		<!--- END TESTIMONIAL -->

		<!-- START BLOG -->
		<?php require_once('template_parts/blog.php');?>
		<!-- END BLOG -->
		
		<!-- START COMPANY PARTNER LOGO  -->
		<?php require_once('template_parts/logo.php');?>
		<!-- END COMPANY PARTNER LOGO -->
		
		<!-- START CONTACT FORM AND CONTACT ADDRESS-->
		<?php require_once('template_parts/contact.php');?>
		<!-- END CONTACT FORM AND CONTACT ADDRESS -->
		
		<!-- START MAP -->
		<div id="map"></div>
		<!-- END MAP -->
		
		<!-- START FOOTER BOTTOM -->
		<?php get_footer();?>