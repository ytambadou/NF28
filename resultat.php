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
<?php include("inclure.php"); ?>

<?php 
mysql_connect("localhost","root","");
mysql_select_db("musee");
$res=mysql_query("select images,nom from oeuvre");
        
				echo "<table>";
				echo "<tr>";
				?>
				<div class="container">

        <div class="row">
		<?php
          while($row=mysql_fetch_array($res))
         {  ?>
		 

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="<?php echo $row["images"] ?>" alt="">
                </a>
            </div>
            
        

			<?php
         }
		 ?>
		 
		 </div>
			<?php	
				echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";            
?>	

		
</body>
</html>