<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">
	
	<title>{$page_title|default:"Tytuł domyślny"}</title>	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" >
	
    <link rel="stylesheet" href="{$conf->app_url} /vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{$conf->app_url} /vendor/select2/select2.min.css">
    <link rel="stylesheet" href="{$conf->app_url} /vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{$conf->app_url} /vendor/lightcase/lightcase.css">
	
	<script src="{$app_url}/js/jquery.min.js"></script>
	<script src="{$app_url}/js/softscroll.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
	



	<link rel="stylesheet" href="{$conf->app_url} /css/style.css">	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	
</head>
<body>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page ">
		<nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4 bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <span class="lnr lnr-moon"></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Góra strony</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#app_content">Kalkulator</a>
                </li>				
			</ul>
		</div>
	</div>
</nav>

<!-- zdjecie z napisem-->
<div class="jumbotron d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">{$page_title|default:"Tytuł domyślny"}</h1>
	<h6 class="display-8 mb-4">{$page_description|default:"Opis domyślny"}</h6>
        <p>
            <a href="#app_content" class="btn btn-secondary " >Idź do formularza</a>
        </p>	
  </div>
</div>

<div id="app_content" class="content">
{block name=content} Domyślna treść zawartości .... {/block}

</div>

<!-- !!!!!!!!!!footer -->
<footer class="mastfoot mb-3 bg-white py-4 border-top">
    <div class="inner container">
         <div class="row">
         	<div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
				<p>
		{block name=footer} Domyślna treść stopki .... {/block}
				</p>			
         		<p class="mb-0">Autorka przykładu Magdalena Karcz. Widok oparty na stylu Moon. <a href="https://gettemplates.co" target="_blank">GetTemplates.co</a>.</p>
         	</div>
		</div>
	</div>
</footer>

	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	<script src="vendor/countTo/jquery.countTo.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>

</body>
</html>
