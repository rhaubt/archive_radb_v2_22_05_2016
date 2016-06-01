<?php
/**
 * This is the default template for full post display of a clicked marker
 * in a Geo Mashup map. 
 *
 * Don't modify this file! It will be overwritten by upgrades.
 *
 * Instead, copy this file to "full-post.php" in your geo-mashup-custom directory,
 * or "geo-mashup-full-post.php" in your theme directory. Those files will
 * take precedence over this one.
 *
 * @package GeoMashup
 */
?>

<head>
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Info Window</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="plugin_geomashup-full-post/plugin_geomashup-full-post.css" />

<style>
.geomashup_full_post {
	width: 400px;
	left: 0px;
	top: 0px;
	padding: 0px 0px 0px 0px;
	margin: 0px 0px 0px 0px;

}
.geomashup-iframe {
	width: 100%;
	height: 300px;
	background-color: #e0e0e0;
	border: 0px;
	bottom: 0px;
	
}
.featureimg {
	width: 150px;
	height: 150px;
	box-shadow: 5px 5px 5px #888888;
}

td.custom-td-bg_blue {
    border: 0px solid #E0E0E0;
    background-color: #70B8FF;
    max-width: 100%;
    padding: 7px;
    line-height: 1.5;
    text-align: justify;
}

.ac-container{
	width: 100%;
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	text-align: left;
}
.ac-container label{
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	font-style: normal;
	padding: 5px 20px;
	position: relative;
	z-index: 20;
	display: block;
	height: 30px;
	cursor: pointer;
	color: #e0e0e0;
	line-height: 33px;
	font-size: 18px;
	background: #282828;
	box-shadow: 
		0px 0px 0px 1px rgba(155,155,155,0.3), 
		0px 0px 0px 0px rgba(255,255,255,0.9) inset, 
		0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover{
	background: #e0e0e0;
	color: #282828;
}
.ac-container input:checked + label,
.ac-container input:checked + label:hover{
	background: #282828;
	color: #e0e0e0;
	box-shadow: 
		0px 0px 0px 1px rgba(155,155,155,0.3), 
		0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover:after,
.ac-container input:checked + label:hover:after{
	content: '';
	position: absolute;
	width: 24px;
	height: 24px;
	right: 13px;
	top: 7px;
	background: transparent url(../plugin_geomashup-full-post/images/arrow_down.png) no-repeat center center;	
}
.ac-container input:checked + label:hover:after{
	background-image: url(../images/arrow_up.png);
}
.ac-container input{
	display: none;
}
.ac-container article{
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	background: #e0e0e0;
	margin-top: -1px;
	overflow: hidden;
	height: 0px;
	position: relative;
	z-index: 10;
	-webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
}
.ac-container article p{
	color: #000000;
	line-height: 20px;
	font-size: 12px;
	padding: 10px 20px 10px 20px;
	text-align: justify;
}
.ac-container input:checked ~ article{
	-webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
}
.ac-container input:checked ~ article.ac-small{
	height: 100%;
}
.ac-container input:checked ~ article.ac-medium{
	height: 100%;
}
.ac-container input:checked ~ article.ac-large{
	height: 100%;
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
	box-shadow: 5px 5px 2px #888888;
    width: 200px;
    height: auto;
    padding: 5px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 10px 10px 5px #888888;
}

div.custom-div-bg_2 {
	background-color: #e0e0e0;
	width:280px;
}
</style>

<style>
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
	max-width: 200px;
	max-height: 110px;
	text-align:center;
}
#media-gallery-background {
	width: 200px;
	height: auto;
	background-color: #282828;
	vertical-align:middle;
	text-align: center;
}
.cb {
	clear:both;
}

li.comment.odd { 
	background-color: #eeeeee; 
	padding: 5px;
	margin:10px;
	box-shadow: 3px 3px 3px #888888;
} 
li.comment.even { 
	background-color: #eeeeee; 
	padding: 5px;
	margin:10px;
	box-shadow: 3px 3px 3px #888888;
}
div.comment-author.vcard {
	background-color: #323232;
	color: white;
	
}
.custom_comments input{
	display: block;
}
.custom_comments {
	color: #282828;
	padding: 10px;
}
cite.fn {
  	position: relative;
  	padding: 10px;
  	top: -28px;
  	font-style: bold; 	
}
.says {
	display: none;
}
div.comment-meta.commentmetadata {
	position: relative;
	top: -59px;
	left: 75px;
}
.comment-body p {
	padding: 0px 0px 30px 0px !important;
}
.comment-reply-link {
  	background-color: #282828;
  	padding: 5px;
  	border-style: solid;
  	border-width: 2px;
  	border-color: #21759B;
  	text-decoration: none;
}
a.comment-reply-link, a.comment-edit-link {
	color: #e0e0e0;
}
#respond form {
	background-color: #eeeeee; 
	padding: 5px;
	margin:10px;
	box-shadow: 3px 3px 3px #888888;	
}
#respond form label {
  	display: inline;
  	line-height: 0px;
  	background-color: #eeeeee;
  	position: relative;
  	top: -50px;
  	color: #282828;
  	font-size: 14px;
}
#respond form input[type="text"] {
	width:100%;
	position: relative;
	top: 27px;
}
#comment-image-wrapper label {
	display: none !important;
}

