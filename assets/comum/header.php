<!DOCTYPE html>
<html>
<head>
    <title>BLOG TEMPLATE</title>
    <meta charset="UTF-8">
    
    <!-- Material Icons -->
    <link rel="stylesheet" href="<?php echo RAIZ; ?>/assets/fonts/material-icon/material-icons.css">

    <!-- Font Roboto -->
    <link rel="stylesheet" href="<?php echo RAIZ; ?>/assets/fonts/roboto/roboto.css">

    <!-- Framework Front-end Matelialize (CSS) -->
    <link rel="stylesheet" href="<?php echo RAIZ; ?>/assets/framework/materialize/css/materialize.css">

    <!-- CSS Principal -->
    <link rel="stylesheet" href="<?php echo RAIZ; ?>/assets/css/style.css">

    <link rel="stylesheet" href="<?php echo RAIZ; ?>/assets/js/jqueryconfirm/jquery-confirm.min.css">

    <!-- Otimização para equipamentos Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <!-- Biblioteca Jquery -->
    <script type="text/javascript" src="<?php echo RAIZ; ?>/assets/bibliotecas/jquery/jquery-3.1.1.min.js"></script>

    <!-- Framework Front-end Matelialize (JS) -->
    <script src="<?php echo RAIZ; ?>/assets/framework/materialize/js/materialize.min.js"></script>
    <!-- Jquery AJAX.forms -->
    <script src="<?php echo RAIZ; ?>/assets/js/jquery.form.min.js"></script>

    <script src="<?php echo RAIZ; ?>/assets/js/jqueryconfirm/jquery-confirm.min.js"></script>

    <script src="<?php echo RAIZ; ?>/assets/js/jsconfig.js"></script>
     <!-- <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo center" >blog_template</a>
          </div>
        </nav>
    </div> -->
    
    <main class="tudo grey lighten-2">

      <div class="row" style="margin-bottom: 0px"> <!-- LOGO-->
        <div class="col s12">
          <div class="card-panel">
             <!-- <img src="<?php echo RAIZ; ?>/assets/images/bg1.jpg" width="100%" height="200px"> -->
             <h1>blog_template</h1>
         </div>
     </div>
 </div> <!-- FECHA LOGO-->

 <div class="row "> <!-- ROW DO CONTEUDO -->
    <div class="col s12 m12 l3"> <!-- SIDE NAV BAR PRÓPRIA -->
      <div class="card-panel">

        <div class="row">
          <div class="col s12">
            <span class="flow-text">
              Menu
            </span>

            <ul class="collapsible collection">
                <li><a href="<?php echo RAIZ; ?>" class="collection-item"> <i class="material-icons left">home</i> <span class="flow-text">Página inicial</span> </a></li>
                <li><div class="divider"></div></li>
                <li><a href="<?php echo RAIZ; ?>/noticias" class="collection-item"><span class="flow-text">Notícias</span> <i class="material-icons left">list</i></a></li>
                <li><div class="divider"></div></li>
                <li>
                    <div class="collapsible-header collection-item"><i class="material-icons left">account_box</i><span class="flow-text">Área do escritor</span><i class="material-icons right">keyboard_arrow_down</i></div>
                    <div class="collapsible-body no-padding grey lighten-4">
                        <ul>
                            <li><a href="#!" class="btn-flat btn-menu"><i class="material-icons left">edit</i>Gerenciar notícias<i class="material-icons right">send</i></a></li>
                            <li><div class="divider"></div></li>
                            <li><a href="#!" class="btn-flat btn-menu"><i class="material-icons left">list</i>Gerenciar tags<i class="material-icons right">send</i></a></li>
                            <li><div class="divider"></div></li>
                            <li><a href="#!" class="btn-flat btn-menu"><i class="material-icons left">insert_chart</i>Gerenciar enquete<i class="material-icons right">send</i></a></li>
                        </ul>
                    </div>
                </li>
                
                
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                
            </ul>
                             <!-- <div class="collection">
                    <a href="#!" class="collection-item indigo-text dropdown-trigger flow-text" data-target='dropdown1'></a>
                  <a href="#!" class="collection-item">Alvin</a>
                  <a href="#!" class="collection-item">Alvin</a>
                  <a href="#!" class="collection-item">Alvin</a>
              </div> -->


          </div>
          <div class="col s12">
            <hr>
            <span class="flow-text">Pesquisar</span>
            <form>
              <div class="input-field col s10">
                  <input type="text" name="pesquisar" id="pesquisar">
              </div>
              <div class="input-field col s2 center">
                  <a class="btn btn-flat btn-floating black" href="#!"><i class="material-icons">search</i></a> <!-- FAZER AJAX -->
              </div>     
          </form>
      </div>
      <div class="col s12">
        <hr>
        <span class="flow-text">Núvem de tags</span>
        <p>
          <a href="#!" class="chip">noticias</a>
          <a href="#!" class="chip">saude</a>
          <a href="#!" class="chip">educacao</a>
          <a href="#!" class="chip">cultura</a>
          <a href="#!" class="chip">eventos</a><a href="#!" class="chip">noticias</a>
          <a href="#!" class="chip">saude</a>
          <a href="#!" class="chip">educacao</a>
          <a href="#!" class="chip">cultura</a>
          <a href="#!" class="chip">eventos</a><a href="#!" class="chip">noticias</a>
          <a href="#!" class="chip">saude</a>
          <a href="#!" class="chip">educacao</a>
          <a href="#!" class="chip">cultura</a>
          <a href="#!" class="chip">eventos</a>
      </p>
  </div>
  <div class="col s12">
    <hr>
    <span class="flow-text">Enquete</span>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua?
      <ul>
        <form>
          <li><Label><input type="radio" name="group1"><span>A) Tipo 1</span></Label></li>
          <li><Label><input type="radio" name="group1"><span>B) Tipo 1</span></Label></li>
          <li><Label><input type="radio" name="group1"><span>C) Tipo 1</span></Label></li>
          <li><Label><input type="radio" name="group1"><span>D) Tipo 1</span></Label></li>
          <li><Label><input type="radio" name="group1"><span>E) Tipo 1</span></Label></li>
          <li><button name="" class="btn btn-small right">Enviar resposta <i class="material-icons right">send</i></button></li>
      </form>
  </ul>
