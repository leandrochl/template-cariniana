<div id="rodape">

  <div id="rodape-principal">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <h4>Sobre</h4>
          <p><a href="<?php echo get_permalink(get_page_by_path('ibict')) ?>">IBICT</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('cariniana')) ?>">Cariniana</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('linha-do-tempo')) ?>">Linha do Tempo</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('mapa-da-rede-cariniana')) ?>">Mapa da Rede Cariniana</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('preservacao-digital')) ?>">Preservação Digital</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('parcerias-da-rede')) ?>">Parcerias da Rede</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('grupo-de-pesquisa')) ?>">Grupo de Pesquisa</a></p>
        </div>

        <div class="col-md-3 col-sm-12">
          <h4>Apoio</h4>
          <p><a href="<?php echo get_permalink(get_page_by_path('contatos')) ?>">Contatos</a></p>
          <p><a href="<?php echo esc_url(get_category_link(get_category_by_slug('congressos-e-seminarios')->term_id));?>">Eventos</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></p>
          <p><a href="<?php echo get_permalink(get_page_by_path('perguntas-frequentes')) ?>">Perguntas Frerquentes</a></p>
        </div>
        <div class="col-md-1 col-sm-12"></div>
        <div class="col-md-5 col-sm-12">
          <h2>REDES SOCIAIS</h2>
          <div id="icones-rodape">
            <a href="https://www.instagram.com/redecariniana/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ig_icon_w.png" class="sn_icon">
            </a>
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
          <div class="clearfix"></div>
          <div class="div-contato-footer">
            <h2>CONTATO</h2>
            <span title="E-mail" class="fa fa-envelope"></span><span> redecariniana@gmail.com / cariniana@ibict.br</span><br />
            <span title="Telefones" class="fa fa-phone-alt"></span><span> (61) 3217-6100 / 6140</span><br />
            <span title="Skype" class="fab fa-skype"></span><span> miguel.ibict</span><br />
          </div>
        </div>
      </div>
    </div>
  </div>
  <script defer="defer" src="//barra.brasil.gov.br/barra_2.0.js" type="text/javascript"></script>
</div>


<?php wp_footer(); ?>
</body>

</html>
