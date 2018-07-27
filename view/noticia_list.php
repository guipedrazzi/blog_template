<div class="row"><!-- BREADCRUMBS -->
      <div class="col s12 ">
      	<div class="chip teal">
       	 	<a href="<?php echo RAIZ; ?>" class="breadcrumb">Home</a>
        	<a href="<?php echo RAIZ; ?>/noticias" class="breadcrumb">Notícias</a>
      	</div>
      </div>
</div><!-- BREADCRUMBS -->

<div class="row"> <!-- ROW TITULO DA PÁGINA -->
	<div class="col s12 m5"> <!-- COL TITULO DA PÁGINA -->
		<b class="flow-text">Lista de Notícias</b>
		<p>Aqui você será a lista de todas as notícias já publicadas. <br>Poderá também filtrar os tipos de notícias a serem listados por tags e data de publicação.</p>
	</div><!-- FECHA COL TITULO DA PÁGINA -->

	<div class="col s12 m3"> <!-- FILTRO PARA PESQUISA -->
		<b class="flow-text">Filtre por tags</b>
		<p>
			<a href="#!" class="chip">noticias</a>
			<a href="#!" class="chip">saude</a>
			<a href="#!" class="chip">educacao</a>
			<a href="#!" class="chip">cultura</a>
			<a href="#!" class="chip">eventos</a>
		</p>
	</div>

	<div class="col s12 m4"> 
		<b class="flow-text">Filtre por data</b>
		<div class="input-field">
			<input type="date">
			<label>Data Início</label>
		</div>
		<div class="input-field">
			<input type="date">
			<label>Data Final</label>
		</div>
		<a href="#!" class="btn btn-floating right"><i class="material-icons">search</i></a>
	</div><!-- FIM FILTRO PARA PESQUISA -->

</div><!-- FECHA ROW TITULO DA PÁGINA -->

<div class="row"> <!-- ROW LUGAR DOS FILTROS SELECIONADOS -->
	<div class="col s12"><!-- só mostrar este row se houver pesquisa-->
		<hr>
		<p>Filtros para pesquisa:</p>
		<a href="#!" class="chip">noticias<i class="close material-icons">close</i></a>
		<a href="#!" class="chip">saude<i class="close material-icons">close</i></a>
		<a href="#!" class="chip">educacao<i class="close material-icons">close</i></a>
		<a href="#!" class="chip">cultura<i class="close material-icons">close</i></a>
		<a href="#!" class="chip">eventos<i class="close material-icons">close</i></a>
	</div>
	<div class="col s12">
		<p>Data inicial: 05/04/2018 ~ Data final: 09/04/2018</p>
		<hr>
	</div>
</div><!-- ROW FECHA LUGAR DOS FILTROS SELECIONADOS -->