</style>

</head>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

<!-- content -->		
		 <div class="geomashup_full_post">
			<section class="ac-container">

<!-- (1) search -->
				<div>
					<input id="ac-1" name="accordion-1" type="checkbox" />
					<label for="ac-1">Search &#128269;</label>
					<article class="ac-small">
						<div class="custom-search-content">
							<?php if(function_exists('wp_custom_fields_search')) wp_custom_fields_search('preset-1'); ?></br>
						</div>
					</article>
				</div>

<!-- (1) info  -->	
				<table class="custom-table-style">
					<td class="custom-td-bg_blue" width="150px" height="150px">
						<a href="<?php the_field('RAE_0248') ?>"><img class="featureimg" src="<?php the_field('RAE_0248') ?>" alt="no picture available"></a>
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
						<p class="custom_small-font">Condition: <?php the_field('RAE_0082'); ?> | <a target="_blank" href="<?php the_field('RAE_0081') ?>"></br>visit official website</a></p>
<!--     author  -->						
						<p class="custom_small-font">Author: <?php echo get_the_author(); ?></p>
<!--     wti like / body content  -->						
						<div class="storycontent" style="height: 21px; max-width: 200px; padding:3px 2px 2px 5px; background-color:#282828; box-shadow: 3px 3px 3px #888888; border-style: solid; border-width:1px; border-color: #323232; color: #e0e0e0; font-size: 10px;">
							<?php the_content(); ?>						
						</div>
						
					</td>
				</table>

<!-- (2) info description-->				
				<div>
					<input id="ac-2" name="accordion-1" type="checkbox" />
					<label for="ac-2">Info</label>
					<article class="ac-medium">
           						<table class="custom-table-style">
           							<tr>
										<td class="custom-td-bg_2">
											<?php if ( function_exists( 'has_post_thumbnail') and has_post_thumbnail() ) : ?>
											<p class="custom_small-font">												
												<?php the_field('RAE_0006'); ?>
											</p>
											<a class="lightbox" title="Secondary Lightbox - Screenshot 2" href="http://www.rockartdatabase.com/v2/wp-content/plugins/lightbox-plus/screenshot-2.jpg">text</a>	
										</td>
									</tr>
								</table>
					</article>
				</div>
				
<!-- (3) media -->
<!--     Available Media -->
				<div>
					<input id="ac-3" name="accordion-1" type="checkbox" />
					<label for="ac-3">Media | <small style="font-weight: lighter;"><span class="dashicons dashicons-format-image" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0208_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0212_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0219_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0223_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0227_r')); ?><?php echo $count ?> | <span class="dashicons dashicons-welcome-view-site" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0242_r')); ?><?php echo $count ?></small></label>
					<article class="ac-large">
						<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">
           							<p><span class="dashicons dashicons-admin-media" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> <strong>Available Media</strong>
           								</br><?php the_field('RAE_0241'); ?>
           							</p>
           						</td>
           					</tr>
           				</table>
<!--     images -->
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
										<?php if (get_field('RAE_0208_r')): ?><?php $counter = 1; ?>
										
															<?php while(has_sub_field('RAE_0208_r')): ?>
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0209')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0209')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><span class="dashicons dashicons-format-image" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0210')?></strong></p>
																	<p class="custom_small-font-nopadding"> <?php the_sub_field('RAE_0211')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>
				
									</tr>
								</table>
								</div>
<!--     videos youtube -->												
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
										<?php if (get_field('RAE_0212_r')): ?><?php $counter = 1; ?>
										
															<?php while(has_sub_field('RAE_0212_r')): ?>
															<td class="custom-td-bg_1">
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0214')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0214')?>/sddefault.jpg"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0212')?></strong></p>
																	<p class="custom_small-font-nopadding"> <?php the_sub_field('RAE_0213')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>
				
									</tr>
								</table>
								</div>
<!--     3D Autodesk 123D Catch -->								
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
										<?php if (get_field('RAE_0219_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0219_r')): ?>
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a href="http://apps.123dapp.com/embeddedview/index.html?contentid=<?php the_sub_field('RAE_0222')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0219')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0220')?></strong></p>
																	<p class="custom_small-font-nopadding"> <?php the_sub_field('RAE_0221')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>			
									</tr>
								</table>
								</div>
