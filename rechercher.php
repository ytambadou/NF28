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

<?php
header('Content-Type: text/html; charset=UTF-8');
$con=mysql_connect("localhost","root","");
mysql_select_db("musee");
if (!$con) {
    die('Could not connect: ' . mysql_error($con));
	}
$res=mysql_query("SELECT nom FROM style");
$res2=mysql_query("SELECT nom FROM type");
$res3=mysql_query("SELECT description FROM epoque");



?>
</head>
<body>

    <!-- Tête -->
    
    <section id="recherche">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Filtres de recherche</h2>
                    <h3 class="section-subheading text-muted">Quelles oeuvres voulez-vous visiter?</h3>
                </div>
            </div>
		<div id="recherche_oeuvre">
		<form action="resultat.php" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    
                        <div class="row">
							<div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Nom" id="name" name="nom">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="autor" type="text" class="form-control" placeholder="Auteur" id="email" name="auteur">
                                    <p class="help-block text-danger"></p>
                                </div>
                                
								<div class="form-group">
									
								<input type = text list = "epoques" class="form-control" placeholder="Epoque" id="epoque" name="epoque">
									<datalist id = "epoques">
								    <?php
                                 while($row=mysql_fetch_array($res3))
                                   {  ?>
		 
									   <option> <?php echo $row["description"] ?>
									 <?php
									 }
									 ?>
									 </datalist>
								</div>
								
								
								<div class="form-group">
									<input type = text list = "types" class="form-control" placeholder="Type" id="type" name="type">
									<datalist id = "types">
									    <?php
                                 while($row=mysql_fetch_array($res2))
                                   {  ?>
		 
									   <option> <?php echo $row["nom"] ?>
									 <?php
									 }
									 ?>
									</datalist>
								</div>
								<div class="form-group">
									<input type = text list = "styles" class="form-control" placeholder="Style" id="style" name="style">
									<datalist id = "styles">
									     <?php
                                 while($row=mysql_fetch_array($res))
                                   {  ?>
		 
									   <option> <?php echo $row["nom"] ?>
									 <?php
									 }
									 ?>
									</datalist>
								</div>
							
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
