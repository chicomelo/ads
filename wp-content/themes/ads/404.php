<?php
    get_header(); 
?>
<div class="error__wrapper">
    <div class="container">
        <div class="titulo">
            404 :(
        </div>
        <p class="oops">
            Oops! Está página não pode ser encontrada!
        </p>
        <p class="paragrafo">
            Parece que não conseguimos encontrar o que você está procurando. Talvez a pesquisa possa ajudar.
        </p>
        <div class="busca-blog">
            <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                <fieldset>
                    <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Buscar no blog">
                    <button type="submit">
                        <div class="search-icon">
                            <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24.01" xml:space="preserve"><path d="m25 22.44-7.86-7.55c1.28-1.57 2.05-3.53 2.05-5.68C19.2 4.13 14.89 0 9.6 0S0 4.13 0 9.21s4.31 9.21 9.6 9.21c2.23 0 4.28-.74 5.91-1.97L23.37 24 25 22.44zM2.3 9.21c0-3.86 3.27-7 7.29-7s7.29 3.14 7.29 7-3.27 7-7.29 7-7.29-3.13-7.29-7z"></path></svg></div>
                        </div>
                    </button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php
    get_footer();
?>