<!--     3D .x3d -->								
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
										<?php if (get_field('RAE_0223_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0223_r')): ?>
															<td class="custom-td-bg_1">
																<div class="custom-div-bg_1">																
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0226')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0223')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0224')?></strong></p>
																	<p class="custom_small-font-nopadding"> <?php the_sub_field('RAE_0225')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>			
									</tr>
								</table>
								</div>
<!--     3D .kml -->								
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
										<?php if (get_field('RAE_0227_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0227_r')): ?>
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0230')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0227')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0228')?></strong></p>
																	<p class="custom_small-font-nopadding"> <?php the_sub_field('RAE_0229')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>			
									</tr>
								</table>
								</div>
								
<!--     Virtual Reality -->								
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
										<?php if (get_field('RAE_0242_r')): ?><?php $counter = 1; ?>

															<?php while(has_sub_field('RAE_0242_r')): ?>
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0245')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0242')?>"></a>
																	</div>
																	<p class="custom_small-font-nopadding"><span class="dashicons dashicons-welcome-view-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> [<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0243')?></strong></p>
																	<p class="custom_small-font-nopadding"> <?php the_sub_field('RAE_0244')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>			
									</tr>
								</table>
								</div>
								
					</article>
				</div>

<!-- (4) Social Media -->
				<div>
					<input id="ac-4" name="accordion-1" type="checkbox" />
					<label for="ac-4">Social Media | <small style="font-weight: lighter;"><span class="dashicons dashicons-share" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> | <span class="dashicons dashicons-media-document" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0234_r')); ?><?php echo $count ?> | <span class="dashicons dashicons-groups" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0237_r')); ?><?php echo $count ?></small></label>
					<article class="ac-large">
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
							
					</article>
				</div>

<!-- (6) Location Country -->
				<div>
					<input id="ac-6" name="accordion-1" type="checkbox" />
					<label for="ac-6">Location | <small style="font-weight: lighter;"><span class="dashicons dashicons-admin-site" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0118')); ?><?php echo $count ?> | <span class="dashicons dashicons-admin-site" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = (count(get_field('RAE_0119'))+count(get_field('RAE_0120'))+count(get_field('RAE_0121'))+count(get_field('RAE_0122'))+count(get_field('RAE_0123'))+count(get_field('RAE_0124'))); ?><?php echo $count ?> | Lang Group</small></label>
					<article class="ac-large">
<!--     GPS -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">
           							<p class="custom_small-font"><span class="dashicons dashicons-admin-post" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> GPS: <?php $coordinates_array = GeoMashup::post_coordinates() ?></p>
           						</td>
           					</tr>
           			</table>
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
										
					</article>
				</div>

<!-- (7) Location (Address) -->				
				<div>
					<input id="ac-7" name="accordion-1" type="checkbox" />
					<label for="ac-7">Location | <small style="font-weight: lighter;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span></small></label>
					<article class="ac-medium">
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
											
					</article>
				</div>
								
<!-- (8) classification archaeology -->
				<div>
					<input id="ac-8" name="accordion-1" type="checkbox" />
					<label for="ac-8">Classification | <small style="font-weight: lighter;"><span class="dashicons dashicons-clipboard" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span></small></label>
					<article class="ac-large">
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
           					
					</article>
				</div>
									
<!-- (9) classification rock art -->
				<div>
					<input id="ac-9" name="accordion-1" type="checkbox" />
					<label for="ac-9">Classification | <small style="font-weight: lighter;">Rock Art (<?php $count = count(get_field('RAE_0168_r')); ?><?php echo $count ?>)</small></label>
					<article class="ac-large">
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
									<?php if (get_field('RAE_0168_r')): ?><?php $counter = 1; ?>
										
									<?php while(has_sub_field('RAE_0168_r')): ?>
										<td class="custom-td-bg_2">
										<div class="custom-div-bg_1">
										
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
								
					</article>
				</div>

<!-- references -->
				<div>
					<input id="ac-13" name="accordion-1" type="checkbox" />
					<label for="ac-13">References</label>
					<article class="ac-large">
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
					</article>
				</div>

<!-- comments / used to be "/inline-comments.php" -->
				<div>
					<input id="ac-20" name="accordion-1" type="checkbox" />
					<label for="ac-20">Comments</label>
					<article class="ac-large">
						
						<div class="custom_comments">
							<?php 
  								global $withcomments;
  								$withcomments = true; 
  								comments_template("comments.php");
							?>
							</br>
						</div>
						
						
					</article>
				</div>
			</section>
        </div>
    </div>

		
		<?php endif; ?>

		

	<?php endwhile; ?>

<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>