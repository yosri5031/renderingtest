<html>
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link href="{{ asset('css/myprojects.css') }}" rel="stylesheet">

    </head>
    <body>
     
<div class="wrapper">
	<header class="topbar">
		<div class="title">
			Projects
		</div>
		<div class="actions">
			<div class="cta first-level"><i class="fa fa-plus fa-1x"></i>Nouveau projet</div>
        <a href="{{ route('dashboard') }}" style=" text-decoration: none;"> <div class="cta first-level"><i class="fa fa-home"></i>  Back to dashboard </div> </a>

		</div>
        
		
		<button class="filters-button">
			<i class="fa fa-ellipsis-v fa-2x"></i>
		</button>
	</header>
	
	<div class="filters-bar">
		<span class="title">Créez ou éditez votre filtre :</span>
		<button class="filter-type">Et</button>
		<button class="filter-type">Ou</button>
		<button class="filter-type">Non</button>
		<div class="cta second-level"><i class="fa fa-folder fa-1x"></i></div>
		<div class="cta second-level"><i class="fa fa-plus fa-1x"></i>Créer une règle</div>
	</div>
	
	<div class="filters-tag">
		<span class="tag">
			filter<i class="fa fa-edit fa-1x"></i><i class="fa fa-trash fa-1x"></i>
		</span>
		<span class="tag">
			I'm a filter tag<i class="fa fa-edit fa-1x"></i><i class="fa fa-trash fa-1x"></i>
		</span>
		<span class="tag">
			filter tag<i class="fa fa-edit fa-1x"></i><i class="fa fa-trash fa-1x"></i>
		</span>
		<span class="tag">
			tag<i class="fa fa-edit fa-1x"></i><i class="fa fa-trash fa-1x"></i>
		</span>
		<span class="tag">
			filter<i class="fa fa-edit fa-1x"></i><i class="fa fa-trash fa-1x"></i>
		</span>
	</div>
	
	<div class="new-project">
		<form method="post" action="#">
			<div class="new-project-form">
				<div class="form-group">
					<input class="input" placeholder="rechercher un client">
				</div>
				<button class="cta second-level"><i class="fa fa-search fa-1x"></i>Afficher les projets</button>
			</div>
		</form>
	</div>
	
	<div class="checker">
		<button class="item">
			<div class="number">5</div>
			<div class="status">nouveaux</div>
		</button>
		
		<button class="item">
			<div class="number">2</div>
			<div class="status">en cours</div>
		</button>
		
		<button class="item">
			<div class="number">1</div>
			<div class="status">en attente</div>
		</button>
		
		<button class="item">
			<div class="number">3</div>
			<div class="status">terminés</div>
		</button>
		
		<button class="item">
			<div class="number">0</div>
			<div class="status">annulé</div>
		</button>
	</div>
	
	<div class="projects-list-container">
		<div class="row">
			<div class="content">
				<div class="infos">
					<div class="start">
						<span>début :<span>
						<span class="date">2018-03-15</span>
					</div>
					<div class="end">
						<span>fin :</span>
						<span class="date">2018-08-15</span>
					</div>
					<div class="last-change">
						<span>mise à jour :</span>
						<span class="date">2018-08-15</span>
					</div>
				</div>
				<div class="description">
					<div class="jauge">
					</div>
					<div class="name">
						<span class="parent">projet parent</span>
						nom du projet
					</div>
					<div class="category">
					  <span class="priority">majeur</span>
						<span class="type">epic</span>
					</div>
					<div class="filters-tag">
						<span class="tag">
							client
						</span>
						<span class="tag">
							ressource
						</span>
					</div>
				</div>
				<div class="tasks">
					<div class="name">
							Tâches
					</div>
					<div class="pending">
						<span class="notification">1</span>
								en attentes</div>
					<div class="behind">
						<span class="notification">4</span>
								en cours
					</div>
				</div>
				<div class="content-actions">
					<i class="fa fa-eye fa-2x"></i>
				  <i class="fa fa-edit fa-2x"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="content">
				<div class="infos">
					<div class="start">
						<span>début :<span>
						<span class="date">2018-03-15</span>
					</div>
					<div class="end">
						<span>fin :</span>
						<span class="date">2018-08-15</span>
					</div>
					<div class="last-change">
						<span>mise à jour :</span>
						<span class="date">2018-08-15</span>
					</div>
				</div>
				<div class="description">
					<div class="jauge">
				</div>
					<div class="name">
						<span class="parent">projet parent</span>
						nom du projet
					</div>
					<div class="category">
					  <span class="priority">majeur</span>
						<span class="type">epic</span>
					</div>
					<div class="filters-tag">
						<span class="tag">
							client
						</span>
						<span class="tag">
							ressource
						</span>
					</div>
				</div>
				<div class="tasks">
					<div class="name">
							Tâches
					</div>
					<div class="pending">
						<span class="notification">1</span>
								en attentes</div>
					<div class="behind">
						<span class="notification">4</span>
								en cours
					</div>
				</div>
				<div class="content-actions">
					<i class="fa fa-eye fa-2x"></i>
				  <i class="fa fa-edit fa-2x"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    $( ".filters-button" ).click(function() {
  $( ".filters-bar" ).toggleClass( "show", function() {
    // Animation complete.
  });
});
    </script>
    </body>
</html>