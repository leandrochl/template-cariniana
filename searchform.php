<form action="<?php echo get_home_url(); ?>" method="get" role="search">
  <div class="search-content">
    <input type="text" value="<?php the_search_query(); ?>" class="txt-busca" placeholder="Buscar no portal" name='s' id='search' required />
    <div class="btn-procurar">
      <button type="submit" name="button">
        <span class="fa fa-search"></span>
      </button>
    </div>
  </div>
</form>
