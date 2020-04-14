<?php get_header(); ?>

<!-- BANNER -->
<div class="area-banner-top">
  <div class="container area-menu-superior">
    <div class="area-busca-menu" id="ir-para-busca">
      <div id="fundo-menu"></div>
      <div class="area-menu" id="ir-para-menu">
        <ul class="menu">
          <li class="item it1 menu-expandido"><a><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
          <li class="item it2"><a href="<?php echo get_permalink(get_page_by_path('contatos')) ?>">Contatos</a></li>
          <li class="item it3"><a href="<?php echo esc_url(get_category_link(get_category_by_slug('congressos-e-seminarios')->term_id));?>">Eventos</a></li>
          <li class="item it4"><a href="<?php echo get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></li>
          <li class="item it5"><a href="<?php echo get_permalink(get_page_by_path('perguntas-frequentes')) ?>">Perguntas frequentes</a></li>
        </ul>
      </div>
      <div class="area-busca" id="ir-para-busca">
        <?php get_search_form(); ?>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <hr />
    <div id="arrow-up"></div>
    <div id="div-navigation">
      <div class="row">
        <div class="col-md-4 col-sm-4 block-menu">
          <h4>Sobre</h4>
          <p><a href="<?php echo get_permalink(get_page_by_path('ibict')) ?>">IBICT</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('cariniana')) ?>">Cariniana</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('linha-do-tempo')) ?>">Linha do Tempo</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('mapa-da-rede-cariniana')) ?>">Mapa da Rede Cariniana</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('preservacao-digital')) ?>">Preservação Digital</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('parcerias-da-rede')) ?>">Parcerias da Rede</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('grupo-de-pesquisa')) ?>">Grupo de Pesquisa</a></p>
        </div>

        <div class="col-md-4 col-sm-4 block-menu">
          <h4>Apoio</h4>
          <p><a href="<?php echo get_permalink(get_page_by_path('contatos')) ?>">Contatos</a></p>
          <p><a href="<?php echo esc_url(get_category_link(get_category_by_slug('congressos-e-seminarios')->term_id));?>">Eventos</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('perguntas-frequentes')) ?>">Perguntas Frerquentes</a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="slide-principal" class="carousel slide slide-principal" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#slide-principal" data-slide-to="0" class="active"></li>
      <li data-target="#slide-principal" data-slide-to="1" class=""></li>
      <li data-target="#slide-principal" data-slide-to="2" class=""></li>
      <!-- <li class="lnk-mais-destaques"></li> -->
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active" onclick="">
        <div style="background: #000 url('<?php echo get_template_directory_uri(); ?>/img/banner-img-3.png') center / cover; width: 100%; height: 425px"></div>
      </div>
      <div class="item" onclick="">
        <div style="background: #000 url('<?php echo get_template_directory_uri(); ?>/img/banner-img-1.png') center / cover; width: 100%; height: 425px"></div>
      </div>
      <div class="item " onclick="">
        <div style="background: #000 url('<?php echo get_template_directory_uri(); ?>/img/banner-img-2.png') center / cover; width: 100%; height: 425px"></div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<hr class="hr-front">

<div id="conteudo-portal">

  <!-- POSTS RECENTES -->
  <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
  <div class="container" id="div_ultimas_noticias">
    <div class="row">
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <!-- imagem -->
      <div class="col-md-4 noticia-front-box">
        <div class="image-box">
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('smallest'); ?>
          <?php endif; ?>
        </div>
        <!-- titulo -->
        <div class="titulo-permalik">
          <h1><a class="permalik-noticia-front" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        </div>
        <!-- resumo -->
        <?php the_excerpt(__('(more…)')); ?>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>


  <hr class="hr-front">


  <!-- SLIDE FOTOS -->
  <div class="div-slider">
    <?php if( function_exists('wd_slider') ) { wd_slider(2); } ?>
  </div>
  <div class="div-mais-fotos">
    <a href="<?php echo get_permalink(get_page_by_path('galeria-de-imagens')) ?>">MAIS FOTOS</a>
  </div>


  <!-- REDES SOCIAIS -->
  <div class="container" id="container-redes-sociais">
    <h1>A Rede Cariniana nas redes sociais</h1>
    <hr class="hr-redes-sociais">
    <div class="col-md-6 col-xs-12 feed-twitter">
      <div class="feed">
        <?php echo do_shortcode('[fts_twitter twitter_name=Rede_Cariniana tweets_count=6 cover_photo=yes stats_bar=no show_retweets=no show_replies=no]'); ?>
      </div>
    </div>
    <div class="col-md-6 col-xs-12 feed-facebook">
      <div class="feed">
        <?php echo do_shortcode('[fts_facebook type=page id=244388439019815 access_token=EAAP9hArvboQBAIGZCPYLQXG5f8yfSfXoC87R0GfuUf2sU2DdTY1LOlZC7yDkztMlQ849ZAcWAsuZCqlLXKmZCtir777tcPUYA7xduHYFZCSeKGzLrJf4ciTmJZC9riXARK41RLJxT60dj8zn7s9E6I3sZBJ6mkBAkuFTZBRU0OhptyAZDZD posts=6 description=yes posts_displayed=page_only images_align=left]'); ?>
      </div>
    </div>
  </div>

</div>


<?php get_footer(); ?>
