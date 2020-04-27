<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>
	<body>
		
		<header>
			<nav>
				<ul>
					<?php include('header.php');
					if(isset($_SESSION['login']) || isset($_SESSION['pass']))
					{
						header('Location: index.php');
					}
					?>
					</ul>
				 </nav>
		</header>
		
		<main>
			<section>
				<form class="forme" action="inscription.php" method="post">
					<h1>Inscription</h1>
                    
					<fieldset>
						<legend>Identifiants</legend>
						<label>login :
                            <input type="text" name="login" maxlength="8"  required placeholder="login"/></label>
                        <label>email: 
				            <input type="email" name="email"  size="30" pattern=".+@gmail.com" placeholder="ex:toto@gmail.com"/></label>
				        <label>mot de passe :
					        <input type="password" name="passe" minlength="4" required placeholder="password"/></label>
				        <label>confirmation :
                            <input type="password" minlength="4"  name="passe2" required placeholder="confirmation"/></label>	
                            <input type="hidden"	value="1" name="droits"/>
                    </fieldset>   
                        <label>
			                <input type="checkbox" name="condition" required placeholder="condition"/> <a href="">J'accepte les conditions générales d'utilisation.</a></label>
							<input type="submit" value="inscription" name="inscription"/>
                </form>
            </section>    

            <section>
            <?php
            if(isset($_POST["inscription"]))
            {
                $login=$_POST['login'];
                $connexion = mysqli_connect("localhost", "root", "", "blog");
                $sql = "SELECT * FROM utilisateurs WHERE login='$login'";
                $req = mysqli_query($connexion, $sql);
                $req2 = mysqli_num_rows($req); 

                if(($_POST['passe']!=$_POST['passe2']))
                {
                    echo"<p class='bug'>Mots de passes rentrés différents</p>";
                }
                else if($req2==1)
                {
                echo "<p class='bug'>*Login existant</p>";
                }
                else
                {
                $droits=$_POST["droits"];
                $login=$_POST["login"];
                $pass=$_POST["passe"];
                $email = $_POST["email"];
                $pass= sha1($pass);
                $pass2=$_POST["passe2"];
                $requete = "INSERT INTO utilisateurs(login, password, email, id_droits)
                values ('$login','$pass','$email','$droits')";
                $query = mysqli_query($connexion, $requete);
                mysqli_close($connexion);
                header('Location: connexion.php');
                 }
            }


?>

            </section>

        </main>
        <footer>
				
	</footer>	
</body>
</html>