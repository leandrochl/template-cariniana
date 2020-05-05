<?php get_header('single'); ?>

<div id="conteudo-portal" class="conteudo-portal">
  <div class="container">
    <div class="link_home">
      <?php echo bcn_display(); ?>
    </div>
    <div class="conteudo-post">
      <div class="titulo-post">
        <h1><?php the_title(); ?></h1>
      </div>
      <?php
      if(have_posts()) :
        while(have_posts()) : the_post();
    ?>
      <div class="div-dia-post">
        <span class="dia-post">Publicado: <?php the_date(); ?>, <?php the_time(); ?></span>
      </div>
      <?php
          the_content();
    ?>
      <hr />
      <strong>Categoria(s): </strong><?php the_category(', '); ?>
      <?php
        endwhile;
      endif;
     ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
