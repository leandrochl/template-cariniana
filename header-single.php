<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Portal da Rede Cariniana</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-cariniana-2.png">

</head>

<body>
  <div id="topo-site">
    <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
      <ul id="menu-barra-temp" style="list-style:none;">
        <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
          <a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
        </li>
        <li>
          <a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a>
        </li>
      </ul>
    </div>
    <div id="barra-superior-single">
      <div class="container">
        <div class="row" style="margin-bottom: 15px;">
          <div class="col-md-7">
            <div id="ancoras">
              <a href="#ir-para-busca">Ir para busca</a> |
              <a href="#ir-para-menu">Ir para o menu</a> |
              <a href="#conteudo-portal">Ir para o conteúdo</a> |
              <a href="#rodape">Ir para rodapé</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 titulo-portal titulo-portal-single">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-cariniana.png" width="100" height="100" style="float: left; margin-right: 10px">
            <h1><strong><a href="<?php echo get_home_url(); ?>">Portal da Rede Cariniana</a></strong></h1>
            <h5><a href="http://www.ibict.br/"> IBICT - Instituto Brasileiro de Informação em Ciência e Tecnologia</a></h5>
            <h5><a href="http://www.mctic.gov.br/portal">MINISTÉRIO DA CIÊNCIA, TECNOLOGIA, INOVAÇÕES E COMUNICAÇÕES</a></h5>
          </div>
          <div class="col-md-5">
            <div class="area-busca-single" id="ir-para-busca">
              <?php get_search_form(); ?>
            </div>
            <div class="div-icon-menu-single" id="ir-para-menu">
              <span class="glyphicon glyphicon-menu-hamburger" id="icon-menu-single"></span>
              <!-- <span class="span-menu">Menu</span> -->
            </div>
            <div id="arrow-up-single"></div>
            <div class="menu-navigation-header-single" id="menu-navigation-single">
              <div class="row">
                <div class="col-md-6 col-sm-6 block-menu">
                  <h4>Sobre</h4>
                  <p><a href="<?php echo get_permalink(get_page_by_path('ibict')) ?>">IBICT</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('cariniana')) ?>">Cariniana</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('linha-do-tempo')) ?>">Linha do Tempo</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('mapa-da-rede-cariniana')) ?>">Mapa da Rede Cariniana</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('preservacao-digital')) ?>">Preservação Digital</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('parcerias-da-rede')) ?>">Parcerias da Rede</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('grupo-de-pesquisa')) ?>">Grupo de Pesquisa</a></p>
                </div>

                <div class="col-md-6 col-sm-6 block-menu">
                  <h4>Apoio</h4>
                  <p><a href="<?php echo get_permalink(get_page_by_path('contatos')) ?>">Contatos</a></p>
                  <p><a href="<?php echo esc_url(get_category_link(get_category_by_slug('congressos-e-seminarios')->term_id));?>">Eventos</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('noticias')) ?>">Notícias</a></p>
                  <p><a href="<?php echo get_permalink(get_page_by_path('perguntas-frequentes')) ?>">Perguntas Frerquentes</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
