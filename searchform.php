<form action="<?php echo get_home_url(); ?>" method="get" role="search">
  <input type="text" value="<?php the_search_query(); ?>" class="txt-busca" placeholder="Buscar no portal" name='s' id='search' required/>
  <div class="btn-procurar">
    <button type="submit" name="button">
      <span class="glyphicon glyphicon-search"></span>
    </button>
  </div>
</form>
