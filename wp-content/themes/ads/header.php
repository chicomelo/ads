<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script type="text/javascript">
    var img_url = '<?php echo do_shortcode("[img-url]"); ?>';
</script>

</head>

<body <?php body_class(); ?>>

<header class="header-principal">

    <div class="container">

        <div class="header__wrapper">
            <div class="logo__wrapper">
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    if($image){
                        ?>
                            <div class="logo">
                                <h1>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo(); ?>">
                                </h1>
                            </div>
                        <?php
                    } else {
                        ?>
                            <div class="logo">
                                <h1>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo(); ?>">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 125 38" xml:space="preserve">
                                            <title><?php bloginfo(); ?></title>
                                            <path d="M0 .27h7.35c7.62 0 9.26.99 9.26 6.51 0 5.04-1.8 6.14-8.8 6.14H5.98v5.66H0V.27zm18.36 9.18C18.36 2.1 19.73 0 26.92 0s8.53 2.1 8.53 9.45-1.32 9.4-8.53 9.4-8.56-2.1-8.56-9.4zm11.19 0c0-4.93-.13-5.26-2.64-5.26s-2.61.33-2.61 5.26.11 5.22 2.61 5.22 2.64-.32 2.64-5.22zm8.01 4.98s2.32.16 5.12.16c3.34 0 4.25-.24 4.25-1.24 0-.7-.24-1.02-1.37-1.29l-3.77-.94c-3.77-1.05-4.6-2.05-4.6-5.39C37.18 1.81 39.55 0 45.6 0h.05c2.82 0 5.62.3 5.62.3l-.07 4.14s-2.5-.13-4.98-.13c-2.77 0-3.47.19-3.47 1.21 0 .78.38 1.08 1.64 1.35l3.85.86c3.77.94 4.23 2.48 4.23 5.42 0 4.42-2.74 5.71-8.58 5.71-3.04 0-6.35-.3-6.35-.3l.02-4.13zM54.6.27h5.97v18.32H54.6V.27zm13 4.12h-4.92V.27h15.77v4.12h-4.9v14.2H67.6V4.39zM80.54.27h5.97v18.32h-5.97V.27zm20.62 0h6.03l-5.06 18.32H93.6L88.51.27h6.03l3.32 15.08 3.3-15.08zm6.75 9.18c0-7.35 1.37-9.45 8.56-9.45S125 2.1 125 9.45s-1.32 9.4-8.53 9.4-8.56-2.1-8.56-9.4zm11.2 0c0-4.93-.13-5.26-2.64-5.26s-2.61.32-2.61 5.26c0 4.93.11 5.22 2.61 5.22s2.64-.32 2.64-5.22zM7.94 9.21c2.58 0 2.72-.24 2.72-2.43 0-2.56-.14-2.59-2.72-2.59H5.98v4.98c.51.04 1.21.04 1.96.04z" fill="#fff"/><path class="logo-positivo" d="m.04 37.26 1.9-8.02c.15-.64.39-1.1.72-1.38.33-.27.81-.41 1.43-.41h1.18c.63 0 1.11.14 1.44.41.33.27.57.74.72 1.38l1.9 8.02c.11.44-.03.66-.42.66H8.4c-.2 0-.34-.04-.43-.13-.09-.09-.15-.24-.2-.45l-.49-2.18c-.04-.18-.15-.27-.32-.27H2.39c-.17 0-.28.08-.32.25l-.49 2.19c-.05.22-.11.37-.2.45-.08.09-.23.13-.43.13H.46c-.39.01-.53-.22-.42-.65zm6.57-3.78c.21 0 .29-.1.23-.29l-.74-3.3c-.09-.42-.21-.7-.36-.84s-.41-.21-.77-.21h-.58c-.35 0-.6.07-.75.21-.15.14-.28.41-.38.83l-.74 3.27c-.06.21.02.32.23.32h3.86v.01zM10.61 37.44v-9.42c0-.14.05-.26.14-.35.09-.09.2-.14.35-.14h4.05c1 0 1.78.13 2.33.38s.97.71 1.24 1.38c.27.67.41 1.62.41 2.86v1.08c0 1.27-.14 2.24-.41 2.92-.28.68-.69 1.15-1.24 1.4s-1.33.38-2.33.38H11.1c-.14 0-.26-.05-.35-.14-.09-.1-.14-.21-.14-.35zm1.84-8.52c-.11 0-.19.02-.23.06-.04.04-.06.11-.06.23v7.04c0 .11.02.19.06.23.04.04.11.06.23.06h2.65c1.01 0 1.68-.21 1.99-.64.31-.43.47-1.33.47-2.72v-.98c0-1.36-.16-2.24-.47-2.65-.31-.41-.97-.62-1.99-.62l-2.65-.01zM21.14 37.7c-.19-.06-.33-.14-.41-.24-.09-.1-.13-.25-.13-.44v-.39c0-.14.04-.25.12-.34.08-.09.19-.13.33-.13.07 0 .39.08.95.23.56.15 1.16.23 1.81.23h.35c.92 0 1.56-.14 1.92-.41.36-.27.53-.68.53-1.21v-.06c0-.33-.06-.58-.18-.76-.12-.18-.37-.34-.75-.49-.38-.15-.98-.32-1.82-.51-1.34-.31-2.24-.65-2.69-1-.45-.36-.67-.94-.67-1.76v-.05c0-1.03.27-1.77.81-2.22.54-.46 1.51-.68 2.91-.68h.5c1.02 0 1.91.1 2.65.32.35.1.53.31.53.63v.44c0 .14-.04.25-.12.34-.08.09-.19.13-.33.13-.07 0-.38-.08-.93-.23-.55-.15-1.16-.23-1.82-.23h-.36c-.86 0-1.45.11-1.77.33-.32.22-.48.58-.48 1.08v.09c0 .39.16.68.48.87.32.19 1.01.39 2.07.61 1.42.32 2.37.68 2.84 1.07.47.39.7 1.03.7 1.92v.06c0 1.06-.28 1.85-.85 2.36-.57.51-1.57.76-3 .76h-.6c-1.09-.02-1.95-.12-2.59-.32z" fill="#a77bca" />
                                        </svg>
                                    </a>
                                </h1>
                            </div>
                        <?php
                    }
                ?>

                <div class="menu-hamburger__wrapper">
                    <span class="slice"></span>
                </div>
            </div>
            <div class="menu-principal__wrapper d-none d-md-flex">
                <?php
                    wp_nav_menu( array( 'header-menu' => 'header-menu' ) );
                ?>
            </div>
            <div class="search-icon">
                <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24.01" xml:space="preserve"><path d="m25 22.44-7.86-7.55c1.28-1.57 2.05-3.53 2.05-5.68C19.2 4.13 14.89 0 9.6 0S0 4.13 0 9.21s4.31 9.21 9.6 9.21c2.23 0 4.28-.74 5.91-1.97L23.37 24 25 22.44zM2.3 9.21c0-3.86 3.27-7 7.29-7s7.29 3.14 7.29 7-3.27 7-7.29 7-7.29-3.13-7.29-7z"/></svg></div>
            </div>
        </div>
    </div>

 </header>

 <div class="menu-principal__wrapper d-md-none">
    <div class="close">
        <span class="slice"></span>
    </div>
    <?php
        wp_nav_menu( array( 'header-menu' => 'header-menu' ) );
    ?>
    <div class="search-icon">
        <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24.01" xml:space="preserve"><path d="m25 22.44-7.86-7.55c1.28-1.57 2.05-3.53 2.05-5.68C19.2 4.13 14.89 0 9.6 0S0 4.13 0 9.21s4.31 9.21 9.6 9.21c2.23 0 4.28-.74 5.91-1.97L23.37 24 25 22.44zM2.3 9.21c0-3.86 3.27-7 7.29-7s7.29 3.14 7.29 7-3.27 7-7.29 7-7.29-3.13-7.29-7z" fill="#fff"/></svg></div>
    </div>
</div>
 
<div class="search__wrapper">
    <div class="container">
        <div class="close">
            <span class="slice"></span>
        </div>
        <form action="/" method="get">
            <input type="text" name="s" id="search" placeholder="Digite aqui para pesquisar" value="<?php the_search_query(); ?>" />
            <button>
                <span>pressione enter</span>
                <div class="search-icon">
                    <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24.01" xml:space="preserve"><path d="m25 22.44-7.86-7.55c1.28-1.57 2.05-3.53 2.05-5.68C19.2 4.13 14.89 0 9.6 0S0 4.13 0 9.21s4.31 9.21 9.6 9.21c2.23 0 4.28-.74 5.91-1.97L23.37 24 25 22.44zM2.3 9.21c0-3.86 3.27-7 7.29-7s7.29 3.14 7.29 7-3.27 7-7.29 7-7.29-3.13-7.29-7z" fill="#fff"/></svg></div>
                </div>
            </button>
        </form>
    </div>
</div>