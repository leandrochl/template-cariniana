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
    <div id="barra-superior-2">
      <div class="container">
        <div class="row" style="margin-bottom: 15px;">
          <div class="col-md-12">
            <div id="ancoras">
              <a href="#ir-para-busca">Ir para busca</a> |
              <a href="#ir-para-menu">Ir para o menu</a> |
              <a href="#conteudo-portal">Ir para o conteúdo</a> |
              <a href="#rodape">Ir para rodapé</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-xs-12 titulo-portal">
            <!-- <img src="wp-content/themes/carinianaTemplate/img/logo-cariniana.png" width="100" height="100" style="float: left; margin-right: 10px"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-cariniana.png" width="100" height="100" style="float: left; margin-right: 10px">
            <h1><strong><a href="<?php echo get_home_url(); ?>">Portal da Rede Cariniana</a></strong></h1>
            <h5><a href="http://www.ibict.br/"> IBICT - Instituto Brasileiro de Informação em Ciência e Tecnologia</a></h5>
            <h5><a href="http://www.mctic.gov.br/portal">MINISTÉRIO DA CIÊNCIA, TECNOLOGIA, INOVAÇÕES E COMUNICAÇÕES</a></h5>
          </div>
          <div class="col-md-4 col-xs-12 text-right">
            <div id="div-logo-ibict">
              <a href="http://www.ibict.br/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-ibict.gif" alt="">
              </a>
            </div>
            <div class="clearfix"></div>
            <div id="icones">
              <a href="https://www.youtube.com/channel/UC7pJ4CrMcF7WVYsWjic-nsg" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/yt_icon_g.png" class="sn_icon">
              </a>
              <a href="https://twitter.com/Rede_Cariniana" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tt_icon_g.png" class="sn_icon">
              </a>
              <a href="https://www.facebook.com/redecariniana" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fb_icon_g.png" class="sn_icon">
              </a>
              <button type="button" onclick="window.location.href = '<?php echo get_permalink(get_page_by_path('contatos')) ?>';" target="_blank">
                <span>Fale conosco</span>
              </button>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
