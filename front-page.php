<?php get_header(); ?>

<!-- BANNER -->
<div class="area-banner-top">
  <div class="container area-menu-superior">
    <div class="area-busca-menu" id="ir-para-busca">
      <div id="fundo-menu"></div>
      <div class="area-menu" id="ir-para-menu">
        <ul class="menu">
          <li class="item it1 menu-expandido"><a><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
          <li class="item it2"><a href="#">Contatos</a></li>
          <li class="item it3"><a href="#">Eventos</a></li>
          <li class="item it4"><a href="<?php echo get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></li>
          <li class="item it5"><a href="#">Perguntas frequentes</a></li>
        </ul>
      </div>
      <div class="area-busca">
        <form action="#" method="get">
          <input type="text" value="" class="txt-busca" placeholder="Buscar no portal" name='s' id='s' />
          <div class="btn-procurar">
            <span class="glyphicon glyphicon-search"></span>
          </div>
        </form>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <hr />
    <div id="div-navigation">
      <?php wp_nav_menu([
          'theme-location' => 'top-menu'
      ]);
      ?>
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
<div id="div_titulo_ultimas_noticias">
  <!-- <span class="titulo-front"><strong>Últimas notícias</strong></span> -->
</div>

<!-- POSTS RECENTES -->
<ul>
  <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
  <div class="container">
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
</ul>

<hr class="hr-front">

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="div_titulo_ultimas_noticias">
        <span class="titulo-front"><strong>Galeria de Imagens</strong></span>
      </div>
      <div id="sample_slider">
        <?php echo do_shortcode('[slide-anything id="53"]'); ?>
      </div>
    </div>
    <div class="col-md-6">

    </div>
  </div>
</div>



<?php get_footer(); ?>
