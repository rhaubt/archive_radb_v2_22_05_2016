<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//-->
</script>

<style>
.site-content {
	background-image: url("http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/single-background.png");
}
body {
	margin-bottom: -48px;
}
.comments-area {
	background-color: #eeeeee;
}
.comments-title {
	display:none;
}
#click-menu {
    display: none;
}
.site-info {
	display: none;
}
#colophon {
	display: none;
}
#wpcomm .wc-comment-bar {
	display: none;
}
#wpcomm .wc-field-submit input[type="button"] {
	display: block;
}
#respond form p.form-allowed-tags {
	display:none;
}
#respond form label {
	font-size:10px;
}
p.comment-form-comment label {
	display:none !important;
}
#respond h3#reply-title {
	display:none;
}
#respond form p.logged-in-as {
	display:none;
}
#respond form textarea {
	height:80px;
}
#respond {
    margin-top: 0px;
}
.commentlist .odd {
	background-color:#e0e0e0;
	border-top: solid 1px black;
	border-bottom: solid 1px black;
}
.comments-area article header {
	margin:0px;
}
.comments-area article header cite, .comments-area article header time {
	margin-left:52px;
}
/* avatar for Comments Author */
img.avatar.avatar-44.gravatar {
	width:40px;
	height:40px;
}
.comments-area article header img {
	width:40px;
	height:40px;
}
/* avatar for WP U ILike Show People Who Like */
img.avatar.avatar-32.gravatar {
	width:30px;
	height:30px;
	position:relative;
	border-radius: 5px;
}
/* avatar for Author in Info Section */
img.avatar.avatar-30.gravatar {
	width:30px;
	height:30px;
	border-radius: 5px;
}
.comments-area .bypostauthor cite span {
	display:none;
}
div.single-content {
	margin-left: auto;
    margin-right: auto;
    width: 600px;
    height: auto;
}
td.custom-td-bg_blue {
    border: 0px solid #E0E0E0;
    background-color: rgba(112,184,255, 0.3);
    max-width: 100%;
    padding: 7px;
    line-height: 1.5;
    text-align: justify;
}

div.custom-media-image { 
	max-width:100%; 
	max-height:100%; 
	padding: 41px 10px 10px 10px;
}

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


iframe {
	width:280px;
	height:150px;
}

.custom-thumbnail {
	width:150px;
	height:150px;
    box-shadow: 5px 5px 2px #888888;
    overflow:hidden;
    float:right;
    padding: 0px 0px 0px 10px;
}

img.attachment-medium.wp-post-image {
	width:150px;
}

img.attachment-medium.default-featured-img {
	height:150px;
}

p.custom_small-font {
	font-size:10px;
}
p.custom_small-font-nopadding {
	font-size:10px;
	padding: 0px 0px 0px 0px !important;
}

h2.custom_headingalign {
	text-align:left;
}

div.custom-div-bg_1 {
	background-color:#eeeeee;
	border: 2px solid #282828;
    width: 110px;
    height: auto;
    padding: 0px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
	-moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    float: left;
    border-radius: 5px;
}

div.custom-div-bg_2 {
	background-color:#eeeeee;
	border: 2px solid #282828;
    width: 410px;
    height: auto;
    padding: 5px 2px 5px 2px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
	-moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    float: left;
}

.media-gallery_wrapper {width:290px; margin:auto;}
#media-gallery_screen {width: 290px; height: 250px; float: left;}
#media-gallery_videos {
    margin-bottom: 1em;
    padding-left : 0em;
    margin-left: 0em;
    list-style: none;
    display: block;
    float: left;
	width: 8050px;
    height: 200px;
}

#media-gallery_videolist {
	width: 300px;
	height: 250px;
    overflow: scroll;
}

#media-gallery_videos li {
    float: left;
    width: 130px;
    height: 240px;
    padding: 5px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 10px 10px 5px #888888;
}
#media-gallery_videos li span {
    font: 10px/11px arial, sans-serif;
    
}
#media-gallery_desc {
	font: 12px/11px arial, sans-serif;
}
img.media-gallery {
	max-width: 110px;
	max-height: 80px;
	text-align:center;
}
#media-gallery-background {
	width: 110px;
	height: 80px;
	background-color: #282828;
	vertical-align:middle;
	text-align: center;
}
.cb {
	clear:both;
}
</style>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-content" id="pushwrapper">
			<div style="width: 460px; height: 100vh; float: right; overflow-y: scroll; overflow-x:hidden; box-shadow: 10px 10px 10px rgb(0, 0, 0);">
			
			<div style="width: 460px; height: 36px; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0; position:fixed; z-index:10;">
				<h2 style="padding: 8px;"><a target="_top" href="http://www.rockartdatabase.com/v2"><small>back to</small></a> Rock Art Database</h2>
			</div>

