<!DOCTYPE html>


<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Parcours de musées</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/musee.js"></script>

</head>
<body>

    <!-- Tête -->
    <header>
       Bienvenue </header>
    
    <section id="recherche">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Filtres de recherche</h2>
                    <h3 class="section-subheading text-muted">Quelles oeuvres voulez-vous visiter?</h3>
                </div>
            </div>
		<div id="recherche_oeuvre">
			<form action="resultat.php" id="recherche"  method="POST">
            <div class="row">
                <div class="col-lg-12">
                    <form action="resultat.html">
                        <div class="row">
							<div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nom" id="name">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Auteur" id="email">
                                    <p class="help-block text-danger"></p>
                                </div>
                                
								<div class="form-group">
									<input type = text list ="epoque" class="form-control" placeholder="Epoque" id="type">
									<datalist id ="epoque">
									   <option> Antiquité (-52 à 476)
									   <option> Moyen Âge (476-1517)
									   <option> Les temps modernes (1517-1789)
									   <option> Les temps révolutionnaires (1789-1815)
									   <option> Le XIXème siècle (1800-1900)
									   <option> Les temps agités (1914-1958)
									   <option> Époque contemporaine et moderne
									</datalist>
								</div>
								
								<div class="form-group">
									<input type = text list = "types" class="form-control" placeholder="Type" id="type">
									<datalist id = "types">
									   <option> Peinture
									   <option> Sculpture
									   <option> Architecture
									   <option> Photographie
									   <option> Autres
									</datalist>
								</div>
								<div class="form-group">
									<input type = text list = "styles" class="form-control" placeholder="Style" id="style">
									<datalist id = "styles">
									   <option> Impressionnisme
									   <option> Cubisme
									   <option> Futurisme
									   <option> Abstraction
									   <option> Surréalisme
									   <option> Orientalisme
									   <option> Autres
									</datalist>
								</div>
							</form>
							</div>
                            </div>
							<div class="col-lg-4"></div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Rechercher</button>
                            </div>
                        </div>       
			       </div>
			</form>
           </div>
        </div>
    </section>        
</body>
</html>