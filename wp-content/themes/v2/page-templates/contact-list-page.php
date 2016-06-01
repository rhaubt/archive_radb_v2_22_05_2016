<?php
/**
 * Template Name: Contact List Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<style>
#pushwrapper { 
  border: 0px; 
}

.push-wrapper div {
   width: 100%; 
   padding: 0px 0px 0px 0px;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
}
#right { background-color: #191e23; }

@media screen and (min-width: 600px) {
   .push-wrapper {
      height: auto; 
      overflow: hidden; // clearing 
   }
	#right { 
		margin: 2px;
		width: auto;
		height:100vh;
	}
}
.gm-map {
	height:100%;
}

</style>
<style>
/* DIV collapse for toolbox */
.collapse{
  font-size: 14px;
  display:block;
}
.collapse + input{
  display:none;
}
.collapse + input + *{
  display:none;
}
.collapse+ input:checked + *{
  display:block;
}
/* ----- General ----- */
.site-content {
	background: url("http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/main_menu_about_sulawesi.jpg") no-repeat center center fixed;
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}
body {
	margin-bottom: -48px;
}
div.single-content {
	margin-left: auto;
    margin-right: auto;
    width: 600px;
    height: auto;
    background-color: rgba(192,192,192,0.7);
    padding: 20px;
}
.entry-header {
	display: none;
}
</style>


<div id="pushwrapper">
			<div id="right">
<!-- (1) Menu & Banner -->
				<div style="position: fixed; top: 0px; left: 0px; float: left; z-index: 20; width: 100%; height: 36px; background-color: #191e23; padding: 10px 0px 0px 40px; color: #e0e0e0;">
					<label style="text-align:left; background-color:#282828; color:#e0e0e0;"><span style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Menu <span style="float:right; padding-right:70px; margin-top:-14px;"><img style="height: 50px;" src="http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/rockartdatabase_logo.png"></span></label>
				</div>
<!-- (2) Search -->
				<div style="position: fixed; top: 30px; left:-42px; z-index: 20; width: 100%; height: 36px; background-color: #191e23; padding: 10px 0px 0px 40px; color: #e0e0e0;">
					<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 10px 7px; color:#e0e0e0;" class="collapse" for="_10"><span style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Search &#128269 <span style="float:right; padding-right:5px;">&#9660</span></label>
  					<input id="_10" type="checkbox">
  						<div style="background-color:#eeeeee; padding:2px; color:#282828;">
							<div class="custom-search-content" style="height:500px; overflow:scroll; text-align:justify; line-height: 1.2; font-size:10px;">
								<?php if(function_exists('wp_custom_fields_search')) wp_custom_fields_search('preset-2'); ?></br><hr>
							</div>	
						</div>
				</div>

				<div style="padding-top:90px;" id="primary" class="site-content">
					<div id="content" role="main" class="single-content">
						<?php while ( have_posts() ) : the_post(); ?>
						
<!-- Index -->						
						<h2>Conferences</h2></br></br>
						Past and Future Conferences. Please see the individual conference websites for more details.</br></br></br></br></br>

<!-- Conference Section -->
							<?php $contact = new WP_Query(
    						array(
        					'post_type' => array('cpt-00-01', 'cpt-01-01','cpt-01-02','cpt-01-03'),
        					'orderby' => 'title',
        					'post_status' => 'publish',
    						)
							);
							?>

							<table>
							<?php if($contact->have_posts()) : ?>
    							<?php while($contact->have_posts()) : $contact->the_post(); ?>
        							<div>
        								
											<tr>
    											<td class="custom-td-bg_2" style="border:1px solid black; font-size: 10px;">
        										<?php the_field('RAE_0090') ?></br>
        										<a class="lightbox" style="text-decoration:none;" target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field('RAE_0003') ?> <?php the_title() ?></a>
        										</td>
    											<td class="custom-td-bg_1" style="border:1px solid black; font-size: 10px;">
    											<?php the_field('RAE_0091') ?>
    											</td>
    											<td class="custom-td-bg_2" style="border:1px solid black; font-size: 10px;">
    											<?php the_field('RAE_0092') ?>
    											</td>
    										</tr>
    									
    								</div></br>
    							<?php endwhile; ?>
							<?php endif; wp_reset_query(); ?>
							</table>
<!-- emails only -->							
							<table>
							<?php if($contact->have_posts()) : ?>
    							<?php while($contact->have_posts()) : $contact->the_post(); ?>
        							<div>
        								
											<tr>
    											<td class="custom-td-bg_1" style="border:1px solid black; font-size: 10px;">
    											<?php the_field('RAE_0091') ?>
    											</td>
    										</tr>
    									
    								</div></br>
    							<?php endwhile; ?>
							<?php endif; wp_reset_query(); ?>
							</table>
							
						<?php endwhile; // end of the loop. ?>
					</div><!-- #content -->
				</div><!-- #primary -->
			<div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>