<div class="row"><!-- ROW DA LISTA DE NOTÍCIAS -->

	<div class="col s12"> <!-- COL PAGINAÇÃO -->
		<p class="flow-text">Resultado</p><!-- não mostrar este elemento se não houver pesquisa -->
	  	<ul class="pagination">
		    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="#!">2</a></li>
		    <li class="waves-effect"><a href="#!">3</a></li>
		    <li class="waves-effect"><a href="#!">4</a></li>
		    <li class="waves-effect"><a href="#!">5</a></li>
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
	  	</ul>
	</div> <!-- COL FECHA PAGINAÇÃO -->
	<div class="col s12">
		<hr>
	</div>

	<!-- NOTÍCIA 1 -->
	<div class="col s12 m12 l4">
		<div class="card">
	        <div class="card-image">
		          <img src="<?php echo RAIZ ?>/assets/images/bg1.jpg"  >
		          <span class="card-title titulo-noticia-recente">Lorem ipsum dolor sit amet, consectetur adipisicing eliteamet, consectetur adipisicing elite</span>
	        </div>
	        <div class="card-content">
	          	<div class="card-panel">
					Publicado por Fulano em 10/05/2018 às 18:30 <br>
					Tags: <div class="chip">noticias</div>
					<div class="chip">saude</div>
					<div class="chip">educacao</div>
					<div class="chip">cultura</div>
					<div class="chip">eventos</div>
				</div>
	          	<p>Um breve resumo da notícia com informações de quando foi postado, por quem e as tags nela atreladas.</p>
	        </div>
	        <div class="card-action">
	          	<a href="<?php echo RAIZ;?>/noticias/detalhes">LEIA MAIS...</a>
	        </div>
	      </div>
	</div>
	<!-- FECHA NOTÍCIA 1 -->

	<!-- NOTÍCIA 2 -->
	<div class="col s12 m12 l4">
		<div class="card">
	        <div class="card-image">
		          <img src="<?php echo RAIZ ?>/assets/images/bg1.jpg" >
		          <span class="card-title titulo-noticia-recente">Título da notícia</span>
	        </div>
	        <div class="card-content">
	        	<div class="card-panel">
					Publicado por Fulano em 10/05/2018 às 18:30 <br>
					Tags: <div class="chip">noticias</div>
					<div class="chip">saude</div>
					<div class="chip">educacao</div>
					<div class="chip">cultura</div>
					<div class="chip">eventos</div>
				</div>
		          <p>Um breve resumo da notícia com informações de quando foi postado, por quem e as tags nela atreladas.</p>
	        </div>
	        <div class="card-action">
	          	<a href="<?php echo RAIZ;?>/noticias/detalhes">LEIA MAIS...</a>
	        </div>
	      </div>
	</div>
	<!-- FECHA NOTÍCIA 2 -->

	<!-- NOTÍCIA 3 -->
	<div class="col s12 m12 l4">
		<div class="card">
	        <div class="card-image">
		          <img src="<?php echo RAIZ ?>/assets/images/bg1.jpg"  >
		          <span class="card-title titulo-noticia-recente">Título da notícia</span>
	        </div>
	        <div class="card-content">
	        	<div class="card-panel">
					Publicado por Fulano em 10/05/2018 às 18:30 <br>
					Tags: <div class="chip">noticias</div>
					<div class="chip">saude</div>
					<div class="chip">educacao</div>
					<div class="chip">cultura</div>
					<div class="chip">eventos</div>
				</div>
		          <p>Um breve resumo da notícia com informações de quando foi postado, por quem e as tags nela atreladas.</p>
	        </div>
	        <div class="card-action">
	          	<a href="<?php echo RAIZ;?>/noticias/detalhes">LEIA MAIS...</a>
	        </div>
	      </div>
	</div>
	<!-- FECHA NOTÍCIA 3 -->
	<div class="col s12">
		<hr>
	</div>

	<!-- NOTÍCIA 4 -->
	<div class="col s12 m12 l4">
		<div class="card">
	        <div class="card-image">
		          <img src="<?php echo RAIZ ?>/assets/images/bg1.jpg"  >
		          <span class="card-title titulo-noticia-recente">Lorem ipsum dolor sit amet, consectetur adipisicing eliteamet, consectetur adipisicing elite</span>
	        </div>
	        <div class="card-content">
	          	<div class="card-panel">
					Publicado por Fulano em 10/05/2018 às 18:30 <br>
					Tags: <div class="chip">noticias</div>
					<div class="chip">saude</div>
					<div class="chip">educacao</div>
					<div class="chip">cultura</div>
					<div class="chip">eventos</div>
				</div>
	          	<p>Um breve resumo da notícia com informações de quando foi postado, por quem e as tags nela atreladas.</p>
	        </div>
	        <div class="card-action">
	          	<a href="<?php echo RAIZ;?>/noticias/detalhes">LEIA MAIS...</a>
	        </div>
	      </div>
	</div>
	<!-- FECHA NOTÍCIA 4 -->

	<!-- NOTÍCIA 5 -->
	<div class="col s12 m12 l4">
		<div class="card">
	        <div class="card-image">
		          <img src="<?php echo RAIZ ?>/assets/images/bg1.jpg" >
		          <span class="card-title titulo-noticia-recente">Título da notícia</span>
	        </div>
	        <div class="card-content">
	        	<div class="card-panel">
					Publicado por Fulano em 10/05/2018 às 18:30 <br>
					Tags: <div class="chip">noticias</div>
					<div class="chip">saude</div>
					<div class="chip">educacao</div>
					<div class="chip">cultura</div>
					<div class="chip">eventos</div>
				</div>
		          <p>Um breve resumo da notícia com informações de quando foi postado, por quem e as tags nela atreladas.</p>
	        </div>
	        <div class="card-action">
	          	<a href="<?php echo RAIZ;?>/noticias/detalhes">LEIA MAIS...</a>
	        </div>
	      </div>
	</div>
	<!-- FECHA NOTÍCIA 5 -->

	<!-- NOTÍCIA 6 -->
	<div class="col s12 m12 l4">
		<div class="card">
	        <div class="card-image">
		          <img src="<?php echo RAIZ ?>/assets/images/bg1.jpg"  >
		          <span class="card-title titulo-noticia-recente">Título da notícia</span>
	        </div>
	        <div class="card-content">
	        	<div class="card-panel">
					Publicado por Fulano em 10/05/2018 às 18:30 <br>
					Tags: <div class="chip">noticias</div>
					<div class="chip">saude</div>
					<div class="chip">educacao</div>
					<div class="chip">cultura</div>
					<div class="chip">eventos</div>
				</div>
		          <p>Um breve resumo da notícia com informações de quando foi postado, por quem e as tags nela atreladas.</p>
	        </div>
	        <div class="card-action">
	          	<a href="<?php echo RAIZ;?>/noticias/detalhes">LEIA MAIS...</a>
	        </div>
	      </div>
	</div>
	<!-- FECHA NOTÍCIA 6 -->
	<div class="col s12">
		<hr>
	</div>

	<div class="col s12 "> <!-- COL PAGINAÇÃO -->
	  	<ul class="pagination">
		    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="#!">2</a></li>
		    <li class="waves-effect"><a href="#!">3</a></li>
		    <li class="waves-effect"><a href="#!">4</a></li>
		    <li class="waves-effect"><a href="#!">5</a></li>
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
	  	</ul>
	</div><!-- COL FECHA PAGINAÇÃO -->
	
</div><!-- FECHA ROW DA LISTA DE NOTÍCIAS -->