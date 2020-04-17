<?php get_header('single'); ?>

<div id="conteudo-portal" class="conteudo-portal">
  <div class="container">
    <div class="link_home">
      <a href="<?php echo get_home_url(); ?>"><span class="glyphicon glyphicon-home"></span> Início</a>
    </div>
    <div class="conteudo-page">
      <div class="titulo-page">
        <h1><?php the_title(); ?></h1>
      </div>



      <?php

        if(have_posts()) :
            while(have_posts()) : the_post();
                the_content();
            endwhile;
        endif;

    ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
