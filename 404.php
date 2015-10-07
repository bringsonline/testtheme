<?php get_header(); ?>


    
    	 <div class="col-600"> 
<div id="content">



					
                
            	<h1 class="page-title"><?php _e( 'Not Found', 'bobox' ); ?></h1>
			
					<p><?php _e( 'Apologies, but the page you requested could not be found.', 'bobox' ); ?></p>
					
</div><!-- eof content -->
</div><!-- eof col 600 -->

<div class="col-240">
<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(__('Page Sidebar','bobox')) ) : ?> <?php endif; ?>
</div></div>
<div class="clear"></div>

<?php get_footer(); ?>