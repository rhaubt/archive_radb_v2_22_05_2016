<?php
/**
 * Template Name: News Page Template
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
/* avatar for Author in Info Section */
img.avatar.avatar-30.gravatar {
	width:20px;
	height:20px;
	border-radius: 5px;
	position:absolute;
	margin-left:5px;
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
							
							<!-- News Section -->
			<h1>NEWS</h1>
			<hr />
			<table class="custom-table-style">
				<tr>
<!-- Main News Section -->
					<td class="custom-td-bg_1">
							<?php $news = new WP_Query(
    						array(
        					'post_type' => 'cpt-01-01',
        					'orderby' => 'date',
        					'post_status' => 'publish',
    )
);?>

							<?php if($news->have_posts()) : ?>
    							<?php while($news->have_posts()) : $news->the_post(); ?>
        							<div>
        								<table class="custom_news-item">
											<tr>
												<td class="custom-td-bg_2" width="150px" height="150px">
<!-- Feature Image If Has Thumbnail -->
					<?php if (get_field('RAE_0248')): ?>				
					<?php
 					$image = get_field('RAE_0248');
 					$url = $image['url'];
					$size_large = 'large';
					$size_small = 'thumbnail';
					$thumb = $image['sizes'][ $size_small ];
					$width = $image['sizes'][ $size_large . '-width' ];
					$height = $image['sizes'][ $size_large . '-height' ];
 					$width = $image['sizes'][ $size_large . '-width' ];
					$height = $image['sizes'][ $size_large . '-height' ];
					?>
					<a target="_blank" href="<?php the_permalink() ?>" title="open this entry in new window"><img style="border-radius: 5px;" src="<?php echo $thumb; ?>"></a>
<!-- Feature Image else load no_image -->
					<?php else: echo '<a target="_blank" href="'.get_permalink().'" title="open this entry in new window"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/no_img_available-150x150.jpg"></a>'; ?>				 					
					<?php endif?>
					</td>
        										<td class="custom-td-bg_2" style="width:450px; text-decoration: none; color: black;">
        										<a target="_blank" href="<?php the_permalink() ?>" title="open this entry in new window"><h2><?php the_field('RAE_0003');?></h2></a>
        										<small><?php the_date(); ?> | <?php the_author_posts_link(); ?> <?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?></small>
        										<hr>
        										<p class="custom_small-font" style="width:400px; height:95px; text-overflow: ellipsis; white-space:nowrap; overflow:hidden; line-height:12px; text-decoration:none; color:black;"><?php global $more; $more = 0; the_field('RAE_0006'); ?></p>
    											</td>
    										</tr>
    									</table>
    								</div></br>
    							<?php endwhile; ?>
							<?php endif; wp_reset_query(); ?>
							<hr>				
					</td>
			</table>
						
						<?php get_template_part( 'content', 'page' ); ?>	
						<?php endwhile; // end of the loop. ?>
					</div><!-- #content -->
				</div><!-- #primary -->
			<div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>