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
    <div id="barra-superior-2">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div id="ancoras">
              <a href="#ir-para-busca">Ir para busca</a> |
              <a href="#ir-para-menu">Ir para o menu</a> |
              <a href="#conteudo-portal">Ir para o conteúdo</a> |
              <a href="#rodape">Ir para rodapé</a>
            </div>
          </div>
          <div class="col-md-5 text-right">
            <h3>0 <img src="" alt="" /> | 0 de março</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 titulo-portal">
            <!-- <img src="wp-content/themes/carinianaTemplate/img/logo-cariniana.png" width="100" height="100" style="float: left; margin-right: 10px"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-cariniana.png" width="100" height="100" style="float: left; margin-right: 10px">
            <h1><strong><a href="<?php echo get_home_url(); ?>">Portal da Rede Cariniana</a></strong></h1>
            <h5><a href="http://www.ibict.br/"> IBICT - Instituto Brasileiro de Informação em Ciência e Tecnologia</a></h5>
            <h5><a href="http://www.mctic.gov.br/portal">MINISTÉRIO DA CIÊNCIA, TECNOLOGIA, INOVAÇÕES E COMUNICAÇÕES</a></h5>
          </div>
          <div class="col-md-4 text-right">
            <div id="icones">
              <a href="#" target="_blank"><span class="icon-youtube"></span></a>
              <a href="#" target="_blank"><span class="icon-whatsapp"></span></a>
              <a href="#" target="_blank"><span class="icon-instagram"></span></a>
              <a href="#" target="_blank"><span class="icon-twitter"></span></a>
              <a href="#" target="_blank"><span class="icon-facebook"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
