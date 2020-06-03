<nav id="menu">
<ul>
<?php
$connexion = mysqli_connect("localhost", "root", "", "blog");


if (isset($_SESSION['login'])):
    $login=$_SESSION['login'];
    $sql = "SELECT * FROM utilisateurs WHERE login = '$login'";  
    $req = mysqli_query($connexion,$sql);

	?>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="profil.php">Profil</a></li>
                
 <?php

        while ($data = mysqli_fetch_array($req))
        {
            if($data['id_droits'] == 42 )
            {
            echo '<li><a href="creer-article.php">Article</a></li>';
            }
            elseif($data['id_droits'] == 1337 )
            {
                echo '<li><a href="admin.php">Admin</a></li>';
                echo '<li><a href="creer-article.php">Article</a></li>';

            }
        }
               
    ?>
    <li><a href="#">Categories</a>
<?php

$sql2 = "SELECT * FROM categories ";  
$req2 = mysqli_query($connexion,$sql2);
while ($dataa = mysqli_fetch_array($req2))
{ 
echo'
<ul>
    <li><a href="index.php?ctg=' , $dataa['id'] , '">'.$dataa['nom'].'</a></li>'
 ;
}
?> </ul></li> 
    

  



 <?php else:?>     
 
    <li><a href="index.php">Acceuil</a></li>
 <li><a href="inscription.php">Inscription</a></li>
 <li><a href="connexion.php">Connexion</a></li>

 <li> <a href="#">Categories</a>
<?php

$sql2 = "SELECT * FROM categories ";  
$req2 = mysqli_query($connexion,$sql2);
while ($dataa = mysqli_fetch_array($req2))
{
echo'
<ul>
<li><a href="index.php?ctg=' , $dataa['id'] , '">'.$dataa['nom'].'</a></li>'
;
}
?> </ul></li> 
    

 
<?php endif;?>        

</ul></nav>