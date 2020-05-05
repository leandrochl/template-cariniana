<?php /* Template Name: Notícias */ ?>
<?php get_header('single'); ?>


<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

<div id="conteudo-portal" class="conteudo-portal">
  <div class="container">
    <div class="link_home">
      <?php echo bcn_display(); ?>
    </div>
    <div class="conteudo-archive">
      <div class="titulo-archive">
        <h1><?php the_title(); ?></h1>
      </div>

      <!-- the loop -->
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
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
      <?php endwhile; ?>
      <!-- end of the loop -->

    </div>
  </div>
</div>


<?php wp_reset_postdata(); ?>

<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
