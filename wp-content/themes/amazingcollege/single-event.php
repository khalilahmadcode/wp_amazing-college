<b>single-event.php</b>
<?php get_header();  ?>
<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
	<div class="page-banner__content container container--narrow">
	  <h1 class="page-banner__title"><?php the_title(); ?></h1>
	  <div class="page-banner__intro">
	    <p>show come hrere something new...</p>
	  </div>
	</div>  
</div>

<!-- Print posts -->
<?php 
while (have_posts()) {
	the_post(); 
	?>
	<div class="container container--narrow page-section">
		<!-- The links of main blog page and single posts  -->
		<div class="metabox metabox--position-up metabox--with-home-link">
	      <p>
		  	<a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>">
			  <i class="fa fa-home" aria-hidden="true"></i> Events Home
			</a> 
			<span class="metabox__main"><?php the_title(); ?></span>
		</p>
	    </div>
		<!-- The content of the single post compping from. -->
		<div class="generic-content">
			<div style='padding:5px;'>
				<?php 
					$evenDateObj = new DateTime(get_field('event_date'));
					$evenDate = $evenDateObj->format('D, d M Y'); 
					$evenTimeObj = new DateTime(get_field('event_time'));
					$eventTime = $evenTimeObj->format('g:i:a');//format('H:m:s'); 
					$eventMenu=get_field('event_menu');
					 
				?>
				<?php if($eventMenu !="") {?>
				<span style='margin-right:10px; font-weight:bold;'><i class="fa fa-address-book" aria-hidden="true"></i> <?php echo " ". $eventMenu; ?></span>
				<?php } if($eventTime !="") {?>
				<Span style='margin-right:10px; font-weight:bold;'><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo " ". $evenDate. ' - ' . $eventTime; ?></Span>
				<?php }?>
			</div>
			<?php the_content(); ?>
		</div>
	</div>

	<?php
	}
	get_footer(); 
?>