<!-- (1) info  -->			
			<div style="padding-top: 36px;">			
				<table class="custom-table-style">
					<td class="custom-td-bg_blue" width="150px" height="150px">
<!-- Feature Image Thumbnail and Lightbox -->				
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
					<a class="lightbox" title="<?php echo get_the_title(); ?>" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_images/index.html?img=<?php echo $url; ?>&w=<?php echo ($width / 100)."\n"; ?>&h=<?php echo ($height / 100)."\n"; ?>"><img style="border-radius: 5px;" src="<?php echo $thumb; ?>" alt="no image"></a>
					</td>
<!--     color label  -->
					<td class="custom-td-bg_blue">
<!--     category and ID  -->
						<p class="custom_small-font"><strong><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></strong> | ID: <a target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
<!--     title name  -->						
						<h2 class="custom_headingalign"><?php the_field('RAE_0003') ?></h2></br>
<!--     entry date  -->						
						<p class="custom_small-font">Entry Date <?php the_field('RAE_0004'); ?> | Last Update <?php echo get_the_date(); ?></p>			
<!--     condition  -->						
						<p class="custom_small-font">Condition: <?php the_field('RAE_0082'); ?> | <a class="lightbox" href="<?php the_field('RAE_0081') ?>"></br>visit official website</a></p>
<!--     author  -->						
						<p style="padding:5px 0px 0px 0px;"class="custom_small-font"><?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> Author: <?php the_author_posts_link(); ?></p>
<!--     wti like / body content  -->						
						<div class="storycontent" style="height: 21px; max-width: 437px; padding:0px 2px 5px 0px; font-size:14px; margin-left: -163px;">
							<?php the_content(); ?>						
						</div>
					</td>
				</table>
			</div>

<!-- (1) info description-->				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_1"><span class="dashicons dashicons-admin-home" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Info <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_1" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										<?php the_field('RAE_0006'); ?>																			
									</p>
								</td>
							</tr>
						</table>
			</div>
<!-- (2) media -->
<!--     Available Media -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_2"><span class="dashicons dashicons-admin-media" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Available Media Formats <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_2" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
				
						<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
           							<p><strong>Media Gallery</strong></br>
           								<span class="dashicons dashicons-format-image" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0208_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0212_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0219_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0223_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0227_r')); ?><?php echo $count ?> | <span class="dashicons dashicons-welcome-view-site" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0242_r')); ?><?php echo $count ?>
           								</br>
           								</br>
           								<strong>All Available Formats</strong></br>
           								<?php the_field('RAE_0241'); ?>
           							</p>
           						</td>
           					</tr>
           				</table>

				</div>
<!-- (3) Social Media -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_3"><span class="dashicons dashicons-share" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Social Media and Newsletters <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_3" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Total -->					
					<table class="custom-table-style">
						<tr>
							<td class="custom-td-bg_2">
								<p><strong>All Newsletters and Conferences</strong></br>
								<span class="dashicons dashicons-media-document" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0234_r')); ?><?php echo $count ?> | <span class="dashicons dashicons-groups" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0237_r')); ?><?php echo $count ?>
								</p>
							</td>
						</tr>
					</table>
<!--     Social Media -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">
           							<p><span class="dashicons dashicons-share" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Social Media</br>
           								<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-facebook" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Facebook: <a href="<?php the_field('RAE_0231'); ?>"><?php the_field('RAE_0231'); ?></a></div>
           								<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-twitter" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Twitter: <a href="<?php the_field('RAE_0232'); ?>"><?php the_field('RAE_0232'); ?></a></div>
           								<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-share-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Instagram: <a href="<?php the_field('RAE_0233'); ?>"><?php the_field('RAE_0233'); ?></a></div>
           							</p>
           						</td>
           					</tr>
           			</table>
           						
