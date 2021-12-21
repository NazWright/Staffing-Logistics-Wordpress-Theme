<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage SL_ATS
 * @since SL_ATS 1.0
 * @author Nazere Wright
 */
?>


<div class="sl-ats-site-branding">
		<nav class="navbar navbar-light navbar-expand-lg navigation-clean-button sl-ats-navbar"> 
			<div class="container">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php endif; ?>
					<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

						 <?php 
						 	// arguments for the navigation menu

						 	$menu_slug_id='79';
						 	$args = array(
						 		'menu'=>$menu_slug_id,
						 		'menu_class'=>'navbar-nav me-auto',
						 		'container'=> 'div',
						 		'container_class'=>'collapse navbar-collapse',
						 		'container_id'=>'navcol-2'					 	
						 	);
						 	wp_nav_menu($args);

						 ?> 

						  <span class="navbar-text actions"><a class="login" href="#">Log In</a><a class="btn btn-light action-button" role="button" href="#" style="border-radius: 11px;background: var(--bs-blue);">Sign Up</a></span>


					   <!-- <ul class="navbar-nav me-auto">
					        <li class="nav-item"><a class="nav-link active" href="#" style="font-family: Alegreya, serif;">Home</a></li>
					        <li class="nav-item"><a class="nav-link" href="#" style="font-family: Alegreya, serif;">Job Seekers</a></li>
					        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-family: Alegreya, serif;">Employers</a>
					            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
					        </li>
					    </ul> -->
					   
					
			</div>
		</nav>

</div><!-- .site-branding -->
