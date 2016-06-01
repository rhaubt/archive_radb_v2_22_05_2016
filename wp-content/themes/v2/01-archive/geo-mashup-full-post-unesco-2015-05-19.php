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

h2.custom_headingalign {
	text-align:left;
}

div.custom-div-bg_1 {
	background-color:#eeeeee;
	box-shadow: 5px 5px 2px #888888;
    width: 230px;
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
	max-width: 210px;
	max-height: 80px;
	text-align:center;
}
#media-gallery-background {
	width: 130px;
	height: 80px;
	background-color: black;
	vertical-align:middle;
	text-align: center;
}
.cb {clear:both;}
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

<!-- info  -->	
				<table class="custom-table-style">
					<td class="custom-td-bg_blue" width="150px" height="150px">
						<a href="<?php the_field('RAE_0248') ?>"><img class="featureimg" src="<?php the_field('RAE_0248') ?>" alt="no picture available"></a>
					</td>
					<td class="custom-td-bg_blue">
						<p class="custom_small-font"><strong><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></strong> | ID: <a target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
						<h2 class="custom_headingalign"><?php the_field('RAE_0003') ?></h2></br>
						<p class="custom_small-font">Entry Date <?php the_field('RAE_0004'); ?> | Last Update <?php echo get_the_date(); ?></p>			
						<p class="custom_small-font">Condition: <?php the_field('RAE_0082'); ?> | <a target="_blank" href="<?php the_field('RAE_0081') ?>"></br>visit official website</a></p>
						<p class="custom_small-font">Author: <?php echo get_the_author(); ?></p>
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
										</td>
									</tr>
								</table>
					</article>
				</div>
				
<!-- (3) media -->
<!--     images -->
				<div>
					<input id="ac-3" name="accordion-1" type="checkbox" />
					<label for="ac-3">Media | <small style="font-weight: lighter;">images (<?php $count = count(get_field('RAE_0208_r')); ?><?php echo $count ?>) - videos (<?php $count = count(get_field('RAE_0212_r')); ?><?php echo $count ?>) - 3d (<?php $count = count(get_field('RAE_0219_r')); ?><?php echo $count ?>) </small></label>
					<article class="ac-large">
           				<p>Available Media: <?php the_field('RAE_0241'); ?>,</p>
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
										<?php if (get_field('RAE_0208_r')): ?><?php $counter = 1; ?>
										
															<?php while(has_sub_field('RAE_0208_r')): ?>
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">
																	<p class="custom_small-font">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0210')?></strong></p>																	
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0209')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0209')?>"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0211')?></p>
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
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">
																	<p class="custom_small-font">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0212')?></strong></p>
																	<div id="media-gallery-background"><a href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0214')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0214')?>/sddefault.jpg"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0213')?></p>
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
																	<p class="custom_small-font">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0220')?></strong></p>
																	<div id="media-gallery-background"><a href="http://apps.123dapp.com/embeddedview/index.html?contentid=<?php the_sub_field('RAE_0222')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0219')?>"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0221')?></p>
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
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">
																	<p class="custom_small-font">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0224')?></strong></p>
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0226')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0223')?>"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0225')?></p>
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
																	<p class="custom_small-font">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0228')?></strong></p>
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0230')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0227')?>"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0229')?></p>
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
																	<p class="custom_small-font">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0243')?></strong></p>
																	<div id="media-gallery-background"><a href="<?php the_sub_field('RAE_0245')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0242')?>"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0244')?></p>
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
<!--     Social Media -->
				<div>
					<input id="ac-4" name="accordion-1" type="checkbox" />
					<label for="ac-4">Social Media | <small style="font-weight: lighter;">Newsletters (<?php $count = count(get_field('RAE_0234_r')); ?><?php echo $count ?>) | Conferences (<?php $count = count(get_field('RAE_0237_r')); ?><?php echo $count ?>)</small></label>
					<article class="ac-large">
           				<p>Facebook: <a href="<?php the_field('RAE_0231'); ?>"><?php the_field('RAE_0231'); ?></a></p>
           				<p>Twitter: <a href="<?php the_field('RAE_0232'); ?>"><?php the_field('RAE_0232'); ?></a></p>
           				<p>Instagram: <a href="<?php the_field('RAE_0233'); ?>"><?php the_field('RAE_0233'); ?></a></p>
           						
