<?php
get_header(); ?>

<div class="container">

    <div class="posts-list">

        <h1 class="titulo">Resultados para <b>"<?php echo get_search_query(); ?>"</b></h1>

        <div class="busca-blog">
            <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                <fieldset>
                    <input type="text" name="s" placeholder="Buscar no blog">
                    <button type="submit">
                        <div class="search-icon">
                            <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24.01" xml:space="preserve"><path d="m25 22.44-7.86-7.55c1.28-1.57 2.05-3.53 2.05-5.68C19.2 4.13 14.89 0 9.6 0S0 4.13 0 9.21s4.31 9.21 9.6 9.21c2.23 0 4.28-.74 5.91-1.97L23.37 24 25 22.44zM2.3 9.21c0-3.86 3.27-7 7.29-7s7.29 3.14 7.29 7-3.27 7-7.29 7-7.29-3.13-7.29-7z"></path></svg></div>
                        </div>
                    </button>
                </fieldset>
            </form>
        </div>
        <?php if (have_posts()) : ?>
            <div class="lista-posts">
                <?php 
                while (have_posts()) : the_post(); 
                    get_template_part( 'template-parts/layout/posts-list');	 
                endwhile; 
                ?>

                <div class="paginacao">
                    <?php
                    $big = 999999999; // número qualquer para substituir no paginate_links
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z"></path></svg>'),
                            'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z"></path></svg>'),
                        ));
                    ?>
                </div>
            </div>
        <?php else : ?>
            <p>Nenhum resultado encontrado para sua busca. Tente novamente com palavras-chave diferentes.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>