</p><br>
<p>
  <!-- LOADING -->
  <div class="progress">
    <div class="indeterminate" style="width: 0%"></div>
</div>
<!-- FIM LOADING -->
<!-- RESULTADOS -->
<div class="row">
    <div class="col s2">
      A)
  </div>
  <div class="col s10">
      <div class="progress tooltipped" data-position="top" data-delay="50" data-tooltip="40%">
        <div class="determinate red" style="width: 40%"></div>
    </div>
</div>
</div>

<div class="row">
    <div class="col s2">
      B)
  </div>
  <div class="col s10">
      <div class="progress tooltipped" data-position="top" data-delay="50" data-tooltip="34%"">
        <div class="determinate orange" style="width: 34%"></div>
    </div>
</div>
</div>

<div class="row">
    <div class="col s2">
      C)
  </div>
  <div class="col s10">
      <div class="progress tooltipped" data-position="top" data-delay="50" data-tooltip="16%"">
        <div class="determinate yellow" style="width: 16%"></div>
    </div>
</div>
</div>

<div class="row">
    <div class="col s2">
      D)
  </div>
  <div class="col s10">
      <div class="progress tooltipped" data-position="top" data-delay="50" data-tooltip="7%"">
        <div class="determinate green" style="width: 7%"></div>
    </div>
</div>
</div>

<div class="row">
    <div class="col s2">
      E)
  </div>
  <div class="col s10">
      <div class="progress tooltipped" data-position="top" data-delay="50" data-tooltip="3%"">
        <div class="determinate" style="width: 3%"></div>
    </div>
</div>
</div>
<!-- FIM RESULTADOS -->
</p>
</div>
<div class="col s12">
    <hr>
    <span class="flow-text">Sobre</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="col s12">
    <hr>
    <span class="flow-text">Contato</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

</div>

</div>
</div><!-- SIDE NAV BAR PRÓPRIA -->
<div class="col s12 m12 l9"> <!-- CONTEUDO -->
  <div class="card-panel"> <!-- CARD-PANEL DO CONTEUDO -->