<!--     Newsletters -->				
  					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
										<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Newsletters</br>

															<?php while(has_sub_field('RAE_0234_r')): ?>		
																<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> [<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0235')?>"><?php the_sub_field('RAE_0234')?></a>, <?php the_sub_field('RAE_0236')?></div>
															<?php $counter++; ?>										
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
<!--     Conferences -->								
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">					
										<?php if (get_field('RAE_0237_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-groups" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Conferences</br>
										
															<?php while(has_sub_field('RAE_0237_r')): ?>
																<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-groups" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> [<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0238')?>"><strong><?php the_sub_field('RAE_0237')?></a>, </strong><?php the_sub_field('RAE_0239')?></div>
															<?php $counter++; ?>									
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
			</div>

<!-- (4) Location (Details) -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_4"><span class="dashicons dashicons-location-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Location (Details) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_4" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     GPS -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">
           							<p class="custom_small-font"><span class="dashicons dashicons-admin-post" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> GPS: <?php the_field('RAE_0254')?></p>
           						</td>
           					</tr>
           					<tr>
           						<td class="custom-td-bg_1">
           							<div>
           							<?php echo GeoMashup::map('height=200&width=350&zoom=10&add_overview_control=false&add_map_type_control=false');?>
           							</div>
           						</td>
           					</tr>
           			</table>			
<!--     Primary Address -->						
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font">Primary Address: <?php the_field('RAE_0018'); ?></br></br>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Gov. Area: <?php the_field('RAE_0019'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Region 1: <?php the_field('RAE_0020'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Region 2: <?php the_field('RAE_0021'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Boundaries -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										</p>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary North: <?php the_field('RAE_0022'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary South: <?php the_field('RAE_0023'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary East: <?php the_field('RAE_0024'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary West: <?php the_field('RAE_0025'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Location Description -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Location Description: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Location Description (other): <?php the_field('RAE_0028'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Approach -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<p class="custom_small-font"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Approach: <?php the_field('RAE_0032'); ?></br></br>
										</p>
								</td>
							</tr>
					</table>
			</div>

<!-- (5) Location (All in Archive) -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_5"><span class="dashicons dashicons-admin-site" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Locations (All in Archive) (<?php $count = (count(get_field('RAE_0119'))+count(get_field('RAE_0120'))+count(get_field('RAE_0121'))+count(get_field('RAE_0122'))+count(get_field('RAE_0123'))+count(get_field('RAE_0124'))); ?><?php echo $count ?>) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_5" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Continent -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Continent (<?php $count = count(get_field('RAE_0118')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0118')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>          						
<!--     Africa -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Africa (<?php $count = count(get_field('RAE_0119')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0119')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
<!--     Asia -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Asia (<?php $count = count(get_field('RAE_0120')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0120')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
<!--     Europe -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Europe (<?php $count = count(get_field('RAE_0121')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0121')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
<!--     North America -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> North America (<?php $count = count(get_field('RAE_0122')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0122')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (USA):<?php the_field('RAE_0010')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (CAN):<?php the_field('RAE_0011')?></div>								
										</p>
								</td>
							</tr>
					</table>
<!--     Oceania -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Oceania (<?php $count = count(get_field('RAE_0123')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0123')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (AUS): <?php the_field('RAE_0009')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by Language Group (AUS): <?php the_field('RAE_0016')?></div>																			
										</p>
								</td>
							</tr>
					</table>	
<!--     South America -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> South America (<?php $count = count(get_field('RAE_0124')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0124')?></div><?php $counter++; ?>																				
										</p>
								</td>
							</tr>
					</table>									
			</div>
								
<!-- (6) classification archaeology -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_6"><span class="dashicons dashicons-clipboard" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Classification (Archaeology) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_6" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Site Types -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Site Types: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0036'); ?> <?php the_field('RAE_0037'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Deposits -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Deposits: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0038'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Comments -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Comments: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0039'); ?></div>
										</p>
								</td>
							</tr>
					</table>					
<!--     Surface -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Surface: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0040'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Camp Site -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-store" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Camp Site: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0041'); ?></div>
										</p>
								</td>
							</tr>
					</table>						
			</div>
									
<!-- (7) classification rock art -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_7"><span class="dashicons dashicons-universal-access-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Classification (Rock Art) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_7" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
									<?php if (get_field('RAE_0168_r')): ?><?php $counter = 1; ?>
										
									<?php while(has_sub_field('RAE_0168_r')): ?>
										<td class="custom-td-bg_2">
										<div class="custom-div-bg_2">
										
<!--     Class Image -->	           						           															
										<p class="custom_small-font-nopadding" style="background-color:#e0e0e0;"><strong>Class Sample Image</strong></br><img style="width: 210px;" scr="<?php the_field('RAE_0247'); ?>" alt="no sample picture"></br></br></p>
<!--     Number of Motifs -->
										<p class="custom_small-font-nopadding"><strong>Number of Motifs</strong></br>
											<?php the_sub_field('RAE_0169'); ?></br></br></p>
<!--     Type -->
										<p class="custom_small-font-nopadding" style="background-color:#e0e0e0;"><strong>Type</strong></br>
											<?php the_sub_field('RAE_0170'); ?></br></br></p>
<!--     Style -->
										<p class="custom_small-font-nopadding"><strong>Style</strong></br>
											<?php the_sub_field('RAE_0180'); ?></br></br></p>
<!--     Color -->
										<p class="custom_small-font-nopadding" style="background-color:#e0e0e0;"><strong>Color</strong></br>
										<small style="background-color:<?php the_sub_field('RAE_0253'); ?>;">href <?php the_sub_field('RAE_0253'); ?></small></br>
											<?php the_sub_field('RAE_0171'); ?></br>
											<?php the_sub_field('RAE_0172'); ?></br></br>		
										</p>
<!--     Subject Matter -->										
										<p class="custom_small-font-nopadding"><strong>Subject Matter</strong></br>
											<div style="padding:0px 0px 0px 0px; color:#282828;"><strong>All</strong></br>
												<?php the_sub_field('RAE_0181'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>People</strong></br>
												<?php the_sub_field('RAE_0175'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Figures</strong></br>
												<?php the_sub_field('RAE_0176'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Flora</strong></br>
												<?php the_sub_field('RAE_0173'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Mammal</strong></br>
												<?php the_sub_field('RAE_0184'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Reptile</strong></br>
												<?php the_sub_field('RAE_00183'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Fish</strong></br>
												<?php the_sub_field('RAE_0185'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Bird</strong></br>
												<?php the_sub_field('RAE_0174'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Extinct</strong></br>
												<?php the_sub_field('RAE_0182'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Material Culture</strong></br>
												<?php the_sub_field('RAE_0177'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Contact Art</strong></br>
												<?php the_sub_field('RAE_0178'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Scene</strong>
												</br><?php the_sub_field('RAE_0179'); ?></div></br>
										</p>
<!--     Dating -->										
										<p class="custom_small-font-nopadding" style="background-color:#e0e0e0;"><strong>Dating</strong></br>
											<strong>Dating Basic</strong></br>
												<?php the_sub_field('RAE_0201'); ?></br>
											<strong>Dating Periods</strong></br>
												<?php the_sub_field('RAE_0202'); ?></br>
											<strong>Dating Africa</strong></br>
												<?php the_sub_field('RAE_0203'); ?></br>
											<strong>Dating Asia</strong></br>
												<?php the_sub_field('RAE_0204'); ?></br>
											<strong>Dating Americas</strong></br>
												<?php the_sub_field('RAE_0205'); ?></br>
											<strong>Dating Australia</strong></br>
												<?php the_sub_field('RAE_0206'); ?></br>
											<strong>Dating Europe</strong></br>
												<?php the_sub_field('RAE_0207'); ?></br>
										</p>

								
									</div>
									</td>
									</tr>		
									
								<?php endwhile; ?>
								<?php endif; ?>			
							</table>
							</div>
				</div>

<!-- (8) References -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_8"><span class="dashicons dashicons-book-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> References <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_8" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
           						<table class="custom-table-style">
           							<tr>
										<td colspan="3" class="custom-td-bg_2"><p class="custom_small-font"><strong>Newsletter</strong></p>
											<?php if (get_field('RAE_0084_r')): ?>
												<div>
												<?php while(has_sub_field('RAE_0084_r')): ?>
													<div>
													<p class="custom_small-font">• <?php the_sub_field('RAE_0084')?>, (<?php the_sub_field('RAE_0116')?>), <a target="_blank "href="<?php the_sub_field('RAE_0099')?>">link</a></p>
													</div>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="custom-td-bg_1"><p class="custom_small-font"><strong>Conferences</strong></p>
											<?php if (get_field('RAE_0085_r')): ?>
												<div>
												<?php while(has_sub_field('RAE_0085_r')): ?>
													<div>
													<p class="custom_small-font">• <?php the_sub_field('RAE_0085')?>, (<?php the_sub_field('RAE_0117')?>)</p>
													</div>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="custom-td-bg_2"><p class="custom_small-font"><strong>References</strong></p>
											<?php if (get_field('RAE_0089_r')): ?><?php $counter = 1; ?>
												<div>
												<?php while(has_sub_field('RAE_0089_r')): ?>
													<div>
													<p class="custom_small-font"><strong>[<?php echo $counter; ?>]</strong> <?php the_sub_field('RAE_0089')?></p>
													</div><?php $counter++; ?>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>	
           						</table>
			</div>				
<!-- (9) Comments  -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_9"><span class="dashicons dashicons-admin-comments" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Comments <span>(<?php comments_number( 'no responses', 'one response', '% responses' ); ?>) </span></label>
  			<div style="background-color:#eeeeee; padding:2px;">
						<div>	
							<?php comments_template( '', true ); ?>
						</div>
			</div>							
	</div>


<!-- Media Gallery -->	
				<div style="width: 140px; height: 100vh; float: left; background-color:rgba(112,184,255, 0.3); overflow: scroll;">
					<div style="width: 140px; height: 36px; z-index: 10; position: fixed; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0;">
						<h2 style="padding: 8px;"><span class="dashicons dashicons-admin-media" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Gallery (<?php $count = (count(get_field('RAE_0208_r'))+count(get_field('RAE_0212_r'))+count(get_field('RAE_0219_r'))+count(get_field('RAE_0223_r'))+count(get_field('RAE_0227_r'))+count(get_field('RAE_0242_r'))); ?><?php echo $count ?>)</h2>
					</div>
<!-- images - using object acf - send url= & h=echo ($height / 100)."\n" and w=echo ($width / 100)."\n" to href link - devide by 100 to adjust screen size and ratio -->
					<div class="custom-media-image">				
						<?php if( have_rows('RAE_0208_r') ): ?><?php $counter = 1; ?>
				
						<?php while( have_rows('RAE_0208_r') ): the_row(); 
						// vars
						$image = get_sub_field('RAE_0209');
						$content = get_sub_field('RAE_0209');
						$link = get_sub_field('RAE_0209');
						
						$url = $image['url'];
						$size_large = 'large';
						$size_small = 'thumbnail';
						$thumb = $image['sizes'][ $size_small ];
						$width = $image['sizes'][ $size_large . '-width' ];
						$height = $image['sizes'][ $size_large . '-height' ];						
						?>
						<div class="custom-div-bg_1">								
							<?php if( $link ): ?>													 				
								<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0210')?>:</strong> <?php the_sub_field('RAE_0211')?>" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_images/index.html?img=<?php echo $url; ?>&w=<?php echo ($width / 100)."\n"; ?>&h=<?php echo ($height / 100)."\n"; ?>"><img class="media-gallery" src="<?php echo $thumb; ?>" /></a>
								</div>	
								<p class="custom_small-font-nopadding"><span class="dashicons dashicons-format-image" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0210')?></strong></p>
						</div>
							<?php endif; ?>
		    				<?php $counter++; ?>
		    				<?php endwhile; ?>
							<?php endif; ?>
					</div>
<!--     videos youtube -->												
           						<div class="custom-media-image">
										<?php if (get_field('RAE_0212_r')): ?><?php $counter = 1; ?>
										
															<?php while(has_sub_field('RAE_0212_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0212')?>:</strong> <?php the_sub_field('RAE_0213')?>" rel="lightbox[youtube]" href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0214')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0214')?>/sddefault.jpg"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0212')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
										<?php endif; ?>
								</div>
<!--     3D Autodesk 123D Catch -->								
           						<div class="custom-media-image">
										<?php if (get_field('RAE_0219_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0219_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0220')?>:</strong> <?php the_sub_field('RAE_0221')?>" rel="lightbox[autodesk]" href="http://apps.123dapp.com/embeddedview/index.html?contentid=<?php the_sub_field('RAE_0222')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0219')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0220')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
										<?php endif; ?>			
								</div>
<!--     3D .x3d -->								
           						<div class="custom-media-image">
										<?php if (get_field('RAE_0223_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0223_r')): ?>
																<div class="custom-div-bg_1">																
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0224')?>:</strong> <?php the_sub_field('RAE_0225')?>" rel="lightbox[x3d]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_3d/index.html?x3d=<?php the_sub_field('RAE_0226')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0223')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0224')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
										<?php endif; ?>			
								</div>
<!--     3D .kml -->								
           						<div class="custom-media-image">
										<?php if (get_field('RAE_0227_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0227_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0228')?>:</strong> <?php the_sub_field('RAE_0229')?>" rel="lightbox[earth]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_google_earth/index.html?gps=<?php $location = get_field('RAE_0254'); if( !empty($location) ):?><?php echo $location['lat']; ?>,<?php echo $location['lng']; ?><?php endif; ?>&kml=<?php the_sub_field('RAE_0230')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0227')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0228')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
										<?php endif; ?>			
								</div>
								
<!--     Virtual Reality -->								
           						<div class="custom-media-image">
										<?php if (get_field('RAE_0242_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0242_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0243')?>:</strong> <?php the_sub_field('RAE_0244')?>" rel="lightbox[vr]" href="<?php the_sub_field('RAE_0245')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0242')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><span class="dashicons dashicons-welcome-view-site" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0243')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
										<?php endif; ?>			
								</div>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>