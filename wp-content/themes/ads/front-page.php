<?php
/* Template Name: Home page */ 
    get_header();
?>

<div class="banner-principal">
    <div class="conteudo">
        <h2>Criamos <span class="purple">conexões</span> <span class="green">únicas</span> através da <br />sinergia entre dados, dispositivos e IA.</h2>
        <span class="icone"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 26 58" xml:space="preserve"><path class="st0" d="M13.65 33.31c0-.36-.29-.66-.65-.66s-.66.3-.66.66.29.66.66.66c.36 0 .65-.3.65-.66zM13 41.58c.36 0 .65-.3.65-.67 0-.37-.29-.66-.65-.66s-.66.3-.66.66c0 .37.29.67.66.67zM13 37.78c.36 0 .65-.3.65-.67 0-.37-.29-.65-.65-.65s-.66.29-.66.65c0 .36.29.67.66.67zM13 45.38c.36 0 .65-.3.65-.66 0-.36-.29-.66-.65-.66s-.66.3-.66.66c0 .37.29.66.66.66zM17.52 51.87l-3.87 3.88v-7.22c0-.36-.29-.66-.65-.66-.37 0-.66.3-.66.66v7.23l-3.88-3.89c-.26-.26-.67-.26-.93 0s-.26.67 0 .93l4.99 5c.12.13.29.19.47.19s.34-.07.47-.19l4.99-5c.26-.26.26-.67 0-.93-.26-.25-.67-.25-.93 0z"/><path class="st0" d="M13 0C5.83 0 0 5.84 0 13.03v15.52c0 5.88 3.91 10.84 9.25 12.46v-1.38c-4.61-1.57-7.94-5.94-7.94-11.08V13.03c0-6.24 4.89-11.34 11.03-11.68v8.84c-1.55.31-2.73 1.68-2.73 3.33v4.98c0 1.65 1.18 3.02 2.73 3.33v3.5h1.31v-3.5c1.55-.31 2.73-1.68 2.73-3.33v-4.98c0-1.65-1.18-3.02-2.73-3.33V1.35c6.14.34 11.03 5.44 11.03 11.68v15.52c0 5.15-3.33 9.51-7.94 11.08v1.38C22.09 39.4 26 34.43 26 28.55V13.03C26 5.84 20.16 0 13 0zm2.07 13.52v4.98c0 1.15-.93 2.08-2.07 2.08s-2.07-.93-2.07-2.08v-4.98c0-1.15.93-2.08 2.07-2.08s2.07.93 2.07 2.08z"/></svg></span>
    </div>
     <video loop="true" autoplay="autoplay" controls="false" preload= "auto" width="640" height="480" muted playsinline>
        <source src="<?php echo get_template_directory_uri().'/assets/video/'; ?>video-home.mp4" type="video/mp4" />
        <source src="<?php echo get_template_directory_uri().'/assets/video/'; ?>video-home.webm" type="video/webm" />
        <source src="<?php echo get_template_directory_uri().'/assets/video/'; ?>video-home.ogv" type="video/ogg" />
    </video>
</div>

