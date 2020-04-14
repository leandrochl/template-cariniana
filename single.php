<?php get_header('single'); ?>


<div class="container" id="conteudo-portal">
  <div class="link_home">
    <a href="<?php echo get_home_url(); ?>"><span class="glyphicon glyphicon-home"></span> Início</a>
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
    <hr/>
    <strong>Categoria(s): </strong><?php the_category(', '); ?>
    <?php
        endwhile;
      endif;
     ?>
   </div>
</div>



<?php get_footer(); ?>
