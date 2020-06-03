<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>admin</title>
	</head>
	<body>
    <header class="topnav">
			<nav id="menu">
                <ul>
                 <?php include('header.php');
                 if (isset($_SESSION['login']))
                {
                    $login=$_SESSION['login'];
                    $sql = "SELECT * FROM utilisateurs WHERE login = '$login'";  
                    $req = mysqli_query($connexion,$sql);
                    $data = mysqli_fetch_array($req);
                    if($data['id_droits'] == 1337 )
                    {

                    }
                    else{
                        header('Location: index.php');
                    }
                }
                else
                {
                    header('Location: index.php');
                }

                    ?>
                </ul>				
		</header>

        <main>
            <section>
            <h2>admin</h2>
                <form  class="forme"method="post">
                    <fieldset>
                        <legend>Nouvelle catégorie</legend>
                        <input  required type="text" name="titre" size="50" placeholder="titre"/> 
                        <input type="submit" name="go" value="Poster"/>

                    </fieldset>
	            </form>
            <?php
            if(isset($_POST["go"]))
            {
                $titre=$_POST["titre"];
                $connexion = mysqli_connect("localhost", "root", "", "blog");
	            $requete = "INSERT INTO `categories` (`id`,`nom`) VALUES (NULL,'".$titre."')";  
                $query = mysqli_query($connexion, $requete);

            }	
            ?>
            </section>
            <section>
                <form class="forme" method="post" action="">
                    <fieldset>
                        <legend>Supprimer une categorie</legend>                 
                            <input type="text" name="ctg"/>
                            <input type="submit" name="sup" value="supprimer"/>
                    </fieldset>
                </form>
                        <?php
                        if(isset($_POST['sup']))
                    {
						$base = mysqli_connect("localhost", "root", "", "blog");
						$ctg=$_POST['ctg'];
						$delete="DELETE FROM `categories` WHERE nom='$ctg'";
						$quer= mysqli_query($base,$delete);
						echo "<p class='bug'>$ctg supprimée avec succès !</p>";
					}
                        ?>
					    

			    <form class="forme" method="post" action="">
                    <fieldset>
                        <legend>Supprimer un article</legend>
                            <input type="text" name="article"/>
                            <input type="submit" name="suppu" value="supprimer"/>
                    </fieldset>

                </form>
                    <?php
                    if(isset($_POST['suppu']))
                    {
						$base = mysqli_connect("localhost", "root", "", "blog");
						$article=$_POST['article'];
						$delet="DELETE FROM `articles` WHERE titre='$article'";
						$quer= mysqli_query($base,$delet);
                        echo "<p class='bug'>$article supprimée avec succès !</p>";

                    }
                    ?>
            </section>

                    <h2>Utilisateurs</h2>
            <section>    
                <form class="forme" method="post" action="">
                    <fieldset>
                        <legend>Supprimer un utilisateur</legend>
                            <input type="text" name="utilisateur"/>
                            <input type="submit" name="supp" value="supprimer"/>
                    </fieldset>
                </form>

                <?php
                    if(isset($_POST['supp']))
                    {
						$base = mysqli_connect("localhost", "root", "", "blog");
						$utilisateur=$_POST['utilisateur'];
						$dele="DELETE FROM `utilisateurs` WHERE login='$utilisateur'";
						$quer= mysqli_query($base,$dele);
                        echo "<p class='bug'>$utilisateur supprimée avec succès !</p>";

                    }
                    ?>
                <form class="forme" method="post" action="">
                    <fieldset>
                        <legend>Gestion des droits</legend>
                            <input type="text" name="login" placeholder="login"/>
                            <input type="text" name="id" placeholder="id"/>
                            <input type="submit" name="modif" value="modifier"/>
                    </fieldset>
                </form>  

                    <?php 
                      if(isset($_POST['modif']))
                        {
                            $id=$_POST['id'];
                            $login=$_POST['login'];
                            $base = mysqli_connect("localhost", "root", "", "blog");
                            $insert="UPDATE utilisateurs SET id_droits = '$id' WHERE login = '$login'";
                            $result= mysqli_query($connexion, $insert);
                            echo'<p class="bug">modifier avec succés</p>';

                        }
                        ?>

            </section>
        </main> 
    <footer>
        <?php include('footer.php') ?>
            <section>
            Tout droit réserver . 2020 
            </section>
                
    </footer>
</body>
</html>
                   