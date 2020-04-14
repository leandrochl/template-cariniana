<div id="rodape">

  <div id="ante-rodape"></div>

  <div id="rodape-principal">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h4>Sobre</h4>
          <p><a href="<?php echo get_permalink(get_page_by_path('ibict')) ?>">IBICT</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('cariniana')) ?>">Cariniana</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('linha-do-tempo')) ?>">Linha do Tempo</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('mapa-da-rede-cariniana')) ?>">Mapa da Rede Cariniana</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('preservacao-digital')) ?>">Preservação Digital</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('parcerias-da-rede')) ?>">Parcerias da Rede</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('grupo-de-pesquisa')) ?>">Grupo de Pesquisa</a></p>
        </div>

        <div class="col-md-4 col-sm-4">
          <h4>Apoio</h4>
          <p><a href="<?php echo get_permalink(get_page_by_path('contatos')) ?>">Contatos</a></p>
          <p><a href="<?php echo esc_url(get_category_link(get_category_by_slug('congressos-e-seminarios')->term_id));?>">Eventos</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('perguntas-frequentes')) ?>">Perguntas Frerquentes</a></p>
        </div>

        <div class="col-md-4 col-sm-4">
          <h2>REDES SOCIAIS</h2>
          <div id="icones-rodape">
            <a href="https://www.facebook.com/redecariniana" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/img/fb_icon_w.png" class="sn_icon">
            </a>
            <a href="https://twitter.com/Rede_Cariniana" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/img/tt_icon_w.png" class="sn_icon">
            </a>
            <a href="https://www.youtube.com/channel/UC7pJ4CrMcF7WVYsWjic-nsg" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/img/yt_icon_w.png" class="sn_icon">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div id="rodape-mobile">
    <div class="container">
      <div class="row margin-bottom-40">
        <div class="col-md-12">
          <h4><a href="http://www.df.gov.br/index.php/category/sobre-brasilia/">sobre brasília</a></h4>
          <h4><a href="http://www.df.gov.br/index.php/category/sobre-o-governo/">sobre o governo</a></h4>
          <h4><a href="http://www.df.gov.br/index.php/category/programas/">programas</a></h4>
          <h4><a href="http://www.df.gov.br/index.php/category/servicos/">servicos</a></h4>
          <h5><a href="http://www.df.gov.br/index.php/category/cidadao/">Cidadão</a></h5>
          <h5><a href="http://www.df.gov.br/index.php/category/negocios/">Negócios</a></h5>
          <h5><a href="http://www.df.gov.br/index.php/category/servidor/">Servidor</a></h5>
          <h5><a href="http://www.df.gov.br/index.php/category/turista/">Turista</a></h5>
          <h4 class="margin-top-40"><a href="http://www.transparencia.df.gov.br/Pages/inicio.aspx" target="_blank">transparência</a></h4>
          <h4><a href="http://www.ouvidoria.df.gov.br/" target="_blank">ouvidoria</a></h4>
          <h4><a href="http://www.df.gov.br/index.php/category/acesso-a-informacao/">Acesso à Informação</a></h4>
          <h4><a href="javascript:void(0)" id="comunicarErro">comunicar erros</a></h4>
          <h4><a href="http://www.df.gov.br/index.php/acessibilidade/">acessibilidade</a></h4>
          <h4><a href="http://www.df.gov.br/index.php/category/duvidas-frequentes/">dúvidas frequentes</a></h4>
          <h4><a href="http://www.df.gov.br/index.php/fale-com-o-governo/">fale com o governo</a></h4>
          <div id="icones-rodape">
            <a href="https://www.youtube.com/user/govdf" target="_blank"><span class="icon-youtube"></span></a>
            <a href="https://instagram.com/gov_df/" target="_blank"><span class="icon-instagram"></span></a>
            <a href="https://twitter.com/gov_df" target="_blank"><span class="icon-twitter"></span></a>
            <a href="https://www.facebook.com/govdf?ref=ts&fref=ts" target="_blank"><span class="icon-facebook"></span></a>
          </div>
        </div>
      </div>

      <h2>GOVERNO DO DISTRITO FEDERAL</h2>
      <h3>Palácio do Buriti, Praça do Buriti Brasília - DF / CEP 70075-900</h3>

    </div>
  </div> -->
</div>


<?php wp_footer(); ?>
</body>

</html>
