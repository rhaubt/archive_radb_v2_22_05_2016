<?php
/**
 * Template Name: Members Page Template
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
/* ----- WP ULike Button ----- */
.wpulike {
	display:none;
}
</style>


<div id="pushwrapper">
			<div id="right">
				<div style="position: fixed; top: 0px; left: 0px; float: left; z-index: 20; width: 100%; height: 36px; background-color: #191e23; padding: 10px 0px 0px 40px; color: #e0e0e0;">
					<h2>Rock Art Database</h2>
				</div>
<!-- (1) search -->
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
<!-- (2) Find User Profiles Dropdown List -->						
 							<h1><?php _e('Find User Profiles'); ?></h1>
 							<hr>
   							<form action="<?php bloginfo('url'); ?>" method="get">
								<?php wp_dropdown_users(
								array(
   								'name' => 'author',
   								'orderby' => 'display_name',
								'order' => 'ASC'
								)); ?>
   								<input type="submit" name="submit" value="view" />
   							</form><br /><br />
<!-- (3) Content -->
   <?php get_template_part( 'content', 'page' ); ?>

							<?php comments_template( '', true ); ?>
						<?php endwhile; // end of the loop. ?>
					</div><!-- #content -->
				</div><!-- #primary -->
			<div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>