<section class="apresentacao">
    <img src="<?php echo do_shortcode("[img-url]"); ?>apresentacao-bg-mobile.jpg" class="img-fluid d-md-none" alt="Somos uma AdTech impulsionada pelo desafio de transformar dados em conexões significativas" />
    <div class="container">
        <div class="col-12 col-md-6 offset-md-6">
            <div class="conteudo">
                <h2 class="titulo">Somos uma AdTech impulsionada pelo desafio de transformar dados em conexões significativas.</h2>
                <p class="paragrafo">Combinamos soluções de mídia inovadoras, enriquecidas por dados e com inteligência geoespacial para análise do mundo físico e impacto no mundo digital, e compromisso com privacidade e segurança. Com legitimidade no ecossistema tecnológico, conectamos marcas e consumidores através de uma sinergia única entre dados, dispositivos e inteligência artificial.</p>
                <a href="/sobre-nos/" class="btn" title="Saiba mais">
                    saiba mais
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="bg-solucoes-tecnologia">
    <section class="solucoes">
        <div class="container">
            <div class="col-12 col-md-12 col-xxl-10 offset-xxl-1">
                <h2 class="titulo">Nossas soluções</h2>
                <p class="paragrafo">Projetadas para maximizar seu impacto digital</p>
            </div>
        </div>
        <div class="slider-solucoes">
            <div class="slider">
                <div class="item">
                    <span class="tag">Recomendado</span>
                    <div class="icone"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 43.89 48.99" xml:space="preserve"><style>.st0{fill:#fff}</style><path class="st0" d="M20.09 44.83H4.03c-.51 0-.97-.17-1.27-.46-.3-.3-.46-.71-.46-1.16v-2.29c0-4.42 1.76-8.61 4.94-11.79 3.18-3.18 7.39-4.94 11.85-4.94 1.42 0 2.81.17 4.15.5 1.38.33 2.67.83 3.93 1.52.59.32 1.34.11 1.66-.48.32-.59.11-1.34-.48-1.66-1.44-.78-2.89-1.37-4.3-1.73l-.15-.04.14-.07c1.28-.61 2.4-1.4 3.34-2.34 2.19-2.19 3.4-5.12 3.4-8.24s-1.21-6.05-3.4-8.24C25.13 1.21 22.2 0 19.13 0c-3.07 0-6.03 1.24-8.19 3.4-2.19 2.19-3.4 5.12-3.4 8.24s1.21 6.05 3.4 8.24c1.03 1.03 2.13 1.82 3.28 2.34l.14.06-.15.04c-3.26.88-6.23 2.6-8.6 4.96C2.05 30.87 0 35.82 0 40.85v2.29c0 1.16.43 2.2 1.21 2.93.73.78 1.77 1.21 2.93 1.21h15.95c.7 0 1.23-.53 1.23-1.23 0-.69-.53-1.22-1.23-1.22zm-7.43-26.72c-1.74-1.68-2.7-3.98-2.7-6.47 0-2.49.98-4.76 2.7-6.47 1.68-1.74 3.98-2.7 6.47-2.7s4.76.98 6.47 2.7c1.74 1.68 2.7 3.98 2.7 6.47 0 2.49-.98 4.76-2.7 6.47-1.68 1.74-3.98 2.7-6.47 2.7s-4.75-.98-6.47-2.7z"/><path class="st0" d="M43.88 35.46c.11-.63-.37-1.28-1.02-1.39l-.01.01-6.63-1.01-.01-.03-3.02-5.99c-.16-.27-.32-.43-.54-.54-.18-.09-.37-.13-.56-.13-.44 0-.86.24-1.1.67l-3.03 6.01h-.03l-6.6 1.01c-.31.06-.57.18-.75.37-.24.24-.36.54-.36.86 0 .32.13.62.36.86l4.78 4.78v.03l-1.12 6.6c-.06.27 0 .48.11.76.16.3.44.52.77.62.3.09.62.06.88-.09l6.02-3.09.02.01 5.93 3.02c.27.16.54.22.81.16.65-.11 1.12-.76 1.02-1.39l-1.07-6.63 4.78-4.78c.2-.21.31-.42.37-.7zm-3.83.78-3.41 3.42c-.35.29-.42.74-.38 1.07l.8 4.86-4.41-2.29c-.37-.16-.81-.16-1.12 0l-4.41 2.29.8-4.92c.05-.4-.08-.78-.38-1.07L24 36.11l.11-.02 4.81-.73c.39-.05.73-.29.91-.64l2.23-4.41 2.23 4.4c.22.39.6.65 1.02.7l4.81.74-.07.09z"/></svg></div>
                    <p class="titulo">People <br />Based ADS</p>
                    <p class="paragrafo">Tecnologia geoespacial que transforma dados do mundo físico em ativações digitais eficazes.</p>
                    <a href="/nossas-solucoes/#people-based-ads" class="btn btn-saiba-mais" title="Saiba mais">
                        saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                    </a>
                </div>
                <div class="item">
                    <div class="icone"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 33.99 52.67" xml:space="preserve"><style>.st0{fill:#fff}</style><path class="st0" d="M26.99 0H7C3.14 0 0 3.14 0 7v38.67c0 3.86 3.14 7 7 7h19.99c3.86 0 7-3.14 7-7V7c0-3.86-3.14-7-7-7zM2 7c0-2.76 2.24-5 5-5h19.99c2.76 0 5 2.24 5 5v34.34H2V7zm30 38.67c0 2.76-2.24 5-5 5H7c-2.76 0-5-2.24-5-5v-2.33h30v2.33z"/><path class="st0" d="M26.28 27.67H7.73c-1.75 0-3.17 1.42-3.17 3.17v4.77c0 1.75 1.42 3.17 3.17 3.17h18.55c1.75 0 3.17-1.42 3.17-3.17v-4.77c0-1.75-1.42-3.17-3.17-3.17zm1.17 7.94c0 .65-.52 1.17-1.17 1.17H7.73c-.65 0-1.17-.52-1.17-1.17v-4.77c0-.65.52-1.17 1.17-1.17h18.55c.65 0 1.17.52 1.17 1.17v4.77zM13.67 48.01h6.67c.55 0 1-.45 1-1s-.45-1-1-1h-6.67c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg></div>
                    <p class="titulo">Positivo ADS <br />Platform</p>
                    <p class="paragrafo">Plataforma com alianças estratégicas globais para inventários premium e múltiplas oportunidades.</p>
                    <a href="/nossas-solucoes/#positivo-ads-platform" class="btn btn-saiba-mais" title="Saiba mais">
                        saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                    </a>
                </div>
                <div class="item">
                    <div class="icone"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 47.4 52.66" xml:space="preserve"><style>.st0{fill:#fff}</style><path class="st0" d="M42.73 38.17H18.67c-2.57 0-4.67 2.09-4.67 4.67v5.15c0 2.57 2.09 4.67 4.67 4.67h24.06c2.57 0 4.67-2.09 4.67-4.67v-5.15c0-2.57-2.09-4.67-4.67-4.67zM16 42.84c0-1.47 1.2-2.67 2.67-2.67h24.06c1.47 0 2.67 1.2 2.67 2.67v5.15c0 1.47-1.2 2.67-2.67 2.67H18.67c-1.47 0-2.67-1.2-2.67-2.67v-5.15zM33.39 28.91v-5.15c0-2.57-2.09-4.67-4.67-4.67H4.67C2.1 19.09 0 21.18 0 23.76v5.15c0 2.57 2.09 4.67 4.67 4.67h24.06c2.57 0 4.67-2.09 4.66-4.67zM2 23.75c0-1.47 1.2-2.67 2.67-2.67h24.06c1.47 0 2.67 1.2 2.67 2.67v5.15c0 1.47-1.2 2.67-2.67 2.67H4.67C3.2 31.57 2 30.37 2 28.9v-5.15zM14.67 14.49h24.06c2.57 0 4.67-2.09 4.67-4.67V4.67C43.4 2.1 41.31 0 38.73 0H14.67C12.1 0 10 2.09 10 4.67v5.15c0 2.57 2.09 4.67 4.67 4.67zm26.72-4.67c0 1.47-1.2 2.67-2.67 2.67H14.67c-1.47 0-2.67-1.2-2.67-2.67V4.67C12 3.2 13.2 2 14.67 2h24.06c1.47 0 2.67 1.2 2.67 2.67l-.01 5.15z"/></svg></div>
                    <p class="titulo">Positivo OEM <br />ADS</p>
                    <p class="paragrafo">Positivo OEM ADS exibe anúncios em dispositivos móveis Positivo, permitindo pré-instalação de apps e conteúdos, atingindo usuários de forma nativa.</p>
                    <a href="/nossas-solucoes/#positivo-oem-ads" class="btn btn-saiba-mais" title="Saiba mais">
                        saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-12 col-md-12 col-xxl-10 offset-xxl-1">
                <a href="/nossas-solucoes/" class="btn" title="Ver todas as soluções">
                    ver todas as soluções
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                </a>
            </div>
        </div>
    </section>
    <section class="produzimos-tecnologia">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="conteudo">
                        <h2 class="titulo">Nós produzimos tecnologia</h2>
                        <p class="paragrafo">E temos uma stack tecnológica dedicada a oferecer soluções avançadas para mídia digital.</p>
                        <a href="/nossas-solucoes/" class="btn d-none d-md-flex" title="Ver nossas soluções">
                            ver nossas soluções
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="slider-caracteristicas">
                        <div class="slider">
                            <div class="item">
                                <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>tecnologia-icone-1.png" alt="DNA digital"></div>
                                <div>
                                    <p class="sub-titulo">DNA digital</p>
                                    <p class="paragrafo">Mobilidade, dados, Smart devices & IA. A tecnologia está intrinsecamente em nosso DNA</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>tecnologia-icone-2.png" alt="Cobertura"></div>
                                <div>
                                    <p class="sub-titulo">Cobertura</p>
                                    <p class="paragrafo">95% da cobertura do Brasil, com formatos de mídias tradicionais, exclusivos e proprietários.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>tecnologia-icone-3.png" alt="Multiplataforma"></div>
                                <div>
                                    <p class="sub-titulo">Multiplataforma</p>
                                    <p class="paragrafo">Somos multiplataformas e transformamos interações digitais em resultados tangíveis.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>tecnologia-icone-4.png" alt="Visão 360°"></div>
                                <div>
                                    <p class="sub-titulo">Visão 360°</p>
                                    <p class="paragrafo">Temos visão completa do consumidor: hábitos, interesses e preferências. Não só alcançamos, ressoamos com o público.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/nossas-solucoes/" class="btn d-md-none" title="Ver nossas soluções">
                        ver nossas soluções
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="universo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xxl-10 offset-xxl-1">
                <h2 class="titulo">Universo de <span class="purple">produtos</span> e <span class="green">dados</span></h2>
                <p class="paragrafo">Ampla base de produtos com clusters e possibilidades de segmentação.</p>
                <div class="lista-produtos d-none d-md-flex">
                    <div class="produtos">
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-vaio.png" alt="VAIO" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo.png" alt="Positivo" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-seg.png" alt="Positivo Seg" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-servers.png" alt="Positivo Servers & Solutions" />
                        </div>
                    </div>
                    <div class="produtos">
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-casa-inteligente.png" alt="Positivo Casa Inteligente" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-solucoes.png" alt="Positivo Soluçoes em Pagamentos" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-infinix.png" alt="Infinix" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-educacional.png" alt="Educacional" />
                        </div>
                    </div>
                </div>

                <div class="lista-produtos-mobile d-md-none">
                    <div class="produtos">
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-vaio.png" alt="VAIO" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo.png" alt="Positivo" />
                        </div>
                    </div>
                    <div class="produtos">
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-seg.png" alt="Positivo Seg" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-servers.png" alt="Positivo Servers & Solutions" />
                        </div>
                    </div>
                    <div class="produtos">
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-casa-inteligente.png" alt="Positivo Casa Inteligente" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-positivo-solucoes.png" alt="Positivo Soluçoes em Pagamentos" />
                        </div>
                    </div>
                    <div class="produtos">
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-infinix.png" alt="Infinix" />
                        </div>
                        <div class="item">
                            <img src="<?php echo do_shortcode("[img-url]"); ?>logo-educacional.png" alt="Educacional" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cross-device">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="conteudo">
                    <h2 class="titulo">Cross Device</h2>
                    <p class="paragrafo">Impulsione suas campanhas com nossa abordagem Cross Device. Alcance seu público em todos os dispositivos, garantindo uma experiência de usuário e resultados consistentes.</p>
                    <a href="/nossas-solucoes/" class="btn d-none d-md-flex" title="Ver nossas soluções">
                        ver nossas soluções
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                    </a>
                </div>
            </div>
            <div class="col-12 offset-md-1 col-md-6">
                <img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>cross-device-img.png" alt="Cross Device" />
                <a href="/nossas-solucoes/" class="btn d-md-none" title="Ver nossas soluções">
                    ver nossas soluções
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="data-driven">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h2 class="titulo">Data Driven</h2>
                <p class="paragrafo">
                    São mais de <b>200 segmentações e comportamentos</b> que sustentam público-alvo para personalização de anúncios.
                </p>
            </div>
        </div>

    </div>
    <div class="slider-driven d-none d-md-block">
        <div class="slider">
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 107 87" xml:space="preserve"><path d="m100.98 58.44-5.8-38.58c-.89-5.62-5.8-9.86-11.45-9.86h-14.5c-2.88 0-5.7 1.12-7.91 3.15-4.4 4.05-11.28 4.05-15.6.07-2.08-2.09-4.91-3.22-7.98-3.22h-14.5c-5.75 0-10.55 4.15-11.45 9.87L6 58.44v.03c-1.13 8.12 3.85 15.66 11.9 17.96 1.4.38 2.8.57 4.2.57 6.26 0 12.25-3.72 14.93-9.74l5.52-12.99H64.7s.03.03.03 0l5.52 12.83c3.1 7.49 11.15 11.36 19.11 9.21 7.78-2.1 12.78-9.77 11.63-17.86h-.01zM88.05 71.46c-5.53 1.5-11.08-1.15-13.21-6.32l-5.58-12.99c-.88-1.77-2.63-2.9-4.45-2.9H42.43c-2.08 0-3.93 1.28-4.55 3.15l-5.47 12.84c-2.25 5.07-7.93 7.81-13.18 6.35-5.58-1.6-9.06-6.82-8.3-12.44l5.8-38.55c.52-3.25 3.25-5.62 6.5-5.62h14.5c1.77 0 3.3.6 4.52 1.82 6.3 5.82 16.15 5.82 22.44 0 1.27-1.17 2.92-1.83 4.53-1.83h14.5c3.22 0 6 2.42 6.5 5.6l5.8 38.55c.8 5.55-2.63 10.84-7.98 12.29l.01.05z"/><path d="M39.81 32.42h-5.52v-5.54c0-.83-.68-1.65-1.65-1.65S31 25.91 31 26.88v5.54h-5.53c-.83 0-1.65.68-1.65 1.65 0 .97.68 1.65 1.65 1.65H31v5.54c0 .83.68 1.65 1.65 1.65s1.65-.68 1.65-1.65v-5.54h5.52c.83 0 1.65-.68 1.65-1.65-.01-.97-.84-1.65-1.66-1.65zM66.34 31.45c-1.1 0-2.07.68-2.48 1.65-.42.83-.13 1.93.55 2.77.68.68 1.93.97 2.9.55s1.52-1.25 1.65-2.22v-.13c-.01-1.39-1.26-2.62-2.62-2.62zM80.28 31.45c-1.1 0-2.07.68-2.48 1.65-.42.97-.28 2.07.55 2.77.83.68 1.93.97 2.9.55s1.52-1.25 1.65-2.22v-.13c0-1.52-1.1-2.62-2.62-2.62zM73.23 24.39c-1.1 0-2.07.68-2.48 1.65-.42.97-.13 2.07.55 2.9.83.83 1.93.97 2.9.55.97-.42 1.65-1.38 1.65-2.49 0-1.51-1.25-2.61-2.62-2.61zM73.23 38.35c-1.1 0-2.07.68-2.48 1.65-.42.97-.13 2.07.55 2.9.83.83 1.93.97 2.9.55s1.65-1.38 1.65-2.49c0-1.5-1.25-2.61-2.62-2.61z"/></svg>
                </div>
                <p class="paragrafo">Gamers</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M75.7 72.11c4.17 0 7.94-1.69 10.68-4.43 2.74-2.74 4.42-6.51 4.42-10.69s-1.69-7.95-4.42-10.69c-2.74-2.74-6.51-4.43-10.68-4.43s-7.94 1.69-10.68 4.43c-2.74 2.74-4.42 6.51-4.42 10.69s1.69 7.95 4.42 10.69c2.74 2.74 6.51 4.43 10.68 4.43zM51.99 59.43h-3.85c-.55 4.54-2.64 8.64-5.71 11.71C38.81 74.76 33.82 77 28.29 77c-5.52 0-10.51-2.24-14.13-5.86-3.14-3.14-5.22-7.3-5.74-11.94-.87-.18-1.7-.47-2.49-.85-1.45-.72-2.74-1.79-3.8-3.16C1.08 53.82.39 52.3.06 50.7c-.32-1.59-.25-3.26.18-4.93l6.72-25.16c.52-1.92 1.47-3.57 2.79-4.89 1.32-1.32 2.97-2.27 4.89-2.79l10.56-2.84c1.3-.35 2.64.42 2.99 1.72.35 1.3-.42 2.64-1.72 2.99l-10.56 2.84c-1.07.28-1.99.82-2.69 1.52-.72.72-1.23 1.64-1.52 2.69L4.98 47c-.25.94-.28 1.85-.12 2.72.17.87.55 1.69 1.15 2.46.58.77 1.28 1.35 2.09 1.74.13.07.27.13.4.18.62-4.39 2.67-8.32 5.66-11.31 3.62-3.62 8.61-5.86 14.13-5.86 5.52 0 10.51 2.24 14.13 5.86 3.07 3.07 5.16 7.17 5.71 11.71h7.73c.55-4.54 2.64-8.64 5.71-11.71 3.62-3.62 8.61-5.86 14.13-5.86 5.52 0 10.51 2.24 14.13 5.86 2.99 2.99 5.02 6.92 5.66 11.31.13-.05.28-.12.4-.18.78-.38 1.49-.97 2.09-1.74.58-.77.97-1.6 1.15-2.46.17-.87.13-1.79-.12-2.72l-6.72-25.16c-.28-1.07-.82-1.99-1.52-2.69-.72-.72-1.64-1.24-2.69-1.52L77.52 14.8c-1.3-.35-2.07-1.69-1.72-2.99.35-1.3 1.69-2.07 2.99-1.72l10.56 2.84c1.92.52 3.57 1.47 4.89 2.79 1.32 1.32 2.27 2.97 2.79 4.89l6.72 25.16c.45 1.67.5 3.34.18 4.93-.32 1.6-1 3.11-2.07 4.49-1.05 1.37-2.34 2.44-3.8 3.16-.78.38-1.62.68-2.49.85-.5 4.64-2.6 8.82-5.74 11.94C86.21 74.76 81.22 77 75.7 77c-5.52 0-10.51-2.24-14.13-5.86-3.07-3.07-5.16-7.17-5.71-11.71h-3.87zM17.6 67.68c2.74 2.74 6.51 4.43 10.68 4.43s7.94-1.69 10.68-4.43c2.74-2.74 4.42-6.51 4.42-10.69s-1.69-7.95-4.42-10.69c-2.74-2.74-6.51-4.43-10.68-4.43s-7.94 1.69-10.68 4.43c-2.74 2.74-4.42 6.51-4.42 10.69 0 4.17 1.68 7.95 4.42 10.69z"/></svg>
                </div>
                <p class="paragrafo">Geeks</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M70.37 0H33.63c-4.34 0-8.01 3.68-8.01 8.02v70.96c0 4.34 3.67 8.02 8.01 8.02h36.74c4.26 0 7.78-3.52 8.01-8.02V8.02c0-4.34-3.67-8.02-8.01-8.02zM30.31 8.02c0-1.8 1.52-3.32 3.32-3.32h36.74c1.8 0 3.32 1.52 3.32 3.32v58.89H30.31V8.02zM70.37 82.3H33.63c-1.8 0-3.32-1.52-3.32-3.32v-7.37h43.37v7.24c-.09 1.9-1.58 3.45-3.31 3.45z"/><path d="M56.13 74.52h-8.42c-1.29 0-2.35 1.05-2.35 2.35s1.05 2.35 2.35 2.35h8.42c1.29 0 2.35-1.05 2.35-2.35-.01-1.29-1.06-2.35-2.35-2.35z"/></svg>
                </div>
                <p class="paragrafo">Millenials</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M92.02 61.77 85.07 9.49c-.15-1.12-1.14-1.99-2.28-1.99h-61.4c-1.15 0-2.14.86-2.29 1.99l-7.11 52.29c-.57 4.13.51 8.24 3.03 11.57 2.52 3.33 6.18 5.47 10.31 6.02.68.09 1.37.14 2.06.14h49.23c8.6-.03 15.57-7.05 15.54-15.66 0-.71-.05-1.4-.14-2.08zm-6.58 8.77c-1.77 2.34-4.34 3.86-7.25 4.28-.51.08-1.02.11-1.52.11H27.39c-6.05 0-10.97-4.91-10.99-10.98 0-.51.03-1.05.11-1.56l6.89-50.27h57.28l6.85 50.27c.42 2.89-.34 5.79-2.09 8.15z"/><path d="M66.25 30.42c-1.28 0-2.31 1.03-2.31 2.31v7.32c-.12 3.25-1.48 6.21-3.83 8.38-2.34 2.17-5.37 3.3-8.58 3.17-6.2-.23-11.25-5.28-11.48-11.51v-7.38c0-1.28-1.03-2.31-2.31-2.31s-2.31 1.03-2.31 2.31v7.32c0 9.13 7.45 16.56 16.57 16.57 9.11-.02 16.54-7.45 16.55-16.57v-7.32c0-1.28-1.03-2.31-2.31-2.31v.02z"/></svg>
                </div>
                <p class="paragrafo">Shoppers</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="m85.49 15.41-.12-.23c-2.24-4.12-6.55-6.68-11.26-6.68h-8.84c-4.8 0-9.15 2.65-11.36 6.91-2.21 4.26-1.88 9.34.86 13.28l7.34 10.51c.7 1 1.59 1.83 2.65 2.51l.21.14-.03.26-2.44 29.26c0 3.92 3.21 7.13 7.16 7.13 1.89 0 3.68-.74 5.01-2.08 1.38-1.39 2.15-3.27 2.13-5.3l-2.44-29.26.21-.14c1.07-.68 1.97-1.51 2.65-2.51l7.34-10.49c2.75-3.94 3.09-9.03.86-13.28l.07-.03zM69.71 74.26c-1.56 0-2.94-1.27-2.95-2.73l2.36-28.4h1.19l.03.38 2.31 27.78c0 1.65-1.32 2.97-2.94 2.97zm11.47-47.98-7.34 10.51c-.89 1.29-2.44 2.06-4.12 2.06-1.68 0-3.22-.77-4.12-2.06l-7.34-10.51c-1.88-2.68-2.09-6.01-.59-8.91 1.51-2.91 4.36-4.63 7.63-4.63h8.84c3.27 0 6.13 1.73 7.63 4.63 1.51 2.91 1.29 6.24-.59 8.91zM41.93 49h-.41V30.88c0-1.62-.89-3.15-2.31-4l-.21-.11v-9.65c0-1.61-.85-3.12-2.21-3.95l-5.76-3.53-.65-.27c-1.35-.33-2.78-.01-3.92.86-1.13.88-1.79 2.21-1.79 3.65v12.87l-.21.12c-1.45.85-2.31 2.33-2.31 4v18.11h-.41c-2.56 0-4.63 2.07-4.63 4.63V71.3c0 3.95 3.21 7.16 7.16 7.16h15.14c3.95 0 7.16-3.21 7.16-7.16V53.62c0-2.56-2.07-4.63-4.63-4.63V49zM28.89 13.29l5.89 3.6v9.34h-5.89V13.29zm-2.52 17.17H37.3v18.52H26.37V30.46zm15.99 40.86c0 1.62-1.32 2.94-2.94 2.94H24.28c-1.62 0-2.94-1.32-2.94-2.94V53.21h21.03v18.11h-.01z"/></svg>
                </div>
                <p class="paragrafo">Beauty</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M54.53 41.35h-5.05c-3.97 0-7.19 3.23-7.19 7.2V71.3c0 3.97 3.22 7.2 7.19 7.2h5.05c3.97 0 7.19-3.23 7.19-7.2V48.54c0-3.97-3.22-7.19-7.19-7.19zm2.91 29.95c0 1.6-1.31 2.91-2.9 2.91h-5.05c-1.6 0-2.9-1.31-2.9-2.91V48.54c0-1.6 1.31-2.91 2.9-2.91h5.05c1.6 0 2.9 1.31 2.9 2.91V71.3zM79.77 28.71h-5.05c-3.97 0-7.19 3.23-7.19 7.2V71.3c0 3.97 3.22 7.2 7.19 7.2h5.05c3.97 0 7.19-3.23 7.19-7.2V35.91c0-3.97-3.22-7.2-7.19-7.2zm2.91 42.59c0 1.6-1.31 2.91-2.9 2.91h-5.05c-1.6 0-2.9-1.31-2.9-2.91V35.91c0-1.6 1.31-2.91 2.9-2.91h5.05c1.6 0 2.9 1.31 2.9 2.91V71.3zM21.32 34.65c0-1.19-.96-2.15-2.14-2.15-1.19 0-2.14.96-2.14 2.15 0 3.71 2.48 7.05 6.04 8.11l.27.08v3.18c0 1.19.96 2.15 2.14 2.15s2.14-.96 2.14-2.15v-3.18l.27-.08c3.56-1.07 6.04-4.4 6.04-8.11 0-2.72-1.81-5.08-5.53-7.18-.58-.32-1.2-.66-1.79-.96l-.06-.03c-1.17-.61-2.39-1.25-3.41-1.96-.85-.61-1.82-1.29-1.82-2.5 0-2.3 1.87-4.17 4.17-4.17s4.17 1.87 4.17 4.17c0 1.19.96 2.15 2.14 2.15s2.14-.96 2.14-2.15c0-3.71-2.48-7.05-6.04-8.11l-.27-.08v-3.18c0-1.19-.96-2.15-2.14-2.15s-2.14.96-2.14 2.15v3.18l-.27.08c-3.56 1.07-6.04 4.4-6.04 8.11 0 2.72 1.81 5.08 5.53 7.18.58.32 1.2.65 1.79.96l.06.03c1.17.61 2.39 1.25 3.41 1.96.85.61 1.82 1.29 1.82 2.5 0 2.3-1.87 4.17-4.17 4.17s-4.17-1.87-4.17-4.17zM29.28 53.99h-5.05c-3.97 0-7.19 3.23-7.19 7.2V71.3c0 3.97 3.22 7.2 7.19 7.2h5.05c3.97 0 7.19-3.23 7.19-7.2V61.19c0-3.97-3.23-7.2-7.19-7.2zm2.9 17.31c0 1.6-1.31 2.91-2.9 2.91h-5.05c-1.6 0-2.9-1.31-2.9-2.91V61.19c0-1.6 1.31-2.91 2.9-2.91h5.05c1.6 0 2.9 1.31 2.9 2.91V71.3z"/></svg>
                </div>
                <p class="paragrafo">Financial</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><style>.st31{fill-rule:evenodd;clip-rule:evenodd}</style><path class="st31" d="M57.96 33.88H46.03c-1.18 0-2.14.96-2.14 2.14 0 1.18.95 2.14 2.14 2.14h11.93c1.18 0 2.14-.96 2.14-2.14 0-1.18-.96-2.14-2.14-2.14z"/><path class="st31" d="M83.3 20.45H70.29v-5.32c0-1.78-.7-3.43-1.94-4.69-1.23-1.23-2.94-1.94-4.66-1.94H40.33c-1.76 0-3.42.68-4.68 1.94-1.26 1.26-1.94 2.91-1.94 4.69v5.32H20.7c-3.65 0-6.62 3.26-6.62 7.26v13.64c0 2.31.97 4.43 2.67 5.83l.3.25v24.41c0 3.66 2.97 6.63 6.62 6.63h20.02c.11 0 .2.03.29.03H80.35c3.65 0 6.62-2.97 6.62-6.63V47.46l.3-.25c1.7-1.4 2.67-3.52 2.67-5.83V27.74c0-4-2.97-7.26-6.62-7.26v-.03zm-45.32-5.32c0-.63.24-1.22.68-1.66.44-.44 1.03-.68 1.65-.68h23.35c.62 0 1.21.24 1.65.68.44.44.68 1.05.68 1.66v5.32H37.98v-5.32zm44.67 56.7c0 1.29-1.04 2.33-2.33 2.33H43.97c-.09 0-.18 0-.26.02H23.67c-1.29 0-2.33-1.05-2.33-2.34V48.62h61.31v23.22-.01zm2.98-30.48c0 1.32-.65 2.43-1.65 2.84-.21.09-.44.14-.68.14H20.69c-.24 0-.48-.05-.7-.14-.98-.41-1.64-1.52-1.64-2.84V27.71c0-1.44.82-2.97 2.33-2.97H83.3c1.51 0 2.33 1.53 2.33 2.97v13.64z"/></svg>
                </div>
                <p class="paragrafo">Corporate</p>    
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M92.95 26.51c0-1.44-.56-2.78-1.56-3.79L72.75 4.07c-2.08-2.09-5.48-2.09-7.56 0l-5.54 5.54-3.2-3.21c-2.08-2.09-5.48-2.09-7.56 0l-4.65 4.66c-1.01 1.01-1.56 2.35-1.56 3.78 0 1.43.56 2.77 1.56 3.79l10.19 10.2-17.08 17.1-10.19-10.2c-2.08-2.09-5.48-2.09-7.56 0l-4.65 4.67c-2.08 2.08-2.08 5.48 0 7.57l3.2 3.2-5.54 5.55c-1.01 1.01-1.56 2.35-1.56 3.78s.56 2.77 1.56 3.79l18.64 18.65c1.01 1.01 2.35 1.56 3.78 1.56 1.43 0 2.77-.56 3.78-1.56l5.54-5.54 3.2 3.21c2.08 2.08 5.48 2.08 7.56 0l4.65-4.68c2.08-2.08 2.08-5.48 0-7.56l-10.19-10.2 17.08-17.1 10.19 10.2c1.01 1.01 2.35 1.55 3.78 1.55 1.43 0 2.77-.56 3.78-1.55l4.65-4.66c1.01-1.01 1.56-2.35 1.56-3.78 0-1.44-.56-2.78-1.56-3.79l-3.2-3.21 5.54-5.54c1.01-1.01 1.56-2.35 1.56-3.78zM40.74 75.17l-5.04 5.05c-.37.37-1 .37-1.37 0L15.3 61.17c-.19-.19-.28-.42-.28-.68 0-.27.09-.5.28-.69l5.04-5.04c.19-.19.42-.28.68-.28.26 0 .5.1.68.28l19.03 19.03c.19.18.28.42.28.68 0 .27-.09.5-.28.69v.01zm16.3-3.7c.19.18.28.42.28.68 0 .27-.09.5-.28.69L52 77.88c-.19.19-.42.28-.68.28-.26 0-.5-.11-.68-.28l-33-33.03c-.37-.37-.37-1 0-1.37l5.04-5.05c.19-.18.42-.28.68-.28.26 0 .5.11.68.28l33 33.04zm-10.39-16.2-6.41-6.42 17.08-17.1 6.41 6.42-17.08 17.1zm39.68-13.14c.19.18.28.43.28.68s-.09.5-.28.69l-5.04 5.04c-.37.38-1 .38-1.37 0l-33-33.03c-.37-.37-.37-1 0-1.37l5.04-5.04c.19-.19.44-.29.68-.29s.5.1.68.29l33.01 33.03zm2.34-14.94-5.04 5.05c-.37.37-1 .37-1.37 0L63.25 13.19c-.19-.19-.28-.42-.28-.68 0-.27.09-.5.28-.69l5.04-5.05c.19-.18.42-.28.68-.28.26 0 .5.11.68.28l19.03 19.04c.37.37.37.99 0 1.37l-.01.01z"/></svg>
                </div>
                <p class="paragrafo">Fitness</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M100.1 48.67H81.86c-.88 0-1.66.5-2.01 1.3l-3.06 6.82-3.52-7.85.95-.97C78.59 43.61 81 37.81 81 31.63s-2.4-11.98-6.77-16.35C69.87 10.91 64.06 8.5 57.88 8.5c-6.18 0-11.97 2.41-16.35 6.78l-.2.2-.2-.2C36.78 10.91 30.97 8.5 24.79 8.5s-11.97 2.4-16.35 6.78c-4.36 4.37-6.77 10.18-6.77 16.35 0 6.16 2.4 11.98 6.77 16.34l28.82 28.85c1.08 1.1 2.52 1.68 4.06 1.68 1.54 0 2.98-.6 4.07-1.68L69.91 52.3l4.85 10.79c.05.11.11.22.18.32.41.62 1.11.99 1.84.99h.18c.8-.06 1.51-.57 1.84-1.31l4.49-10.01h16.81c1.21 0 2.21-1 2.21-2.21 0-1.22-1-2.22-2.21-2.22v.02zM63.6 27.43c-.35-.8-1.15-1.31-2.01-1.31-.86 0-1.66.51-2.01 1.31l-9.54 21.24h-8.45c-1.21 0-2.21 1-2.21 2.21 0 1.22 1 2.22 2.21 2.22h9.88c.88 0 1.66-.51 2.01-1.31l8.1-18.04 6.39 14.22L42.26 73.7c-.51.51-1.35.51-1.86 0L11.58 44.85c-3.53-3.52-5.47-8.22-5.47-13.21 0-4.98 1.95-9.68 5.47-13.21 3.53-3.53 8.22-5.47 13.21-5.47s9.68 1.95 13.21 5.47l1.77 1.77c.41.42.97.65 1.57.65.6 0 1.15-.23 1.57-.65l1.77-1.77c3.53-3.53 8.22-5.47 13.21-5.47s9.68 1.95 13.21 5.47c3.53 3.53 5.47 8.23 5.47 13.21 0 4.99-1.87 9.48-5.25 12.98L63.6 27.46v-.03z"/></svg>
                </div>
                <p class="paragrafo">Health</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M76.87 57.37c8.33 0 15.12-6.79 15.12-15.13 0-4.41-2.71-8.39-6.77-10 .02-.34.03-.66.03-.99 0-9.01-7.31-16.34-16.29-16.34-1.69 0-3.35.28-5.01.8C60.59 10.33 54.62 7 48.31 7c-9.26 0-17.05 6.87-18.26 16.03-4.65.54-8.44 4.04-9.34 8.64-2.1.4-4.02 1.42-5.55 2.95-2.04 2.05-3.15 4.76-3.15 7.63 0 8.35 6.79 15.14 15.12 15.14h5.91v6.89L28.88 67c-1.3-1.05-2.91-1.62-4.55-1.62-4.02 0-7.3 3.28-7.3 7.3s3.28 7.3 7.3 7.3 7.3-3.28 7.3-7.3c0-.59-.09-1.21-.28-1.87l5.18-3.39c.65-.42 1.04-1.13 1.04-1.91v-8.12h12.15v8.39c-2.97.97-5.02 3.77-5.02 6.92 0 4.02 3.28 7.3 7.3 7.3s7.3-3.28 7.3-7.3c0-3.13-2.06-5.93-5.02-6.92v-8.39h12.15v8.12c0 .78.39 1.49 1.04 1.91l5.18 3.39c-.19.66-.28 1.28-.28 1.87 0 4.02 3.28 7.3 7.3 7.3s7.3-3.28 7.3-7.3-3.28-7.3-7.3-7.3c-1.64 0-3.23.57-4.55 1.62l-4.16-2.72v-6.89h5.91v-.02zM24.35 75.43c-1.52 0-2.75-1.23-2.75-2.75s1.24-2.75 2.75-2.75c.91 0 1.76.44 2.24 1.12l.08.16c.28.45.43.96.43 1.47 0 1.52-1.24 2.75-2.75 2.75zm52.95-4.19.08-.12c.51-.76 1.36-1.21 2.29-1.21 1.51 0 2.75 1.24 2.75 2.75 0 1.52-1.24 2.76-2.75 2.76-1.52 0-2.75-1.24-2.75-2.76 0-.51.15-1.02.4-1.42h-.02zm-22.54 1.42c0 1.52-1.24 2.76-2.75 2.76s-2.75-1.24-2.75-2.76c0-1.51 1.21-2.7 2.61-2.75.03 0 .08.03.2 0 1.48.03 2.69 1.27 2.69 2.75zM27.13 52.82c-5.83 0-10.57-4.75-10.57-10.58 0-1.67.65-3.24 1.82-4.41 1.17-1.18 2.74-1.83 4.41-1.83 1.25 0 2.27-1.02 2.27-2.27 0-3.44 2.8-6.24 6.25-6.24.08 0 .15 0 .23.02l.43.04c.66.06 1.25-.15 1.72-.59.46-.41.74-1.03.74-1.67.06-7.6 6.28-13.77 13.87-13.77 5.33 0 10.27 3.14 12.55 7.98.53 1.13 1.89 1.61 3.01 1.1 1.67-.77 3.39-1.17 5.07-1.17 6.48 0 11.75 5.29 11.75 11.79 0 .68-.08 1.42-.22 2.24-.11.61.03 1.21.37 1.71.36.49.87.83 1.47.92 2.97.53 5.12 3.1 5.12 6.12 0 5.83-4.75 10.58-10.57 10.58H27.12l.01.03z"/></svg>
                </div>
                <p class="paragrafo">IoT</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M98.11 8H5.91c-1.19 0-2.17.95-2.19 2.14v66.69c0 1.19.98 2.17 2.17 2.17h92.22c1.19 0 2.17-.98 2.17-2.17V10.17c0-1.19-.98-2.17-2.17-2.17zm-2.15 66.64H8.12V12.36h87.83v62.28z"/><path d="M52.01 67.1v.01h.4c6.3-.1 12.18-2.66 16.55-7.2 4.39-4.53 6.73-10.52 6.62-16.82-.11-6.3-2.66-12.2-7.18-16.57-4.43-4.29-10.24-6.64-16.39-6.64h-.41c-12.83.21-23.23 10.83-23.19 23.67.02 6.3 2.49 12.24 6.97 16.68 4.45 4.42 10.37 6.87 16.63 6.87zm.28-42.89h.5v.07c5 .2 9.63 2.3 13.1 5.93 3.55 3.71 5.44 8.6 5.33 13.72C71 54.4 62.41 62.75 52.01 62.75h-.43c-10.39-.23-18.83-8.89-18.8-19.29.16-10.65 8.88-19.25 19.51-19.25z"/><path d="M42.38 54.93c.32.21.7.27 1.07.32.35 0 .7-.11 1.01-.27l17.1-9.52c.99-.55 1.39-1.78.93-2.8l-.09-.19c-.2-.35-.49-.65-.86-.87l-17-9.56c-.34-.19-.7-.28-1.07-.28-.76 0-1.5.4-1.9 1.1-.18.33-.28.71-.28 1.08v19.12c.02.77.43 1.49 1.09 1.87zm3.26-17.15L56 43.56l-10.36 5.78V37.78z"/></svg>
                </div>
                <p class="paragrafo">Entm't</p>
            </div>
            <div class="item">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M88.02 24.15c.09-5.03-3.09-9.56-7.86-11.17L64.1 8.16c-1.57-.47-3.27.11-4.22 1.46-.31.43-.53.9-.66 1.42-4.77-1.27-9.78-1.27-14.55 0-.12-.51-.34-.99-.63-1.42-.95-1.35-2.64-1.93-4.22-1.46l-16.06 4.82c-4.77 1.61-7.96 6.12-7.86 11.17v18.21c-.09 1.82 1.04 3.49 2.77 4.06.38.12.79.18 1.21.18.75-.03 1.48-.26 2.11-.67.11 1.01.23 2 .4 2.96 1.5 8.07 5.98 14.23 14.46 19.93.12.09.23.16.37.23 3.33 8.17 12.66 12.1 20.82 8.76 3.97-1.62 7.14-4.79 8.76-8.76l.32-.19c8.45-5.74 12.99-11.9 14.49-19.97.17-.94.32-1.94.4-2.96.63.41 1.36.64 2.11.67.41 0 .81-.06 1.21-.18 1.73-.57 2.87-2.22 2.78-4.04v-3.81l-.06-14.43-.03.01zm-65.88 14.6-.12.18-2.11 3.06V24.14c-.09-3.19 1.88-6.06 4.88-7.1l15.74-4.82c0 .11-.05.21-.11.29L22.14 38.73v.02zM44.9 72.7v-.17c.43.03.86.03 1.28 0 1.94.02 3.87-.35 5.66-1.08 1.79.78 3.73 1.21 5.69 1.25.43.03.86.03 1.28 0-4.13 3.11-9.8 3.11-13.92 0h.01zm6.85-13.94-3.36-4.22 7.12.11-3.5 4.13h-.26v-.02zM77.84 42.5c0 1.91-.15 3.81-.5 5.69h.02c-1.28 6.96-5.09 12.12-12.67 17.26-.21.17-.46.32-.7.44-1.38.88-2.86 1.58-4.4 2.11l-.44.17h-.21c-.43.14-.87.22-1.31.22-1.21-.03-2.42-.28-3.55-.71v-5.21c.46-.23.86-.56 1.21-.94l3.47-4.02c1.13-1.27 1.39-3.08.67-4.61-.7-1.6-2.32-2.64-4.08-2.6H48.4c-1.71 0-3.29 1-3.99 2.56-.7 1.53-.44 3.33.67 4.59l3.47 4.04c.35.38.76.7 1.22.95v5.2c-1.15.43-2.35.66-3.58.7-.44 0-.89-.08-1.31-.21h-.23c-1.71-.58-3.33-1.38-4.85-2.37l-.67-.4c-7.58-5.13-11.39-10.28-12.67-17.25-.35-1.85-.52-3.73-.5-5.63v-1.79l17.3-24.78c5.55-2.15 11.68-2.15 17.23 0l17.36 24.77v1.82h-.01zm3.91-3.48c-.02-.07-.06-.15-.12-.21L63.56 12.97l-.23-.35c-.08-.11-.12-.25-.12-.39l15.76 4.75c3 1.05 4.95 3.93 4.85 7.1V38.5l.06 3.59-2.11-3.05-.02-.02z"/><path d="M56.72 41.67c0 1.16.95 2.11 2.11 2.11s2.11-.95 2.11-2.11c-.29-1.8.93-3.49 2.72-3.78 1.8-.29 3.48.94 3.78 2.73.06.35.06.7 0 1.05 0 1.16.95 2.11 2.11 2.11s2.11-.95 2.11-2.11c.12-4.28-3.24-7.86-7.52-7.99h-.06c-4.22.2-7.5 3.77-7.37 8.01l.01-.02zM39.64 33.67c-4.26.15-7.61 3.72-7.47 8 0 1.17.95 2.11 2.11 2.11s2.11-.94 2.11-2.11c-.29-1.8.93-3.49 2.72-3.78 1.8-.29 3.48.94 3.78 2.73.06.35.06.7 0 1.05 0 1.17.95 2.11 2.11 2.11s2.11-.94 2.11-2.11c.14-4.27-3.21-7.85-7.47-8z"/></svg>
                </div>
                <p class="paragrafo">Pet Lovers</p>
            </div>
        </div>
    </div>
    <div class="slider-driven-mobile d-md-none">
        <div class="slider">
            <div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 107 87" xml:space="preserve"><path d="m100.98 58.44-5.8-38.58c-.89-5.62-5.8-9.86-11.45-9.86h-14.5c-2.88 0-5.7 1.12-7.91 3.15-4.4 4.05-11.28 4.05-15.6.07-2.08-2.09-4.91-3.22-7.98-3.22h-14.5c-5.75 0-10.55 4.15-11.45 9.87L6 58.44v.03c-1.13 8.12 3.85 15.66 11.9 17.96 1.4.38 2.8.57 4.2.57 6.26 0 12.25-3.72 14.93-9.74l5.52-12.99H64.7s.03.03.03 0l5.52 12.83c3.1 7.49 11.15 11.36 19.11 9.21 7.78-2.1 12.78-9.77 11.63-17.86h-.01zM88.05 71.46c-5.53 1.5-11.08-1.15-13.21-6.32l-5.58-12.99c-.88-1.77-2.63-2.9-4.45-2.9H42.43c-2.08 0-3.93 1.28-4.55 3.15l-5.47 12.84c-2.25 5.07-7.93 7.81-13.18 6.35-5.58-1.6-9.06-6.82-8.3-12.44l5.8-38.55c.52-3.25 3.25-5.62 6.5-5.62h14.5c1.77 0 3.3.6 4.52 1.82 6.3 5.82 16.15 5.82 22.44 0 1.27-1.17 2.92-1.83 4.53-1.83h14.5c3.22 0 6 2.42 6.5 5.6l5.8 38.55c.8 5.55-2.63 10.84-7.98 12.29l.01.05z"/><path d="M39.81 32.42h-5.52v-5.54c0-.83-.68-1.65-1.65-1.65S31 25.91 31 26.88v5.54h-5.53c-.83 0-1.65.68-1.65 1.65 0 .97.68 1.65 1.65 1.65H31v5.54c0 .83.68 1.65 1.65 1.65s1.65-.68 1.65-1.65v-5.54h5.52c.83 0 1.65-.68 1.65-1.65-.01-.97-.84-1.65-1.66-1.65zM66.34 31.45c-1.1 0-2.07.68-2.48 1.65-.42.83-.13 1.93.55 2.77.68.68 1.93.97 2.9.55s1.52-1.25 1.65-2.22v-.13c-.01-1.39-1.26-2.62-2.62-2.62zM80.28 31.45c-1.1 0-2.07.68-2.48 1.65-.42.97-.28 2.07.55 2.77.83.68 1.93.97 2.9.55s1.52-1.25 1.65-2.22v-.13c0-1.52-1.1-2.62-2.62-2.62zM73.23 24.39c-1.1 0-2.07.68-2.48 1.65-.42.97-.13 2.07.55 2.9.83.83 1.93.97 2.9.55.97-.42 1.65-1.38 1.65-2.49 0-1.51-1.25-2.61-2.62-2.61zM73.23 38.35c-1.1 0-2.07.68-2.48 1.65-.42.97-.13 2.07.55 2.9.83.83 1.93.97 2.9.55s1.65-1.38 1.65-2.49c0-1.5-1.25-2.61-2.62-2.61z"/></svg>
                    </div>
                    <p class="paragrafo">Gamers</p>
                </div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M75.7 72.11c4.17 0 7.94-1.69 10.68-4.43 2.74-2.74 4.42-6.51 4.42-10.69s-1.69-7.95-4.42-10.69c-2.74-2.74-6.51-4.43-10.68-4.43s-7.94 1.69-10.68 4.43c-2.74 2.74-4.42 6.51-4.42 10.69s1.69 7.95 4.42 10.69c2.74 2.74 6.51 4.43 10.68 4.43zM51.99 59.43h-3.85c-.55 4.54-2.64 8.64-5.71 11.71C38.81 74.76 33.82 77 28.29 77c-5.52 0-10.51-2.24-14.13-5.86-3.14-3.14-5.22-7.3-5.74-11.94-.87-.18-1.7-.47-2.49-.85-1.45-.72-2.74-1.79-3.8-3.16C1.08 53.82.39 52.3.06 50.7c-.32-1.59-.25-3.26.18-4.93l6.72-25.16c.52-1.92 1.47-3.57 2.79-4.89 1.32-1.32 2.97-2.27 4.89-2.79l10.56-2.84c1.3-.35 2.64.42 2.99 1.72.35 1.3-.42 2.64-1.72 2.99l-10.56 2.84c-1.07.28-1.99.82-2.69 1.52-.72.72-1.23 1.64-1.52 2.69L4.98 47c-.25.94-.28 1.85-.12 2.72.17.87.55 1.69 1.15 2.46.58.77 1.28 1.35 2.09 1.74.13.07.27.13.4.18.62-4.39 2.67-8.32 5.66-11.31 3.62-3.62 8.61-5.86 14.13-5.86 5.52 0 10.51 2.24 14.13 5.86 3.07 3.07 5.16 7.17 5.71 11.71h7.73c.55-4.54 2.64-8.64 5.71-11.71 3.62-3.62 8.61-5.86 14.13-5.86 5.52 0 10.51 2.24 14.13 5.86 2.99 2.99 5.02 6.92 5.66 11.31.13-.05.28-.12.4-.18.78-.38 1.49-.97 2.09-1.74.58-.77.97-1.6 1.15-2.46.17-.87.13-1.79-.12-2.72l-6.72-25.16c-.28-1.07-.82-1.99-1.52-2.69-.72-.72-1.64-1.24-2.69-1.52L77.52 14.8c-1.3-.35-2.07-1.69-1.72-2.99.35-1.3 1.69-2.07 2.99-1.72l10.56 2.84c1.92.52 3.57 1.47 4.89 2.79 1.32 1.32 2.27 2.97 2.79 4.89l6.72 25.16c.45 1.67.5 3.34.18 4.93-.32 1.6-1 3.11-2.07 4.49-1.05 1.37-2.34 2.44-3.8 3.16-.78.38-1.62.68-2.49.85-.5 4.64-2.6 8.82-5.74 11.94C86.21 74.76 81.22 77 75.7 77c-5.52 0-10.51-2.24-14.13-5.86-3.07-3.07-5.16-7.17-5.71-11.71h-3.87zM17.6 67.68c2.74 2.74 6.51 4.43 10.68 4.43s7.94-1.69 10.68-4.43c2.74-2.74 4.42-6.51 4.42-10.69s-1.69-7.95-4.42-10.69c-2.74-2.74-6.51-4.43-10.68-4.43s-7.94 1.69-10.68 4.43c-2.74 2.74-4.42 6.51-4.42 10.69 0 4.17 1.68 7.95 4.42 10.69z"/></svg>
                    </div>
                    <p class="paragrafo">Geeks</p>
                </div>
            </div>
            <div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M70.37 0H33.63c-4.34 0-8.01 3.68-8.01 8.02v70.96c0 4.34 3.67 8.02 8.01 8.02h36.74c4.26 0 7.78-3.52 8.01-8.02V8.02c0-4.34-3.67-8.02-8.01-8.02zM30.31 8.02c0-1.8 1.52-3.32 3.32-3.32h36.74c1.8 0 3.32 1.52 3.32 3.32v58.89H30.31V8.02zM70.37 82.3H33.63c-1.8 0-3.32-1.52-3.32-3.32v-7.37h43.37v7.24c-.09 1.9-1.58 3.45-3.31 3.45z"/><path d="M56.13 74.52h-8.42c-1.29 0-2.35 1.05-2.35 2.35s1.05 2.35 2.35 2.35h8.42c1.29 0 2.35-1.05 2.35-2.35-.01-1.29-1.06-2.35-2.35-2.35z"/></svg>
                    </div>
                    <p class="paragrafo">Millenials</p>
                </div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M92.02 61.77 85.07 9.49c-.15-1.12-1.14-1.99-2.28-1.99h-61.4c-1.15 0-2.14.86-2.29 1.99l-7.11 52.29c-.57 4.13.51 8.24 3.03 11.57 2.52 3.33 6.18 5.47 10.31 6.02.68.09 1.37.14 2.06.14h49.23c8.6-.03 15.57-7.05 15.54-15.66 0-.71-.05-1.4-.14-2.08zm-6.58 8.77c-1.77 2.34-4.34 3.86-7.25 4.28-.51.08-1.02.11-1.52.11H27.39c-6.05 0-10.97-4.91-10.99-10.98 0-.51.03-1.05.11-1.56l6.89-50.27h57.28l6.85 50.27c.42 2.89-.34 5.79-2.09 8.15z"/><path d="M66.25 30.42c-1.28 0-2.31 1.03-2.31 2.31v7.32c-.12 3.25-1.48 6.21-3.83 8.38-2.34 2.17-5.37 3.3-8.58 3.17-6.2-.23-11.25-5.28-11.48-11.51v-7.38c0-1.28-1.03-2.31-2.31-2.31s-2.31 1.03-2.31 2.31v7.32c0 9.13 7.45 16.56 16.57 16.57 9.11-.02 16.54-7.45 16.55-16.57v-7.32c0-1.28-1.03-2.31-2.31-2.31v.02z"/></svg>
                    </div>
                    <p class="paragrafo">Shoppers</p>
                </div>
            </div>
            <div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="m85.49 15.41-.12-.23c-2.24-4.12-6.55-6.68-11.26-6.68h-8.84c-4.8 0-9.15 2.65-11.36 6.91-2.21 4.26-1.88 9.34.86 13.28l7.34 10.51c.7 1 1.59 1.83 2.65 2.51l.21.14-.03.26-2.44 29.26c0 3.92 3.21 7.13 7.16 7.13 1.89 0 3.68-.74 5.01-2.08 1.38-1.39 2.15-3.27 2.13-5.3l-2.44-29.26.21-.14c1.07-.68 1.97-1.51 2.65-2.51l7.34-10.49c2.75-3.94 3.09-9.03.86-13.28l.07-.03zM69.71 74.26c-1.56 0-2.94-1.27-2.95-2.73l2.36-28.4h1.19l.03.38 2.31 27.78c0 1.65-1.32 2.97-2.94 2.97zm11.47-47.98-7.34 10.51c-.89 1.29-2.44 2.06-4.12 2.06-1.68 0-3.22-.77-4.12-2.06l-7.34-10.51c-1.88-2.68-2.09-6.01-.59-8.91 1.51-2.91 4.36-4.63 7.63-4.63h8.84c3.27 0 6.13 1.73 7.63 4.63 1.51 2.91 1.29 6.24-.59 8.91zM41.93 49h-.41V30.88c0-1.62-.89-3.15-2.31-4l-.21-.11v-9.65c0-1.61-.85-3.12-2.21-3.95l-5.76-3.53-.65-.27c-1.35-.33-2.78-.01-3.92.86-1.13.88-1.79 2.21-1.79 3.65v12.87l-.21.12c-1.45.85-2.31 2.33-2.31 4v18.11h-.41c-2.56 0-4.63 2.07-4.63 4.63V71.3c0 3.95 3.21 7.16 7.16 7.16h15.14c3.95 0 7.16-3.21 7.16-7.16V53.62c0-2.56-2.07-4.63-4.63-4.63V49zM28.89 13.29l5.89 3.6v9.34h-5.89V13.29zm-2.52 17.17H37.3v18.52H26.37V30.46zm15.99 40.86c0 1.62-1.32 2.94-2.94 2.94H24.28c-1.62 0-2.94-1.32-2.94-2.94V53.21h21.03v18.11h-.01z"/></svg>
                    </div>
                    <p class="paragrafo">Beauty</p>
                </div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M54.53 41.35h-5.05c-3.97 0-7.19 3.23-7.19 7.2V71.3c0 3.97 3.22 7.2 7.19 7.2h5.05c3.97 0 7.19-3.23 7.19-7.2V48.54c0-3.97-3.22-7.19-7.19-7.19zm2.91 29.95c0 1.6-1.31 2.91-2.9 2.91h-5.05c-1.6 0-2.9-1.31-2.9-2.91V48.54c0-1.6 1.31-2.91 2.9-2.91h5.05c1.6 0 2.9 1.31 2.9 2.91V71.3zM79.77 28.71h-5.05c-3.97 0-7.19 3.23-7.19 7.2V71.3c0 3.97 3.22 7.2 7.19 7.2h5.05c3.97 0 7.19-3.23 7.19-7.2V35.91c0-3.97-3.22-7.2-7.19-7.2zm2.91 42.59c0 1.6-1.31 2.91-2.9 2.91h-5.05c-1.6 0-2.9-1.31-2.9-2.91V35.91c0-1.6 1.31-2.91 2.9-2.91h5.05c1.6 0 2.9 1.31 2.9 2.91V71.3zM21.32 34.65c0-1.19-.96-2.15-2.14-2.15-1.19 0-2.14.96-2.14 2.15 0 3.71 2.48 7.05 6.04 8.11l.27.08v3.18c0 1.19.96 2.15 2.14 2.15s2.14-.96 2.14-2.15v-3.18l.27-.08c3.56-1.07 6.04-4.4 6.04-8.11 0-2.72-1.81-5.08-5.53-7.18-.58-.32-1.2-.66-1.79-.96l-.06-.03c-1.17-.61-2.39-1.25-3.41-1.96-.85-.61-1.82-1.29-1.82-2.5 0-2.3 1.87-4.17 4.17-4.17s4.17 1.87 4.17 4.17c0 1.19.96 2.15 2.14 2.15s2.14-.96 2.14-2.15c0-3.71-2.48-7.05-6.04-8.11l-.27-.08v-3.18c0-1.19-.96-2.15-2.14-2.15s-2.14.96-2.14 2.15v3.18l-.27.08c-3.56 1.07-6.04 4.4-6.04 8.11 0 2.72 1.81 5.08 5.53 7.18.58.32 1.2.65 1.79.96l.06.03c1.17.61 2.39 1.25 3.41 1.96.85.61 1.82 1.29 1.82 2.5 0 2.3-1.87 4.17-4.17 4.17s-4.17-1.87-4.17-4.17zM29.28 53.99h-5.05c-3.97 0-7.19 3.23-7.19 7.2V71.3c0 3.97 3.22 7.2 7.19 7.2h5.05c3.97 0 7.19-3.23 7.19-7.2V61.19c0-3.97-3.23-7.2-7.19-7.2zm2.9 17.31c0 1.6-1.31 2.91-2.9 2.91h-5.05c-1.6 0-2.9-1.31-2.9-2.91V61.19c0-1.6 1.31-2.91 2.9-2.91h5.05c1.6 0 2.9 1.31 2.9 2.91V71.3z"/></svg>
                    </div>
                    <p class="paragrafo">Financial</p>
                </div>
            </div>
            <div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><style>.st31{fill-rule:evenodd;clip-rule:evenodd}</style><path class="st31" d="M57.96 33.88H46.03c-1.18 0-2.14.96-2.14 2.14 0 1.18.95 2.14 2.14 2.14h11.93c1.18 0 2.14-.96 2.14-2.14 0-1.18-.96-2.14-2.14-2.14z"/><path class="st31" d="M83.3 20.45H70.29v-5.32c0-1.78-.7-3.43-1.94-4.69-1.23-1.23-2.94-1.94-4.66-1.94H40.33c-1.76 0-3.42.68-4.68 1.94-1.26 1.26-1.94 2.91-1.94 4.69v5.32H20.7c-3.65 0-6.62 3.26-6.62 7.26v13.64c0 2.31.97 4.43 2.67 5.83l.3.25v24.41c0 3.66 2.97 6.63 6.62 6.63h20.02c.11 0 .2.03.29.03H80.35c3.65 0 6.62-2.97 6.62-6.63V47.46l.3-.25c1.7-1.4 2.67-3.52 2.67-5.83V27.74c0-4-2.97-7.26-6.62-7.26v-.03zm-45.32-5.32c0-.63.24-1.22.68-1.66.44-.44 1.03-.68 1.65-.68h23.35c.62 0 1.21.24 1.65.68.44.44.68 1.05.68 1.66v5.32H37.98v-5.32zm44.67 56.7c0 1.29-1.04 2.33-2.33 2.33H43.97c-.09 0-.18 0-.26.02H23.67c-1.29 0-2.33-1.05-2.33-2.34V48.62h61.31v23.22-.01zm2.98-30.48c0 1.32-.65 2.43-1.65 2.84-.21.09-.44.14-.68.14H20.69c-.24 0-.48-.05-.7-.14-.98-.41-1.64-1.52-1.64-2.84V27.71c0-1.44.82-2.97 2.33-2.97H83.3c1.51 0 2.33 1.53 2.33 2.97v13.64z"/></svg>
                    </div>
                    <p class="paragrafo">Corporate</p>    
                </div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M92.95 26.51c0-1.44-.56-2.78-1.56-3.79L72.75 4.07c-2.08-2.09-5.48-2.09-7.56 0l-5.54 5.54-3.2-3.21c-2.08-2.09-5.48-2.09-7.56 0l-4.65 4.66c-1.01 1.01-1.56 2.35-1.56 3.78 0 1.43.56 2.77 1.56 3.79l10.19 10.2-17.08 17.1-10.19-10.2c-2.08-2.09-5.48-2.09-7.56 0l-4.65 4.67c-2.08 2.08-2.08 5.48 0 7.57l3.2 3.2-5.54 5.55c-1.01 1.01-1.56 2.35-1.56 3.78s.56 2.77 1.56 3.79l18.64 18.65c1.01 1.01 2.35 1.56 3.78 1.56 1.43 0 2.77-.56 3.78-1.56l5.54-5.54 3.2 3.21c2.08 2.08 5.48 2.08 7.56 0l4.65-4.68c2.08-2.08 2.08-5.48 0-7.56l-10.19-10.2 17.08-17.1 10.19 10.2c1.01 1.01 2.35 1.55 3.78 1.55 1.43 0 2.77-.56 3.78-1.55l4.65-4.66c1.01-1.01 1.56-2.35 1.56-3.78 0-1.44-.56-2.78-1.56-3.79l-3.2-3.21 5.54-5.54c1.01-1.01 1.56-2.35 1.56-3.78zM40.74 75.17l-5.04 5.05c-.37.37-1 .37-1.37 0L15.3 61.17c-.19-.19-.28-.42-.28-.68 0-.27.09-.5.28-.69l5.04-5.04c.19-.19.42-.28.68-.28.26 0 .5.1.68.28l19.03 19.03c.19.18.28.42.28.68 0 .27-.09.5-.28.69v.01zm16.3-3.7c.19.18.28.42.28.68 0 .27-.09.5-.28.69L52 77.88c-.19.19-.42.28-.68.28-.26 0-.5-.11-.68-.28l-33-33.03c-.37-.37-.37-1 0-1.37l5.04-5.05c.19-.18.42-.28.68-.28.26 0 .5.11.68.28l33 33.04zm-10.39-16.2-6.41-6.42 17.08-17.1 6.41 6.42-17.08 17.1zm39.68-13.14c.19.18.28.43.28.68s-.09.5-.28.69l-5.04 5.04c-.37.38-1 .38-1.37 0l-33-33.03c-.37-.37-.37-1 0-1.37l5.04-5.04c.19-.19.44-.29.68-.29s.5.1.68.29l33.01 33.03zm2.34-14.94-5.04 5.05c-.37.37-1 .37-1.37 0L63.25 13.19c-.19-.19-.28-.42-.28-.68 0-.27.09-.5.28-.69l5.04-5.05c.19-.18.42-.28.68-.28.26 0 .5.11.68.28l19.03 19.04c.37.37.37.99 0 1.37l-.01.01z"/></svg>
                    </div>
                    <p class="paragrafo">Fitness</p>
                </div>
            </div>
            <div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M100.1 48.67H81.86c-.88 0-1.66.5-2.01 1.3l-3.06 6.82-3.52-7.85.95-.97C78.59 43.61 81 37.81 81 31.63s-2.4-11.98-6.77-16.35C69.87 10.91 64.06 8.5 57.88 8.5c-6.18 0-11.97 2.41-16.35 6.78l-.2.2-.2-.2C36.78 10.91 30.97 8.5 24.79 8.5s-11.97 2.4-16.35 6.78c-4.36 4.37-6.77 10.18-6.77 16.35 0 6.16 2.4 11.98 6.77 16.34l28.82 28.85c1.08 1.1 2.52 1.68 4.06 1.68 1.54 0 2.98-.6 4.07-1.68L69.91 52.3l4.85 10.79c.05.11.11.22.18.32.41.62 1.11.99 1.84.99h.18c.8-.06 1.51-.57 1.84-1.31l4.49-10.01h16.81c1.21 0 2.21-1 2.21-2.21 0-1.22-1-2.22-2.21-2.22v.02zM63.6 27.43c-.35-.8-1.15-1.31-2.01-1.31-.86 0-1.66.51-2.01 1.31l-9.54 21.24h-8.45c-1.21 0-2.21 1-2.21 2.21 0 1.22 1 2.22 2.21 2.22h9.88c.88 0 1.66-.51 2.01-1.31l8.1-18.04 6.39 14.22L42.26 73.7c-.51.51-1.35.51-1.86 0L11.58 44.85c-3.53-3.52-5.47-8.22-5.47-13.21 0-4.98 1.95-9.68 5.47-13.21 3.53-3.53 8.22-5.47 13.21-5.47s9.68 1.95 13.21 5.47l1.77 1.77c.41.42.97.65 1.57.65.6 0 1.15-.23 1.57-.65l1.77-1.77c3.53-3.53 8.22-5.47 13.21-5.47s9.68 1.95 13.21 5.47c3.53 3.53 5.47 8.23 5.47 13.21 0 4.99-1.87 9.48-5.25 12.98L63.6 27.46v-.03z"/></svg>
                    </div>
                    <p class="paragrafo">Health</p>
                </div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M76.87 57.37c8.33 0 15.12-6.79 15.12-15.13 0-4.41-2.71-8.39-6.77-10 .02-.34.03-.66.03-.99 0-9.01-7.31-16.34-16.29-16.34-1.69 0-3.35.28-5.01.8C60.59 10.33 54.62 7 48.31 7c-9.26 0-17.05 6.87-18.26 16.03-4.65.54-8.44 4.04-9.34 8.64-2.1.4-4.02 1.42-5.55 2.95-2.04 2.05-3.15 4.76-3.15 7.63 0 8.35 6.79 15.14 15.12 15.14h5.91v6.89L28.88 67c-1.3-1.05-2.91-1.62-4.55-1.62-4.02 0-7.3 3.28-7.3 7.3s3.28 7.3 7.3 7.3 7.3-3.28 7.3-7.3c0-.59-.09-1.21-.28-1.87l5.18-3.39c.65-.42 1.04-1.13 1.04-1.91v-8.12h12.15v8.39c-2.97.97-5.02 3.77-5.02 6.92 0 4.02 3.28 7.3 7.3 7.3s7.3-3.28 7.3-7.3c0-3.13-2.06-5.93-5.02-6.92v-8.39h12.15v8.12c0 .78.39 1.49 1.04 1.91l5.18 3.39c-.19.66-.28 1.28-.28 1.87 0 4.02 3.28 7.3 7.3 7.3s7.3-3.28 7.3-7.3-3.28-7.3-7.3-7.3c-1.64 0-3.23.57-4.55 1.62l-4.16-2.72v-6.89h5.91v-.02zM24.35 75.43c-1.52 0-2.75-1.23-2.75-2.75s1.24-2.75 2.75-2.75c.91 0 1.76.44 2.24 1.12l.08.16c.28.45.43.96.43 1.47 0 1.52-1.24 2.75-2.75 2.75zm52.95-4.19.08-.12c.51-.76 1.36-1.21 2.29-1.21 1.51 0 2.75 1.24 2.75 2.75 0 1.52-1.24 2.76-2.75 2.76-1.52 0-2.75-1.24-2.75-2.76 0-.51.15-1.02.4-1.42h-.02zm-22.54 1.42c0 1.52-1.24 2.76-2.75 2.76s-2.75-1.24-2.75-2.76c0-1.51 1.21-2.7 2.61-2.75.03 0 .08.03.2 0 1.48.03 2.69 1.27 2.69 2.75zM27.13 52.82c-5.83 0-10.57-4.75-10.57-10.58 0-1.67.65-3.24 1.82-4.41 1.17-1.18 2.74-1.83 4.41-1.83 1.25 0 2.27-1.02 2.27-2.27 0-3.44 2.8-6.24 6.25-6.24.08 0 .15 0 .23.02l.43.04c.66.06 1.25-.15 1.72-.59.46-.41.74-1.03.74-1.67.06-7.6 6.28-13.77 13.87-13.77 5.33 0 10.27 3.14 12.55 7.98.53 1.13 1.89 1.61 3.01 1.1 1.67-.77 3.39-1.17 5.07-1.17 6.48 0 11.75 5.29 11.75 11.79 0 .68-.08 1.42-.22 2.24-.11.61.03 1.21.37 1.71.36.49.87.83 1.47.92 2.97.53 5.12 3.1 5.12 6.12 0 5.83-4.75 10.58-10.57 10.58H27.12l.01.03z"/></svg>
                    </div>
                    <p class="paragrafo">IoT</p>
                </div>
            </div>
            <div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M98.11 8H5.91c-1.19 0-2.17.95-2.19 2.14v66.69c0 1.19.98 2.17 2.17 2.17h92.22c1.19 0 2.17-.98 2.17-2.17V10.17c0-1.19-.98-2.17-2.17-2.17zm-2.15 66.64H8.12V12.36h87.83v62.28z"/><path d="M52.01 67.1v.01h.4c6.3-.1 12.18-2.66 16.55-7.2 4.39-4.53 6.73-10.52 6.62-16.82-.11-6.3-2.66-12.2-7.18-16.57-4.43-4.29-10.24-6.64-16.39-6.64h-.41c-12.83.21-23.23 10.83-23.19 23.67.02 6.3 2.49 12.24 6.97 16.68 4.45 4.42 10.37 6.87 16.63 6.87zm.28-42.89h.5v.07c5 .2 9.63 2.3 13.1 5.93 3.55 3.71 5.44 8.6 5.33 13.72C71 54.4 62.41 62.75 52.01 62.75h-.43c-10.39-.23-18.83-8.89-18.8-19.29.16-10.65 8.88-19.25 19.51-19.25z"/><path d="M42.38 54.93c.32.21.7.27 1.07.32.35 0 .7-.11 1.01-.27l17.1-9.52c.99-.55 1.39-1.78.93-2.8l-.09-.19c-.2-.35-.49-.65-.86-.87l-17-9.56c-.34-.19-.7-.28-1.07-.28-.76 0-1.5.4-1.9 1.1-.18.33-.28.71-.28 1.08v19.12c.02.77.43 1.49 1.09 1.87zm3.26-17.15L56 43.56l-10.36 5.78V37.78z"/></svg>
                    </div>
                    <p class="paragrafo">Entm't</p>
                </div>
                <div class="item">
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 87" xml:space="preserve"><path d="M88.02 24.15c.09-5.03-3.09-9.56-7.86-11.17L64.1 8.16c-1.57-.47-3.27.11-4.22 1.46-.31.43-.53.9-.66 1.42-4.77-1.27-9.78-1.27-14.55 0-.12-.51-.34-.99-.63-1.42-.95-1.35-2.64-1.93-4.22-1.46l-16.06 4.82c-4.77 1.61-7.96 6.12-7.86 11.17v18.21c-.09 1.82 1.04 3.49 2.77 4.06.38.12.79.18 1.21.18.75-.03 1.48-.26 2.11-.67.11 1.01.23 2 .4 2.96 1.5 8.07 5.98 14.23 14.46 19.93.12.09.23.16.37.23 3.33 8.17 12.66 12.1 20.82 8.76 3.97-1.62 7.14-4.79 8.76-8.76l.32-.19c8.45-5.74 12.99-11.9 14.49-19.97.17-.94.32-1.94.4-2.96.63.41 1.36.64 2.11.67.41 0 .81-.06 1.21-.18 1.73-.57 2.87-2.22 2.78-4.04v-3.81l-.06-14.43-.03.01zm-65.88 14.6-.12.18-2.11 3.06V24.14c-.09-3.19 1.88-6.06 4.88-7.1l15.74-4.82c0 .11-.05.21-.11.29L22.14 38.73v.02zM44.9 72.7v-.17c.43.03.86.03 1.28 0 1.94.02 3.87-.35 5.66-1.08 1.79.78 3.73 1.21 5.69 1.25.43.03.86.03 1.28 0-4.13 3.11-9.8 3.11-13.92 0h.01zm6.85-13.94-3.36-4.22 7.12.11-3.5 4.13h-.26v-.02zM77.84 42.5c0 1.91-.15 3.81-.5 5.69h.02c-1.28 6.96-5.09 12.12-12.67 17.26-.21.17-.46.32-.7.44-1.38.88-2.86 1.58-4.4 2.11l-.44.17h-.21c-.43.14-.87.22-1.31.22-1.21-.03-2.42-.28-3.55-.71v-5.21c.46-.23.86-.56 1.21-.94l3.47-4.02c1.13-1.27 1.39-3.08.67-4.61-.7-1.6-2.32-2.64-4.08-2.6H48.4c-1.71 0-3.29 1-3.99 2.56-.7 1.53-.44 3.33.67 4.59l3.47 4.04c.35.38.76.7 1.22.95v5.2c-1.15.43-2.35.66-3.58.7-.44 0-.89-.08-1.31-.21h-.23c-1.71-.58-3.33-1.38-4.85-2.37l-.67-.4c-7.58-5.13-11.39-10.28-12.67-17.25-.35-1.85-.52-3.73-.5-5.63v-1.79l17.3-24.78c5.55-2.15 11.68-2.15 17.23 0l17.36 24.77v1.82h-.01zm3.91-3.48c-.02-.07-.06-.15-.12-.21L63.56 12.97l-.23-.35c-.08-.11-.12-.25-.12-.39l15.76 4.75c3 1.05 4.95 3.93 4.85 7.1V38.5l.06 3.59-2.11-3.05-.02-.02z"/><path d="M56.72 41.67c0 1.16.95 2.11 2.11 2.11s2.11-.95 2.11-2.11c-.29-1.8.93-3.49 2.72-3.78 1.8-.29 3.48.94 3.78 2.73.06.35.06.7 0 1.05 0 1.16.95 2.11 2.11 2.11s2.11-.95 2.11-2.11c.12-4.28-3.24-7.86-7.52-7.99h-.06c-4.22.2-7.5 3.77-7.37 8.01l.01-.02zM39.64 33.67c-4.26.15-7.61 3.72-7.47 8 0 1.17.95 2.11 2.11 2.11s2.11-.94 2.11-2.11c-.29-1.8.93-3.49 2.72-3.78 1.8-.29 3.48.94 3.78 2.73.06.35.06.7 0 1.05 0 1.17.95 2.11 2.11 2.11s2.11-.94 2.11-2.11c.14-4.27-3.21-7.85-7.47-8z"/></svg>
                    </div>
                    <p class="paragrafo">Pet Lovers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="filtros-segmentacao">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 col-xxl-4">
                <div class="conteudo">
                    <h2 class="titulo">Filtros para segmentação assertiva</h2>
                    <p class="paragrafo">Usufrua de dados detalhados para identificar e atingir seu público-alvo com precisão, otimizando o impacto das suas campanhas.</p>
                    <a href="/nossas-solucoes/" class="btn d-none d-md-flex" title="Ver nossas soluções">
                        ver nossas soluções
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-7 col-xxl-8">

                <div class="lista-filtros">
                    <div class="filtro">
                        <div class="item">
                            <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>filtros-segmentacao-icone-1.png" alt="Tipos de devices"></div>
                            <p>Tipos de devices</p>
                        </div>
                    </div>
                    <div class="filtro">
                        <div class="item">
                            <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>filtros-segmentacao-icone-2.png" alt="Retargeting"></div>
                            <p>Retargeting</p>
                        </div>
                        <div class="item">
                            <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>filtros-segmentacao-icone-3.png" alt="Hora do dia"></div>
                            <p>Hora do dia</p>
                        </div>
                    </div>
                    <div class="filtro">
                        <div class="item">
                            <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>filtros-segmentacao-icone-4.png" alt="Geolocalização"></div>
                            <p>Geolocalização</p>
                        </div>
                        <div class="item">
                            <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>filtros-segmentacao-icone-5.png" alt="Hiperlocal"></div>
                            <p>Hiperlocal</p>
                        </div>
                    </div>
                    <div class="filtro">
                        <div class="item">
                            <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>filtros-segmentacao-icone-6.png" alt="Sistema operacional"></div>
                            <p>Sistema operacional</p>
                        </div>
                    </div>
                    <div class="filtro">
                        <div class="item">
                            <div class="icone"><img src="<?php echo do_shortcode("[img-url]"); ?>filtros-segmentacao-icone-7.png" alt="Categorias"></div>
                            <p>Categorias</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <a href="/nossas-solucoes/" class="btn d-md-none" title="Ver nossas soluções">
            ver nossas soluções
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
        </a>
    </div>
