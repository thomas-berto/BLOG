<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>nvxtopics</title>
	</head>
	<body>
		<header>
			<nav>
				 <ul> <?php include('header.php') ?></ul>
			</nav> 
        </header>

        <main>
            <section>
                <form  class="forme"method="post">
                    <h1>Nouveau article</h1>
                    <fieldset>
                        <legend>article</legend>
                        <input  required type="text" name="titre" size="50" placeholder="titre"/>
                        <input type="select">
                           <libellé>Catégories ?</libellé>

                           <?php

                           $sql2 = "SELECT * FROM categories ";  
                           $req2 = mysqli_query($connexion,$sql2);
                           while ($data = mysqli_fetch_array($req2))
                           {
                               echo'<option valeur="cat">Français</option>';
                           }
                           ?>

                        </input>
                    </fieldset>
                        <input type="submit" name="go" value="Poster"/>
	            </form>
<?php
 
	if(isset($_POST["go"]))
{
	$auteur=$login;
	$titre=$_POST["titre"];
	$requete = "INSERT INTO `topics` (`id_topics`,`auteur`, `titre`, `date`) 
 VALUES (NULL,'".$auteur."', '".$titre."', CURRENT_TIMESTAMP())";  
  $query = mysqli_query($connexion, $requete);


 }	}}
 ?>
         </section>

