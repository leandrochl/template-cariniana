<?php get_header(); ?>

<!-- BANNER -->
<!-- MENU BANNER -->
<div class="container">
<div id="div-menu-banner">
  <div class="container area-menu-superior">
    <div class="area-busca-menu" id="ir-para-busca">
      <div id="fundo-menu"></div>
      <div class="area-menu" id="ir-para-menu">
        <div id="menu">
          <?php
            wp_nav_menu([
              'theme_location' => 'top-menu',
              'menu_class' => 'navigation'
            ]);
          ?>
        </div>
      </div>
      <div class="area-busca" id="ir-para-busca">
        <?php get_search_form(); ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</div>
<!-- IMAGENS BANNER -->
<div class="area-banner-top">
  <div id="slide-principal" class="carousel slide slide-principal" data-ride="carousel">
    <?php echo do_shortcode('[URIS id=162]'); ?>
  </div>
</div>

<hr class="hr-front">

<div id="conteudo-portal" style="padding-bottom: 90px;">

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

<div class="clearfix"></div>

<?php get_footer(); ?>