</section>

<section class="privacy-friendly">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <h2 class="titulo"><span class="purple">Privacy-friendly</span> e <span class="green">Location-powered</span></h2>
                <p class="paragrafo">No mundo cookieless, mapeamos onde as pessoas estiveram e entregamos a sua campanha com uma visão 360o do consumidor.</p>

                <div class="slider-fluxo">
                    <div class="slider">
                        <div class="item">
                            <div class="icone">
                                <img src="<?php echo do_shortcode("[img-url]"); ?>privacy-friendly-icon-1.png" alt="">
                            </div>
                            <p>Compreendemos e segmentamos os diferentes comportamentos</p>
                        </div>
                        <div class="separador">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 103.27 54.02" xml:space="preserve"><path d="M3.43.58c-.8-.75-2.04-.75-2.84 0-.77.77-.77 1.97 0 2.74l24.35 23.65L.6 50.64c-.8.75-.8 1.97 0 2.74.47.45.94.61 1.41.61h.02c.47 0 1.1-.14 1.41-.61l25.75-25.03c.8-.75.8-1.97 0-2.74L3.43.58zM40.16.58c-.8-.77-2.04-.75-2.84 0-.8.75-.8 1.97 0 2.74l24.35 23.65-24.35 23.67c-.8.75-.8 1.97 0 2.74.47.45.94.61 1.41.61l.02.02c.47 0 .94-.14 1.41-.61l25.75-25.03c.47-.47.63-.91.63-1.38 0-.47-.33-1.08-.63-1.38L40.16.58zM102.63 25.61 76.88.58c-.8-.77-2.04-.77-2.84 0-.8.75-.8 1.97 0 2.74l24.37 23.65-24.34 23.67c-.8.75-.8 1.97 0 2.74.47.45.94.61 1.41.61v.02c.47 0 .94-.14 1.41-.61l25.75-25.03c.47-.47.63-.91.63-1.38 0-.47-.33-1.07-.64-1.38z"/></svg>
                        </div>
                        <div class="item">
                            <div class="icone">
                                <img src="<?php echo do_shortcode("[img-url]"); ?>privacy-friendly-icon-2.png" alt="">
                            </div>
                            <p>Geramos centenas de insights anonimizados com fortes indicadores de intenção</p>
                        </div>
                        <div class="separador">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 103.27 54.02" xml:space="preserve"><path d="M3.43.58c-.8-.75-2.04-.75-2.84 0-.77.77-.77 1.97 0 2.74l24.35 23.65L.6 50.64c-.8.75-.8 1.97 0 2.74.47.45.94.61 1.41.61h.02c.47 0 1.1-.14 1.41-.61l25.75-25.03c.8-.75.8-1.97 0-2.74L3.43.58zM40.16.58c-.8-.77-2.04-.75-2.84 0-.8.75-.8 1.97 0 2.74l24.35 23.65-24.35 23.67c-.8.75-.8 1.97 0 2.74.47.45.94.61 1.41.61l.02.02c.47 0 .94-.14 1.41-.61l25.75-25.03c.47-.47.63-.91.63-1.38 0-.47-.33-1.08-.63-1.38L40.16.58zM102.63 25.61 76.88.58c-.8-.77-2.04-.77-2.84 0-.8.75-.8 1.97 0 2.74l24.37 23.65-24.34 23.67c-.8.75-.8 1.97 0 2.74.47.45.94.61 1.41.61v.02c.47 0 .94-.14 1.41-.61l25.75-25.03c.47-.47.63-.91.63-1.38 0-.47-.33-1.07-.64-1.38z"/></svg>
                        </div>
                        <div class="item">
                            <div class="icone">
                                <img src="<?php echo do_shortcode("[img-url]"); ?>privacy-friendly-icon-3.png" alt="">
                            </div>
                            <p>Ativamos <br />audiência <br />customizada <br />com base no local</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="admond">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <span class="tag">Beta</span>
                <h2 class="titulo">Admond, nosso sistema cientista de dados em IA</h2>
                <p class="paragrafo">Descubra o poder da segmentação otimizada com Admond AI Planning, que avalia mais de 30 mil segmentações de dados para recomendar a mais eficaz com base no briefing. Inicie sua jornada rumo a insights mais profundos!</p>
                <a href="/nossas-solucoes/" class="btn" title="Ver nossas soluções">
                    ver nossas soluções
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M28.71 6.66 22.35.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v2h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.4-.4.4-1.03.01-1.42z" fill="#fff"/></svg>
                </a>
            </div>
        </div>
    </div>

</section>

<?php
    get_footer();
?>