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
    <div id="barra-superior">
      <nav class="navbar navbar-default">
        <div class="container">

          <!-- Menu para mobile -->
          <div class="navbar-header">
            <div class="ico-brand">
              <a class="navbar-brand" href="#">
                <img src="#" alt="Portal da Rede Cariniana" />
              </a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>


          <!-- Menu para Desktop/Tablet -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#" class="menu-superior-escondido">Sobre Brasília</a></li>
              <li><a href="#" class="menu-superior-escondido">Sobre o Governo</a></li>
              <li><a href="#" class="menu-superior-escondido">Serviços</a></li>
              <li><a href="#" class="menu-superior-escondido">Dúvidas Frequentes</a></li>

              <li><a href="#" target="_blank">Transparência <span class="sr-only">(current)</span></a></li>
              <li><a href="#" target="_blank">Ouvidoria</a></li>
              <li><a href="#">Acesso à Informação</a></li>
              <li><a href="#" target="_blank">Diário Oficial</a></li>
              <li><a href="#" target="_blank">Agência Brasília</a></li>
              <li><a href="#" target="_blank">Dados Abertos</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Acessibilidade</a></li>
              <li class="separador">|</li>
              <li class="areaAcessibilidade"><a id="popoverAcessibilidade" type="button" data-container="body" data-toggle="popover" data-placement="bottom">A<span class="aMenor">A</span></a></li>
              <li class="separador">|</li>
              <a href="http://www.vlibras.gov.br/" target="_blank"><img src="#" alt="Vlibras" style="margin-bottom: -10px; margin-left:20px;" /></a>
            </ul>


          </div>
        </div>
      </nav>
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
          <div class="col-md-8 titulo-portal titulo-portal-single">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-cariniana.png" width="100" height="100" style="float: left; margin-right: 10px">
            <h1><strong><a href="<?php echo get_home_url(); ?>">Portal da Rede Cariniana</a></strong></h1>
            <h5><a href="http://www.ibict.br/"> IBICT - Instituto Brasileiro de Informação em Ciência e Tecnologia</a></h5>
            <h5><a href="http://www.mctic.gov.br/portal">MINISTÉRIO DA CIÊNCIA, TECNOLOGIA, INOVAÇÕES E COMUNICAÇÕES</a></h5>
          </div>
          <div class="col-md-4">
            <!-- <div class="area-busca-single">
              <?php get_search_form(); ?>
            </div> -->
            <div class="div-icon-menu-single">
              <span class="glyphicon glyphicon-menu-hamburger" id="icon-menu-single"></span>
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
