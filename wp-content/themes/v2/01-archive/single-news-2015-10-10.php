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

<link rel="stylesheet" type="text/css" href="style-css/css-post-content.css">

<style>
/* ----- General ----- */
.site-content {
	background-image: url("http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/single-background.png");
}
body {
	margin-bottom: -48px;
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

/* ----- Content ----- */
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
h2.custom_headingalign {
	text-align:left;
}
div.custom-media-image { 
	max-width:100%; 
	max-height:100%; 
	padding: 41px 10px 10px 10px;
}
p.custom_small-font-nopadding-2 {
	font-size:10px;
	width:100%;
	padding: 0px !important;
}
.cb {
	clear:both;
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
.custom-thumbnail {
	width:150px;
	height:150px;
    box-shadow: 5px 5px 2px #888888;
    overflow:hidden;
    float:right;
    padding: 0px 0px 0px 10px;
}
p.custom_small-font {
	font-size:10px;
}

/* ----- Comments ----- */
.comments-area {
	background-color: #eeeeee;
}
.comments-title {
	display:none;
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
img.attachment-medium.wp-post-image {
	width:150px;
}
img.attachment-medium.default-featured-img {
	height:150px;
}

/* ----- Media Gallery ----- */
p.custom_small-font-nopadding {
	font-size:10px;
	width:100px;
	padding: 0px 5px 5px 5px !important;
	margin-top:-20px;
	overflow:hidden;
	text-overflow:ellipsis;
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
    text-overflow: ellipsis;
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

/* ----- Media Gallery - Lightbox ----- */
#cboxTitle {
    position: absolute;
    bottom: 0px;
    left: 0px;
    font-size: 12px;
    text-align: justify;
    width: 470px;
    color: #949494;
}
</style>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-content" id="pushwrapper">
			<div style="width: 460px; height: 100vh; float: right; overflow-y: scroll; overflow-x:hidden; box-shadow: 0px 0px 50px rgb(0, 0, 0);">
<!--     category and ID  and author and avatar -->			
			<div style="width: 460px; height: 36px; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0; position:fixed; z-index:10;">
				<h2 style="padding: 0px;"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | ID: <a target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> | <small style="padding:0px 0px 0px 0px;" class="custom_small-font">Author: <?php the_author_posts_link(); ?> <?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?></small></h2>
			</div>

<!-- (1) info  -->			
			<div style="padding-top: 36px;">			
				<table class="custom-table-style">
					<tr>
					<td class="custom-td-bg_blue" width="150px" height="150px">
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
<!--     color label  -->
					<td class="custom-td-bg_blue">
<!--     title name  -->						
						<h2 class="custom_headingalign"><?php the_field('RAE_0003') ?></h2></br>
<!--     entry date  -->						
						<p class="custom_small-font">Entry Date <?php 
						$date = get_field('RAE_0004');
						$y = substr($date, 0, 4);
						$m = substr($date, 4, 2);
						$d = substr($date, 6, 2);
						$time = strtotime("{$d}-{$m}-{$y}");
						echo date('Y-m-d', $time);
						?> | Last Update <?php echo get_the_date(); ?></p></br></br></br>
<!--     Social Media / Facebook / Twitter / Other  -->
							<span title="find us on social media eg facebook, twitter, instgram, flickr, picasa etc." class="dashicons dashicons-share" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span>
							<?php if (get_field('RAE_0231')): ?>
							<a style="text-decoration:none;" target="_blank" href="<?php the_field('RAE_0231'); ?>"><span class="dashicons dashicons-facebook" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span></a>
							<?php endif; ?>
							<?php if (get_field('RAE_0232')): ?>
							<a style="text-decoration:none;" target="_blank" href="<?php the_field('RAE_0232'); ?>"><span class="dashicons dashicons-twitter" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span></a>
							<?php endif; ?>
							<?php if (get_field('RAE_0233')): ?>
							<a style="text-decoration:none;" target="_blank" href="<?php the_field('RAE_0233'); ?>"><span class="dashicons dashicons dashicons-share-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span></a>
							<?php endif; ?></br>
<!--     wti like / body content  -->
							<?php the_content(); ?>
						</p>																			
					</td>
					</tr>
				</table>
			</div>

<!-- (1) info description -->				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse"><span title="contains a description about this entry" class="dashicons dashicons-admin-home" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> News <span style="float:right; padding-right:5px;">&#9660</span></label>
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
<!-- (5) Location -->	
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_5"><span title="the geolocation of this record including address and or location approach descriptions" class="dashicons dashicons-location-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Location <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_5" type="checkbox">
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
<!-- (6) Collection Location (other collections within this archives) -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_6"><span title="all continents, countries, regions or language group areas contained within this entry (if the entry is a place, site or item the location usually only contains one continent, country or region)" class="dashicons dashicons-archive" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Collection Locations (<?php $count = (count(get_field('RAE_0118'))); ?><?php echo $count ?> continents) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_6" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Continent -->
					<?php if (get_field('RAE_0118')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Continent (<?php $count = count(get_field('RAE_0118')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0118')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>       						
<!--     Africa -->
					<?php if (get_field('RAE_0119')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Africa (<?php $count = count(get_field('RAE_0119')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0119')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!--     Asia -->
					<?php if (get_field('RAE_0120')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Asia (<?php $count = count(get_field('RAE_0120')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0120')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!--     Europe -->
					<?php if (get_field('RAE_0121')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Europe (<?php $count = count(get_field('RAE_0121')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0121')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!--     North America -->
					<?php if (get_field('RAE_0122')): ?>
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
					<?php endif; ?>
<!--     Oceania -->
					<?php if (get_field('RAE_0123')): ?>
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
					<?php endif; ?>	
<!--     South America -->
					<?php if (get_field('RAE_0124')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> South America (<?php $count = count(get_field('RAE_0124')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0124')?></div><?php $counter++; ?>																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>										
			</div>							

<!-- (14) References -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_14"><span title="list of newsletters, journal publications, conference and other references affiliated with this entry" class="dashicons dashicons-book-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> References <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_14" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Newsletters -->				
  					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
										<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Newsletters</br>

															<?php while(has_sub_field('RAE_0234_r')): ?>		
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0235')?>"><?php the_sub_field('RAE_0234')?></a>, <?php the_sub_field('RAE_0236')?></div>
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
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0238')?>"><strong><?php the_sub_field('RAE_0237')?></a>, </strong><?php the_sub_field('RAE_0239')?></div>
															<?php $counter++; ?>									
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
<!--     References -->				
  					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
										<?php if (get_field('RAE_0089_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> References</br>

															<?php while(has_sub_field('RAE_0089_r')): ?>		
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <?php the_sub_field('RAE_0089')?>, <?php the_sub_field('RAE_0186')?></br><a class="lightbox" href="<?php the_sub_field('RAE_0187')?>"><?php the_sub_field('RAE_0187')?></a></div>
															<?php $counter++; ?>										
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
			</div>		
<!-- (15) Comments  -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_15"><span class="dashicons dashicons-admin-comments" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Comments <span>(<?php comments_number( 'no responses', 'one response', '% responses' ); ?>) </span></label>
  			<div style="background-color:#eeeeee; padding:2px;">
						<div>	
							<?php comments_template( '', true ); ?>
						</div>
			</div>							
	</div>


<!-- Media Gallery -->	
				<div style="width: 140px; height: 100vh; float: left; background-color:rgba(112,184,255, 0.3); overflow: scroll;">
					<div style="width: 140px; height: 36px; z-index: 10; position: fixed; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0;">
						<h2 style="padding: 8px;"><span title="please click on the items in the media browser below to view media content" class="dashicons dashicons-admin-media" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Gallery (<?php $count = (count(get_field('RAE_0208_r'))+count(get_field('RAE_0212_r'))+count(get_field('RAE_0219_r'))+count(get_field('RAE_0223_r'))+count(get_field('RAE_0227_r'))+count(get_field('RAE_0242_r'))+count(get_field('RAE_0081'))); ?><?php echo $count ?>)</h2>
					</div>
<!--     Website -->			
								<?php if (get_field('RAE_0081')): ?>					
           						<div class="custom-media-image">	
           														
																<div class="custom-div-bg_1">
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
																	<div id="media-gallery-background"><a class="lightbox" title="official website" rel="lightbox[vr]" href="<?php the_field('RAE_0081') ?>"><img class="media-gallery" src="<?php echo $thumb; ?>"></a>
																	</div>
																	<span class="dashicons dashicons-admin-links" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[1] <strong>website</strong></p>
																</div>
																																	
								</div>
								<?php endif; ?>	
<!--     Newsletter & Journal -->								
           						<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0234_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="frequent newsletter or journal publication: <?php the_sub_field('RAE_0234')?>. <?php the_sub_field('RAE_0236')?>" rel="lightbox[vr]" href="<?php the_sub_field('RAE_0235')?>"><img class="media-gallery" src="http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/media-gallery_newsletter.png"></a>
																	</div>
																	<span class="dashicons dashicons-media-document" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0234')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!-- images - using object acf - send url= & h=echo ($height / 100)."\n" and w=echo ($width / 100)."\n" to href link - devide by 100 to adjust screen size and ratio -->
					<?php if( have_rows('RAE_0208_r') ): ?><?php $counter = 1; ?>
					<div class="custom-media-image">				
						
				
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
								<div id="media-gallery-background"><a class="lightbox" title="Image: <?php the_sub_field('RAE_0211')?>" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_images/index.html?img=<?php echo $image['sizes']['large']; ?>&w=<?php echo ($width / 100)."\n"; ?>&h=<?php echo ($height / 100)."\n"; ?>"><img class="media-gallery" src="<?php echo $thumb; ?>" /></a>
								</div>
								<span class="dashicons dashicons-format-image" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
								<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0210')?></strong></p>
						</div>
							<?php endif; ?>
		    				<?php $counter++; ?>
		    				<?php endwhile; ?>
							
					</div>
					<?php endif; ?>
<!--     videos youtube -->												
           						<?php if (get_field('RAE_0212_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										
										
															<?php while(has_sub_field('RAE_0212_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="Video: <?php the_sub_field('RAE_0213')?>" rel="lightbox[youtube]" href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0214')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0214')?>/sddefault.jpg"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0212')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
										
								</div>
								<?php endif; ?>
<!--     3D Autodesk 123D Catch -->								
           						<?php if (get_field('RAE_0219_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0219_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="3D Autodesk: <?php the_sub_field('RAE_0221')?>" rel="lightbox[autodesk]" href="http://apps.123dapp.com/embeddedview/index.html?contentid=<?php the_sub_field('RAE_0222')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0219')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0220')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!--     3D .x3d -->								
           						<?php if (get_field('RAE_0223_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0223_r')): ?>
																<div class="custom-div-bg_1">																
																	<div id="media-gallery-background"><a class="lightbox" title="3D as .x3d: <?php the_sub_field('RAE_0225')?>" rel="lightbox[x3d]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_3d/index.html?x3d=<?php the_sub_field('RAE_0226')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0223')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0224')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!--     3D .kml -->								
           						<?php if (get_field('RAE_0227_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0227_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="Google Earth .kml: <?php the_sub_field('RAE_0229')?>" rel="lightbox[earth]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_google_earth/index.html?gps=<?php $location = get_field('RAE_0254'); if( !empty($location) ):?><?php echo $location['lat']; ?>,<?php echo $location['lng']; ?><?php endif; ?>&kml=<?php the_sub_field('RAE_0230')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0227')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0228')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
								
<!--     Virtual Reality -->								
           						<?php if (get_field('RAE_0242_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0242_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="Virtual or Interactive Tour: <?php the_sub_field('RAE_0244')?>" rel="lightbox[vr]" href="<?php the_sub_field('RAE_0245')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0242')?>"></a>
																	</div>
																	<span class="dashicons dashicons-welcome-view-site" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0243')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>