<?php get_header('single'); ?>


<div class="container" id="conteudo-portal">
  <div class="link_home">
    <a href="<?php echo get_home_url(); ?>"><span class="glyphicon glyphicon-home"></span> Início</a>
  </div>
  <div class="conteudo-archive">
    <div class="titulo-archive">
      <h1><?php single_cat_title(); ?></h1>
    </div>
    <?php
      if(have_posts()) :
        while(have_posts()) : the_post();
    ?>
    <div class="box-post-archive">
    <?php if(has_post_thumbnail()): ?>
        <div class="div-img-archive">
          <?php the_post_thumbnail('min'); ?>
        </div>
        <div class="div-divider">
          <div class="divider"></div>
        </div>
    <?php endif; ?>
      <div class="box-post-archive">
        <div class="titulo-post-archive">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
        <?php the_excerpt(); ?>
      </div>
      </div>

      <div class="clearfix"></div>
        <hr />
         <?php
            endwhile;
          endif;
         ?>
  </div>
</div>



<?php get_footer(); ?>
