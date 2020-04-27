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
                        <textarea required placeholder="article"   name="article"></textarea>
                        <input type="texte" name="image" value="blog.jpg" placeholder="lien dossier image"/>


                        <select name="ctg">
                           <legend>Catégories ?</legend>

                           <?php
                           $login=$_SESSION["login"];
                           $connexion = mysqli_connect("localhost", "root", "", "blog");
                           $uti = "SELECT * FROM utilisateurs WHERE login = '$login'"; 
                           $uti2 = mysqli_query($connexion,$uti);
                           $resultat = mysqli_fetch_array($uti2);
                           $id=$resultat["id"];


                           $categories = "SELECT * FROM categories ";  
                           $quer = mysqli_query($connexion,$categories);
                           while ($data = mysqli_fetch_array($quer))
                           {
                               echo'<option>'.$data['nom'].'</option>';
                           }
                           ?>

                        </select>
                    </fieldset>
                        <input type="submit" name="go" value="Poster"/>
                </form>

                    <?php
                    
                    if(isset($_POST["go"]))
                    {
                        $nom=$_POST['ctg'];

                        $ctg = "SELECT * FROM categories WHERE nom = '$nom'"; 
                        $ctg2 = mysqli_query($connexion,$ctg);
                        $fetch = mysqli_fetch_array($ctg2);

                        $article=nl2br($_POST["article"]);
                        $titre=$_POST["titre"];
                        $categori=$fetch["id"];
                        $image=$_POST["image"];
                        $inser = "INSERT INTO `articles` (id,titre,article,image,id_utilisateur,id_categorie,date) 
                        VALUES (NULL,'".$titre."','".$article."','".$image."','".$id."','".$categori."', now())"; 
                        $query = mysqli_query($connexion, $inser);
                    }
                    ?>
            </section>
        </main>
       
    </body>
</html>
   

