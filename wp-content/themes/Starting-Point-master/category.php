<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage aliya
 * @since aliya 1.0
 */
?>

<?php  get_template_part('inc/parts/head');  ?>
<?php  get_template_part('inc/parts/header'); ?>


 <div class="content"> <!-- =========== КОНТЕНТ =========== --> 

 
    <main>	
    <div class="centerbar"> 
	   
	   <div class="page_title_wrap">
	      <h1 class="page_title"><?php echo breadcrumbs(' » '); ?></h1>
		  <?php if ( category_description() ){ ?>
          <div class="page_description"><?php echo category_description( ); ?>
	      </div>		  
		  <?php }?>
	   </div>
	   
	   <div class="trainings_wrap">
	   
	      <?php               
          global $post;  
          //$args = array( 'category_name' => 'blog_cat', 'numberposts' => 0, 'paged'=> get_query_var('paged'),  'orderby'=>'date', 'order'=>'DESC' ); 
          $args = array( 'cat' => get_query_var('cat'), 'numberposts' => 0, 'paged'=> get_query_var('paged'),  'orderby'=>'date', 'order'=>'DESC' ); 
          $myposts = get_posts( $args );  
          foreach( $myposts as $post ) :  setup_postdata($post); ?>
		  <?php  ?>
	    
	    ?>
		  
		  <?php endforeach ;   ?>		  
	  
	   </div>

       <div class="pagination">
	      <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
	   </div>	   
	      
	   
    </div> <!-- centerbar-->	 
    </main>
	 
	<?php  get_template_part('inc/parts/sidebar'); ?>


 </div><!-- content -->

<?php  get_template_part('inc/parts/footer'); ?>