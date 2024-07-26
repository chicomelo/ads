<?php
/* Template Name: Últimas Públicações */ 
get_header();

?>
<div class="container">

    <div class="posts-list">
	
		<h1><?php the_title(); ?></h1>

		<div class="lista-posts">

			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'paged' => $paged,
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 10,
					'update_post_meta_cache' => false,
					'update_post_term_cache' => false
				);
				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post(); 
						get_template_part( 'template-parts/layout/posts-list');	
					endwhile;

				?>

				<div class="paginacao">
				<?php
					// Função de paginação
					$big = 999999999; // número qualquer para substituir no paginate_links
					echo paginate_links(array(

						'mid_size'      => 1,
						'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format' => '?paged=%#%',
						'current' => max(1, get_query_var('paged')),
						'total' => $query->max_num_pages,
						'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z"></path></svg>'),
						'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z"></path></svg>'),
					));
				?>
				</div>
				<?php
					wp_reset_postdata();
				else : ?>
					<p>Sem posts para mostrar.</p>
				<?php endif; ?>
		</div>

		
    </div>
</div>

<?php
get_footer();
?>