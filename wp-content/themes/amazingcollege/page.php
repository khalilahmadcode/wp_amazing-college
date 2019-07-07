<!-- Prints a Page content  -->
<?php
/* Include header */
get_header(); 

/* Print posts of the page.  */
while (have_posts()) {
	the_post();
	?>
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
		<div class="page-banner__content container container--narrow">
		  <h1 class="page-banner__title"><?php the_title(); ?></h1>
		  <div class="page-banner__intro">
		    <p>show come hrere something new...</p>
		  </div>
		</div>  
	</div>

	<div class="container container--narrow page-section">
		<?php 
		/* if wp_get_post_parent_id(get_the_ID())==0 means its a parent page. */ 
		$post = get_the_ID(); 
		$parent_id = wp_get_post_parent_id($post); //the parent ID of a main page is 0

		//if its a child page.
		if ($parent_id) { 
 			?>
				<div class="metabox metabox--position-up metabox--with-home-link">
			      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parent_id); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($the_parent_id); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
			    </div>
			<?php
		} 

		/** if its child or parent page, print right side nav */ 
		$parentChilds = get_pages($args = array(
			'child_of' => get_the_ID()	
		));

		if($parent_id || $parentChilds) {
		?> 
			<div class="page-links">
		      	<h2 class="page-links__title">
					<a href="<?php echo get_permalink($parent_id); ?>">
						<?php echo get_the_title($parent_id); ?>
					</a>
				</h2>
		      	<ul class="min-list">
		      	<?php 
		      		/* child pages links, print if its in parent page. */
		      		/* inside array: 
						'title_li' => NULL, //it remove the list title
						'child_of' => 87 //parent pagenumber
					  */
					$findChildrenOf=''; 
					if($parent_id) {
						$findChildrenOf  = $parent_id; 
					} else {
						$findChildrenOf = get_the_ID(); 
					}
		      		wp_list_pages(array(
		      			'title_li' => NULL,
		      			'child_of' => $findChildrenOf, 
		      			'sort_column' => 'menu_order'
		      		));
		      	?>	
		        <!-- 
		        	<li class="current_page_item"><a href="#">Our History</a></li>
		        	<li><a href="#">Our Goals</a></li> 
		    	-->
		      </ul>
		    </div> 
		<?php } ?>
	    <div class="generic-content">
	      <?php the_content(); ?>
	    </div>
	</div>
<?php
}
get_footer(); 
?>