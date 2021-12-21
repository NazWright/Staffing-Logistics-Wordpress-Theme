<?php
/*
 * Template Name: Application
 * Template Post Type: application
*/




echo $_GET['application'];

$args = array('post_type' => 'application', "name" => $_GET['application']);

$query = new WP_Query($args);

$post_id = $query ->post->ID;

//echo $post_id;

?>
                   <div>

                   	<h1> <?php the_title(); ?> </h1>

                   	<div> <?php echo get_post_meta($post_id, 'email', true);  ?> </div>

                   	<div> <?php echo get_post_meta($post_id, 'first_name', true);  ?> </div>


                   	<div> <?php echo get_post_meta($post_id, 'email', true);  ?> </div>

                    </div>


	






