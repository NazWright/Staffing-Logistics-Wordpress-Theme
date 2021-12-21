<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Staffing Logistics ATS
 * @since SLATS 1.0
 * @author Nazere Wright
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

	<style type="text/css">

		.collapse{
			display: flex;
			justify-content: space-between;
			transition: .5s;
		}
		
	</style>
</head>

<body>
	<nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="width: 100%;border-bottom: 1px solid #cdcccc;">
		<div class="container">
			<?php 
				if ( has_custom_logo() ) :
					esc_html( the_custom_logo() );
				endif;
			 ?> <button class="navbar-toggler" id="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
		    <div id="navcol-2" class="collapse navbar-collapse">

		    	<div style="margin-left: 10px;" >
		    		<?php 
		        		$menu_slug = '79';
		        		$menu_class = 'navbar-nav me-auto'; 
		        		$menu_id='';
		        		//if( has_nav_menu() ):
			        		$args = array(
			    				'menu'=> $menu_slug,
			    				'menu_class' => $menu_class,
			    				'menu_id'=>$menu_id,
			        		);
			        		wp_nav_menu( $args );
		        		//endif;
		    		?>
		    	</div>

		        <span class="navbar-text actions"><a class="login" href=<?php echo esc_url( wp_login_url() ); ?>>Log In</a><a class="btn btn-light action-button" role="button" href="#" style="border-radius: 11px;background: var(--bs-blue);">Sign Up</a></span>
		    </div>
		</div>
	</nav>

</body>

