<?php get_header(); ?>

    <div class="row">


		<?php

        $args_cat=array(
                'include'=>' 5, 4, 3'
        );

        $categories = get_categories($args_cat);

        foreach ($categories as $category):



	        $args     = array(
		        'type'             => 'post',
		        'posts_per_page'   => 1,
		        'category__in'     => $category->term_id,
		        'category__not_in' => array( 6 ),
	        );
	        $lastBlog = new WP_Query( $args );

	        if ( $lastBlog->have_posts() ):

		        while ( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                    <div class="col-xs-12 col-sm-4">

				        <?php get_template_part( 'content', 'featured' ); ?>
                    </div>
		        <?php endwhile;

	        endif;

	        wp_reset_postdata();



        endforeach;


		?>

    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-8">
			<?php

			if ( have_posts() ):

				while ( have_posts() ): the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile;

			endif;

			//PRINT OTHER 2 POSTS NOT THE FIRST ONE

			//			$args=array(
			//				'type'=>'post',
			//				'posts_per_page'=>2,
			//				'offset' => 1
			//			);
			//			$lastBlog = new WP_Query($args);
			//
			//			if ( $lastBlog->have_posts() ):
			//
			//				while ( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            <!---->
            <!--					--><?php //get_template_part( 'content', get_post_format() ); ?>
            <!---->
            <!--				--><?php //endwhile;
			//
			//			endif;
			//
			//			wp_reset_postdata();
			?>
            <hr>
			<?php

			//PRINT specefic category


			//			$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=workout');
			//
			//			if ( $lastBlog->have_posts() ):
			//
			//				while ( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            <!---->
            <!--					--><?php //get_template_part( 'content', get_post_format() ); ?>
            <!---->
            <!--				--><?php //endwhile;
			//
			//			endif;

			?>
        </div>
        <div class="col-xs-12 col-sm-4">

			<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>