<!--     Newsletters -->				
  						
										<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font">Newsletters</br>

															<?php while(has_sub_field('RAE_0234_r')): ?>		
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0235')?>"><?php the_sub_field('RAE_0234')?></a>, <?php the_sub_field('RAE_0236')?></div>
															<?php $counter++; ?>										
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
										
<!--     Conferences -->								
										<?php if (get_field('RAE_0237_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font">Conferences
										
															<?php while(has_sub_field('RAE_0237_r')): ?>
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0238')?>"><strong><?php the_sub_field('RAE_0237')?></a>, </strong><?php the_sub_field('RAE_0239')?></div>
															<?php $counter++; ?>									
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
										
					</article>
				</div>

<!-- (6) Location Country -->
				<div>
					<input id="ac-6" name="accordion-1" type="checkbox" />
					<label for="ac-6">Location | <small style="font-weight: lighter;">Continent (<?php $count = count(get_field('RAE_0118')); ?><?php echo $count ?>) | Country (<?php $count = (count(get_field('RAE_0119'))+count(get_field('RAE_0120'))+count(get_field('RAE_0121'))+count(get_field('RAE_0122'))+count(get_field('RAE_0123'))+count(get_field('RAE_0124'))); ?><?php echo $count ?>) | Lang Group</small></label>
					<article class="ac-large">
<!--     GPS -->
           				<p class="custom_small-font">GPS: <?php $coordinates_array = GeoMashup::post_coordinates() ?></p>
<!--     Continent -->			
										<p class="custom_small-font">Continent (<?php $count = count(get_field('RAE_0118')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0118')?></div><?php $counter++; ?>
																				
										</p>
           						
<!--     Africa -->				
										<p class="custom_small-font">Africa (<?php $count = count(get_field('RAE_0119')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0119')?></div><?php $counter++; ?>
																				
										</p>
<!--     Asia -->				
										<p class="custom_small-font">Asia (<?php $count = count(get_field('RAE_0120')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0120')?></div><?php $counter++; ?>
																				
										</p>
<!--     Europe -->				
										<p class="custom_small-font">Europe (<?php $count = count(get_field('RAE_0121')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0121')?></div><?php $counter++; ?>
																				
										</p>
<!--     North America -->				
										<p class="custom_small-font">North America (<?php $count = count(get_field('RAE_0122')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0122')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (USA):<?php the_field('RAE_0010')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (CAN):<?php the_field('RAE_0011')?></div>								
										</p>
<!--     Oceania -->				
										<p class="custom_small-font">Oceania (<?php $count = count(get_field('RAE_0123')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0123')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (AUS): <?php the_field('RAE_0009')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by Language Group (AUS): <?php the_field('RAE_0016')?></div>																			
										</p>	
<!--     South America -->				
										<p class="custom_small-font">South America (<?php $count = count(get_field('RAE_0124')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0124')?></div><?php $counter++; ?>
																				
										</p>									
										
					</article>
				</div>

<!-- (7) Location (Address) -->				
				<div>
					<input id="ac-7" name="accordion-1" type="checkbox" />
					<label for="ac-7">Location | <small style="font-weight: lighter;">Address</small></label>
					<article class="ac-medium">
					
										<p class="custom_small-font">Primary Address: <?php the_field('RAE_0018'); ?></br></br>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Gov. Area: <?php the_field('RAE_0019'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Region 1: <?php the_field('RAE_0020'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Region 2: <?php the_field('RAE_0021'); ?></div>
										</p>
										
										</p>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Boundary North: <?php the_field('RAE_0022'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Boundary South: <?php the_field('RAE_0023'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Boundary East: <?php the_field('RAE_0024'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Boundary West: <?php the_field('RAE_0025'); ?></div>
										</p>
										
										<p class="custom_small-font">Location Description: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Location Description (other): <?php the_field('RAE_0028'); ?></div>
										</p>
										
										<p class="custom_small-font">Approach: <?php the_field('RAE_0032'); ?></br></br>
										</p>
											
					</article>
				</div>
								
<!-- (8) classification archaeology -->
				<div>
					<input id="ac-8" name="accordion-1" type="checkbox" />
					<label for="ac-8">Classification | <small style="font-weight: lighter;">General</small></label>
					<article class="ac-large">
           						<table class="custom-table-style">
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Site Types</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0036'); ?> <?php the_field('RAE_0037'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_1"><p class="custom_small-font"><strong>Deposits</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0038'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Comments</strong></br></p><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0039'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_1"><p class="custom_small-font"><strong>Surface</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0040'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Camp Site</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0041'); ?></p></td>
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
           						
           															
<p class="custom_small-font"><strong>Class Sample Image</strong></br><img style="width: 210px;" scr="<?php the_field('RAE_0247'); ?>" alt="no sample picture"></p>

<p class="custom_small-font"><strong>Number of Motifs: </strong><?php the_sub_field('RAE_0169'); ?></p>
<p class="custom_small-font"><strong>Type: </strong><?php the_sub_field('RAE_0170'); ?></p>
<p class="custom_small-font"><strong>Style: </strong><?php the_sub_field('RAE_0180'); ?></p>

<p class="custom_small-font"><strong>Color</strong></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Color: </strong><small style="background-color:<?php the_sub_field('RAE_0253'); ?>;">href <?php the_sub_field('RAE_0253'); ?></small></div>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Color Basic: </strong><?php the_sub_field('RAE_0171'); ?></div>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Color Munsell: </strong><?php the_sub_field('RAE_0172'); ?></div>
</p>
<p class="custom_small-font"><strong>Subject Matter</strong></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Summary: </strong><?php the_sub_field('RAE_0181'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>People: </strong><?php the_sub_field('RAE_0175'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Figures: </strong><?php the_sub_field('RAE_0176'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Flora: </strong><?php the_sub_field('RAE_0173'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Mammal: </strong><?php the_sub_field('RAE_0184'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Reptile: </strong><?php the_sub_field('RAE_00183'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Fish: </strong><?php the_sub_field('RAE_0185'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Bird: </strong><?php the_sub_field('RAE_0174'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Extinct: </strong><?php the_sub_field('RAE_0182'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Material Culture: </strong><?php the_sub_field('RAE_0177'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Contact Art: </strong><?php the_sub_field('RAE_0178'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Scene: </strong><?php the_sub_field('RAE_0179'); ?></div></br>
</p>
<p class="custom_small-font"><strong>Dating</strong></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Dating Basic: </strong><?php the_sub_field('RAE_0201'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Dating Periods: </strong><?php the_sub_field('RAE_0202'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Dating Africa: </strong><?php the_sub_field('RAE_0203'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Dating Asia: </strong><?php the_sub_field('RAE_0204'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Dating Americas: </strong><?php the_sub_field('RAE_0205'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Dating Australia: </strong><?php the_sub_field('RAE_0206'); ?></div></br>
	<div style="padding:0px 0px 0px 50px; color:#282828;"><strong>Dating Europe: </strong><?php the_sub_field('RAE_0207'); ?></div></br>
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

<!-- comments -->
				<div>
					<input id="ac-20" name="accordion-1" type="checkbox" />
					<label for="ac-20">Comments</label>
					<article class="ac-large">
						<p>You see?</p>
						 <?php
echo do_shortcode('[wp_colorbox_media url="http://www.youtube.com/embed/nmp3Ra3Yj24" type="youtube" hyperlink="click here to pop up youtube video"]');
?> 	
</br>
</br>
<a class="colorbox2" href="http://www.23systems.net/wp-content/uploads/2008/07/lbplus-example.jpg">click here</a>
 <a title="The Known Universe" class="colorbox2" href="http://www.youtube.com/embed/17jymDn0W6U">YouTube Flash / Video (Iframe/Direct Link To YouTube Video)</a>
					</article>
				</div>
			</section>
        </div>
    </div>

		
		<?php endif; ?>

		<div class="storycontent">
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>

<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
