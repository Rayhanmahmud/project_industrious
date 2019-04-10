<?php

function industrious_section_1($attr){
	extract(
	shortcode_atts(array(
        'site_name' => '',
        'nav_menu' => '',	
	
	),$attr)
	);
	ob_start();
	?>
	<header id="header">
				<a class="logo" href="<?php $current_url = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>"><?php   if (is_front_page()) { 
       echo get_bloginfo( 'name' );
    } else {
        wp_title( '| Mehedi', true, 'right' );
	}  ?></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
    </header>
    <!-- Nav -->
			<nav id="menu">
			<?php 
				wp_nav_menu(
					array(
						'menu' => $nav_menu,
						'menu_class' => 'links',
                        'container' => false
					)
				);
			 ?>
			</nav>
	<?php
	return ob_get_clean();	
}
add_shortcode('topheaderindustrio','industrious_section_1');


function banner($one){

extract(
shortcode_atts(array(

 'banner_title' => '',
 'banner_des' => '',
 
),$one)
);

ob_start();
?>

<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav>

		<section id="banner">
				<div class="inner">
					<h1><?php echo esc_html($banner_title);?></h1>
					<p><?php echo esc_html($banner_des);?></p>
				</div>
				<video autoplay loop muted playsinline src="<?php echo get_template_directory_uri().'/images/banner.mp4'?>"></video>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('banner_section','banner');


//Section Two Output

function backgroundslide($two){

extract(
shortcode_atts(array(

 'header_title' => '',
 'header_des' => '',
 'card_section_two_group' => '',
 'icon' => '',
 'title' => '',
 'description' => '',
 
),$two)
);

ob_start();
?>


		<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo esc_html($header_title);?></h2>
						<p><?php echo esc_html($header_des);?></p>
					</header>
					<div class="highlights">
               
 <?php 

	$sec_two_array_loop=vc_param_group_parse_atts($card_section_two_group);

	foreach($sec_two_array_loop as $sec_two_loop_value):

?>

						<section>
							<div class="content">
								<header>
									<a href="#" class="icon"><span class="<?php echo esc_attr($sec_two_loop_value['icon']);?>"></span></a>
									<h3><?php echo esc_html($sec_two_loop_value['title']);?></h3>
								</header>
								<p><?php echo esc_html($sec_two_loop_value['description']);?></p>
							</div>
						</section>


	<?php endforeach; ?>



					</div>
				</div>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('section_two','backgroundslide');


// Section Three With Parallex Output


function parallexbg($three){

extract(
shortcode_atts(array(

 'title' => '',
 'description' => '',
 
),$three)
);

ob_start();
?>

<section id="cta" class="wrapper">
				<div class="inner">
					<h2><?php echo esc_html($title);?></h2>
				    <p><?php echo esc_html($description);?></p>
				</div>
			</section>




<?php

return ob_get_clean();

}

add_shortcode('section_three','parallexbg');


//Testimonials : Section Four Output


function testimonial($four){

extract(
shortcode_atts(array(

 'title' => '',
 'description' => '',
 'testiomonial_section_three_group' => '',
 'info' => '',
 'image' => '',
 'author_name' => '',
 'author_designation' => '',
 
),$four)
);

ob_start();
?>


<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo esc_html($title);?></h2>
				        <p><?php echo esc_html($description);?></p>
					</header>
					<div class="testimonials">

					<?php 

	$sec_tree_array_loop=vc_param_group_parse_atts($testiomonial_section_three_group);

	foreach($sec_tree_array_loop as $sec_three_loop_value):

?>
						<section>
							<div class="content">
								<blockquote>
		<p><?php echo esc_html($sec_three_loop_value['info']);?></p>
								</blockquote>
								<div class="author">
									<div class="image">

						<?php 
			

						$testimonial_image = wp_get_attachment_image_src($sec_three_loop_value['image']);

						if($testimonial_image){ ?>

							<img src="<?php echo esc_url($testimonial_image[0]);?>" alt="" />

						<?php
						}
						?>
										
									</div>
									<p class="credit">- <strong><?php echo esc_html($sec_three_loop_value['author_name']);?></strong> <span><?php echo esc_html($sec_three_loop_value['author_designation']);?></span></p>
								</div>
							</div>
						</section>


					<?php endforeach;?>




			



					</div>
				</div>
			</section>


<?php

return ob_get_clean();

}

add_shortcode('section_four','testimonial');





?>