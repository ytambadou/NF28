<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Parcours de musées - Resultat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/thumbnail-gallery.css" rel="stylesheet">
	<script type="text/javascript" src="js/musee.js"></script>

</head>
<body>	
<center> <h3>Resultat recherche</h3></center>
<?php 
$name=$_POST['epoque'];
$autor=$_POST['autor'];
$epoque=$_POST['epoque'];
$type=$_POST['type'];
$style=$_POST['style'];
$con=mysql_connect("localhost","root","");
mysql_select_db("musee");
if (!$con){
    die('Could not connect: ' . mysql_error($con));
}
$requete;
if ($name){
	$requete += "e.auteur";
}
$req=mysql_query("SELECT images FROM oeuvre WHERE nom= '$name.'");

if (!$req) {
  echo "<h3>Pas d'oeuvres correspondants !</p>";
} 
else {
        
				echo "<table>";
				echo "<tr>";
				?>
				<div class="container">

        <div class="row">
		<?php
          while($row=mysql_fetch_array($req))
         {  ?>
		 

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="<?php echo $row["images"] ?>" alt="">
                </a>
				
            </div>
            
        

			<?php
         }
	
		 }
		 ?>
		 
		 </div>
			<?php	
				echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";            
?>	
</body>
</html>
