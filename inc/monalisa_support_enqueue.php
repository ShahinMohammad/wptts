<?php
  
function monalisa_style_script(){
   
   wp_enqueue_style('monalisa_bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
   wp_enqueue_style('monalisa_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,700,900');
   wp_enqueue_style('monalisa_googleapis','https://fonts.googleapis.com/css?family=Montserrat:400,700');
   wp_enqueue_style('monalisa_awesome',get_template_directory_uri().'/assets/fonts/font-awesome.min.css');
   wp_enqueue_style('monalisa_carousel',get_template_directory_uri().'/assets/owlcarousel/css/owl.carousel.css');
   wp_enqueue_style('monalisa_owltheme',get_template_directory_uri().'assets/owlcarousel/css/owl.theme.css');
   wp_enqueue_style('monalisa_prettyPhoto',get_template_directory_uri().'/assets/css/prettyPhoto.css');
   wp_enqueue_style('monalisa_flexslider',get_template_directory_uri().'/assets/css/flexslider.css');
   wp_enqueue_style('monalisa_animate',get_template_directory_uri().'/assets/css/animate.css');
   wp_enqueue_style('monalisa_style',get_template_directory_uri().'/assets/css/style.css');

  
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

   




   wp_enqueue_script('monalisa_bootstrap',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array('jquery'),false,true);

   wp_enqueue_script('monalisa_modernizr',get_template_directory_uri().'/assets/js/modernizr-2.8.3.min.js',array('jquery'),false,true);

   wp_enqueue_script('monalisa_inview',get_template_directory_uri().'/assets/js/jquery.inview.min.js',array('jquery'),false,true);
   wp_enqueue_script('monalisa_flexslider',get_template_directory_uri().'/assets/js/jquery.flexslider-min.js',array('jquery'),false,true);

   wp_enqueue_script('monalisa_prettyPhoto',get_template_directory_uri().'/assets/js/jquery.prettyPhoto.js',array('jquery'),false,true);

   wp_enqueue_script('monalisa_owlcarousel',get_template_directory_uri().'/assets/owlcarousel/js/owl.carousel.min.js',array('jquery'),false,true);

   wp_enqueue_script('monalisa_scrolltopcontrol',get_template_directory_uri().'/assets/js/scrolltopcontrol.js',array('jquery'),false,true);
   wp_enqueue_script('monalisa_contact',get_template_directory_uri().'/assets/js/form-contact.js',array('jquery'),false,true);
   wp_enqueue_script('monalisa_min',get_template_directory_uri().'/assets/js/wow.min.js',array('jquery'),false,true);
   wp_enqueue_script('monalisa_maps','https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA',array('jquery'),false,true);

wp_enqueue_script('monalisa_scripts',get_template_directory_uri().'/assets/js/scripts.js',array('jquery'),false,true);


}
add_action('wp_enqueue_scripts','monalisa_style_script');